
<?php
require('../../dbconn.php');
$r=$_SESSION['ss'];
mysqli_select_db($conn,'project');
$sql="select * from login where roll='$r'";
$result = $conn->query($sql) or die($conn->error);
$row = $result->fetch_assoc();
$name=$row['name'];
$email=$row['email'];
$mobno=$row['phone'];
$img=$row['img'];
?>    
<html>
<head>
  <link rel="Stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <link rel="stylesheet"href="../css/style.css">
  <title>Lms</title>
    <link rel="icon" type="image/icon" href="../images/g.png"> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
  <script src="../javascript/s.js"></script>
</head>
<body style="background-image: url('../images/bg.png'); ">
    <div class="pos-f-t" >
    <nav class="navbar navbar-dark fixed-top"style="background-color: #2F4771;border-bottom: 1px solid orange;">
      <img src="../images/g.png" width="10%" height="50px" >
      
      <button class="navbar-toggler mr-auto" type="button" id="togle"data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" style="margin-left: 10px;">
        <span class="navbar-toggler-icon view overlay"></span>
      </button>
      
      <li class="dropdown user"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-user"></i> <span class="username"><?php echo $r ?></span> <i class="icon-caret-down small"></i>
      </a>
        <ul class="dropdown-menu">
          <li><a href="../../index.php"> <i class="fa fa-sign-out "></i> Sign Out
          </a></li>
          <li><a href="reset.php">
              <i class="icon-off "></i> Reset Password
          </a></li>
          
        </ul></li>
   </nav>
      <div class="collapse" id="navbarToggleExternalContent">
      <div class="bg-light">
      <a href="issue_requests.php" class="btn btn-primary btn-lg ">Issue Requests</a>
      <a href="renew_requests.php" class="btn btn-primary btn-lg ">Renew Request</a>
      <a href="return_requests.php" class="btn btn-primary btn-lg ">Return Requests</a>
      </div>
    </div>
  </div> 
  <center>
<div class="card "style="width: 50rem;border:20px solid gray;margin-top:100px; ">
  <div class="card text-center">
  <div class="card-body ">
    <form method="post" action="../database/reset.php">
      <h1>Reset Your Password</h1>
      <input type="password" name="old" placeholder="Old Password" required="">
      <input type="password" name="new" placeholder="New Password" required=""id="txtPassword">
      <input type="password" name="new" placeholder="New Password" required=""id="txtConfirmPassword">
      <br>
      <input type="submit" name="submit" value="submit" class="btn btn-primary" id="btnSubmit">
    </form>
  </div>
</div>
</div>
</center>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#btnSubmit").click(function () {
            var password = $("#txtPassword").val();
            var confirmPassword = $("#txtConfirmPassword").val();
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        });
    });
</script>
</body>
</html>
  
                                            