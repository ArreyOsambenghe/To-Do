<?php
$conn = new mysqli("localhost", "u393272023_5Puhya", "@ssignment4God", "u393272023_5Puhya");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = intval($_GET["id"]);
$conn->query("UPDATE tasks SET completed = !completed WHERE id = $id");

$conn->close();
?>
