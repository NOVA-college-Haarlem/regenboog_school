<?php include 'session_check.php'; ?>
<?php include 'header.php'; ?>

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
</head>
<body>
    <!-- Maak een formulier om een leerling op te slaan in de db -->
    <!-- Denk na over leerling-attributen -->
     <!-- voornaam, achternaam, leerlingnummer, geboortedatum,  -->
    <form action="create_leerling_process.php" method="post">
        <div class="form-group">
            <label for="voornaam">Voornaam</label>
            <input type="text" name="voornaam" id="voornaam">
        </div>
        <div class="form-group">
            <label for="achternaam">Achternaam</label>
            <input type="text" name="achternaam" id="achternaam">
        </div>
        <div class="form-group">
            <label for="leerlingnummer">Leerlingnummer</label>
            <input type="number" name="leerlingnummer" id="leerlingnummer">
        </div>
        <div class="form-group">
            <label for="geboortedatum">Geboortedatum</label>
            <input type="text" name="geboortedatum" id="geboortedatum">
        </div>
        <div>
            <select name="klas" id="klas">
                <?php foreach ($klassen as $klas): ?>
                    <option value="<?php echo $klas['id']; ?>"><?php echo $klas['naam']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <button type="submit">Maak leerling</button>
    </form>

</body>
</html>


