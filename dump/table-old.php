<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tableview|OrgChart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<header>
    <div id="navbar">
      <h1>OrgChart</h1>
      <nav>
        <ul>
          <li><a href="index.php">Form</a></li>
          <li><a href="view.php">View</a></li>
        </ul>
      </nav>

    </div>
  </header>
  <div class="body-content module">
            
        <?php
        $connection = mysqli_connect('localhost','root','','EmpData'); //The Blank string is the password
        // mysql_select_db('hrmwaitrose');

        $query = "SELECT * FROM Employee"; //You don't need a ; like you do in SQL
        $result = mysqli_query($connection, $query);

        echo "<table border='1'>
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
</body>
</html>