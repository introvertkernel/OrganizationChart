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
        <a href="index.php" class="navbar-brand text-center">OrgChart</a>
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
                        <a href="view.php" class="nav-link">View</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
       
    <div class="container-fluid h-100">
        <!-- <div class="w-100"></div>  comments -->
        <div class="row row-full">
            <div class="col-sm-6 col-md-6 pull-right mt-5 border border-secondary rounded pr-1 pl-1">
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
                                    <input class="form-control" type="text" placeholder="Employee Name" name="emp_name" required />
                                    
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Employee Designation" name="emp_designation" required />
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Reporting Manager" name="report_manager" id="report_manager" autocomplete="off" required />
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
                                    <input class="form-control btn-light" type="submit" value="Submit" name="submit" class="btn" />
                                </div>
                            </div>
                        </div>    
                    </form>
                </div>
            </div>
            
            <div class="col-sm-6 col-md-6 pull-right mt-5 border border-secondary rounded pl-1 pr-1">
                    <div class="">
                        <!-- <br> -->
                        <!-- <h2 class="text-center text-primary offset-2 mt-5 mb-5"></h2> -->
                        <button type="button" class="btn btn-primary btn-lg btn-block btn-justified mt-3 mb-5" disabled>View</button>
                        <!-- <div class="container">
                                <a class="btn btn-primary" href="table.php" role="button">Link</a>
                                <a class="btn btn-primary" href="list.php" role="button">Link</a>
                        </div> -->
                        <!-- <br><br> -->
                        <div class="justify-content-center">
                            <a class="btn btn-light btn-lg mb-1 mt-2 btn-block btn-justified" href="table.php" role="button">TableView</a>
                            <br>
                            <a class="btn btn-light btn-lg mt-1 btn-block btn-justified" href="list.php" role="button">ListView</a>

                        </div>

                    </div>
          
            </div>
        </div>
    
    </div>
</body>

</html>

<script>
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