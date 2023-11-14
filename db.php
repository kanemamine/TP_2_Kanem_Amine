<?php
$server = 'localhost';
$userName = "root";
$pwd = "";
$db = "tp2";

$conn = mysqli_connect($server, $userName, $pwd, $db);
if ($conn) {
    echo "Connected to the $db database successfully";
    global $conn;
    session_start();
    $_SESSION['connexion']= $conn;
} else {
    echo "Error : Not connected to the $db database";
}


// Préparez la requête d'insertion
for ($i = 1; $i <= $_SESSION['nb_form']; $i++) {
$query = "INSERT INTO adresses VALUES (NULL, ?, ?, ?, ?, ?)";
if ($stmt = mysqli_prepare($conn, $query)) {
    mysqli_stmt_bind_param(
        $stmt,
        "sisss",
        $_SESSION['street' . $i],
        $_SESSION['street_nb' . $i],
        $_SESSION['type' . $i],
        $_SESSION['city' . $i],
        $_SESSION['zipCode' . $i] );

        $result = mysqli_stmt_execute($stmt);
   }}

    