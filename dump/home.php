<?php
  include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ajax Update</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<br/>
<br/>
<br/>
<br/>
  <h2>Tableview</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Emp ID</th>
        <th>Name</th>
        <th>Designation</th>
        <th>Reporting Manager</th>
        <!-- <th>Action</th> -->
      </tr>
    </thead>
    <tbody>
      <?php
          $table  = mysqli_query($connection ,'SELECT * FROM Employee');
          while($row  = mysqli_fetch_array($table)){ ?>
              <tr id="<?php echo $row['emp_id'];?>">
                <td data-target="emp_id"><?php echo $row['emp_id']; ?></td>
                <td data-target="emp_name"><?php echo $row['emp_name']; ?></td>
                <td data-target="emp_designation"><?php echo $row['emp_designation']; ?></td>
                <td data-target="report_manager_id"><?php echo $row['report_manager_id']; ?></td>
                <!-- <td><a href="#" data-role="update" data-id="<?php echo $row['emp_id'] ;?>">Update</a></td> -->
              </tr>
         <?php }
       ?>
       
    </tbody>
  </table>

  
</div>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Update</h4>
          </div>
          <div class="modal-body">
              <div class="form-group">
                <label>Name</label>
                <input type="text" id="emp_name" class="form-control">
              </div>
              <div class="form-group">
                <label>Designation</label>
                <input type="text" id="emp_designation" class="form-control">
              </div>

               <div class="form-group">
                <label>Reporting Manager</label>
                <input type="text" id="emp_designation" class="form-control">
              </div>
                <input type="hidden" id="report_manager_id" class="form-control">


          </div>
          <div class="modal-footer">
            <a href="#" id="save" class="btn btn-primary pull-right">Update</a>
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>

</body>

<script>
  $(document).ready(function(){

    //  append values in input fields
      $(document).on('click','a[data-role=update]',function(){
            var emp_id  = $(this).data('emp_id');
            var emp_name  = $('#'+emp_id).children('td[data-target=emp_name]').text();
            var emp_designation  = $('#'+emp_id).children('td[data-target=emp_designation]').text();
            var report_manager_id  = $('#'+emp_id).children('td[data-target=report_manager_id]').text();

            alert("empID  "+emp_id+"  "+"empname  "+emp_name+"  "+"empdesig  "+emp_designation);

            //$('#emp_id').val(emp_id);
            $('#emp_name').val(emp_name);
            $('#emp_designation').val(emp_designation);
            $('#report_manager_id').val(report_manager_id);
            $('#myModal').modal('toggle');
      });

      // now create event to get data from fields and update in database 

       $('#save').click(function(){
          var emp_id  = $('#emp_id').val(); 
         var emp_name =  $('#emp_name').val();
          var emp_designation =  $('#emp_designation').val();
          var report_manager_id =   $('#report_manager_id').val();

          $.ajax({
              url      : 'connection.php',
              method   : 'post', 
              data     : {emp_id : emp_id , emp_name: emp_name , emp_designation : emp_designation , report_manager_id: report_manager_id},
              success  : function(response){
                            // now update user record in table 
                             $('#'+emp_id).children('td[data-target=emp_name]').text(emp_name);
                             $('#'+emp_id).children('td[data-target=emp_designation]').text(emp_designation);
                             $('#'+emp_id).children('td[data-target=report_manager_id]').text(report_manager_id);
                             $('#myModal').modal('toggle'); 

                         }
          });
       });
  });
</script>
</html>
