<?php

session_start();

if(empty($_SESSION['email'])){
    echo "Je bent niet correct ingelogd";
    echo "<a href='login.php'> Login hier in </a>";
    exit;
}


require 'database.php';

$sql = "SELECT * FROM klassen";
$result = mysqli_query($conn, $sql);
$klassen = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<?php include 'header.php'; ?>

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