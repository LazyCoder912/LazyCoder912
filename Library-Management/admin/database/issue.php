<?php 
session_start();
      $dbservername = "localhost:3307";
      $dbusername = "root";
      $dbpassword = "root";
      $conn = mysqli_connect($dbservername, $dbusername, $dbpassword);
mysqli_select_db($conn,'project');
 if(isset($_POST['issue'])){
                     $r=$_POST['roll'];
                     $i=$_POST['id'];
                     $d=date('Y-m-d');
                     $sql="select * from student where roll='$r'";
                     $result = $conn->query($sql);//mysqli_query($conn,$sql);
                     $row = $result->fetch_assoc();
            if($result-> num_rows !=0){
                                        $y=$row['roll'];
                                         $z=$row['name'];
                                if($y == $r && !empty($r) && !empty($i))
                                    {
                                          $sql1="select * from book where id='$i'";
                                          $re = $conn->query($sql1);
                                    if($re-> num_rows !=0){
                                          $row1 = $re->fetch_assoc();
                                          $x=$row1['id'];
                                          $b=$row1['Copies'];
                                          $bookname=$row1['B'];
                                          $c=$b-1;
                                    if($x == $i )
                                     {     $sql="select * from issue where roll='$r'";
                                          $result1 = $conn->query($sql);
                                          $num=mysqli_num_rows($result1);
                                          if($num >=4){
                                              echo "<script type='text/javascript'>
                                                        alert('Book Issued limit exceeded');
                                                        location='../html/issue_requests.php';
                                                        
                                                        </script>";
                                          }
                                          else{


                                            $q="UPDATE book SET Copies='$c' WHERE id='$i'";
                                            mysqli_query($conn,$q);
                                             $query="INSERT INTO issue(name,id,B,roll,d) VALUES ('$z','$i','$bookname','$r','$d')";
                                             if(!mysqli_query($conn,$query)){
                                                 echo "<script type='text/javascript'>
                                                        alert('Not Issued');
                                                        location='../html/issue_requests.php';
                                                        </script>";
                                             }
                                             else{
                                                   echo "<script type='text/javascript'>
                                                        alert('Book Issued');
                                                        location='../html/issue_requests.php';
                                                        
                                                        </script>";
                                            }
                                     }
                                     }
                                     else{
                                                   echo "<script type='text/javascript'>
                                                        alert('Already Issued');
                                                        location='../html/issue_requests.php';
                                                        
                                                        </script>";
                                            }
                                   }
                                      else{
                                          echo "<script type='text/javascript'>
                                                        alert('Wrong Book Id');
                                                        location='../html/issue_requests.php';
                                                        
                                                        </script>";
                                         }

                                         }
                     }
                     else{
                      echo "<script type='text/javascript'>
                                    alert('Wrong Roll number');
                                    location='../html/issue_requests.php';
                                    
                                    </script>";
                     }
                    
      }


 ?>