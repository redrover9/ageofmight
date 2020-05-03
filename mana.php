<html>
<head>
<title>Mana</title>
<h1>Mana</h1>
</head>
<body>
<form action="mana.php" method="post">
<label for="mana">Enter your current mana: </label>
<input type="number" id="mana" name="mana" min="0" max="200">
<label for="mana_cost">Enter the spell's mana cost: </label>
<input type="number" id="mana_cost" name="mana_cost" min="0" max="200">
<label for="spells">Select a spell:</label>
<select id="spells">
<option value="accelerate_disease">Accelerate Disease – Advanced [5]</option>
<option value="adrenaline">Adrenaline - Advanced [7]</option>
<option value="alarm">Alarm - Novice [4]</option>
<option value="animate_lesser_zombie">Animate Lesser Zombie: - Novice [6]</option>
<option value="animate_zombie">Animate Zombie: Advanced [10]</option>
<option value="animate_greater_zombie">Animate Greater Zombie: Expert [12]</option>
<option value="anti_magic_burst">Anti-Magic Burst - Expert [12] </option> 
</select>
<input type="submit" value="Submit">

</form>
<?php
$mana = $_POST['mana'];
$mana_cost = $_POST['mana_cost'];
$mana_remaining = $mana - $mana_cost;
echo "You have $mana_remaining mana remaining.";
?>
</body>
</html>
