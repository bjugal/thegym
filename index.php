<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <?php 
    include 'server.php';
    error_reporting(E_PARSE | E_ERROR);
    session_start();
    //print($_SESSION["register"]);
  ?>
    
    <?php
      if($_SESSION["register"]==1)  
      {
    ?>
    <script type="text/javascript">
      $(window).load(function()
      {
          $('#user-pack').modal('show');
      });
    </script>
    <?php 
    $_SESSION["register"]=-1;
      } 
    ?>
	</head>
<body>

<!-- navbar -->
    <div class="container-fluid" style="background-color: #f6e3a3;">
      <p id="para"></p>
      <button type="button" class="btn btn-primary-outline" id="mobile-button" data-toggle="modal" data-target="#sign-up_t"><i class="fas fa-user-friends"></i><span id="hidden-xs"> Sign up as Trainer</span></button>

      <button type="button" class="btn btn-primary-outline" style="margin: 1%;" data-toggle="modal" data-target="#sign-up"><i class="fas fa-user-plus"></i><span id="hidden-xs"> Sign up</span></button> 

      <button type="button" class="btn btn-primary-outline" data-toggle="modal" data-target="#log-in"><i class="fas fa-sign-in-alt"></i><span id="hidden-xs"> Login</span></button>
    </div>

    <nav class="container-fluid navbar navbar-expand-lg sticky-top navbar-light" style="background-color: #e0cf95;">
    <a class="navbar-brand" href="#"><img id="brand-logo" src="images/logo.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a href="#services" class="nav-item nav-link active" href="#">Services <span class="sr-only">(current)</span></a>
          <a href="#equipment" class="nav-item nav-link" href="#">Equipment</a>
          <a href="#package" class="nav-item nav-link" href="#">Packages</a>
          <a href="#con" class="nav-item nav-link" href="#">Find Us</a>
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
		      <img src="images/h1.jpg" class="desktop_img">
		      <img src="https://images.unsplash.com/photo-1511810119369-d499bbf2a325?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=575da372a42044cb2a6ecef8118ae877&auto=format&fit=crop&w=334&q=80" class="mobile_img">

		    </div>
		    <div class="carousel-item">
		    	<img src="https://images.unsplash.com/photo-1532384748853-8f54a8f476e2?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e41a7470baa7f2296827d0ca195eb968&auto=format&fit=crop&w=750&q=80" class="desktop_img">
		   		<img src="https://images.unsplash.com/photo-1526679286854-9806b9f599e8?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=f13934a54d158824e8980568b2b84d4a&auto=format&fit=crop&w=334&q=80" class="mobile_img">
		    </div>
		    <div class="carousel-item">
		    	<img src="https://images.unsplash.com/photo-1527933053326-89d1746b76b9?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6574f595c48dec19ba5a6f8f9ef9c459&auto=format&fit=crop&w=1500&q=80" class="desktop_img">
				<img src="https://images.unsplash.com/photo-1528214170403-b744b8dc81c3?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=0a00cfbc305d3c85e1b487b315b55b98&auto=format&fit=crop&w=334&q=80
        " class="mobile_img">
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

<!-- background -->
<div class="fixed-bg"></div>
<br>
<!-- services -->
  <a name="services"><h1>Services</h1></a>
<?php
          $sql = 'SELECT * 
              FROM activities where a_id IN (1, 3, 4, 5, 7, 8)';
           $query = mysqli_query($conn, $sql);
?>
<div class="row" id="services-container">
<?php          
  while ($row = mysqli_fetch_array($query))
    {       
?>

      <div class="card col-lg-3 col-md-5 col-s-10">
          <img class="card-img-top" src="images/servicesbg.jpg"">
          <div class="card-body card-img-overlay">
            <h2><div><img height="60%" width="60% class="card-img-top" src="<?php echo $row['path']; ?>"></div><?php echo $row['name'];?></h2>
            <p class="card-text"><?php echo $row['content'];?></p>
          </div>
      </div>

<?php
}
?>
</div>


<!-- background -->
<div class="fixed-bg"></div>
<br>


