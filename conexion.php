<?php

$servername = "mysql";
$username = "root";
$password = "root";

// // Create connection
// $conn = new mysqli($servername, $username, $password);

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";



try {
    $conn = new PDO("mysql:host=$servername;dbname=prueba", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO pacientes (first_name, last_name, direction,type_document,document)
    VALUES ('John', 'Doe', 'Encarnacion','CI','636545')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Nuevo paciente";

  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

?>