<?php

namespace questionsanswers;

define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '/db/config.php');


use PDO;
use PDOException;

class QnA
{
    private $conn;

    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        $config = DATABASE;

        $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        );

        try {
            $this->conn = new PDO(
                'mysql:host=' . $config['HOST'] . ';dbname=' . $config['DBNAME'] . ';port=' . $config['PORT'],
                $config['USER_NAME'],
                $config['PASSWORD'],
                $options
            );
        } catch (PDOException $e) {
            die("Chyba pripojenia: " . $e->getMessage());
        }
    }

    public function insertQnA()
    {
        try {
            // Načítanie JSON súboru
            $data = json_decode(file_get_contents(__ROOT__ . '/data/datas.json'), true);
            $questions = $data["questions"];
            $answers = $data["answers"];

            // Vloženie otázok a odpovedí v rámci transakcie
            $this->conn->beginTransaction();

            $sql = "INSERT INTO qna (question, answer) VALUES (:question, :answer)";
            $statement = $this->conn->prepare($sql);

            for ($i = 0; $i < count($questions); $i++) {
                $statement->bindParam(':question', $questions[$i]);
                $statement->bindParam(':answer', $answers[$i]);
                $statement->execute();
            }

            $this->conn->commit();
            echo "Dáta boli vložené";
        } catch (PDOException $e) {
            // Zobrazenie chybového hlásenia
            echo "Chyba pri vkladaní dát do databázy: " . $e->getMessage();
            $this->conn->rollback(); // Vrátenie späť zmien v prípade chyby
        }
    }

    public function getQnA()
    {
        try {

            $sql = "SELECT question, answer FROM qna";
            if ($this->conn) {
                
                $statement = $this->conn->prepare($sql);
            
            } else {
                echo "chyba pripojenia";
            }
            $statement = $this->conn->prepare($sql);
            $statement->execute();
            $qnaData = $statement->fetchAll(PDO::FETCH_ASSOC);
            foreach ($qnaData as $row) {
                echo '<button class="accordion">' . $row['question'] . '</button>';
                echo '<div class="panel"><p>' . $row['answer'] . '</p></div>';
            }
        } catch (PDOException $e) {
            
            echo "Chyba pri čítaní dát z databázy: " . $e->getMessage();
        } finally {
            // Uzatvorenie spojenia
            $this->conn = null;
        }
    }
}

?>
