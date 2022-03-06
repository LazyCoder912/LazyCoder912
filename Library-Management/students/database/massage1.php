<?php 
session_start();
      $dbservername = "localhost:3307";
      $dbusername = "root";
      $dbpassword = "root";
      $conn = mysqli_connect($dbservername, $dbusername, $dbpassword);
mysqli_select_db($conn,'project');
if(isset($_POST['massage'])){
  
            $u=$_POST['RollNo'];
            $e=$_POST['Message'];
            $sql="INSERT INTO massage( `roll`, msg) VALUES ('$u','$e')";
            if(mysqli_query($conn,$sql))
            {
              echo "<script type='text/javascript'>alert('Massage Sent');
                          window.location='../html/message.php';
                          </script>";}
                  else{
                        echo "<script type='text/javascript'>alert('Massage Not Sent');
                           window.location='../html/message.php';
                          </script>";
                  }
}
 
 ?>