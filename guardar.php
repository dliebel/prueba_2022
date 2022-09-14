<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //codigo para carga los datos una ves precionado el boton guardar

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $direction = $_POST['direction'];
    $type_document = $_POST['type_document'];
    $document = $_POST['document'];


    $servername = "mysql";
    $username = "root";
    $password = "root";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=prueba", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO pacientes (first_name, last_name, direction,type_document,document)
    VALUES ('$first_name', '$last_name', '$direction','$type_document','$document')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "Nuevo paciente con los siguientes datos $first_name  $last_name $direction $type_document $document";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
