<?php 
session_start();
      $dbservername = "localhost:1107";
      $dbusername = "root";
      $dbpassword = "root";
      $conn = mysqli_connect($dbservername, $dbusername, $dbpassword);
      if(!$conn){
         echo " Not connected";
      }
      if(!mysqli_select_db($conn,'project')){
        echo "database not selected";
      }
               $target_file="";
               $tmp_file="";
if(isset($_POST['signup'])){
            $u=$_POST['Name'];
            $e=$_POST['Email'];
            $P=$_POST['Password'];
            $p=$_POST['PhoneNumber'];
            $R=$_POST['RollNo'];
            $tmp_file=$_FILES['f']['tmp_name'];
            $target_file=basename($_FILES['f']['name']);
            $folder="admin/admin_images/".$target_file;
            if(move_uploaded_file($tmp_file,$folder ))
        {   
        echo "success";

        }
        else {
              echo "Something went Wrong !!<br/>";
            }


            
              $sql="select * from login where roll='$R'";
              $r=mysqli_query($conn, $sql);
              $num=mysqli_num_rows($r);

              if($num >= 1){

                echo "<script type='text/javascript'>alert('Username Already taken');
                location='index.php';</script>";
                
                }
              else{
                    $query="insert into login(name, email, pass, phone, roll,img) values ('$u','$e','$P','$p','$R','$target_file')";
                  if(mysqli_query($conn, $query)){
                           echo "<script type='text/javascript'>
                            alert('Registration completed');
                            location='index.php';
                            </script>";
                   }
                  else{
                        echo "<script type='text/javascript'>alert('Registration not completed');
                          window.location='index.php';
                          </script>";
                  }
            }
           
}

if(isset($_POST['signin']))
            {
            $u=$_POST['RollNo'];
            $p=$_POST['Password'];
            $sql="select * from login where roll='$u'";
            $result = $conn->query($sql);
            if($result-> num_rows !=0){
                              $row = $result->fetch_assoc();
                              $x=$row['pass'];
                              $y=$row['roll'];
                              if($x==$p && $y=$u && !empty($u) && !empty($p))
                                {
                                  $_SESSION['ss']=$u;
                                  header('location:admin/html/index.php');
                                }
                              else 
                               { 
                             echo "<script type='text/javascript'>alert('Failed to Login! Incorrect RollNo or Password');
                             location='index.php';
                             </script>";
                              }
                         

                  }
              else{
                        $sql="select * from student where roll='$u'";
                        $result = $conn->query($sql);
                        if($result-> num_rows !=0){
                                $row = $result->fetch_assoc();
                                $x=$row['pass'];
                                $y=$row['roll'];
                                if($x==$p && $y=$u && !empty($u) && !empty($p))
                                  {
                                    $_SESSION['ss']=$u;
                                    header('location:students/html/index.php');
                                  }
                                else 
                                 { 
                               echo "<script type='text/javascript'>alert('Failed to Login! Incorrect RollNo or Password');
                               location='index.php';
                               </script>";
                                }
                                   

                                }
                      }
            }
           
        
 ?>