<!-- equipment -->
		<a name="equipment"><h1>Equipment</h1></a>
		<div class="container" id="equipment-container">
      <div class="row r1">
			<div class="col-lg-3 col-xs-12">
				<a data-toggle="modal" data-target="#e1"><img style="padding:2%;" src="images/squat-rack.png"></a>
			</div>
			<div class="col-lg-3 col-xs-12">
				 <a data-toggle="modal" data-target="#e2"><img style="padding:2%;" src="images/barbell.png"></a>
			</div>
			<div class="col-lg-3 col-md-3">
				 <a data-toggle="modal" data-target="#e3"><img style="padding:2%;" src="images/bench-press.png"></a>
			</div>
			<div class="col-lg-3 col-md-3">
				 <a data-toggle="modal" data-target="#e4"><img style="padding:2%;" src="images/incline-bp.png"></a>
			</div>
    </div>
    <div class="row r1">
			<div class="col-lg-3 col-md-3">
				 <a data-toggle="modal" data-target="#e5"><img style="padding:2%;" src="images/hsm.png"></a>
			</div>	
			<div class="col-lg-3 col-md-3">
				 <a data-toggle="modal" data-target="#e6"><img style="padding:2%;" src="images/candp.png"></a>
			</div>
      <div class="col-lg-3 col-md-3">
         <a data-toggle="modal" data-target="#e7"><img style="padding:2%;" src="images/dumbbell.png"></a>
      </div>											
      <div class="col-lg-3 col-md-3">
         <a data-toggle="modal" data-target="#e8"><img style="padding:2%;" src="images/pullup-bar.png"></a>
      </div>
		</div>
  </div>


<!-- background -->
<div class="fixed-bg"></div>
<br>

<!-- packages -->
  <a name="package"><h1>Packages</h1></a>
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

      <div class="card col-lg-3 col-md-5 col-s-10">
          <img class="card-img-top" src="images/servicesbg.jpg">
          <div class="card-body card-img-overlay">
            <h2><div><i class="fas fa-dumbbell fa-5x"></i></div><?php echo $row['pname'];?></h2>
            <p class="card-text"><?php echo $row['duration'];?> months</p>
            <p class="card-text">cost: INR <?php echo $row['amount'];?></p>
            <p class="card-text"><?php echo $row['description'];?></p>
          </div>
      </div>

<?php
}
?>
</div>

<!-- contact us -->
		<a name="con"><h1>Find Us</h1></a>
    <div class="container-fluid">
    <iframe id="loc" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.213636192762!2d72.83238461428218!3d18.921935687176447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7d1c73993eebd%3A0x9e8c8bfbd74a913a!2sGateway+of+India%2C+Apollo+Bandar%2C+Colaba%2C+Mumbai%2C+Maharashtra+400001!5e0!3m2!1sen!2sin!4v1539433761557" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>



