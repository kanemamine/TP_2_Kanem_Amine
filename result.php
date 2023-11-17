<?php
session_start();
require_once "functions.php";
for ($i = 1; $i <= $_SESSION['nb_form']; $i++) { 
$_SESSION['street' . $i] = $_POST['street' . $i];
$_SESSION['street_nb' . $i] = $_POST['street_nb' . $i];
$_SESSION['type' . $i] = $_POST['type' . $i];
$_SESSION['city' . $i] = $_POST['city' . $i];
$_SESSION['zipcode' . $i] = $_POST['zipcode' . $i];}


for ($i = 1; $i <= $_SESSION['nb_form']; $i++) {
if (empty($_SESSION['street' . $i]) || empty($_SESSION['street_nb' . $i]) || empty($_SESSION['zipcode' . $i])) {
    $_SESSION['address_erreur_msg'] = "Un ou plusieurs champs sont vide";
    header("Location: configAdress.php");
}

if (!is_numeric($_SESSION['street_nb' . $i])) {
    $_SESSION['street_nb_erreur_msg'] = "Veillez entrer un nombre valide.";
    header("Location: configAdress.php");}}



reviewforms();

    




