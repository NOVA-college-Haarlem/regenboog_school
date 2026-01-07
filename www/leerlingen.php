<?php

require 'database.php';

$sql = "SELECT * FROM leerlingen JOIN klassen ON klassen.id = leerlingen.klas_id"; ;
$result = mysqli_query($conn, $sql);
$leerlingen = mysqli_fetch_all($result, MYSQLI_ASSOC);  

var_dump($leerlingen);

?>
<!DOCTYPE html>
<html lang="en">
<head>      
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Leerlingen</h1>
    <a href="create_leerling.php">Nieuwe leerling aanmaken</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Voornaam</th>
                <th>Achternaam</th>
                <th>Leerlingnummer</th>
                <th>Klas ID</th>
            </tr>  
        </thead>
        <tbody>
            <?php foreach($leerlingen as $leerling): ?>
                <tr>
                    <td><?php echo $leerling['id']; ?></td>
                    <td><?php echo $leerling['voornaam']; ?></td>
                    <td><?php echo $leerling['achternaam']; ?></td>
                    <td><?php echo $leerling['leerlingnummer']; ?></td>
                    <td><?php echo $leerling['naam']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>         