<?php
session_start();
$_SESSION['message'] = '';
$mysqli = new mysqli('localhost','','','EmpData');
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $mysqli->real_escape_string($_POST[])
}
?>