<!DOCTYPE html>
<html>
<head>
	<title>Trainer</title>
	<link rel="stylesheet" type="text/css" href="trainer.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" type="text/css" media="screen"
    />
  <?php
  include 'checklogin.php';
  include 'server.php';

  ?>
<style> .scroll { overflow-y: scroll; height: 150px; padding: 1rem width:100%; } </style>
	</head>
<body>

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
          <a href="#schedule" class="nav-item nav-link active" href="#">Schedule<span class="sr-only">(current)</span></a>
          <a href="#forum" class="nav-item nav-link" href="#">Forum</a>
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
		      <img src="https://images.unsplash.com/photo-1516481157630-05bc0aeb8b19?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=38ff3be7557e7684c95795cb66071d78&auto=format&fit=crop&w=1500&q=80" class="desktop_img">
		      <img src="https://images.unsplash.com/photo-1526679286854-9806b9f599e8?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=f13934a54d158824e8980568b2b84d4a&auto=format&fit=crop&w=334&q=80" class="mobile_img">

		    </div>
		    <div class="carousel-item">
		    	<img src="https://images.unsplash.com/photo-1507398941214-572c25f4b1dc?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=2e0f916ee68d79816f2bb39f1d56d32f&auto=format&fit=crop&w=1566&q=80" class="desktop_img">
		   		<img src="https://images.unsplash.com/photo-1528214170403-b744b8dc81c3?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=0a00cfbc305d3c85e1b487b315b55b98&auto=format&fit=crop&w=334&q=80" class="mobile_img">
		    </div>
		    <div class="carousel-item">
		    	<img src="https://images.unsplash.com/photo-1534258936925-c58bed479fcb?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=de05b46a8ac91fcff2b134811e62d79f&auto=format&fit=crop&w=1489&q=80" class="desktop_img">
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



<!-- schedule -->
<div class="container-fluid">
<div>
<a name="schedule"><h1>Schedule</h1></a>
<form method="post">     
      <button class="btn" type="submit" style="width:14%" name="submit5" value="monday">Monday</button>
      <button class="btn" type="submit" style="width:14%" name="submit5" value="tuesday">Tuesday</button>
      <button class="btn" type="submit"style="width:14%"  name="submit5" value="wednesday">Wednesday</button>
      <button class="btn" type="submit" style="width:14%" name="submit5" value="thursday">Thursday</button>
      <button class="btn" type="submit" style="width:14%" name="submit5" value="friday">Friday</button>
      <button class="btn" type="submit" style="width:14%" name="submit5" value="saturday">Saturday</button>
      <button class="btn" type="submit" style="width:14%" name="submit5" value="sunday">Sunday</button>
      <br>
</form>      
<?php 
if(isset($_POST['submit5']))
{
 $name = $_POST['submit5'];
}
else
{
  $name="monday";
}

           $sql = 'SELECT * 
              FROM timetable 
              WHERE s_id in (select s_id from schedule where td_username="'. mysqli_real_escape_string($conn, $_SESSION['username'] ) .'") and day="'. mysqli_real_escape_string($conn, $name ) .'"';
           $query = mysqli_query($conn, $sql);

?>
  <div class="container-fluid">
  <div class="row">
<?php
  while ($row = mysqli_fetch_array($query))
    {
?>

<div class="card col-lg-3">
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
           $sql1 = 'SELECT * 
              FROM schedule 
              WHERE s_id="'. mysqli_real_escape_string($conn, $row['s_id'] ) .'"';
           $query1 = mysqli_query($conn, $sql1);
          while ($row1 = mysqli_fetch_array($query1))
    {    echo $row1['m_username'];}
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
  $val=$row['s_id']." ".$row['a_id']." ".$row['day'];
?>
    </div>
<div>
<?php
    echo $row['note'];
?>
</div>    

  </div>
     <button class="btn" id="edit1" onclick="editfunc()" value="<?php echo $val; ?>" data-toggle="modal" data-target="#edit_schedule">Edit</button>
  <form method="post" action="schedule.php">
    <button  type="submit" id="edit2" name="submit" class="btn" value="<?php echo $val; ?>">Delete</button>
  </form>  
</div>

<?php
    }
