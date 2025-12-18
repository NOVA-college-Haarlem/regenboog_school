<?php

$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$leerlingnummer = $_POST['leerlingnummer'];

//valideren

//check of ingevuld is
//check minimale lengte van 3 bij voornaam, achternaa,
//check of leerlingnummer een numerieke waarde heeft

if(empty($voornaam)){
    echo "Voornaam mag niet leeg zijn";
    exit;
}
if(empty($achternaam)){
    echo "Achternaam mag niet leeg zijn";
    exit;
}
if(empty($leerlingnummer)){
    echo "Leerlingnummer mag niet leeg zijn";
    exit;
}


$voornaam = "Bo";

if(strlen($voornaam) < 2){
    echo "Voornaam mag niet korter zijn dan 3 karakters";
    exit;
}

if(!is_numeric($leerlingnummer)     ){
    echo "Leerlingnummer moet numeriek zijn";
    exit;
}

if(strlen($leerlingnummer) < 8 ){
    echo "Leerlingnummer moet minimaal 8 cijfers hebben";
    exit;
}

require "database.php";

$sql = "INSERT INTO leerlingen (voornaam, achternaam, leerlingnummer, klas_id) 
                VALUES ('$voornaam','$achternaam','$achternaam', '1', '$leerlingnummer', $klas_id')";

$result = mysqli_query($conn, $sql);

if($result){
    // header("location: leerlingen_index.php"); 
    echo "Opslaan van leerling is gelukt!";
    exit;
}

