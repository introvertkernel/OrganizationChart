<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OrgChart</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />  
</head>
 <body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <a class="navbar-brand text-center" href="index.php">OrgChart</a>
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
        <div class="row row-full">
            <div class="col-sm-6 col-md-6 ml-auto mr-auto mt-5 pr-1 pl-1">
                <div class="leftside">
                    <button type="button" class="btn btn-primary btn-lg btn-block btn-justified mt-3" disabled>Form</button>

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