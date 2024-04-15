<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/css/style.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Delete user</title>
</head>
<body>
<header>
    <a href="index.php">
       <h1>Fjell Bedriftsløsninger</h1>
    </a>
</header>


<h3>Delete Account</h3>

<form action="includes/userdelete.inc.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password">
    <button>Delete</button>
</body>
</html>


