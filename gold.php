<html>
<head>
<title>Gold</title>
<h1>Gold</h1>
</head>
<body>
<form action="gold.php" method="post">
<label for="gold">Enter your current gold: </label>
<input type="number" id="gold" name="gold" min="0" max="10000">

<label for="silver">Enter your current silver: </label>
<input type="number" id="silver" name="silver" min="0" max="10000">

<label for="copper">Enter your current copper: </label>
<input type="number" id="copper" name="copper" min="0" max="10000">

<label for="gold_cost">Enter the item's cost in GP: </label>
<input type="number" id="gold_cost" name="gold_cost" min="0" max="10000">

<label for="silver_cost">Enter the item's cost in SP: </label>
<input type="number" id="silver_cost" name="silver_cost" min="0" max="10000">

<label for="copper_cost">Enter the item's cost in CP: </label>
<input type="number" id="copper_cost" name="copper_cost" min="0" max="10000">

<input type="submit" value="Submit">

</form>
<?php
$gold = $_POST['gold'];
$silver = $_POST['silver'];
$copper = $_POST['copper'];
$gold_cost = $_POST['gold_cost'];
$silver_cost = $_POST['silver_cost'];
$copper_cost = $_POST['copper_cost'];
$gold_remaining = $gold - $gold_cost;
$silver_remaining = $silver - $silver_cost;
$copper_remaining = $copper - $copper_cost;
if ($copper_remaining < 0)
{
	$copper_remaining = 0;
	$silver_remaining = $silver_remaining - 1;
}
if ($silver_remaining < 0)
{
        $silver_remaining = 0;
        $gold_remaining = $gold_remaining - 1;
}

echo  "\nYou have $gold_remaining gold remaining.";
echo  "\nYou have $silver_remaining silver remaining.";
echo  "\nYou have $copper_remaining copper remaining.";

?>
</body>
</html>
