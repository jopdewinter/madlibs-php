<!DOCTYPE html>
<html>
<head>
	<title>Madlips</title>
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>

<h1>Mad Lips</h1>

<div class="header">
	<button class="headerbuttons" onclick="window.location.href='erheerstpaniek.php'">Er heerst paniek...</button>
	<button class="headerbuttons" onclick="window.location.href='onkunde.php'">Onkunde</button>
</div>

<div class="card-panel">
	<p>Er heerst paniek in het koningkrijk <?php echo $_POST["land"]?>. Koning <?php echo $_POST["docent"]?> is ten einde raad en als koning <?php echo $_POST["docent"]?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $_POST["persoon"]?>.</p>
	<p>"<?php echo $_POST["persoon"]?>! Het  is een ramp! Het is een schande!"</p>
	<p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
	<p>"Mijn <?php echo $_POST["dier"]?> is verdwenen! Zo maar, zonder waarschuwing. En ik had Lego voor hem gekocht!"</p>
	<p>"Majesteit, uw <?php echo $_POST["dier"]?> komt vast vanzelf weer terug?"</p>
	<p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST["bezigheid"]?> leren?"</p>
	<p>"Maar Sire, daar kunt u toch uw <?php echo $_POST["geld"]?> voor gebruiken."</p>
	<p>"<?php echo $_POST["persoon"]?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
	<p>"<?php echo $_POST["verveel"]?>, Sire"</p>
</div>

</body>
</html>	