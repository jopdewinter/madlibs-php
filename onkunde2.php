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
	<h2>Onkunde</h2>
	<p>Er zijn veel mensen die niet kunnen <?php echo $_POST["kunnen"]?>.
	Neem nou <?php echo $_POST["opschieten"]?>.
	Zelfs met de hulp van een <?php echo $_POST["vakantie"]?> of zelfs <?php echo $_POST["getal"]?> kan <?php echo $_POST["opschieten"]?> niet <?php echo $_POST["kunnen"]?>. Dat heeft niet te maken met een gebrek aan <?php echo $_POST["eigenschap"]?>, maar met een te veel aan <?php echo $_POST["eigenschap2"]?>. Te veel <?php echo $_POST["eigenschap2"]?> leidt tot verveling en dat is niet goed als je wilt <?php echo $_POST["kunnen"]?>. Helaas voor <?php echo $_POST["opschieten"]?>.</p>
</div>

</body>
</html>