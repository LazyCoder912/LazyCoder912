<?php 
session_start();
      $dbservername = "localhost:3307";
      $dbusername = "root";
      $dbpassword = "root";
      $conn = mysqli_connect($dbservername, $dbusername, $dbpassword);
mysqli_select_db($conn,'project');
      if(isset($_POST["submit"]))
                      $r=$_SESSION['ss'];
                       $pass=$_POST['old'];
                       $newpass=$_POST['new'];
                     $sql="select * from issue where roll='$r'";
                     $re = $conn->query($sql);
                                $q="UPDATE login SET pass='$newpass' WHERE roll='$r'";
                                if(mysqli_query($conn,$q)){
                               echo "<script type='text/javascript'>
                                    alert('changed');
                                    location='../html/index.php';
                                    </script>";
                                  }
                                   
                                   else{
                                    
                                     echo "<script type='text/javascript'>
                                    alert('changed');
                                    location='../html/index.php';
                                    </script>";
                     }
?>