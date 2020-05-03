<html>
<head>
<link rel="stylesheet" href="Rpg-Awesome-master/css/rpg-awesome.css">
<style> table, th, td {
        border: 1px solid black;
}
@font-face {
	font-family: 'rpg';
	font-style: normal;
	font-weight: 400;
	src: local('rpg'), local('rpg-regular'), url("Rpg-Awesome-master/fonts/rpgawesome-webfont.woff") format('woff');
}
body {
background-image: url(Rpg-Awesome-master/dragon.jpeg), url(Rpg-Awesome-master/swordandbow.jpg), url(Rpg-Awesome-master/magic.jpg);
background-position: right bottom, center, right top;
background-repeat: no-repeat, no-repeat, no-repeat;
padding: 15px;
background-color: #999966;
font-family: rpg;
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
<br>
<br>
<label for="mana_cost">Enter the spell's mana cost: </label>
<input type="number" id="mana_cost" name="mana_cost" min="0" max="200">
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
$mana_cost = $_POST['mana_cost'];
$base_mana = $wisdom * 2;
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
$mana_remaining = $base_mana;
if ($mana_cost != 0) {
	$mana_remaining = $base_mana - $mana_cost;
}
$critical_threat_chance = $luck;
$critical_failure_chance = $luck * 5;
$dexterity_bonus = $dexterity;
$dodge = $dexterity * 2;
$evade = $agility * 4;
$hit_dc = 40 + ($dexterity * $agility);
$damage = 0;
$melee_damage = $damage / 4;
$movement_speed = $agility + 10;
$social = 2 * $charisma;
$strength_bonus = 2 * $strength;
$spell_failure_bonus = 2 * $strength;
$spell_failure_chance = 25 - (2 * $willpower);

?>

<table style="width:25%">
<tr>
<th>Statistic</th>
<th>Value</th>
</tr>
<tr>
<td>Base mana <div class="ra-hover col-md-3 col-sm-4"><i class="ra ra-aura"></i></div></td>
<td><?php echo $base_mana; ?> 
</tr>
<tr>
<td>Mana remaining <div class="ra-hover col-md-3 col-sm-4"><i class="ra ra-aura"></i></div></td>
<td><?php echo $mana_remaining; 
?> 
<tr>
<td>Morale <div class="ra-hover col-md-3 col-sm-4"><i class="ra ra-muscle-up"></i></div></td>
<td><?php echo $morale; ?> </td>
</tr>
<tr>
<td>Stamina <div class="ra-hover col-md-3 col-sm-4"><i class="ra ra-muscle-fat"></i></div></td>
<td><?php echo $stamina; ?> </td>
</tr>
<tr>
<td>Vitality <div class="ra-hover col-md-3 col-sm-4"><i class="ra ra-health"></i></div></td>
<td><?php echo $vitality; ?> </td>
</tr>
</table>

<table style="width:25%">
<tr>
<th>Attribute</th>
<th>Value</th>
</tr>
<tr>
<td>Agility <div class="ra-hover col-md-3 col-sm-4"><i class="ra ra-hand"></i></div></td>
<td><?php echo $agility; ?> </td>
</tr>
<tr>
<td>Charisma <div class="ra-hover col-md-3 col-sm-4"><i class="ra ra-horn-call"></i></div></td>
<td><?php echo $charisma; ?> </td>
</tr>
<tr>
<td>Constitution <div class="ra-hover col-md-3 col-sm-4"><i class="ra ra-locked-fortress"></i></div></td>
<td><?php echo $constitution; ?> </td>
</tr>
<tr>
<td>Dexterity <div class="ra-hover col-md-3 col-sm-4"><i class="ra ra-sideswipe"></i></div></td>
<td><?php echo $dexterity; ?> </td>
</tr>
<tr>
<td>Endurance <div class="ra-hover col-md-3 col-sm-4"><i class="ra ra-demolish"></i></div></td>
<td><?php echo $endurance; ?> </td>
</tr>
<tr>
<td>Intelligence <div class="ra-hover col-md-3 col-sm-4"><i class="ra ra-overmind"></i></div></td>
<td><?php echo $intelligence; ?> </td>
</tr>
<tr>
<td>Luck <div class="ra-hover col-md-3 col-sm-4"><i class="ra ra-dice-five"></i></div></td>
<td><?php echo $luck; ?> </td>
</tr>
<tr>
<td>Strength <div class="ra-hover col-md-3 col-sm-4"><i class="ra ra-bowie-knife"></i></div></td>
<td><?php echo $strength; ?> </td>
</tr>
<tr>
<td>Willpower <div class="ra-hover col-md-3 col-sm-4"><i class="ra ra-heavy-shield"></i></div></td>
<td><?php echo $willpower; ?> </td>
</tr>
<tr>
<td>Wisdom <div class="ra-hover col-md-3 col-sm-4"><i class="ra ra-brain-freeze"></i></div></td>
<td><?php echo $wisdom; ?> </td>
</tr>
</table>

<table style="width:25%">
<tr>
<th>Resistance</th>
<th>Value</th>
</tr>
<tr>
<td>Bleed <div class="ra-hover col-md-3 col-sm-4"><i class="ra ra-gloop"></i></div></td>
<td><?php echo $bleed; ?> </td>
</tr>
<tr>
<td>Death <div class="ra-hover col-md-3 col-sm-4"><i class="ra ra-bone-bite"></i></div></td>
<td><?php echo $death; ?> </td>
</tr>
<tr>
<td>Disease <div class="ra-hover col-md-3 col-sm-4"><i class="ra ra-poison-cloud"></i></div></td>
<td><?php echo $disease; ?> </td>
</tr>
<tr>
<td>Exhaustion <div class="ra-hover col-md-3 col-sm-4"><i class="ra ra-player-despair"></i></div></td>
<td><?php echo $exhaustion; ?> </td>
</tr>
<tr>
<td>Fear <div class="ra-hover col-md-3 col-sm-4"><i class="ra ra-focused-lightning"></i></div></td>
<td><?php echo $fear; ?> </td>
</tr>
<tr>
<td>Knockdown <div class="ra-hover col-md-3 col-sm-4"><i class="ra ra-fall-down"></i></div></td>
<td><?php echo $knockdown; ?> </td>
</tr>
<tr>
<td>Magic Fatigue <div class="ra-hover col-md-3 col-sm-4"><i class="ra ra-fairy-wand"></i></div></td>
<td><?php echo $magic_fatigue; ?> </td>
</tr>
<tr>
<td>Mind Magic <div class="ra-hover col-md-3 col-sm-4"><i class="ra ra-burning-eye"></i></div></td>
<td><?php echo $mind_magic; ?> </td>
</tr>
<tr>
<td>Poison <div class="ra-hover col-md-3 col-sm-4"><i class="ra ra-poison-cloud"></i></div></td>
<td><?php echo $poison; ?> </td>
</tr>

</table>

<table style="width:25%">
<tr>
<th>Derived Statistics</th>
<th>Value</th>
</tr>
<tr>
<td>Critical Threat Chance</td>
<td><?php echo $critical_threat_chance; ?></td>
</tr>
<tr>
<td>Critical Failure Chance</td>
<td><?php echo $critical_failure_chance; ?></td>
</tr>
<tr>
<td>Dexterity Bonus</td>
<td><?php echo $dexterity_bonus; ?></td>
</tr>
<tr>
<td>Dodge</td>
<td><?php echo $dodge; ?></td>
</tr>
<tr>
<td>Evade</td>
<td><?php echo $evade; ?></td>
</tr>
<tr>
<td>Hit DC</td>
<td><?php echo $hit_dc; ?></td>
</tr>
<tr>
<td>Melee Damage</td>
<td><?php echo $melee_damage; ?></td>
</tr>
<tr>
<td>Movement Speed</td>
<td><?php echo $movement_speed; ?></td>
</tr>
<tr>
<td>Social</td>
<td><?php echo $social; ?></td>
</tr>
<tr>
<td>Strength Bonus</td>
<td><?php echo $strength_bonus; ?></td>
</tr>
<tr>
<td>Spell Failure Chance</td>
<td><?php echo $spell_failure_chance; ?></td>
</tr>
</table>
</body>
</html>
