<?php 

if(!isset($_POST['naam'])){
    echo "naam moet bestaan in POST";
    exit;
}

if(empty($_POST['naam'])){
    echo "Naam mag niet leeg zijn";
    exit;
}

if(strlen($_POST['naam'])  < 3){
    echo "naam moet minstens drie karakters hebben";
    exit;
}



$naam = $_POST['naam'];
$lokaal = $_POST['lokaal'];
$juf_meester = $_POST['juf_meester'];
$aantal_leerlingen = $_POST['aantal_l'];
$verdieping = $_POST['verdiep'];



require 'database.php';

$sql = "INSERT INTO klassen (naam, lokaal, juf_meester, aantal_leerlingen, verdieping) 
            VALUES ('$naam', '$lokaal', '$juf_meester', '$aantal_leerlingen', '$verdieping')";

if(mysqli_query($conn, $sql)){
    echo "klas succesvol aangemaakt!";
}