<!-- signup modal as Trainer -->
<div class="modal fade" id="sign-up_t" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="card-title">Sign Up</h4>
      </div>
      <div class="modal-body">
         <form name="signupt_form" method="POST" action="signupt.php">
              <div class="form-group">
                <label for="name"><h5>Full name</h5></label>
                <div class="container-fluid">
                  <div class="row"> 
                  <div class="col-lg-4"><input type="text" class="form-control" name="fname" id="name" placeholder="First name" required></div>
                  <div class="col-lg-4"><input type="text" class="form-control" name="mname" id="name" placeholder="Middle name"></div>
                  <div class="col-lg-4"><input type="text" class="form-control" name="lname" id="name" placeholder="Last name"></div>
                  </div>
                </div>
              </div>

                    <div class="form-group">
                       <label for="uname"><h5>Username</h5></label>
                      <input type="text" class="form-control" name="username" id="uname" placeholder="username">
                    </div>             
      
                    <div class="form-group">
                       <label for="mail"><h5>Email ID</h5></label>
                      <input type="Email" class="form-control" name="email" id="mail" placeholder="eg:abc@xyz.com">
                    </div>
      
                    <div class="form-group">
                       <label for="contact"><h5>Contact</h5></label>
                      <input type="Contact" class="form-control" name="contact" id="contact">
                    </div>
               
                      <div class="form-group">
                      <label for="gender1"><h5>Gender</h5></label>
                      <br>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="male1" name="gender1" value="m" class="custom-control-input">
                      <label class="custom-control-label" for="male1"><h5>Male</h5></label>
                    </div>
      
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="female1" name="gender1" value="f" class="custom-control-input">
                      <label class="custom-control-label" for="female1"><h5>Female</h5></label>
                    </div>
      
      
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="others1" name="gender1" value="o" class="custom-control-input">
                      <label class="custom-control-label" for="others1"><h5>Others</h5></label>
                    </div>
                    </div>
                    
                    <div class="form-group">
                    <label for="dob"><h5> Date of Birth</h5> </label>
                    <br>
                      <div class="form-input dob">
                        <span class="form-sub-label">
                          <select name="day" class="day" id="day">
                            <option>Day</option>
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                            <option value="5"> 5 </option>
                            <option value="6"> 6 </option>
                            <option value="7"> 7 </option>
                            <option value="8"> 8 </option>
                            <option value="9"> 9 </option>
                            <option value="10"> 10 </option>
                            <option value="11"> 11 </option>
                            <option value="12"> 12 </option>
                            <option value="13"> 13 </option>
                            <option value="14"> 14 </option>
                            <option value="15"> 15 </option>
                            <option value="16"> 16 </option>
                            <option value="17"> 17 </option>
                            <option value="18"> 18 </option>
                            <option value="19"> 19 </option>
                            <option value="20"> 20 </option>
                            <option value="21"> 21 </option>
                            <option value="22"> 22 </option>
                            <option value="23"> 23 </option>
                            <option value="24"> 24 </option>
                            <option value="25"> 25 </option>
                            <option value="26"> 26 </option>
                            <option value="27"> 27 </option>
                            <option value="28"> 28 </option>
                            <option value="29"> 29 </option>
                            <option value="30"> 30 </option>
                            <option value="31"> 31 </option>
                          </select>
                        </span>
                        <span class="form-sub-label">
                          <select name="month" id="month">
                            <option>Month</option>
                            <option value="January"> January </option>
                            <option value="February"> February </option>
                            <option value="March"> March </option>
                            <option value="April"> April </option>
                            <option value="May"> May </option>
                            <option value="June"> June </option>
                            <option value="July"> July </option>
                            <option value="August"> August </option>
                            <option value="September"> September </option>
                            <option value="October"> October </option>
                            <option value="November"> November </option>
                            <option value="December"> December </option>
                           </select>
                        </span>
                        <span class="form-sub-label">
                          <select name="year" id="year">
                            <option>Year</option>
                            <option value="1990"> 1990 </option>
                            <option value="1991"> 1991 </option>
                            <option value="1992"> 1992 </option>
                            <option value="1993"> 1993 </option>
                            <option value="1994"> 1994 </option>
                            <option value="1995"> 1995 </option>
                            <option value="1996"> 1996 </option>
                            <option value="1997"> 1997 </option>
                            <option value="1998"> 1998 </option>
                            <option value="1999"> 1999 </option>
                            <option value="2000"> 2000 </option>
                            <option value="2001"> 2001 </option>
                            <option value="2002"> 2002 </option>
                            <option value="2003"> 2003 </option>
                            <option value="2004"> 2004 </option>
                            <option value="2005"> 2005 </option>
                            <option value="2006"> 2006 </option>
                            <option value="2007"> 2007 </option>
                            <option value="2008"> 2008 </option>
                            <option value="2009"> 2009 </option>
                            <option value="2010"> 2010 </option>
                            <option value="2011"> 2011 </option>
                            <option value="2012"> 2012 </option>
                            <option value="2013"> 2013 </option>
                            <option value="2014"> 2014 </option>
                            <option value="2015"> 2015 </option>
                            <option value="2016"> 2016 </option>
                            <option value="2017"> 2017 </option>
                            <option value="2018"> 2018 </option>
                           </select>
                        </span>
                      </div>
                    </div>

                    <div class="form-group">
                       <label for="experience"><h5>Experience in Years</h5></label>
                      <input type="number" class="form-control" name="experience" id="experience">
                    </div>

                    <div class="form-group">
                      <label for="Password1"><h5>Password</h5></label>
                      <input type="password" class="form-control" name="password1" id="Password1" placeholder="Password">
                      </div>
        
                    <div class="form-group">
                      <label for="Password2"><h5>Retype Password</h5></label>
                      <input type="password" class="form-control" name="password2" id="Password2" placeholder="Password">
                      </div>
                    <input type="submit" name="submit3" class="btn" value="Submit">
          </form>
      </div>
    </div>
  </div>
</div>


