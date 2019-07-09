<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet">
  <?php
  require 'server.php';
  ?>
	</head>
<body>

<!-- navbar -->
  <div class="container-fluid" style="background-color: #f6e3a3;">
      <a href="logout.php"><button type="button" class="btn btn-primary-outline" style="margin: 1% 1% 1% 70%;"><i class="fas fa-sign-out-alt"></i><span id="hidden-xs">  Sign Out</span></button></a>
      <a href="admin.php"><button type="button" class="btn btn-primary-outline"><i class="fas fa-user-cog"></i><span id="hidden-xs"> Back to Admin page</span></button></a>
    </div>


<!-- services -->
<div class="container-fluid">
  <br>
	<a name="services"><h1>Services</h1></a>
		<div class="row" id="services-container">
      <div class="col-lg-12">
        <table border="5px" bordercolor="#f2ede2" cellpadding="10">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
          </tr>

         <?php

          $sql = 'SELECT * 
              FROM activities ';
              
          $query = mysqli_query($conn, $sql);

          if (!$query) {
            die ('SQL Error: ' . mysqli_error($conn));
          }
              while ($row = mysqli_fetch_array($query))
              {
                echo '
                <tr>
                    <td>'.$row['a_id'].'</td>
                    <td>'.$row['name'].'</td>
                    <td>'.$row['content'].'</td>
                </tr>';
              }
              
         ?> 
        </table>
      </div>
      <div class="col-lg-6 button-padding">
          <button class="btn btn-dark" type="submit" data-toggle="modal" data-target="#new-service"><i class="fas fa-plus-circle"></i> Add new Services</button>
          <button class="btn btn-dark" type="submit" data-toggle="modal" data-target="#del-service"><i class="fas fa-minus-circle"></i> Delete a service</button>
      </div>
		</div>
    <br>
  </div>



<!-- new service modal -->
<div class="modal fade" id="new-service" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color: #0c1c2f;">
      <div class="modal-header">
        <h5 class="modal-title">Services</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form name="new_service_form" method="POST" action="newserviceform.php"> 
          
          <label><b>Service ID</b></label>
            <input type="text" placeholder="Enter ID" name="a_id" id="a_id" formid="new_service_form" required>
            <br>
          <label><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="a_name" id="a_name" formid="new_service_form" required>
            <br>
            <label><b>Description</b></label>
            <br>
            <textarea placeholder="Enter Description" name="a_content" id="a_content" formid="new_service_form" required></textarea>
            <br>
           
            <button type="submit" name="submit" formid="new_service_form">Submit</button>

        </form>
      </div>
    </div>
  </div>
</div>

<!-- del service -->
<div class="modal fade" id="del-service" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color: #0c1c2f;">
      <div class="modal-header">
        <h5 class="modal-title">Services</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form name="new_service_form" method="POST" action="newserviceform.php"> 
          
          <label><b>Service ID</b></label>
            <input type="text" placeholder="Enter ID" name="a_id" id="a_id" formid="new_service_form" required>
            
            <button type="submit" name="submit1" formid="new_service_form">Submit</button>

        </form>
      </div>
    </div>
  </div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
</body>
</html>