?>
  <div class="card col-lg-3">
  <div class="card-body" style="color: black;">
    <div>
      <br>
      <button type="submit" id="add" class="btn btn-dark" data-toggle="modal" data-target="#add_schedule"><i class="fas fa-plus-circle"></i> Add</button>
  </div>
</div>
</div>
  </div>

  </div>

</div>
<br>


<!-- add schedule modal -->
<div class="modal fade" id="add_schedule" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color: #0c1c2f;">
      <div class="modal-header">
        <h4 class="card-title">Add</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="schedule.php">

        <div class="form-group">
        <label for="username"><h5>Member username</h5></label>
        <input type="text" name='username' class="form-control" id="username" placeholder="Input member username">
        </div>
        
        <div class="form-group">
            <label for="day"><h5>Day</h5> </label>
            <br>
              <select name="day" class="day" id="day">
                <option>Day</option>
                <option value="monday"> monday </option>
                <option value="tuesday"> tuesday </option>
                <option value="wednesday"> wednesday </option>
                <option value="thursday"> thursday </option>
                <option value="friday"> friday </option>
                <option value="saturday"> saturday </option>
                <option value="sunday"> sunday </option>
              </select>
        </div>
        <div class="form-group">
        <label for="st"><h5>Start Time</h5></label>
        <input type="text" name='st' class="form-control" id="st" placeholder="eg: 14:50">
        </div>

        <div class="form-group">
        <label for="hrs"><h5>Hours</h5></label>
        <input type="text" name='hrs' class="form-control" id="hrs" placeholder="Hours(numerical values)">
        </div>        

        <div class="form-group">
        <label for="id1"><h5>Activity Id</h5></label>
        <input type="text" name='id' class="form-control" id="id1" placeholder="Input Activity id">
        </div>

        <div class="form-group">
        <label for="note1"><h5>Instructions</h5></label>
        <textarea name='inst' class="form-control" id="note1" placeholder="Instructions"></textarea> 
        </div>        
          
          <div><input type="submit" name='submit2' class="btn" value="Add"></div>
        </form>
      </div>
        

    </div>
  </div>
</div>


<!-- edit schedule modal -->
<div class="modal fade" id="edit_schedule" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color: #0c1c2f;">
      <div class="modal-header">
        <h4 class="card-title">Edit</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="schedule.php">

        <div class="form-group">
        <label for="st"><h5>Start Time</h5></label>
        <input type="text" name='st' class="form-control" id="st" placeholder="eg: 14:50">
        </div>

        <div class="form-group">
        <label for="hrs"><h5>Hours</h5></label>
        <input type="text" name='hrs' class="form-control" id="hrs" placeholder="Hours(numerical values)">
        </div>        

        <div class="form-group">
        <label for="id1"><h5>Activity Id</h5></label>
        <input type="text" name='id' class="form-control" id="id1" placeholder="Input Activity id">
        </div>

        <div class="form-group">
        <label for="note1"><h5>Instructions</h5></label>
        <textarea name='inst' class="form-control" id="note1" placeholder="Instructions"></textarea> 
        </div> 

          <div><button type="submit" id="edit2" name='submit1' class="btn">Edit</button></div>
        </form>
      </div>
        

    </div>
  </div>
</div>
</div>



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





<script type="text/javascript">
  
function editfunc()
{  //get the input elements from HTML DOM
var edit1 = document.getElementById("edit1");
var edit2 = document.getElementById("edit2");

//Get the value of textOne textbox input
var edit1Value = edit1.value;
 
var edit2Value = edit1Value;
//Assign the value of textOne textbox to textTwo textbox
edit2.value = edit2Value;
}
</script>



</body>
</html>