<!-- signup modal -->
<div class="modal fade" id="sign-up" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="card-title">Sign Up</h4>
      </div>
      <div class="modal-body">
         <form name="signup_form" method="POST" action="signup.php">
              <div class="form-group">
                <label for="name"><h5>Full Name</h5></label>
                <div class="container-fluid">
                  <div class="row"> 
                  <div class="col-lg-4"><input type="text" class="form-control" name="fname" id="name" placeholder="First name" required></div>
                  <div class="col-lg-4"><input type="text" class="form-control" name="mname" id="name" placeholder="Middle name"></div>
                  <div class="col-lg-4"><input type="text" class="form-control" name="lname" id="name" placeholder="Last name"></div>
                  </div>
                </div>
              </div>

                    <div class="form-group">
                       <label for="uname"><h5>Username</h5></label>
                      <input type="text" class="form-control" name="username" id="uname" placeholder="username">
                    </div>             
      
                    <div class="form-group">
                       <label for="mail"><h5>Email ID</h5></label>
                      <input type="Email" class="form-control" name="email" id="mail" placeholder="eg:abc@xyz.com">
                    </div>
      
                    <div class="form-group">
                       <label for="contact"><h5>Contact</h5></label>
                      <input type="number" class="form-control" name="contact" id="contact">
                    </div>
               
                      <div class="form-group">
                      <label for="gender2"><h5>Gender</h5></label>
                      <br>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="male2" name="gender2" value="m" class="custom-control-input">
                      <label class="custom-control-label" for="male2"><h5>Male</h5></label>
                    </div>
      
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="female2" name="gender2" value="f" class="custom-control-input">
                      <label class="custom-control-label" for="female2"><h5>Female</h5></label>
                    </div>
      
      
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="others2" name="gender2" value="o" class="custom-control-input">
                      <label class="custom-control-label" for="others2"><h5>Others</h5></label>
                    </div>
                    </div>
                    
                    <div class="form-group">
                    <label for="dob"><h5> Date of Birth</h5> </label>
                    <br>
                          <select name="day" class="day" id="dob">
                            <option>Day</option>
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                            <option value="5"> 5 </option>
                            <option value="6"> 6 </option>
                            <option value="7"> 7 </option>
                            <option value="8"> 8 </option>
                            <option value="9"> 9 </option>
                            <option value="10"> 10 </option>
                            <option value="11"> 11 </option>
                            <option value="12"> 12 </option>
                            <option value="13"> 13 </option>
                            <option value="14"> 14 </option>
                            <option value="15"> 15 </option>
                            <option value="16"> 16 </option>
                            <option value="17"> 17 </option>
                            <option value="18"> 18 </option>
                            <option value="19"> 19 </option>
                            <option value="20"> 20 </option>
                            <option value="21"> 21 </option>
                            <option value="22"> 22 </option>
                            <option value="23"> 23 </option>
                            <option value="24"> 24 </option>
                            <option value="25"> 25 </option>
                            <option value="26"> 26 </option>
                            <option value="27"> 27 </option>
                            <option value="28"> 28 </option>
                            <option value="29"> 29 </option>
                            <option value="30"> 30 </option>
                            <option value="31"> 31 </option>
                          </select>
                          <select name="month" id="dob">
                            <option>Month</option>
                            <option value="January"> January </option>
                            <option value="February"> February </option>
                            <option value="March"> March </option>
                            <option value="April"> April </option>
                            <option value="May"> May </option>
                            <option value="June"> June </option>
                            <option value="July"> July </option>
                            <option value="August"> August </option>
                            <option value="September"> September </option>
                            <option value="October"> October </option>
                            <option value="November"> November </option>
                            <option value="December"> December </option>
                           </select>
                           <select name="year" id="dob">
                            <option>Year</option>
                            <option value="1990"> 1990 </option>
                            <option value="1991"> 1991 </option>
                            <option value="1992"> 1992 </option>
                            <option value="1993"> 1993 </option>
                            <option value="1994"> 1994 </option>
                            <option value="1995"> 1995 </option>
                            <option value="1996"> 1996 </option>
                            <option value="1997"> 1997 </option>
                            <option value="1998"> 1998 </option>
                            <option value="1999"> 1999 </option>
                            <option value="2000"> 2000 </option>
                            <option value="2001"> 2001 </option>
                            <option value="2002"> 2002 </option>
                            <option value="2003"> 2003 </option>
                            <option value="2004"> 2004 </option>
                            <option value="2005"> 2005 </option>
                            <option value="2006"> 2006 </option>
                            <option value="2007"> 2007 </option>
                            <option value="2008"> 2008 </option>
                            <option value="2009"> 2009 </option>
                            <option value="2010"> 2010 </option>
                            <option value="2011"> 2011 </option>
                            <option value="2012"> 2012 </option>
                            <option value="2013"> 2013 </option>
                            <option value="2014"> 2014 </option>
                            <option value="2015"> 2015 </option>
                            <option value="2016"> 2016 </option>
                            <option value="2017"> 2017 </option>
                            <option value="2018"> 2018 </option>
                          </select>
                    </div>

                    <div class="form-group">
                       <label for="bloodgroup"><h5>Blood Group</label>
                      <select class="custom-select" name="bgroup">
                          <option selected hidden value="">Select</option>
                          <option value="A+" id="bloodgroup">A+</option>
                        <option value="A-" id="bloodgroup">A-</option>
                        <option value="B+" id="bloodgroup">B+</option>
                        <option value="B-" id="bloodgroup">B-</option>
                        <option value="AB+" id="bloodgroup">AB+</option>
                        <option value="AB-" id="bloodgroup">AB-</option>
                        <option value="O+" id="bloodgroup">O+</option>
                        <option value="O-" id="bloodgroup">O-</option>
      
                      </select>
                    </div>
                    
                    <div class="form-group">
                       <label for="height"><h5>Height in cms</h5></label>
                      <input type="number" class="form-control" name="height" id="height">
                    </div>

                    <div class="form-group">
                       <label for="weight"><h5>Weight in Kgs</h5></label>
                      <input type="number" class="form-control" name="weight" id="weight">
                    </div>


                    <div class="form-group">
                      <label for="Password3"><h5>Password</h5></label>
                      <input type="password" class="form-control" name="password3" id="Password3" placeholder="Password">
                      </div>
        
                    <div class="form-group">
                      <label for="Password4"><h5>Retype Password</h5></label>
                      <input type="password" class="form-control" name="password4" id="Password4" placeholder="Password">
                      </div>
                    
                  <input type="submit" name="submit1" class="btn" value="Submit">
          </form>
      </div>
    </div>
  </div>
