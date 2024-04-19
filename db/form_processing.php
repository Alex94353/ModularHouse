<?php
$host = "localhost";
$dbname = "order_form";
$username = "root";
$password = "";
$port = 3306;

$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
);
try {
    $conn = new PDO(
        'mysql:host=' . $host . ';dbname=' . $dbname . ";port=" . $port,
        $username,
        $password,
        $options
    );
} catch (PDOException $e) {
    die("Error connection: " . $e->getMessage());
}

$first_name = $_POST["first-name"];
$last_name = $_POST["last-name"]; 
$email = $_POST["email"];

$sql = "INSERT INTO info (first_name, last_name, email) VALUES (?, ?, ?)"; 

$statement = $conn->prepare($sql);
try {
    $insert = $statement->execute([$first_name, $last_name, $email]); 
    header("Location: http://localhost/ModularHouse/completed.php");
    exit(); 
} catch (\Exception $exception) {
    echo "Error: " . $exception->getMessage(); 
}

$conn = null;
