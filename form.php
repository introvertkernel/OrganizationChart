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

    $sql = "INSERT INTO Employee (emp_name,emp_designation,report_manager_id) VALUES('$emp_name','$emp_designation','$report_manager')";
  if ($connect->query($sql)) {
    # code...
    header("location:index.php");
  }
  else {
    echo "error";
  }

   
  $connect->close();
}
// if ($_SERVER['REQUEST_METHOD'] == 'POST'){
//     $emp_name = $mysqli->real_escape_string($_POST['emp_name']);
//     $emp_designation = $mysqli->real_escape_string($_POST['emp_designation']);
//     $report_manager = $mysqli->real_escape_string($_POST['report_manager']);

//     $sql = "INSERT INTO Employee (emp_name,emp_designation,report_manager_id) VALUES('$emp_name','$emp_designation','$report_manager')";

//     //if success  goto home 
//     if($mysqli->query($sql) === true){
//       $_SESSION['message'] = 'successfully entered';
//       header("location : index.php");
//     }
//     else {
//       $_SESSION['message'] = 'error';
//     }
// }
?>