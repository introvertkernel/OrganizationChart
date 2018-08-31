<?php
$connection =	mysqli_connect('localhost' , 'root' ,'' ,'EmpData');


if(isset($_POST['emp_id'])){
	
	// $emp_id = $_POST['emp_id'];
	$emp_name = $_POST['emp_name'];
	$emp_designation = $_POST['emp_designation'];
	$report_manager_id = $_POST['report_manager_id'];

	//  query to update data 
	 
	$result  = mysqli_query($connection , "UPDATE Employee SET emp_name='$emp_name' , emp_designation='$emp_designation' , report_manager_id = '$report_manager_id' WHERE emp_id='$emp_id'");
	if($result){
		echo 'data updated';
	}

}
?>