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

    <div class="container justify-content-center ml-auto mr-auto mt-5">
        <div class="jumbotron border border-danger">
            <h2 class="text-center">ERROR</h2>
            <p class="text-center">Something went wrong. It seems you have entered Invalid Data</p>
            <p class="text-center">Data not Sent</p>
            <div class="row">
                <div class="ml-auto mr-auto">
                    <a class="btn btn-outline-danger" href="index.php">Go to Home</a>
                </div>
            <div>
        </div>
    </div>
    
    </body>
</html>