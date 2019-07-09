<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<link rel="stylesheet" type="text/css" href="member.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet">
  <?php
  include 'checklogin.php';
  include 'server.php';
  //session_start();
  ?>
  <style> .scroll { overflow-y: scroll; height: 150px; padding: 1rem width:100%; } </style>
	</head>
<body>

<!-- navbar -->
  <div class="container-fluid" style="background-color: #f6e3a3;">
      <a href="attendance.php"><button type="button" class="btn btn-primary-outline" style="margin: 1% 1% 1% 70%;"><i class="fas fa-plus-circle"></i><span id="hidden-xs"> Mark attendance</span></button></a>
      <a href="logout.php"><button type="button" class="btn btn-primary-outline"><i class="fas fa-sign-out-alt"></i><span id="hidden-xs">  Sign Out</span></button></a>
    </div>

    <nav class="container-fluid navbar navbar-expand-lg sticky-top navbar-light" style="background-color: #e0cf95;">
    <a class="navbar-brand" href="#"><img id="brand-logo" src="images/logo.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a href="#account" class="nav-item nav-link active" href="#">Account <span class="sr-only">(current)</span></a>
          <a href="#schedule" class="nav-item nav-link" href="#">Schedule</a>
          <a href="#forum" class="nav-item nav-link" href="#">Forum</a>          
          <a href="#feedback" class="nav-item nav-link" id="f">Feedback</a>
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
		      <img src="https://images.unsplash.com/photo-1520948013839-62020f374478?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=cf7dd5ab82adc721ca926155713728fa&auto=format&fit=crop&w=1500&q=80" class="desktop_img">
		      <img src="https://images.unsplash.com/photo-1526679286854-9806b9f599e8?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=f13934a54d158824e8980568b2b84d4a&auto=format&fit=crop&w=334&q=80" class="mobile_img">

		    </div>
		    <div class="carousel-item">
		    	<img src="https://images.unsplash.com/photo-1528304270437-714a2d6fbb6b?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=7eb9f993ab251c5b98f84e2c5fbe5491&auto=format&fit=crop&w=1500&q=80" class="desktop_img">
		   		<img src="https://images.unsplash.com/photo-1528214170403-b744b8dc81c3?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=0a00cfbc305d3c85e1b487b315b55b98&auto=format&fit=crop&w=334&q=80" class="mobile_img">
		    </div>
		    <div class="carousel-item">
		    	<img src="https://images.unsplash.com/photo-1537098551290-9c3c9c4d4d33?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=b93168bc080319a32b9b7faf32d2e92d&auto=format&fit=crop&w=1504&q=80" class="desktop_img">
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


<!-- account -->
 <div class="container-fluid">
  <a name="account"><h1>Account</h1></a>
  <div class="container-fluid">
    <div class="row" id="account-container">
        <div class="col-lg-10" id="package-details">
          <h2>Package details:</h2>
          <div>
  
            <div class="row" id="package-container">
              <div class="col-lg-12">
                <table border="5px" bordercolor="#f2ede2" cellpadding="10">
                      <thead>
                      <tr>
                          <th>Name</th>
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
                      FROM packages WHERE p_id in(SELECT p_id FROM member_pack where username="'. mysqli_real_escape_string($conn, $_SESSION['username'] ) .'")';
                      
                  $query = mysqli_query($conn, $sql);

                  if (!$query) {
                    die ('SQL Error: ' . mysqli_error($conn));
                  }
                      while ($row = mysqli_fetch_array($query))
                      {
                        echo '
                        <tr>
                            <td>'.$row['pname'].'</td>
                            <td>'.$row['duration'].'</td>
                            <td>'.$row['amount'].'</td>
                            <td>'.$row['description'].'</td>
                        </tr>';
                      }
                      
                ?>
                </tbody>
              </table>
              </div>
          </div>
        </div>
        <br>
        <div class="col-lg-6 button-padding">
          <button type="submit" class="btn btn-dark" id="edit_button" data-toggle="modal" data-target="#renew"><i class="fas fa-plus-circle"></i> Renew</button>
        </div>
        <br>
        <div class="col-lg-6 button-padding">
          <button type="submit" class="btn btn-dark" id="edit_button" data-toggle="modal" data-target="#edit-details"><i class="fas fa-plus-circle"></i> Edit Details</button>
        </div>
        <br>
        <div class="col-lg-6 button-padding">
          <button type="submit" class="btn btn-dark" id="edit_pass_button" data-toggle="modal" data-target="#edit-password"><i class="fas fa-plus-circle"></i> Change password</button>
        </div>
        <br>

    </div>

