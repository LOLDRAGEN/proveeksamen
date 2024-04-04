<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/css/style.css">
    <meta charset="UTF-8">
    <title>Send inn din ticket</title>
</head>
<body>

<?php
require_once 'includes/sesh_chek.inc.php';
?>

<header>
    <a href="index.php">
        <img id="logo"  src="07052021-03_generated.jpg" alt="Fjell Bedriftsløsninger"  >
    </a>
</header>
<h3>Send in din ticket!</h3>


<form action="includes/tickets.php" method="post">
    <input id="inputflet" type="text" name="tickets" placeholder="Skriv inn problemet" >
    <button type="submit">Send inn</button>
</form>
</body>
</html>
