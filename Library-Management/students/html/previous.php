<?php 
require('./dbconn.php');
$r=$_SESSION['ss']; ?>
<html>
<head>
  <link rel="Stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <link rel="stylesheet"href="../css/style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
</head>
<body>
  
   <div class="pos-f-t" >
    <nav class="navbar navbar-dark fixed-top"style="background-color: #2F4771;border-bottom: .5px solid orange;">
      <img src="../images/g.png" width="10%" height="50px" >
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
  </div>


<div class="menu">
    <ul>
      <li class="active"> <i class="fa fa-home"></i><a href="Index.php">Home</a>
       
      </li>
      <li class="active"> <i class="fa fa-commenting-o"></i><a href="message.php">Messages</a>
       
        <li class="active"> <i class="fa fa-book"></i><a href="All.php">All Books</a>
         
          <li > <i class="fa fa-list"></i><a href="current.php">Currently Issued Books </a>
           
          </li>
          <li > <i class="fa fa-list"></i><a href="previous.php">Previous borrowed books</a>
          </li>
          <li > <i class="fa fa-list"></i><a href="fine.php">Dues </a></li>
        </ul> 
        
      </div>
  
  <div class="Show3">
    <h1>Previously Issued Book Recored</h1>
    <br><br>
    <table  >
     <tr class="tr">
      <t>
        <th>Name</th>
        <th>Book Id</th>
        <th>Book Name</th>
        <th>Roll Number</th>
        <th>Date</th>
        
      </t>
    </tr>
    
    
    <?php
    $i=$_SESSION['ss'];
    $sql1="select * from return1 where roll='$i'";
    $re = $conn->query($sql1);
    
    if($re-> num_rows >0){
      while($row1 = $re->fetch_assoc()){
        $name=$row1['name'];
        $id=$row1['id'];
        $B=$row1['B'];
        $roll=$row1['roll'];
        $date=$row1['d'];

        ?>
        <tr>
          <td><?php echo $name; ?></td>
          <td><?php echo $id; ?></td>
          <td><?php echo $B; ?></td>
          <td><?php echo $roll; ?></td>
          <td><?php echo $date; ?></td>
        </tr>
        <?php
      }
      ?>
    </table>
    <?php  
  }
  ?>
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