</div>



<!-- user-pack modal -->
<div class="modal fade" id="user-pack" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="card-title">Select Your Package</h4>
      </div>
      <div class="modal-body">
        <form name="pack_form" method="POST" action="pack.php">
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
                   <button type="submit" style="z-index: 999;" name="submit" class="btn" value="<?php echo $row['p_id'];?>">Select</button>
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



<!-- login modal -->
<div class="modal fade" id="log-in" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="card-title">Log In</h4>
      </div>
      <div class="modal-body">
        <form name="login_form" method="POST" action="login.php">
        
        <div class="form-group">
        <label for="Username"><h5>Username</h5></label>
        <input type="text" name='username' class="form-control" id="Username" placeholder="Username">
        </div>
      
        <div class="form-group">
        <label for="Password"><h5>Password</h5></label>
        <input type="password" name='password' class="form-control" id="Password" placeholder="Password">
        </div>
          <input type="submit" name='submit2' class="btn" value="Log In">
        </form>
      </div>
        

    </div>
  </div>
</div>



<!-- equipment modal -->


<div class="modal fade" id="e1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="card-title">
          <?php

            $sql = 'SELECT * 
                FROM equipment where eq_id=1';
                
            $query = mysqli_query($conn, $sql);

            if (!$query) {
              die ('SQL Error: ' . mysqli_error($conn));
            }
                while ($row = mysqli_fetch_array($query))
                {
                  echo '
                      <p>'.$row['name'].'</p>';
                }
                
          ?>
      </h4>
      </div>
      <div class="modal-body">
        <h5>Description</h5>
        <div class="jumbotron equip-modal">
          <?php

            $sql = 'SELECT * 
                FROM equipment where eq_id=1';
                
            $query = mysqli_query($conn, $sql);

            if (!$query) {
              die ('SQL Error: ' . mysqli_error($conn));
            }
                while ($row = mysqli_fetch_array($query))
                {
                  echo '
                      <p>'.$row['description'].'</p>';
                   
                    
            ?>
        </div>
        <h5>Manual</h5>
        <div class="jumbotron equip-modal">
          <iframe style="width:100%;" width="380" height="250" src="https://www.youtube.com/embed/0SoDT-7Hpj8?controls=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <?php
         
                  echo '<p>'.$row['manual'].'</p>';
                }
         ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="e2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="card-title">
          <?php

            $sql = 'SELECT * 
                FROM equipment where eq_id=2';
                
            $query = mysqli_query($conn, $sql);

            if (!$query) {
              die ('SQL Error: ' . mysqli_error($conn));
            }
                while ($row = mysqli_fetch_array($query))
                {
                  echo '
                      <p>'.$row['name'].'</p>';
                }
                
          ?>
      </h4>
      </div>
      <div class="modal-body">
        <h5>Description</h5>
        <div class="jumbotron equip-modal">
          <?php

            $sql = 'SELECT * 
                FROM equipment where eq_id=2';
                
            $query = mysqli_query($conn, $sql);

            if (!$query) {
              die ('SQL Error: ' . mysqli_error($conn));
            }
                while ($row = mysqli_fetch_array($query))
                {
                  echo '                     
                      <p>'.$row['description'].'</p>';
                     
          ?>
        </div>
        <h5>Manual</h5>
        <div class="jumbotron equip-modal">
          <iframe style="width:100%;" width="380" height="250" src="https://www.youtube.com/embed/kwG2ipFRgfo?controls=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <?php
         
                  echo '<p>'.$row['manual'].'</p>';
                }
              
         ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="e3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="card-title">
          <?php

            $sql = 'SELECT * 
                FROM equipment where eq_id=3';
                
            $query = mysqli_query($conn, $sql);

            if (!$query) {
              die ('SQL Error: ' . mysqli_error($conn));
            }
                while ($row = mysqli_fetch_array($query))
                {
                  echo '
                      <p>'.$row['name'].'</p>';
                }
                
          ?>
      </h4>
      </div>
      <div class="modal-body">
        <h5>Description</h5>
        <div class="jumbotron equip-modal">
          <?php

            $sql = 'SELECT * 
                FROM equipment where eq_id=3';
                
            $query = mysqli_query($conn, $sql);

            if (!$query) {
              die ('SQL Error: ' . mysqli_error($conn));
            }
                while ($row = mysqli_fetch_array($query))
                {
                  echo '                      
                      <p>'.$row['description'].'</p>';
          ?>
        </div>
        <h5>Manual</h5>
        <div class="jumbotron equip-modal">
          <iframe style="width:100%;" width="380" height="250" src="https://www.youtube.com/embed/U4BS9EXvfyg?controls=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <?php
         
                  echo '<p>'.$row['manual'].'</p>';
                }
         ?>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="e4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="card-title">
          <?php

            $sql = 'SELECT * 
                FROM equipment where eq_id=4';
                
            $query = mysqli_query($conn, $sql);

            if (!$query) {
              die ('SQL Error: ' . mysqli_error($conn));
            }
                while ($row = mysqli_fetch_array($query))
                {
                  echo '
                      <p>'.$row['name'].'</p>';
                }
                
          ?>
      </h4>
      </div>
      <div class="modal-body">
        <h5>Description</h5>
        <div class="jumbotron equip-modal">
          <?php

            $sql = 'SELECT * 
                FROM equipment where eq_id=4';
                
            $query = mysqli_query($conn, $sql);

            if (!$query) {
              die ('SQL Error: ' . mysqli_error($conn));
            }
                while ($row = mysqli_fetch_array($query))
                {
                  echo '
                      <p>'.$row['description'].'</p>';
          ?>
        </div>
        <h5>Manual</h5>
        <div class="jumbotron equip-modal">
          <iframe style="width:100%;" width="380" height="250" src="https://www.youtube.com/embed/11gY7Q5D5wo?controls=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <?php
         
                  echo '<p>'.$row['manual'].'</p>';
                }
              
         ?>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="e5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="card-title">
          <?php

            $sql = 'SELECT * 
                FROM equipment where eq_id=5';
                
            $query = mysqli_query($conn, $sql);

            if (!$query) {
              die ('SQL Error: ' . mysqli_error($conn));
            }
                while ($row = mysqli_fetch_array($query))
                {
                  echo '
                      <p>'.$row['name'].'</p>';
                }
                
          ?>
      </h4>
      </div>
      <div class="modal-body">
        <h5>Description</h5>
        <div class="jumbotron equip-modal">
          <?php

            $sql = 'SELECT * 
                FROM equipment where eq_id=5';
                
            $query = mysqli_query($conn, $sql);

            if (!$query) {
              die ('SQL Error: ' . mysqli_error($conn));
            }
                while ($row = mysqli_fetch_array($query))
                {
                  echo '
                      <p>'.$row['description'].'</p>';
          ?>
        </div>
        <h5>Manual</h5>
        <div class="jumbotron equip-modal">
          <iframe style="width:100%;" width="380" height="250" src="https://www.youtube.com/embed/RNSArdOW-rw?controls=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <?php
         
                  echo '<p>'.$row['manual'].'</p>';
                }
              
         ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="e6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="card-title">
          <?php

            $sql = 'SELECT * 
                FROM equipment where eq_id=6';
                
            $query = mysqli_query($conn, $sql);

            if (!$query) {
              die ('SQL Error: ' . mysqli_error($conn));
            }
                while ($row = mysqli_fetch_array($query))
                {
                  echo '
                      <p>'.$row['name'].'</p>';
                }
                
          ?>
      </h4>
      </div>
      <div class="modal-body">
        <h5>Description</h5>
        <div class="jumbotron equip-modal">
          <?php

            $sql = 'SELECT * 
                FROM equipment where eq_id=6';
                
            $query = mysqli_query($conn, $sql);

            if (!$query) {
              die ('SQL Error: ' . mysqli_error($conn));
            }
                while ($row = mysqli_fetch_array($query))
                {
                  echo '
                      <p>'.$row['description'].'</p>';
          ?>
        </div>
        <h5>Manual</h5>
        <div class="jumbotron equip-modal">
          <iframe style="width:100%;" width="380" height="250" src="https://www.youtube.com/embed/jP9-KZi2EFk?controls=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <?php
         
                  echo '<p>'.$row['manual'].'</p>';
                }
              
         ?>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="e7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="card-title">
          <?php

            $sql = 'SELECT * 
                FROM equipment where eq_id=7';
                
            $query = mysqli_query($conn, $sql);

            if (!$query) {
              die ('SQL Error: ' . mysqli_error($conn));
            }
                while ($row = mysqli_fetch_array($query))
                {
                  echo '
                      <p>'.$row['name'].'</p>';
                }
                
          ?>
      </h4>
      </div>
      <div class="modal-body">
        <h5>Description</h5>
        <div class="jumbotron equip-modal">
          <?php

            $sql = 'SELECT * 
                FROM equipment where eq_id=7';
                
            $query = mysqli_query($conn, $sql);

            if (!$query) {
              die ('SQL Error: ' . mysqli_error($conn));
            }
                while ($row = mysqli_fetch_array($query))
                {
                  echo '
                      <p>'.$row['description'].'</p>';
          ?>
        </div>
        <h5>Manual</h5>
        <div class="jumbotron equip-modal">
          <iframe style="width:100%;" width="380" height="250" src="https://www.youtube.com/embed/E6VMg0E9JpE?controls=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <?php
         
                  echo '<p>'.$row['manual'].'</p>';
                }
              
         ?>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="e8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="card-title">
          <?php

            $sql = 'SELECT * 
                FROM equipment where eq_id=8';
                
            $query = mysqli_query($conn, $sql);

            if (!$query) {
              die ('SQL Error: ' . mysqli_error($conn));
            }
                while ($row = mysqli_fetch_array($query))
                {
                  echo '
                      <p>'.$row['name'].'</p>';
                }
                
          ?>
      </h4>
      </div>
      <div class="modal-body">
        <h5>Description</h5>
        <div class="jumbotron equip-modal">
          <?php

            $sql = 'SELECT * 
                FROM equipment where eq_id=8';
                
            $query = mysqli_query($conn, $sql);

            if (!$query) {
              die ('SQL Error: ' . mysqli_error($conn));
            }
                while ($row = mysqli_fetch_array($query))
                {
                  echo '
                      <p>'.$row['description'].'</p>';
          ?>
        </div>
        <h5>Manual</h5>
        <div class="jumbotron equip-modal">
          <iframe style="width:100%;" width="380" height="250" src="https://www.youtube.com/embed/W_vw0P8EVwQ?controls=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <?php
         
                  echo '<p>'.$row['manual'].'</p>';
                }
              
         ?>
        </div>
      </div>
    </div>
  </div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>