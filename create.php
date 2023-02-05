<?php

require("config.php");

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);
    if ($pdo) {
    } else {
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

$sql = "INSERT INTO pizza (Id
                        ,Bodemformaat
                        ,Saus
                        ,Pizzatoppings
                        ,Peterselie
                        ,Oregano
                        ,Chili_flakes
                        ,Zwarte_peper)
            VALUES      (NULL
                        ,:bodemformaat
                        ,:saus
                        ,:pizzatoppings
                        ,:peterselie
                        ,:oregano
                        ,:chili_flakes
                        ,:zwarte_peper);";
$statement = $pdo->prepare($sql);

$statement->bindValue(":bodemformaat", $_POST["bodemformaat"], PDO::PARAM_STR);
$statement->bindValue(":saus", $_POST["saus"], PDO::PARAM_STR);
$statement->bindValue(":pizzatoppings", $_POST["pizzatoppings"], PDO::PARAM_STR);
$statement->bindValue(":peterselie", $_POST["peterselie"], PDO::PARAM_STR);
$statement->bindValue(":oregano", $_POST["oregano"], PDO::PARAM_STR);
$statement->bindValue(":chili_flakes", $_POST["chili_flakes"], PDO::PARAM_STR);
$statement->bindValue(":zwarte_peper", $_POST["zwarte_peper"], PDO::PARAM_STR);

$statement->execute();

header("location: read.php");
