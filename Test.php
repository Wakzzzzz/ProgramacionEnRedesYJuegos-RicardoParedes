<!DOCTYPE html>
<html>
<head>
	<script src="../JS/Code.js"></script>
	<link rel="stylesheet" href="CSS/Estilo.css">
</head>

<body>
	
<?php
echo "My first PHP script!";
?>

<h1>My First JavaScript</h1>


<button type="button"
onclick="document.getElementById('demo').innerHTML = Date()">
Click me to display Date and Time.</button>
<p id="demo">Aiuda</p>

<input type="button" onclick="saludo()" value="Click Me!">

<h3>What Can JavaScript Do?</h3>

<p id="demo">JavaScript can hide HTML elements.</p>

<button type="button" onclick="document.getElementById('demo').style.display='none'">Click Me!</button>



</body>
</html> 
