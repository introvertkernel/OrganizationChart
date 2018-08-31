<!DOCTYPE html>
<html>
 <head>
  <title>OrgChart</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.js"></script>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.css" />
  
  <style>
  </style>
 </head>
 <body>


<nav class="navbar navbar-inverse pt-5 pb-5" id="navid">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">OrgChart</a>
    </div>
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="view.php">View</a></li>
      </ul>
  </div>
</nav>

  <br /><br />
  <div class="container" style="width:300px;">
   <h2 align="center">ListView</h2>
   <br /><br />
   <div id="treeview"></div>
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

<style>
  .navbar { 
    padding:10px;
    background-color:#212529;!important
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;

  }
</style>