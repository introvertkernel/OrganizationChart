<?php

//fetch.php
// $connect = mysqli_connect("localhost", "root", "", "EmpData");
// $request = mysqli_real_escape_string($connect, $_POST["query"]);
// $query = "
//  SELECT * FROM Employee WHERE emp_name LIKE '%".$request."%'
// ";

// $result = mysqli_query($connect, $query);

// $data = array();

// if(mysqli_num_rows($result) > 0)
// {
//  while($row = mysqli_fetch_assoc($result))
//  {
//   $data[] = $row["emp_name"];
//  }
//  echo json_encode($data);
// }

 $connect = mysqli_connect('localhost','root','','EmpData');
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM Employee WHERE emp_name LIKE '%".$_POST["query"]."%'";  
      $result = mysqli_query($connect, $query);  
      $output = '<ul class="list-unstyled input-lg">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<li>'.$row["emp_name"].'</li>';  
           }  
      }  
    //   else  
    //   {  
    //        $output .= '<li>Manager Name Not Found</li>';  
    //   }  
      $output .= '</ul>';  
      echo $output; 
    //   $connect->close(); 
 }  
 ?>  