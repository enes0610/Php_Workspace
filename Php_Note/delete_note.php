<?php
session_start();
require 'db.php';
if(!isset($_SESSION['user'])){ header("Location: login.php"); exit; }

$id = $_GET['id'];
$conn->query("DELETE FROM notes WHERE id=$id");
header("Location: index.php");
exit;
?>