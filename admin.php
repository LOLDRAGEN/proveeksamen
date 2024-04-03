<?php


$servername = "localhost";
$username = "root";
$password = "Admin";
$dbname = "terminoppgave_vg2";

session_start();


require_once 'includes/sesh_chek.inc.php';
require_once 'includes/admin_chek.inc.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style_main.css">
    <meta charset="UTF-8">
    <title>The Movie Database</title>
</head>
<body>

<?php
require_once 'includes/sesh_chek.inc.php';
?>

<header>
    <a href="index.php">
        <img  src="07052021-03_generated.jpg" alt="Fjell Bedriftsløsninger"id="logo">
    </a>

    <a href="logout.php">
        <button class="header_button">Logout</button>
    </a>


    <a href="upload.php">
        <button class="header_button">Upload a movie</button>
    </a>
    <a href="delete.php">
        <button class="header_button">Delete account</button>
    </a>

    <a href="faq.php">
        <button class="header_button">FAQ</button>
    </a>
</header>

<div id="title">
    <h1>Admin</h1>
</div>
<p id="user"><?php echo "Velkommen " . $_SESSION['username'] . "!"; ?></p>
<?php


$servername = "localhost";
$username = "root";
$password = "Admin";
$dbname = "terminoppgave_vg2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>



</body>
</html>



