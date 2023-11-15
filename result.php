<?php
session_start();
require_once "functions.php";
for ($i = 1; $i <= $_SESSION['nb_form']; $i++) {
if (empty($_SESSION['street' . $i]) || empty($_SESSION['street_nb' . $i]) || empty($_SESSION['zipcode' . $i])) {
    $_SESSION['address_erreur_msg'] = "Un ou plusieurs champs sont vide";
    header("Location: configAdress.php");
}}


$post = $_POST;
reviewforms($post);

    




