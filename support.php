<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/css/style.css">
    <meta charset="UTF-8">
    <title>Svcar på Ticket</title>
</head>
<body>

<?php
require_once 'includes/sesh_chek.inc.php';
require_once 'includes/admin_chek.inc.php';

$ticketId = null;
if (isset($_GET["ticket-id"]))
    $ticketId = intval($_GET["ticket-id"]);

?>

<header>
    <a href="index.php">
        <img id="logo"  src="07052021-03_generated.jpg" alt="Fjell Bedriftsløsninger"  >
    </a>
</header>
<h3>Svar på Ticket</h3>

<form action="./support.php" method="get">
    <input type="number" name="ticket-id" placeholder="Ticket id" <?php echo !is_null($ticketId) ? "value='$ticketId'" : ""  ?>>
    <button type="submit">Search</button>
</form>

<?php
if (!is_null($ticketId)) {

// include database connection
require_once "includes/dbh.inc.php";

function GetTicketById($pdo, $ticketId) {
    $query = "SELECT * FROM tickets WHERE ticket_id = :ticket_id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":ticket_id", $ticketId, PDO::PARAM_INT);
    $stmt->execute();

    // Fetch ticket details
    $ticket = $stmt->fetch(PDO::FETCH_ASSOC);

    return $ticket;
}

// Check if ticket ID is set
if (!is_null($ticketId)) {
    // Get ticket details
    $ticket = GetTicketById($pdo, $ticketId);

    // Display ticket details
    if ($ticket) {

        echo "<h4>Ticket Details:</h4>";
        echo "<p>Ticket ID: " . $ticket['ticket_id'] . "</p>";
        echo "<p>Issue: " . $ticket['issue'] . "</p>";
        echo "<p>Resolved: " . ($ticket['resolved'] ? 'Yes' : 'No') . "</p>";
        echo "<p>Issue Answer: " . ($ticket['issue_answer'] ? $ticket['issue_answer'] : 'Not answered yet') . "</p>";

    } else {
        echo "<p>No ticket found with ID: $ticketId</p>";

    }
}
?>





<form action="includes/suport_admin.php" method="post">
    <input type="hidden" name="ticket-id" required value="<?php echo $ticketId ?>">

    <input id="inputflet" type="text" name="answer" placeholder="Skriv inn løsningen" >
    <button type="submit">Send inn</button>
</form>
<?php
}
?>
</body>
</html>
