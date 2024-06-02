<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '/db/config.php');

class Database
{
    private $conn;

    public function __construct()
    {
        $this->connect();
    }

    protected function connect()
    {
        if ($this->conn === null) {
            $config = DATABASE;
            $options = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            );

            try {
                $this->conn = new PDO(
                    'mysql:host=' . $config['HOST'] .
                        ';dbname=' . $config['DBNAME'] .
                        ';port=' . $config['PORT'],
                    $config['USER_NAME'],
                    $config['PASSWORD'],
                    $options
                );
            } catch (PDOException $e) {
                die("Connection error: " . $e->getMessage());
            }
        }
    }

    // Getter to obtain the connection
    public function getConnection()
    {
        return $this->conn;
    }
}
