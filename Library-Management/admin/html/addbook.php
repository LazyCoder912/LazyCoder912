<?php
require('../../dbconn.php');
$r=$_SESSION['ss'];
$sql="select * from login where roll='$r'";
$result = $conn->query($sql) or die($conn->error);
$row = $result->fetch_assoc();
$img=$row['img'];
?>
<html lang="en">
<head>
  <link rel="Stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <link rel="stylesheet" href="../css/style.css">
  <title>Lms</title>
    <link rel="icon" type="image/icon" href="../images/g.png">  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</script>
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
     <div class=" menu">
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
      <div class="add"><b style="margin: 3px;"><h3>Add Book</h3></b></div>
      <form class="f" action="../database/addbook.php" method="post">
        <label class="control-label" for="Title"><b>Book Title</b></label><br>
        <input type="text" id="title" name="title" placeholder="Title" class="span8" required >
<br>
        <label class="control-label" for="Author"><b>Author</b></label>
<br>
        <input type="text" id="author1" name="author1" class="span8" required >
<br>

        <label class="control-label" for="Publisher">
          <b>Publisher</b></label>
<br>
          <input type="text" id="publisher" name="publisher" placeholder="Publisher" class="span8" required >
<br>
          <label class="control-label" for="Year"><b>Year</b></label> 
<br>
          <input type="text" id="year" name="year" placeholder="Year" class="span8"required > <br>
          <label class="control-label" for="Availability"><b>Number of Copies</b></label><br>
          <input type="text" id="availability" name="availability" placeholder="Number of Copies" class="span8" required autocomplete="off"><br>
          <label class="control-label" for="Availability"><b>book id</b></label><br>
          <input type="text" id="availability" name="id" placeholder="Book ID" class="span8" required "><br>

          

          <div >
            <center>
             <button type="submit" name="books"class="btn btn-primary">Add Book</button>   
           </center>
         </div>

       </form>
       <br>
     </div>

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
