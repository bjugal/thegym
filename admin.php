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
      <a href="logout.php"><button type="button" class="btn btn-primary-outline" style="margin: 1% 1% 1% 90%;"><i class="fas fa-sign-out-alt"></i><span id="hidden-xs">  Sign Out</span></button></a>
    </div>

    <nav class="container-fluid navbar navbar-expand-lg sticky-top navbar-light" style="background-color: #e0cf95;">
    <a class="navbar-brand" href="#"><img id="brand-logo" src="images/logo.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a href="#mem" class="nav-item nav-link active" href="#">Members <span class="sr-only">(current)</span></a>
          <a href="#services" class="nav-item nav-link" href="#">Services</a>
          <a href="#equipment" class="nav-item nav-link" href="#">Equipment</a>
          <a href="#trainer" class="nav-item nav-link" id="f">Trainers</a>
          <a href="#pack" class="nav-item nav-link">Package</a>
          <a href="#offer" class="nav-item nav-link">Offers</a>
        </div>
      </div>
    </nav>


<!-- carousel -->
		<div id="slideshow" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#slideshow" data-slide-to="0" class="active"></li>
		    <li data-target="#slideshow" data-slide-to="1"></li>
		    <li data-target="#slideshow" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="https://images.unsplash.com/photo-1519505907962-0a6cb0167c73?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=596a977cbd0024e6855fce848c280c11&auto=format&fit=crop&w=1500&q=80" class="desktop_img">
		      <img src="https://images.unsplash.com/photo-1526679286854-9806b9f599e8?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=f13934a54d158824e8980568b2b84d4a&auto=format&fit=crop&w=334&q=80" class="mobile_img">

		    </div>
		    <div class="carousel-item">
		    	<img src="https://images.unsplash.com/photo-1534438097545-a2c22c57f2ad?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=d5af2c666d147efdc4e5b17045be8289&auto=format&fit=crop&w=1500&q=80" class="desktop_img">
		   		<img src="https://images.unsplash.com/photo-1528214170403-b744b8dc81c3?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=0a00cfbc305d3c85e1b487b315b55b98&auto=format&fit=crop&w=334&q=80" class="mobile_img">
		    </div>
		    <div class="carousel-item">
		    	<img src="https://images.unsplash.com/photo-1517343985841-f8b2d66e010b?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bbec2c50d24b3f8fcdf047af21f26b29&auto=format&fit=crop&w=1500&q=80" class="desktop_img">
				<img src="https://images.unsplash.com/photo-1511810119369-d499bbf2a325?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=575da372a42044cb2a6ecef8118ae877&auto=format&fit=crop&w=334&q=80" class="mobile_img">
		    </div>
		  </div>
		  
		  <a class="carousel-control-prev" href="#slideshow" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#slideshow" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>


<!-- members -->
  
  <div class="container-fluid">
    <a name="mem"><h1>Members</h1></a>
    <div class="row" id="account-container">
      <div class="col-lg-12">
      <table border="5px" bordercolor="#f2ede2" cellpadding="10">
              <thead>
              <tr>
                  <th>Username</th>
                  <th>Name</th>
                  <th>Gender</th>
                  <th>Contact</th>
                  <th>Email ID</th>
                  <th>Trainer</th>
                </tr>
              </thead>
              <tbody>
        <?php

          $sql = 'SELECT * 
              FROM member join schedule on username=m_username';
              
          $query = mysqli_query($conn, $sql);

          if (!$query) {
            die ('SQL Error: ' . mysqli_error($conn));
          }
              while ($row = mysqli_fetch_array($query))
              {
                echo '
                <tr>
                    <td>'.$row['username'].'</td>
                    <td>'.$row['fname'].'</td>
                    <td>'.$row['gender'].'</td>
                    <td>'.$row['contact'].'</td>
                    <td>'.$row['email'].'</td>
                    <td>'.$row['td_username'].'</td>
                </tr>';
              }
              
         ?>
        </tbody>
      </table>
      </div>
       <div class="col-lg-6 button-padding">
          <button class="btn btn-dark" type="submit" data-toggle="modal" data-target="#mem-trainer"><i class="fas fa-plus-circle"></i> Set Trainer</button> 
      </div>
    </div>
    <br>
  

<!-- services -->
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
              FROM activities WHERE a_id<7 ';
              
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
          <a href="allservices.php"><button class="btn btn-dark"> View All</button></a>
          <button class="btn btn-dark" type="submit" data-toggle="modal" data-target="#new-service"><i class="fas fa-plus-circle"></i> Add new Services</button>
          <button class="btn btn-dark" type="submit" data-toggle="modal" data-target="#del-service"><i class="fas fa-minus-circle"></i> Delete a service</button>
      </div>
		</div>
    <br>

