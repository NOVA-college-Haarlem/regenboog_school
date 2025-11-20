<?php


session_start();

if(empty($_SESSION['email'])){
    echo "Je bent niet correct ingelogd";
    echo "<a href='login.php'> Login hier in </a>";
    exit;
}


?>


<?php include 'header.php'; ?>

    <h1>Dashboard</h1>
    <h2>Welkom <?php echo $_SESSION['firstname'] ?> </h2>
</body>
</html>