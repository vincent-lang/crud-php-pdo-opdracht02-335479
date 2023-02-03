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
    <form action="">
    <label for="Bodemformaat">Bodemformaat</label>
    <br>
    <select name="Bodemformaat" id="Bodemformaat">
        <option value="Maak je keuze">Maak je keuze</option>
        <option value="20 centimeter">20 centimeter</option>
        <option value="25 centimeter">25 centimeter</option>
        <option value="30 centimeter">30 centimeter</option>
        <option value="35 centimeter">35 centimeter</option>
        <option value="40 centimeter">40 centimeter</option>
    </select>
    <br><br>
    <label for="Saus">Saus</label>
    <br>
    <select name="Saus" id="Saus">
        <option value="Maak je keuze">Maak je keuze</option>
        <option value="Tomatensaus">Tomatensaus</option>
        <option value="Extra tomatensaus">Extra tomatensaus</option>
        <option value="Spicy tomatensaus">Spicy tomatensaus</option>
        <option value="BBQ saus">BBQ saus</option>
        <option value="Créme fraiche">Créme fraiche</option>
    </select>
    <br><br>
    <label for="Pizzatoppings">Pizzatoppings</label>
    <br>
        <input type="radio" id="Pizzatoppings" name="Pizzatoppings" value="Pizzatoppings">vegan
        <br>
        <input type="radio" id="Pizzatoppings" name="Pizzatoppings" value="Pizzatoppings">vegetarisch
        <br>
        <input type="radio" id="Pizzatoppings" name="Pizzatoppings" value="Pizzatoppings">vlees
        <br><br>
        <label for="Kruiden">Kruiden</label>
        <br>
        <input type="checkbox" id="Pizzatoppings" name="choice1">Peterselie
        <br>
        <input type="checkbox" id="Pizzatoppings" name="choice2">Oregano
        <br>
        <input type="checkbox" id="Pizzatoppings" name="choice3">Chili flakes
        <br>
        <input type="checkbox" id="Pizzatoppings" name="choice4">Zwarte peper
        <br><br>
        <input type="submit" value="Bestel">
        </form>
</body>
</html>