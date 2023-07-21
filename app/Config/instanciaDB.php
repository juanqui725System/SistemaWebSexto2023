<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbsexto";

// Crear una instancia de la clase Database
$db = new ConexionDB($servername, $username, $password, $dbname);
$db->connect();

// Crear una instancia de la clase DatabaseOperations
$dbOperations = new DatabaseOperations($db);

