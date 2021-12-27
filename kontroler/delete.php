<?php

require "../broker.php";
//require "../model/film.php";

$filmId=$_POST['delete_filmId'];
$query = mysqli_query($conn,"DELETE FROM film WHERE filmId='$filmId'");

?>