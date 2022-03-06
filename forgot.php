<html>
    <head>
    <link rel="stylesheet"href="css/style1.css">
      <title>Lms</title>
      <link rel="icon" type="image/icon" href="admin/images/g.jpg">
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

    <center><div class="col-sm-6 m-5 "style="background: #F7F7F7;border:20px solid white;">
     <div class="card bg-transparent"style="border:none;">
      <div class="card-body">
        <p class="p-2 mb-2 text-white" style="background-color: orange;">Sign Up</p>
      <form action="dbconn.php" method="post"enctype="multipart/form-data">
        <input type="text" Name="Name" placeholder="Name" required>
        <input type="text" Name="Email" placeholder="Email" required>
        <input type="password" Name="Password" placeholder="Password" required>
        <input type="password" Name="Password" placeholder="Confirm Password" required><br> 
         <input type="submit" name="submit" value="Submit" class="btn btn-primary ">
         </form>
      </div>
    </div>
  </div></center>



</body>
</html>