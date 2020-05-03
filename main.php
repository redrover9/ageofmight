<html>
<head>
<title>Age of Might</title>
<style> table, th, td {
	border: 1px solid black;
}
</style>
</head>
<body>
<h1>Age of Might Character Sheet</h1>
<form action="index.php" method="post">
 <label for="agility">Agility</label>
 <input type="number" id="agility" name="agility" min="1" max="20" value="<?php echo isset($_POST['agility']) ? $_POST['agility'] : '' ?>"> 
<br>
 <label for="charisma">Charisma</label>
 <input type="number" id="charisma" name="charisma" min="1" max="20" value="<?php echo isset($_POST['charisma']) ? $_POST['charisma'] : '' ?>">
<br>
 <label for="constitution">Constitution</label>
 <input type="number" id="constitution" name="constitution" min="1" max="20" value="<?php echo isset($_POST['constitution']) ? $_POST['constitution'] : '' ?>">
<br>
 <label for="dexterity">Dexterity</label>
 <input type="number" id="dexterity" name="dexterity" min="1" max="20" value="<?php echo isset($_POST['dexterity']) ? $_POST['dexterity'] : '' ?>">
<br> 
<label for="endurance">Endurance</label>
 <input type="number" id="endurance" name="endurance" min="1" max="20" value="<?php echo isset($_POST['endurance']) ? $_POST['endurance'] : '' ?>">
<br> 
<label for="intelligence">Intelligence</label>
 <input type="number" id="intelligence" name="intelligence" min="1" max="20" value="<?php echo isset($_POST['endurance']) ? $_POST['endurance'] : '' ?>">
<br> 
<label for="luck">Luck</label>
 <input type="number" id="luck" name="luck" min="1" max="20" value="<?php echo isset($_POST['luck']) ? $_POST['luck'] : '' ?>">
<br> 
<label for="strength">Strength</label>
 <input type="number" id="strength" name="strength" min="1" max="20" value="<?php echo isset($_POST['strength']) ? $_POST['strength'] : '' ?>">
<br>
 <label for="willpower">Willpower</label>
<input type="number" id="willpower" name="willpower" min="1" max="20" value="<?php echo isset($_POST['willpower']) ? $_POST['willpower'] : '' ?>">
<br>
 <label for="wisdom">Wisdom</label>
<input type="number" id="wisdom" name="wisdom" min="1" max="20" value="<?php echo isset($_POST['wisdom']) ? $_POST['wisdom'] : '' ?>">
<input type="submit" value="Submit">
<?php
$mana_cost = $_POST['mana_cost'];
?>
<br>
<br>
<label for="mana_cost">Enter the spell's mana cost: </label>
<input type="number" id="mana_cost" name="mana_cost" min="0" max="200">
<?php $mana_cost = $_POST['mana_cost'];
$mana_remaining = $mana - $mana_cost;
$mana = $mana_remaining;
?>

<label for="spells">Select a spell:</label>
<select id="spells">
<option value="accelerate_disease">Accelerate Disease – Advanced [5]</option>
<option value="adrenaline">Adrenaline - Advanced [7]</option>
<option value="alarm">Alarm - Novice [4]</option>
<option value="animate_lesser_zombie">Animate Lesser Zombie: - Novice [6]</option>

</select>
<input type="submit" value="Submit">

</form>
<?php
$agility = $_POST['agility'];
$charisma = $_POST['charisma'];
$constitution = $_POST['constitution'];
$dexterity = $_POST['dexterity'];
$endurance = $_POST['endurance'];
$intelligence = $_POST['intelligence'];
$luck = $_POST['luck'];
$strength = $_POST['strength'];
$willpower = $_POST['willpower'];
$wisdom = $_POST['wisdom'];
$morale = $wisdom + $will;
$stamina = 2 * $endurance + 15;
$vitality = 5 + $constitution;
$bleed = ($endurance * 2) + ($constitution * 2);
$death = ($constitution * 2) + $endurance + $willpower;
$disease = ($constitution * 2) + $endurance;
$exhaustion = 2 * $willpower;
$fear = (2 * $willpower) + $intelligence + $wisdom;
$knockdown = 2 * ($dexterity + $strength);
$magic_fatigue = 2 * $willpower;
$mind_magic = (3 * $willpower) + $intelligence + $wisdom;
$poison = 2 * $constitution;
?>

<table style="width:100%">
<tr>
<th>Statistic</th>
<th>Value</th>
</tr>
<tr>
<td>Base mana</td>
<td><?php echo $mana; ?> </td>
</tr>
<tr>
<td>Mana remaining</td>
<td><?php echo $mana_remaining; ?> </td>
<tr>
<td>Morale</td>
<td><?php echo $morale; ?> </td>
</tr>
<tr>
<td>Stamina</td>
<td><?php echo $stamina; ?> </td>
</tr>
<tr>
<td>Vitality</td>
<td><?php echo $vitality; ?> </td>
</tr>
</table>

<table style="width:100%">
<tr>
<th>Attribute</th>
<th>Value</th>
</tr>
<tr>
<td>Agility</td>
<td><?php echo $agility; ?> </td>
</tr>
<tr>
<td>Charisma</td>
<td><?php echo $charisma; ?> </td>
</tr>
<tr>
<td>Constitution</td>
<td><?php echo $constitution; ?> </td>
</tr>
<tr>
<td>Dexterity</td>
<td><?php echo $dexterity; ?> </td>
</tr>
<tr>
<td>Endurance</td>
<td><?php echo $endurance; ?> </td>
</tr>
<tr>
<td>Intelligence</td>
<td><?php echo $intelligence; ?> </td>
</tr>
<tr>
<td>Luck</td>
<td><?php echo $luck; ?> </td>
</tr>
<tr>
<td>Strength</td>
<td><?php echo $strength; ?> </td>
</tr>
<tr>
<td>Willpower</td>
<td><?php echo $willpower; ?> </td>
</tr>
<tr>
<td>Wisdom</td>
<td><?php echo $wisdom; ?> </td>
</tr>
</table>

<table style="width:100%">
<tr>
<th>Resistance</th>
<th>Value</th>
</tr>
<tr>
<td>Bleed</td>
<td><?php echo $bleed; ?> </td>
</tr>
<tr>
<td>Death</td>
<td><?php echo $death; ?> </td>
</tr>
<tr>
<td>Disease</td>
<td><?php echo $disease; ?> </td>
</tr>
<tr>
<td>Exhaustion</td>
<td><?php echo $exhaustion; ?> </td>
</tr>
<tr>
<td>Fear</td>
<td><?php echo $fear; ?> </td>
</tr>
<tr>
<td>Knockdown</td>
<td><?php echo $knockdown; ?> </td>
</tr>
<tr>
<td>Magic Fatigue</td>
<td><?php echo $magic_fatigue; ?> </td>
</tr>
<tr>
<td>Mind Magic</td>
<td><?php echo $mind_magic; ?> </td>
</tr>
<tr>
<td>Poison</td>
<td><?php echo $poison; ?> </td>
</tr>

</table>

</body>
</html>
