<?php

require("config.php");

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);
    if ($pdo) {

    }else {

    }
}catch (PDOException $e) {
    echo $e->getMessage();
}

$sql = "INSERT INTO pizza (PId
                        ,Bodemformaat
                        ,Saus
                        ,Pizzatoppings
                        ,Kruiden1
                        ,Kruiden2
                        ,Kruiden3
                        ,Kruiden4)
            VALUES      (NULL
                        ,:bodemformaat
                        ,:saus
                        ,:pizzatoppings
                        ,:kruiden1
                        ,:Kruiden2
                        ,:kruiden3
                        ,:kruiden4);";
$statement = $pdo->prepare($sql);

$statement->bindValue(":bodemformaat", $_POST["bodemformaat"], PDO::PARAM_STR);
$statement->bindValue(":saus", $_POST["saus"], PDO::PARAM_STR);
$statement->bindValue(":pizzatoppings", $_POST["pizzatoppings"], PDO::PARAM_STR);
$statement->bindValue(":kruiden1", $_POST["kruiden1"], PDO::PARAM_STR);
$statement->bindValue(":Kruiden2", $_POST["Kruiden2"], PDO::PARAM_STR);
$statement->bindValue(":kruiden3", $_POST["kruiden3"], PDO::PARAM_STR);
$statement->bindValue(":kruiden4", $_POST["kruiden4"], PDO::PARAM_STR);

$statement->execute();

header("location: read.php");