<!-- schedule -->
<div class="container-fluid">
<a name="schedule"><h1>Schedule</h1></a>
<div class="container-fluid" >
<form method="post">     
      <button class="btn" style="width:14%;" type="submit" name="submit" value="monday">Monday</button>
      <button class="btn" style="width:14%;" type="submit" name="submit" value="tuesday">Tuesday</button>
      <button class="btn" style="width:14%;" type="submit" name="submit" value="wednesday">Wednesday</button>
      <button class="btn" style="width:14%;" type="submit" name="submit" value="thursday">Thursday</button>
      <button class="btn" style="width:14%;" type="submit" name="submit" value="friday">Friday</button>
      <button class="btn" style="width:14%;" type="submit" name="submit" value="saturday">Saturday</button>
      <button class="btn" style="width:14%;" type="submit" name="submit" value="sunday">Sunday</button>
      <br>
</form>      
<?php 
if(isset($_POST['submit']))
{
  $name = $_POST['submit'];
}
else
{
  $name="monday";
}
           $sql = 'SELECT * 
              FROM timetable 
              WHERE s_id = (select s_id from schedule where m_username="'. mysqli_real_escape_string($conn, $_SESSION['username'] ) .'") and  day="'. mysqli_real_escape_string($conn, $name ) .'"';
           $query = mysqli_query($conn, $sql);
?>
  <div class="container-fluid">
  <div class="row">
<?php
  while ($row = mysqli_fetch_array($query))
    {
?>

<div class="card col-lg-4">
  <div class="card-body" style="color: black;">
    <div>
<?php
 $SQL = $conn->prepare('SELECT * FROM activities WHERE a_id = ?');
 $SQL->bind_param('s', $row['a_id']);
 $SQL->execute();
 $result = $SQL->get_result();
 $db_field = $result->fetch_assoc();
 echo $db_field['name'];
?>
    </div>
    <div>
<?php
  echo $row['start_time'];
?>
    </div>
    <div>
<?php
  echo $row['hrs'];
?>
    </div>
    <div>
<?php
  echo $row['note'];
?>
    </div>    

  </div>
</div>

<?php
    }
?>
  </div>
  </div>
</div>
</div>
<br>


<!-- forum -->
<div class="container-fluid">
  <a name="forum"><h1>Forum</h1></a>
  <div class="row">
.

  <div class="col-sm-12 scroll">


            <div class="userSettings">
                <input id="userName" type="hidden" placeholder="Username" maxlength="32" value="<?php echo $_SESSION['username'];?>">
            </div>
            <div class="chat">
                <div id="chatOutput"></div>
 </div>
</div>
                <input id="chatInput" type="text" placeholder="Input Text here" maxlength="128" style="margin:3% 1% 3% 1%;">
                <button  class="btn" id="chatSend"  style="margin:3% 1% 3% 1%;">Send</button>
            
 
            </div>
    </div>




<!-- feedback -->
<br>
<div>
		<a name="feedback"><h1>Feedback</h1></a>
		<div class="row" id="feedback-container">
			<div class="col-lg-6 col-s-12">
				<h3><i class="far fa-comment"></i>Write to us:</h3>
				<h4>Your valuable feedback is always appreciated!</h4>

        <form name="feedback_form" method="POST" action="feedback.php"> 
          <textarea type="text" id="form-text" name="content" class="form-control md-textarea" rows="3"></textarea>
          <br>
          <div class="text-center mt-4">
            <button class="btn btn-primary" type="submit" name="submit" formid="new_service_form">Submit</button>
          </div>
        </form>
			</div>
    </div>
  </div>
</div>

<!-- edit details modal -->

