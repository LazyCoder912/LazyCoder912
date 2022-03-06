<?php 
session_start();
      $dbservername = "localhost:3307";
      $dbusername = "root";
      $dbpassword = "root";
      $conn = mysqli_connect($dbservername, $dbusername, $dbpassword);
mysqli_select_db($conn,'project');
if(isset($_POST['Addstudent'])){
            $u=$_POST['Name'];
            $e=$_POST['Email'];
            $p=$_POST['PhoneNumber'];
            $R=$_POST['RollNo'];
            $pass=$_POST['password'];

              $sql="select * from student where roll='$R'";
              $r=mysqli_query($conn, $sql);
              $num=mysqli_num_rows($r);

              if($num >= 1){

                echo "<script type='text/javascript'>alert('Student Already Registered');
                location='../html/manage.php';</script>";
                
                }
              else{
                    $query="insert into student(name, email, phone, roll, pass) values ('$u','$e','$p','$R','$pass')";
                  if(mysqli_query($conn, $query)){
                           echo "<script type='text/javascript'>
                            alert('Registration completed');
                            location='../html/manage.php';
                            </script>";
                   }
                  else{
                        echo "<script type='text/javascript'>alert('Registration not completed');
                          window.location='../html/manage.php';
                          </script>";
                  }
            }
           
}

 
 ?>