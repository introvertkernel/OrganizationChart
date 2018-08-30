<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Listview|OrgChart</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="css/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>    
  <!-- <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.js"></script> -->
  <script type="text/javascript" src="js/jquery.jOrgChart.js"></script>
  <script type="text/javascript" src="js/bootstrap-treeview.min.js"></script>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.css" /> -->
  
</head>
<body>
<header>
    <div id="navbar">
      <h1 style: color = "white">OrgChart</h1>
      <nav>
        <ul>
          <li><a href="index.php">Form</a></li>
          <li><a href="view.php">View</a></li>
        </ul>
      </nav>

    </div>
  </header>
  <div class="body-content module">
  <br /><br />
  <div class="container" style="width:500px;">
   <h2 align="center">Listview</h2>
   <br /><br />
   <div id="treeview"></div>
  </div>

</div>
</body>
</html>

<script>
$(document).ready(function(){
 $.ajax({ 
   url: "fetch.php",
   method:"POST",
   dataType: "json",       
   success: function(data)  
   {
  $('#treeview').treeview({data: data});
   }   
 });
 
});
</script>