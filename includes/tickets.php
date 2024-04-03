<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $issue = $_POST["tickets"];
    $user_id = $_SESSION['uid'];

    echo json_encode($_SESSION);


    try {
        require_once "dbh.inc.php";



        $query = "INSERT INTO proveeskame.tickets (issue, con_user_id, issue_answer, resolved) VALUES (:tickets, :con_user_id, null, 0)";


        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":tickets", $issue);
        $stmt->bindParam(":con_user_id", $user_id);


        $stmt->execute();

        $pdo = null;
        $stmt = null;
        header("Location: ../index.php");
        die;
    } catch (PDOException $e) {
        die("query failed: " . $e->getMessage());
    }
} else {
    header("location:../index.php");
}
