<?php 
session_start();
      $dbservername = "localhost:3307";
      $dbusername = "root";
      $dbpassword = "root";
      $conn = mysqli_connect($dbservername, $dbusername, $dbpassword);
mysqli_select_db($conn,'project');
if(isset($_POST['edit'])){
            $u=$_POST['Name'];
            $e=$_POST['Email'];
            $p=$_POST['PhoneNumber'];
            $R=$_POST['RollNo'];
            $q="UPDATE login SET name='$u',email='$e',phone='$p' WHERE roll='$R'";
                                mysqli_query($conn,$q);
                               echo "<script type='text/javascript'>
                                    alert('Edited');
                                    location='../html/index.php';
                                    
                                    </script>";
}

 
 ?>