<!-- equipment -->
		<a name="equipment"><h1>Equipment</h1></a>
		<div class="row" id="equipment-container">
      <div class="col-lg-12">
        <table border="5px" bordercolor="#f2ede2" cellpadding="10">
              <thead>
              <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Manual</th>
                </tr>
              </thead>
              <tbody>
        <?php
          $sql = 'SELECT * 
              FROM equipment WHERE eq_id<7 ';
              
          $query = mysqli_query($conn, $sql);

          if (!$query) {
            die ('SQL Error: ' . mysqli_error($conn));
          }
              while ($row = mysqli_fetch_array($query))
              {
                echo '
                <tr>
                    <td>'.$row['eq_id'].'</td>
                    <td>'.$row['name'].'</td>
                    <td>'.$row['description'].'</td>
                    <td>'.$row['manual'].'</td>
                </tr>';
              }
              
         ?>
        </tbody>
      </table>
      </div>
      <br>
      <div class="col-lg-6 button-padding">
            <a href="allequip.php"><button class="btn btn-dark"> View All</button></a>
            <button class="btn btn-dark" type="submit" data-toggle="modal" data-target="#new-equip"><i class="fas fa-plus-circle"></i> Add new Equipment</button>
          <button class="btn btn-dark" type="submit" data-toggle="modal" data-target="#del-equip"><i class="fas fa-minus-circle"></i> Delete Equipment</button>            
      </div>
		</div>
    <br>


<!-- trainers -->
    <a name="trainer"><h1>Trainers</h1></a>
    <div class="row" id="trainer-container">
      <div class="col-lg-12">
        <table border="5px" bordercolor="#f2ede2" cellpadding="10">
          <tr>
            <th>Username</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Salary</th>
            <th>Experience</th>
          </tr>
          <?php

          $sql = 'SELECT * 
              FROM td';
              
          $query = mysqli_query($conn, $sql);

          if (!$query) {
            die ('SQL Error: ' . mysqli_error($conn));
          }
              while ($row = mysqli_fetch_array($query))
              {
                echo '
                <tr>
                    <td>'.$row['username'].'</td>
                    <td>'.$row['fname'].'</td>
                    <td>'.$row['gender'].'</td>
                    <td>'.$row['contact'].'</td>
                    <td>'.$row['email'].'</td>
                    <td>'.$row['salary'].'</td>
                    <td>'.$row['experience'].'</td>
                </tr>';
              }
              
         ?> 
        </table>
      </div>
      <br>
      <div class="col-lg-6 button-padding">
            <a href="alltrainer.php"><button class="btn btn-dark"> View All</button></a>
            <button class="btn btn-dark" type="submit" data-toggle="modal" data-target="#new-trainer"><i class="fas fa-plus-circle"></i> Set Trainer Salary</button>
            <button class="btn btn-dark" type="submit" data-toggle="modal" data-target="#admin-trainer"><i class="fas fa-user-cog"></i> Appoint Admin</button>            
      </div>   
    </div>
    <br>

<!-- package -->
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
            <a href="allpack.php"><button class="btn btn-dark"> View All</button></a>
            <button class="btn btn-dark" type="submit" data-toggle="modal" data-target="#new-pack"><i class="fas fa-plus-circle"></i> Add new Package</button>
            <button class="btn btn-dark" type="submit" data-toggle="modal" data-target="#del-pack"><i class="fas fa-minus-circle"></i> Delete Package</button>            
      </div>      
    </div>
    <br>

<!-- offers -->

    <a name="offer"><h1>Offers</h1></a>
    <div class="row" id="offer-container">
      <div class="col-lg-12">
        <table border="5px" bordercolor="#f2ede2" cellpadding="10">
              <thead>
              <tr>
                  <th>ID</th>
                  <th>Name</th>
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
              FROM offer ';
              
          $query = mysqli_query($conn, $sql);

          if (!$query) {
            die ('SQL Error: ' . mysqli_error($conn));
          }
              while ($row = mysqli_fetch_array($query))
              {
                echo '
                <tr>
                    <td>'.$row['o_id'].'</td>
                    <td>'.$row['name'].'</td>
                    <td>'.$row['description'].'</td>
                </tr>';
              }
              
        ?>
        </tbody>
      </table>
      </div>
      <br>  
      <div class="col-lg-6 button-padding">
            <button class="btn btn-dark" type="submit" data-toggle="modal" data-target="#new-offer"><i class="fas fa-plus-circle"></i> Add new Offer</button>
             <button class="btn btn-dark" type="submit" data-toggle="modal" data-target="#del-offer"><i class="fas fa-minus-circle"></i> Delete Offer</button>
      </div>  
    </div>
    <br>


