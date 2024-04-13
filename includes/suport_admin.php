<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $answer = $_POST["answer"];
    $resoved = $_POST["resolved"];
    $ticketId = $_POST["ticket-id"];


    echo json_encode($_SESSION);


    try {
        require_once "dbh.inc.php";



        $query = "UPDATE proveeskame.tickets SET resolved=1, issue_answer=:issue_answer WHERE ticket_id=:ticket_id";



        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":issue_answer", $answer);
        $stmt->bindParam(":ticket_id", $ticketId);



        $stmt->execute();

        $pdo = null;
        $stmt = null;
        header("Location: ../support.php?ticket-id=$ticketId");
        die;
    } catch (PDOException $e) {
        die("query failed: " . $e->getMessage());
    }
} else {
    header("location:../index.php");
}


