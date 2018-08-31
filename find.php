<?php

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
      $output .= '</ul>';  
      echo $output; 
 }  
 else {
    header("location:server.php");
 }
 ?>