<!-- new trainer modal -->
<div class="modal fade" id="new-trainer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color: #0c1c2f;">
      <div class="modal-header">
        <h5 class="modal-title">Trainers</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form name="new_trainer_form" method="POST" action="newtrainerform.php"> 
          
          <label><b>Trainer Username</b></label>
            <input type="text" placeholder="Enter username" name="uname" id="uname" formid="new_trainer_form" required>
            <br>
          <label><b>New Salary</b></label>
            <input type="text" placeholder="Enter Salary" name="salary" id="salary" formid="new_trainer_form" required>
            <br>
           
            <button type="submit" name="submit" formid="new_service_form">Submit</button>

        </form>
      </div>
    </div>
  </div>
</div>

<!-- mem trainer modal -->
<div class="modal fade" id="mem-trainer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color: #0c1c2f;">
      <div class="modal-header">
        <h5 class="modal-title">Trainers</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form name="new_trainer_form" method="POST" action="memtrainer.php"> 
          
          <label><b>Member Username</b></label>
            <input type="text" placeholder="Enter member username" name="m_username" id="m_username" formid="new_trainer_form" required>
            <br>
          <label><b>Trainer Username</b></label>
            <input type="text" placeholder="Enter trainer username" name="td_username" id="td_username" formid="new_trainer_form" required>
            <br>
           
            <button type="submit" name="submit" formid="new_service_form">Submit</button>

        </form>
      </div>
    </div>
  </div>
</div>

<!-- admin trainer modal -->
<div class="modal fade" id="admin-trainer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color: #0c1c2f;">
      <div class="modal-header">
        <h5 class="modal-title">Trainers</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form name="new_trainer_form" method="POST" action="newtrainerform.php"> 
          
          <label><b>Trainer Username</b></label>
            <input type="text" placeholder="Enter username" name="uname" id="uname" formid="new_trainer_form" required>
            <br>
          
            <button type="submit" name="submit1" formid="new_service_form">Submit</button>

        </form>
      </div>
    </div>
  </div>
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


<!-- new package modal -->
<div class="modal fade" id="new-pack" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color: #0c1c2f;color: white;">
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


<!-- new equipment modal -->
<div class="modal fade" id="new-equip" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color: #0c1c2f;">
      <div class="modal-header">
        <h5 class="card-title">Equipment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form name="new_equipment_form" method="POST" action="newequipform.php"> 
            
            <label><b>Equipment ID</b></label>
              <input type="text" placeholder="Enter ID" name="eq_id" id="eq_id" formid="new_equipment_form" required>
              <br>
            <label><b>Name</b></label>
              <input type="text" placeholder="Enter Name" name="name" id="name" formid="new_equipment_form" required>
              <br>
              <label><b>Description</b></label>
              <input type="text" placeholder="Enter Description" name="description" id="description" formid="new_equipment_form" required>
              <br>
              <label><b>Manual</b></label>
              <input type="text" placeholder="Line 1" name="manual" id="manual" formid="new_equipment_form" required>
              <br>
              <button type="submit" name="submit" formid="new_equipment_form">Submit</button>

          </form>
    </div>
  </div>
</div>
</div>


<!-- del equipment modal -->
<div class="modal fade" id="del-equip" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color: #0c1c2f;">
      <div class="modal-header">
        <h5 class="card-title">Equipment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form name="new_equipment_form" method="POST" action="newequipform.php"> 
            
            <label><b>Equipment ID</b></label>
              <input type="text" placeholder="Enter ID" name="eq_id" id="eq_id" formid="new_equipment_form" required>

              <button type="submit" name="submit1" formid="new_equipment_form">Submit</button>

          </form>
    </div>
  </div>
</div>
</div>

<!-- new offer modal -->

<div class="modal fade" id="new-offer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color: #0c1c2f;">
      <div class="modal-header">
        <h5 class="modal-title">Offer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form name="new_offer_form" method="POST" action="newofferform.php"> 
          
          <label><b>Offer ID</b></label>
            <input type="text" placeholder="Enter ID" name="o_id" id="o_id" formid="new_offer_form" required>
            <br>
          <label><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" id="name" formid="new_offer_form" required>
            <br>
          <label><b>Description</b></label>
            <input type="text" placeholder="Enter Description" name="description" id="description" formid="new_offer_form" required>
            <br>
            <button type="submit" name="submit" formid="new_offer_form">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="del-offer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color: #0c1c2f;">
      <div class="modal-header">
        <h5 class="modal-title">Offer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form name="new_offer_form" method="POST" action="newofferform.php"> 
          
          <label><b>Offer ID</b></label>
            <input type="text" placeholder="Enter ID" name="o_id" id="o_id" formid="new_offer_form" required>

            <br>
            <button type="submit" name="submit1" formid="new_offer_form">Submit</button>
        </form>
      </div>
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