<div class="modal fade" id="edit-details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color: #0c1c2f;">
      <div class="modal-header">
        <h5 class="card-title">Edit</h5>
      </div>
      <div class="modal-body">
         <form>
              <div class="form-group">
                <label for="name">First name</label>
                <div class="container-fluid">
                  <div class="row"> 
                  <div class="col-lg-4"><input type="text" class="form-control" id="name" placeholder="First name" required></div>
                  <div class="col-lg-4"><input type="text" class="form-control" id="name" placeholder="Middle name"></div>
                  <div class="col-lg-4"><input type="text" class="form-control" id="name" placeholder="Last name"></div>
                  </div>
                </div>
              </div>
      
                    <div class="form-group">
                       <label for="mail">Email ID</label>
                      <input type="Email" class="form-control" id="mail" placeholder="eg:abc@xyz.com">
                    </div>
      
                    <div class="form-group">
                       <label for="contact">Contact</label>
                      <input type="Contact" class="form-control" id="contact">
                    </div>
               
                      <div class="form-group">
                      <label for="gender">Gender</label>
                      <br>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="male" name="gender" class="custom-control-input">
                      <label class="custom-control-label" for="male">Male</label>
                    </div>
      
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="female" name="gender" class="custom-control-input">
                      <label class="custom-control-label" for="female">Female</label>
                    </div>
      
      
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="others" name="gender" class="custom-control-input">
                      <label class="custom-control-label" for="others">Others</label>
                    </div>
                    </div>
      
                    <div class="form-group">
                       <label for="bloodgroup">Blood Group</label>
                      <select class="custom-select">
                          <option selected>Select</option>
                          <option value="1" id="bloodgroup">A+</option>
                        <option value="2" id="bloodgroup">A-</option>
                        <option value="3" id="bloodgroup">B+</option>
                        <option value="4" id="bloodgroup">B-</option>
                        <option value="5" id="bloodgroup">AB+</option>
                        <option value="6" id="bloodgroup">AB-</option>
                        <option value="7" id="bloodgroup">O+</option>
                        <option value="8" id="bloodgroup">O-</option>
      
                      </select>
                    </div>
          </form>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-primary">Submit</a>
      </div>
    </div>
  </div>
</div>

<!-- renew package modal -->

<div class="modal fade" id="renew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content" style="background-color: #0c1c2f;">
      <div class="modal-header">
        <h4 class="card-title">Renew Your Package</h4>
      </div>
      <div class="modal-body">
        <form name="pack_form" method="POST" action="pack2.php">
          <?php
              $sql = 'SELECT * 
              FROM packages';
              $query = mysqli_query($conn, $sql);
          ?>
        <div class="row" id="services-container">
          <?php          
           while ($row = mysqli_fetch_array($query))
          {           
          ?>
                  <div class="card col-lg-3 col-md-5 col-s-10" style="z-index: 1;">
                    
                    <img class="card-img-top" src="https://images.unsplash.com/photo-1528214170403-b744b8dc81c3?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=0a00cfbc305d3c85e1b487b315b55b98&auto=format&fit=crop&w=334&q=80">
                    <div class="card-body card-img-overlay">
                      <h2><?php echo $row['pname'];?></h2>
                      <p class="card-text"><?php echo $row['duration'];?> months</p>
                      <p class="card-text">cost: INR <?php echo $row['amount'];?></p>
                      <p class="card-text"><?php echo $row['description'];?></p>
                    </div>
                   <button type="submit" style="z-index: 999; background-color: #f2ede2;" name="submit" class="btn" value="<?php echo $row['pname'];?>">Select</button>
                </div>
            
          <?php
          }
          ?>
          </div>
          
        </form>
      </div>     

    </div>
  </div>
</div>

<!-- edit password modal -->

<div class="modal fade" id="edit-password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color: #0c1c2f;">
      <div class="modal-header">
        <h5 class="card-title">Edit</h5>
      </div>
      <div class="modal-body">
         <form>

          <div class="form-group">
            <label for="Password0"> Old Password</label>
              <input type="password" class="form-control" id="Password0" placeholder=" Old Password">
            </div>

          <div class="form-group">
            <label for="Password1">New Password</label>
              <input type="password" class="form-control" id="Password1" placeholder="New Password">
            </div>
      
          <div class="form-group">
            <label for="Password2">Retype New Password</label>
              <input type="password" class="form-control" id="Password1" placeholder="New Password">
          </div>
          
          </form>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-primary">Submit</a>
      </div>
    </div>
  </div>
</div>
</div>



<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>   


    <script type="text/javascript">
        $(document).ready(function() {
    var chatInterval = 250; //refresh interval in ms
    var $userName = $("#userName");
    var $chatOutput = $("#chatOutput");
    var $chatInput = $("#chatInput");
    var $chatSend = $("#chatSend");

    function sendMessage() {
        var userNameString = $userName.val();
        var chatInputString = $chatInput.val();

        $.get("chat1.php", {
            username: userNameString,
            text: chatInputString
        });

        $userName.val("");
        retrieveMessages();
    }

    function retrieveMessages() {
        $.get("chat.php", function(data) {
            $chatOutput.html(data); //Paste content into chat output
        });
    }

    $chatSend.click(function() {
        sendMessage();
    });

    setInterval(function() {
        retrieveMessages();
    }, chatInterval);
});
    </script>

</body>
</html>