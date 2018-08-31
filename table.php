<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OrgChart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/main.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a href="#" class="navbar-brand text-center">OrgChart</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse " id="navbarMenu">
            <div class="navbar justify-content-end">
                <ul class="nav navbar-nav justify-content-end">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="vie.php" class="nav-link">View</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--  -->
        <div class="container">
            <div class= "table justify-content-center mt-5">
                    
                    <?php
                    $connection = mysqli_connect('localhost','root','','EmpData'); //The Blank string is the password
                    // mysql_select_db('hrmwaitrose');
            
                    $query = "SELECT * FROM Employee"; //You don't need a ; like you do in SQL
                    $result = mysqli_query($connection, $query);
            
                    echo "<table class='table'>
                            <tr>
                            <th>Emp ID</th>
                            <th>Emp Name</th>
                            <th>Designation</th>
                            <th>Reporting Manager</th>
                            </tr>"; // start a table tag in the HTML
            
                    while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
                    echo "<tr><td>" . $row['emp_id'] . "</td><td>" . $row['emp_name'] . "</td><td>" . $row['emp_designation'] . "</td><td>" . $row['report_manager_id'] . "</td>    </tr>";  //$row['index'] the index here is a field name
                    }
            
                    echo "</table>"; //Close the table in HTML
            
                    $connection->close();
                    ?>
                </div>
            </div>

</body>

</html>