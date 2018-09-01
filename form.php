<?php
session_start();
$_SESSION['message'] = '';
$connect = mysqli_connect('localhost','root','','EmpData');

if(mysqli_connect_error()){
  die('Connect error ('.mysqli_connect_errorno() .')'.mysqli_connect_error());
}
else {
    $emp_name = $connect->real_escape_string($_POST['emp_name']);
    $emp_designation = $connect->real_escape_string($_POST['emp_designation']);
    $report_manager = $connect->real_escape_string($_POST['report_manager']);
    
    $check = "SELECT * FROM Employee WHERE emp_name = '".$report_manager."'";
    $check2 = "SELECT emp_id FROM Employee";
    
    $result = mysqli_query($connect, $check);
    $result2 = mysqli_query($connect, $check2);
    $row = mysqli_fetch_array($result2, MYSQLI_ASSOC);
    if(mysqli_num_rows($result) > 0)  
      { 
        $sql = "INSERT INTO Employee (emp_name,emp_designation,report_manager_id) VALUES('$emp_name','$emp_designation','$report_manager')";

        if ($connect->query($sql)) {
            header("location:success.php");
          }
          else {
            header("location:server.php");
          }
        }
     elseif (!$row) {
      # code...
      $sql = "INSERT INTO Employee (emp_name,emp_designation,report_manager_id) VALUES('$emp_name','$emp_designation','$report_manager')";

        if ($connect->query($sql)) {
            header("location:success.php");
          }
          else {
            header("location:server.php");
          }
    }
    
    else {
        header("location:error.php");
    }
}
?>