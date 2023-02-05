<?php
require('config.php');

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);
    if ($pdo) {
    } else {
    }
} catch (PDOException $e) {
    $e->getMessage();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    try {

        $sql = "UPDATE pizza
            Set     Bodemformaat = :bodemformaat,
                    Saus = :saus,
                    Pizzatoppings = :pizzatoppings,
                    Peterselie = :peterselie,
                    Oregano = :oregano,
                    Chili_flakes = :chili_flakes,
                    Zwarte_peper = :zwarte_peper
                WHERE   Id = :id";

        $statement = $pdo->prepare($sql);
        $statement->bindValue(":id", $_POST["id"], PDO::PARAM_INT);
        $statement->bindValue(":bodemformaat", $_POST["bodemformaat"], PDO::PARAM_STR);
        $statement->bindValue(":saus", $_POST["saus"], PDO::PARAM_STR);
        $statement->bindValue(":pizzatoppings", $_POST["pizzatoppings"], PDO::PARAM_STR);
        $statement->bindValue(":peterselie", $_POST["peterselie"], PDO::PARAM_STR);
        $statement->bindValue(":oregano", $_POST["oregano"], PDO::PARAM_STR);
        $statement->bindValue(":chili_flakes", $_POST["chili_flakes"], PDO::PARAM_STR);
        $statement->bindValue(":zwarte_peper", $_POST["zwarte_peper"], PDO::PARAM_STR);

        $statement->execute();  

        echo "het record is geupdate";
        header('location: read.php');

        exit();
    } catch (PDOException $e) {
        echo "het record is niet geupdate, probeer het opnieuw";
        header("location: read.php");
    }
}

$sql = "SELECT Id
              ,Bodemformaat as BF
              ,Saus as S
              ,Pizzatoppings as PT
              ,Peterselie as PS
              ,Oregano as O
              ,Chili_flakes as CF
              ,Zwarte_peper as ZP
        FROM pizza
        WHERE Id = :Id";

$statement = $pdo->prepare($sql);

$statement->bindValue(':Id', $_GET['id'], PDO::PARAM_INT);

$statement->execute();

$result = $statement->fetch(PDO::FETCH_OBJ);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/anon.png" type="image/x-icon">
    <title>pizza bakkery</title>
</head>

<body>
    <h3>Maak je eigen pizza</h3>

    <form action="update.php" method="post">
        <fieldset>
            <label for="bodemformaat">Bodemformaat:</label><br>
            <select name="bodemformaat" id="bodemformaat" value="<?= $result->BF ?>">
                <option value="Maak je keuze">Maak je keuze</option>
                <option value="20 centimeter">20 centimeter</option>
                <option value="25 centimeter">25 centimeter</option>
                <option value="30 centimeter">30 centimeter</option>
                <option value="35 centimeter">35 centimeter</option>
                <option value="40 centimeter">40 centimeter</option>
            </select>
            <br>
            <label for="saus">Saus:</label><br>
            <select name="saus" id="saus" value="<?= $result->S ?>">
                <option value="Maak je keuze">Maak je keuze</option>
                <option value="Tomatensaus">Tomatensaus</option>
                <option value="Extra tomatensaus">Extra tomatensaus</option>
                <option value="Spicy tomatensaus">Spicy tomatensaus</option>
                <option value="BBQ saus">BBQ saus</option>
                <option value="Créme fraiche">Créme fraiche</option>
            </select>
            <br>
            <label for="pizzatoppings" value="<?= $result->PT ?>">Pizzatoppings:</label><br>
            vegan
            <input type="radio" id="vegan" name="pizzatoppings" value="vegan">
            vegetarisch
            <input type="radio" id="vegetarisch" name="pizzatoppings" value="vegetarisch">
            vlees
            <input type="radio" id="vlees" name="pizzatoppings" value="vlees">
            <br>
            <label for="kruiden">Kruiden</label>
            <br>
            Peterselie
            <input type="checkbox" id="peterselie" name="peterselie">
            Oregano
            <input type="checkbox" id="oregano" name="oregano">
            Chili flakes
            <input type="checkbox" id="chili_flakes" name="chili_flakes">
            Zwarte peper
            <input type="checkbox" id="zwarte_peper" name="zwarte_peper">
            <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
            <input id="submit" type="submit" value="Bestel">
        </fieldset>
    </form>
</body>

</html>