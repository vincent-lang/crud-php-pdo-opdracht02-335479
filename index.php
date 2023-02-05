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
    <h1>Maak je eigen pizza</h1>
    <form action="create.php" method="post">
        <fieldset>
            <label for="bodemformaat">Bodemformaat</label>
            <br>
            <select name="bodemformaat" id="bodemformaat">
                <option value="Maak je keuze">Maak je keuze</option>
                <option value="20 centimeter">20 centimeter</option>
                <option value="25 centimeter">25 centimeter</option>
                <option value="30 centimeter">30 centimeter</option>
                <option value="35 centimeter">35 centimeter</option>
                <option value="40 centimeter">40 centimeter</option>
            </select>
            <br>
            <label for="saus">Saus</label>
            <br>
            <select name="saus" id="saus">
                <option value="Maak je keuze">Maak je keuze</option>
                <option value="Tomatensaus">Tomatensaus</option>
                <option value="Extra tomatensaus">Extra tomatensaus</option>
                <option value="Spicy tomatensaus">Spicy tomatensaus</option>
                <option value="BBQ saus">BBQ saus</option>
                <option value="Créme fraiche">Créme fraiche</option>
            </select>
            <br>
            <label for="pizzatoppings">Pizzatoppings</label>
            <br>
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
            <input id="submit" type="submit" value="Bestel">
        </fieldset>
    </form>
</body>

</html>