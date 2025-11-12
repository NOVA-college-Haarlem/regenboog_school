<?php

require 'database.php';

$sql = "SELECT * FROM klassen";
$result = mysqli_query($conn, $sql);
$klassen = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,td{
            border: 1px solid red;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>naam</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($klassen as $klas): ?>
                <tr>
                    <td><?php echo $klas['id'] ?></td>
                    <td><?php echo $klas['naam'] ?></td>
                    <td>
                        <a href="klas-detail.php?id=<?php echo $klas['id'] ?>">Detail</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>