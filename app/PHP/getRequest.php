<?php

header("Content-Type: application/json");

if (!isset($_POST['user']) || !isset($_POST['text'])) {
  echo json_encode("Send values not found");
  exit;
}

$name = $_POST["user"];
$text = $_POST["text"];

session_start();
$_SESSION['name'] = $name;
$_SESSION['text'] = $text;

if ($_SESSION['name'] === $name && $_SESSION['text'] === $text) {
  echo json_encode("Saved successfully");
  
  $mensage = array("name" => $name, "text" => $text);

  $_SESSION['messages'][] = $mensage;

} else {
  echo json_encode("Failed to save, please try again");
}

?>