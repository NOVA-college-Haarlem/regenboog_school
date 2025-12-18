<?php

$leerlingnummer = "ABCD";

if(!is_numeric($leerlingnummer)){
    echo "Leerlingnummer moet numeriek zijn";
    exit;
}