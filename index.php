<html>
    <head>
    <link rel="stylesheet"href="css/style1.css">
      <title>Lms</title>
      <link rel="icon" type="image/icon" href="../admin/images/g.png">
        <meta charset="utf-8">
         <link rel="Stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>   
    </head>
<body >

	<div class="pos-f-t" >
    <nav class="navbar navbar-dark fixed-top"style="background-color: #2F4771;border-bottom: .5px solid orange;">
      <img src="admin/images/g.png" width="10%" height="50px" >
    </nav>
    </div>

<div class="container-fluid  mt-3" style="width: 90%;background: #F7F7F7;height: 423px; ">
<div class="row py-2">
  <div class="col-sm-6">
    <div class="card-header text-center">
     Library management system
  </div>
    <div class="card bg-transparent"style="border:none;">
      <div class="card-body ">
        <p class="p-2 mb-2 text-white" style="background-color: orange;">Login</p>
			<form action="dbconn.php" method="post">
				<input class="i" type="text" Name="RollNo" placeholder="Member Id" required="" id="name">
				<input class="p" type="password" Name="Password" placeholder="Password" required="" id="pass"><br>
        <a href="forgot.php">Forgot Password</a>
        <center>
				<input type="submit" name="signin"; value="Sign In"class="btn btn-primary btn-lg"></center>
        <a href="singup.php">Register for Adminstration</a>
			</form>
    </div>
  </div>
</div>
     
  <div class="col-sm-6  "style="border-left: 1px solid lightgray;">
   
  </div>
</div>
</div>



</body>
</html>