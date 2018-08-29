</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>OrgChart</title>
  <link rel="stylesheet" href="main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />   -->

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

  <link rel="main" href="main.css" type="text/css">
  <div class="body-content">
    <div class="module">
      <h1>Enter Employee details
      </h1>
      <form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
        <div class="alert alert-error"></div>
        <input type="text" placeholder="Employee Name" name="emp_name" required />
        <input type="text" placeholder="Employee Designation" name="emp_designation" required />
        <input type="text" placeholder="Reporting Manager" name="report_manager" id="report_manager" class="container form-control input-lg" autocomplete="off" required />
        <div id="managerList" class="form-control input-lg"> </div>
        <input type="submit" value="Submit" name="submit" class="btn" />
      </form>
    </div>
  </div>



</body>

</html>


<script>  


// $(document).ready(function(){
 
//  $('#report_manager').typeahead({
//   source: function(query, result)
//   {
//    $.ajax({
//     url:"find.php",
//     method:"POST",
//     data:{query:query},
//     dataType:"json",
//     success:function(data)
//     {
//      result($.map(data, function(item){
//       return item;
//      }));
//     }
//    })
//   }
//  });
 
// });


$(document).ready(function(){  
  $('#report_manager').keyup(function(){  
        var query = $(this).val();  
        if(query != '')  
        {  
            $.ajax({
                  url:"find.php",  
                  method:"POST",  
                  data:{query:query},  
                  success:function(data)  
                  {  
                      $('#managerList').fadeIn();  
                      $('#managerList').html(data);  
                  }
            });  
        }
  });  
  $(document).on('click', 'li', function(){  
        $('#report_manager').val($(this).text());  
        $('#managerList').fadeOut();  
  });  
});  
</script>