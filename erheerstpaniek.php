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
	<h2>Er heerst paniek...</h2>
	<form method="post" action="erheerstpaniek2.php">
		<p>Welk dier zou je nooit als huisdier willen hebben? <input type="text" name="dier"></p>
		<p>Wie is de belangrijkste persoon in je leven? <input type="text" name="persoon"></p>
		<p>In welk land zou je graag willen wonen? <input type="text" name="land"></p>	
		<p>Wat doe je als je je verveeld? <input type="text" name="verveel"></p>	
		<p>Met welk speelgoed speelde je het meest toen je kind was? <input type="text" name="speelgoed"></p>	
		<p>Bij welke docent spijbel je het liefst? <input type="text" name="docent"></p>	
		<p>Wat zou je doen met € 100.000 euro? <input type="text" name="geld"></p>	
		<p>Wat is je favoriete bezigheid? <input type="text" name="bezigheid"></p>	
		<input type ="submit">
	</form>
</div>

</body>
</html>