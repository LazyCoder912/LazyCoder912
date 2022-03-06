<?php
require('../../dbconn.php');
$r=$_SESSION['ss'];
$sql="select * from login where roll='$r'";
$result = $conn->query($sql) or die($conn->error);
$row = $result->fetch_assoc();
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
</head>
<body>
   <div class="pos-f-t" >
    <nav class="navbar navbar-dark fixed-top"style="background-color: #2F4771;border-bottom: 1px solid orange;">
      <img src="../images/g.png" width="10%" height="50px" >
      
      <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" style="margin-left: 10px;">
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
  <div class="container-fluids">
  <div class="page-sidebar pagescroll expandit">
     <div class="page-sidebar-wrapper menu">
       <div class="row">
        <div class="col-sm-4 text-right" >
          <?php echo "<img src='../admin_images/". $img ."''height='50px'style='border-radius:80%;width:80px'>"; ?>
        </div>
        <div class="col-sm-4 text-light text-left pt-3">
          
        <?php echo $r ?> <br>  Admin
        </div>
       </div>
      <ul>
        <li class="active"> <i class="fa fa-home"></i><a href="Index.php">Home</a>
         
        </li>
        <li class="active"> <i class="fa fa-commenting-o"></i><a href="message.php">Messages</a>
         
        </li>
        <li class="active"> <i class="fa fa-user"></i><a href="manage.php">Manage Student</a>
         
        </li>
        <li class="active"> <i class="fa fa-book"></i><a href="All.php">All Books</a>
         
        </li>
        <li class="active"> <i class="fa fa-pencil-square-o"></i><a href="addbook.php" >Add Books</a>
         
        </li>
        <li > <i class="fa fa-outdent"></i><a href="current.php">Currently Issued Books </a></li>
         <li > <i class="fa fa-backward"></i><a href="previous.php">Previously Issued Books </a></li>
       </ul> 
       
     </div>
                <div class="show1" >
      <div class="add">
        <b style="margin: 10px;">Edit details</b></div>
        <form class="f" action="../database/editadmin.php" method="post">
          <label class="control-label" ><b>Name:</b></label><br>
          <input type="text" Name="Name" placeholder="Name" required autocomplete="off">
          <br>
          <label class="control-label" ><b>Email:</b></label><br>
          <input type="text" Name="Email" placeholder="Email" required autocomplete="off">
          <br>
          <label class="control-label" ><b>PhoneNumber:</b></label><br>
          <input type="text" Name="PhoneNumber" placeholder="PhoneNumber" required autocomplete="off">
          <br>
          <label class="control-label" ><b>Member Id:</b></label><br>
          <input type="text" Name="RollNo" placeholder="Member Id" required autocomplete="off">   
          <br>
          <center>
           <div class="send-button">
             <input type="submit" name="edit" value="Edit Admin Details" class="btn btn-primary"></div></center>
           </form>
         </div>
         <footer class="page-footer font-small blue fixed-bottom">

          <!-- Copyright -->
          <div class="footer-copyright text-center"> 2020 Copyright:
            <a href=""> Satyanarayan Pandey</a>
          </div>
          <!-- Copyright -->

        </footer>
      </body>
      </html>