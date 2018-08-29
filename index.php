<?php
session_start();
$_SESSION['message'] = '';
$mysqli = new mysqli('localhost','','','EmpData');
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $emp_name = $mysqli->real_escape_string($_POST['emp_name']);
    $emp_designation = $mysqli->real_escape_string($_POST['emp_designation'])
    $report_manager = $mysqli->real_escape_string($_POST['report_manager'])
}
?>