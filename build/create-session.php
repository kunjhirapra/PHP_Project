<?php
session_start();

if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
}
if (!isset($_SESSION['email'])) {
  header("Location: login.php");
  exit();
}
