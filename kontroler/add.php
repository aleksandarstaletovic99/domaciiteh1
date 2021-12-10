<?php

include("../broker.php");
session_start();

if (isset($_POST['add'])) {
    $naziv = $_POST['naziv'];
    $budzet = $_POST['budzet'];
    $opis = $_POST['opis'];
    
    $godina = $_POST['godina'];
    $id =  $_SESSION['user_id'];



    $query = "INSERT INTO film(naziv,budzet,opis,godina,userID) VALUES('$naziv', '$budzet','$opis','$godina','$id')";
    $result = $conn->query($query);

    if (!$result) {
        die("Upit nije izvrsen!");
    }
    header("Location: ../home.php");
}