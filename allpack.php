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

  

<!-- package -->
<div class="container-fluid">
  <br>
    <a name="pack"><h1>Packages</h1></a>
    <div class="row" id="package-container">
      <div class="col-lg-12">
        <table border="5px" bordercolor="#f2ede2" cellpadding="10">
              <thead>
              <tr>
                  <th>ID</th>
                  <th>Duration</th>
                  <th>Amount</th>
                  <th>Description</th>
                </tr>
              </thead>
              <tbody>
        <?php
          $db_host = 'localhost'; // Server Name
          $db_user = 'root'; // Username
          $db_pass = ''; // Password
          $db_name = 'gms'; // Database Name

          $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
          if (!$conn) {
            die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
          }

          $sql = 'SELECT * 
              FROM packages WHERE p_id<7 ';
              
          $query = mysqli_query($conn, $sql);

          if (!$query) {
            die ('SQL Error: ' . mysqli_error($conn));
          }
              while ($row = mysqli_fetch_array($query))
              {
                echo '
                <tr>
                    <td>'.$row['p_id'].'</td>
                    <td>'.$row['duration'].'</td>
                    <td>'.$row['amount'].'</td>
                    <td>'.$row['description'].'</td>
                </tr>';
              }
              
        ?>
        </tbody>
      </table>
      </div>
      <br>
      <div class="col-lg-6 button-padding">
            <button class="btn btn-dark" type="submit" data-toggle="modal" data-target="#new-pack"><i class="fas fa-plus-circle"></i> Add new Package</button>
            <button class="btn btn-dark" type="submit" data-toggle="modal" data-target="#del-pack"><i class="fas fa-minus-circle"></i> Delete Package</button>            
      </div>      
    </div>
    <br>
  </div>



<!-- new package modal -->
<div class="modal fade" id="new-pack" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color: #0c1c2f;">
      <div class="modal-header">
        <h5 class="modal-title">Package</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form name="new_package_form" method="POST" action="newpackform.php"> 
          
          <label><b>Package ID</b></label>
            <input type="text" placeholder="Enter ID" name="p_id" id="p_id" formid="new_package_form" required>
            <br>

          <label><b>Package name</b></label>
            <input type="text" placeholder="Enter ID" name="pname" id="pname" formid="new_package_form" required>
            <br>            
          <label><b>Duration</b></label>
            <input type="text" placeholder="Enter Duration" name="duration" id="duration" formid="new_package_form" required>
            <br>
            <label><b>Amount</b></label>
            <input type="text" placeholder="Enter Amount" name="amount" id="amount" formid="new_package_form" required>
            <br>
            <label><b>Description</b></label>
            <input type="text" placeholder="Enter Description" name="description" id="description" formid="new_package_form" required>
            <br>
            <button type="submit" name="submit" formid="new_package_form">Submit</button>

        </form>
      </div>
    </div>
  </div>
</div>

<!-- del package modal -->
<div class="modal fade" id="del-pack" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color: #0c1c2f;">
      <div class="modal-header">
        <h5 class="modal-title">Package</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form name="new_package_form" method="POST" action="newpackform.php"> 
          
          <label><b>Package ID</b></label>
            <input type="text" placeholder="Enter ID" name="p_id" id="p_id" formid="new_package_form" required>

            <button type="submit" name="submit1" formid="new_package_form">Submit</button>

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