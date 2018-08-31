<!DOCTYPE html>
<html>
 <head>
 <title>OrgChart</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />  
 </head>
 <body>

  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a href="index.php" class="navbar-brand text-center">OrgChart</a>
        <!-- <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button> -->
        
        <!-- <div class="collapse navbar-collapse " id="navbarMenu"> -->
            <div class="navbar justify-content-end">
                <ul class="nav navbar-nav justify-content-end">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="view.php" class="nav-link">View</a>
                    </li>
                </ul>
            </div>
        <!-- </div> -->
    </nav>

    <div class="container-fluid h-100">
        <!-- <div class="w-100"></div>  comments -->
        <div class="row row-full">
            <div class="col-sm-6 col-md-6 ml-auto mr-auto mt-5 pr-1 pl-1">
                <div class="leftside">
                    <!-- <h2 class="text-center text-primary mt-5 "><button type="button" class="btn btn-primary btn-lg btn-justified" disabled>Form</button></h2> -->
                    <button type="button" class="btn btn-primary btn-lg btn-block btn-justified mt-3" disabled>Form</button>
                    <!-- <br>
                    <h4 class="offset-2">Enter Employee details -->
                    <!-- </h4> -->
                    <!-- <form class="form-group main-form needs-validation" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
                        <div class="alert alert-error"></div>
                        <input type="text" placeholder="Employee Name" name="emp_name" required />
                        <input type="text" placeholder="Employee Designation" name="emp_designation" required />
                        <input type="text" placeholder="Reporting Manager" name="report_manager" id="report_manager" class="container form-control input-lg" autocomplete="off" required />
                        <div id="managerList" class="form-control input-lg"> </div>
                        <input type="submit" value="Submit" name="submit" class="btn" /> -->

                    <form class="main-form text-center" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
                        <div class="row justify-content-center text-center alert alert-error       ">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <div class="alert alert-error"></div>
                                    <input class="form-control" type="text" placeholder="Enter Employee Name" name="emp_name" required />
                                    
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Enter Employee Designation" name="emp_designation" required />
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Select Reporting Manager from Suggestions" name="report_manager" id="report_manager" autocomplete="off" required />
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <div id="managerList" clas="form-control input-lg"> </div>
                                    <br>
                                </div>
                            </div>
                            <div class="col-sm-8 leftside">
                                <div class="form-group">
                                    <input class="form-control btn-light border border-secondary rounded" type="submit" value="Submit" name="submit" class="btn" />
                                </div>
                            </div>
                        </div>    
                    </form>
                </div>
            </div>
            
            
        </div>
    
    </div>

    </body>
</html>

<script>
$(document).ready(function(){
 
 $('#report_manager').typeahead({
  source: function(query, result)
  {
   $.ajax({
    url:"get.php",
    method:"POST",
    data:{query:query},
    dataType:"json",
    success:function(data)
    {
     result($.map(data, function(item){
      return item;
     }));
    }
   })
  }
 });
 
});
</script>