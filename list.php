<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Listview|OrgChart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<!-- <header>
    <div id="navbar">
      <h1>OrgChart</h1>
      <nav>
        <ul>
          <li><a href="index.php">Form</a></li>
          <li><a href="view.php">View</a></li>
        </ul>
      </nav>

    </div>
  </header> -->
  <div class="body-content module">
  <?php
$con=mysqli_connect("localhost","root","","EmpData");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$query = mysqli_query($con,"SELECT * FROM Employees"); // Run your query

echo '<select name="Employee">'; // Open your drop down box

// Loop through the query results, outputing the options one by one
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
   echo '<option value="'.$row['something'].'">'.$row['something'].'</option>';
}

echo '</select>';

mysqli_close($con);
?>

</div>
</body>
</html>