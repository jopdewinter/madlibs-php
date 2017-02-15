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
	<form method="post" action="onkunde2.php">
		<p>Wat zou je graag willen kunnen? <input type="text" name="kunnen"></p>
		<p>Met welke persoon kun je goed opschieten? <input type="text" name="opschieten"></p>
		<p>Wat is je favoriete getal? <input type="text" name="getal"></p>
		<p>Wat heb je altijd bij je als je op vakantie gaat? <input type="text" name="vakantie"></p>
		<p>Wat is je beste persoonlijke eigenschap? <input type="text" name="eigenschap"></p>
		<p>Wat is je slechtste persoonlijke eigenschap? <input type="text" name="eigenschap2"></p>
		<p>Wat is het ergste dat je kan overkomen? <input type="text" name="overkomen"></p>
		<input type ="submit">
	</form>
</div>

</body>
</html>