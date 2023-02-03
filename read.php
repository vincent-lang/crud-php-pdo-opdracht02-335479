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

$sql = "SELECT PId
            ,Bodemformaat
            ,Saus
            ,Pizzatoppings
            ,Kruiden1
            ,Kruiden2
            ,Kruiden3
            ,Kruiden4
        FROM pizza
        ORDER BY PId ASC";

$statement = $pdo->prepare($sql);

$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_OBJ);

$rows = "";
foreach ($result as $info) {
    $rows .= "<tr>
                <td>$info->PId</td>
                <td>$info->Bodemformaat</td>
                <td>$info->Saus</td>
                <td>$info->Pizzatoppings</td>
                <td>$info->Kruiden1</td>
                <td>$info->Kruiden2</td>
                <td>$info->Kruiden3</td>
                <td>$info->Kruiden4</td>
                <td>
                    <a href='delete.php?id={$info->Id}'>
                        <img src='img/b_drop.png' alt='Drop'</img>
                    </a>
                </td>
                <td>
                    <a href='update.php?id={$info->Id}'>
                        <img src='img/b_edit.png' alt='Edit'</img>
                    </a>
                </td>
            </tr>";
}

?>


<h3>Bestelling gegevens</h3>
<a href="index.php"><button>Nieuw Persoon</button></a>
<table border="1">
    <thead>
        <th>PId</th>
        <th>Bodemformaat</th>
        <th>Saus</th>
        <th>Pizzatoppings</th>
        <th>Kruiden1</th>
        <th>Kruiden2</th>
        <th>Kruiden3</th>
        <th>Kruiden4</th>
        <th></th>
        <th></th>
    </thead>
    <tbody>
        <?= $rows; ?>
    </tbody>
</table>