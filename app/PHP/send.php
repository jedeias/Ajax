<?php

header("Content-Type: application/json");
session_start();

$messages = $_SESSION['messages'] ?? array();

echo json_encode($messages);

?>
