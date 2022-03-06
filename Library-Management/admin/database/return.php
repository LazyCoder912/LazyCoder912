<?php 
session_start();
      $dbservername = "localhost:3307";
      $dbusername = "root";
      $dbpassword = "root";
      $conn = mysqli_connect($dbservername, $dbusername, $dbpassword);
mysqli_select_db($conn,'project');
 if(isset($_POST['return'])){
                     $r=$_POST['roll'];
                     $i=$_POST['id'];
                     $d=date('Y-m-d');
                     $sql="select * from issue where roll='$r'";
                     $re = $conn->query($sql);
                      if($re-> num_rows !=0){
                      $row = $re->fetch_assoc();
                                    $name=$row['name'];
                                    $bid=$row['id'];
                                    $bname=$row['B'];
                                    $sroll=$row['roll'];
                                    $da=$row['d'];
                                    $diffrence=strtotime($d)-strtotime($da);
                                    $days=floor($diffrence/(60*60*24));
                                    if($days<=14){
                                              $query="INSERT INTO return1(name,id,B,roll,d) VALUES ('$name','$bid','$bname','$sroll','$da')";
                                              mysqli_query($conn,$query);
                                              $sql="delete from issue where id='$i' and roll='$r'";
                                              mysqli_query($conn,$sql);
                                              $sql2="select * from book where id='$i'";
                                              $re = $conn->query($sql2);
                                              if($re-> num_rows !=0){ 
                                                      $row1 = $re->fetch_assoc();
                                                      $x=$row1['id'];
                                                      $b=$row1['Copies'];
                                                      $bookname=$row1['B'];
                                                      $c=$b+1;
                                                      $q="UPDATE book SET Copies='$c' WHERE id='$i'";
                                                      mysqli_query($conn,$q);
                                                     echo "<script type='text/javascript'>
                                                          alert(' Book Returned');
                                                          location='../html/return_requests.php';
                                                          
                                                          </script>";
                                                        }
                                               else{
                                                       echo "<script type='text/javascript'>
                                                              alert('Book Id wrong' );
                                                              location='../html/return_requests.php';
                                                              
                                                              </script>";
                                                        }

                                              }
                                       else{
                                            $fine=($days*5);
                                              $query="INSERT INTO return1(name,id,B,roll,d) VALUES ('$name','$bid','$bname','$sroll','$da')";
                                              mysqli_query($conn,$query);     
                                               $sql="delete from issue where id='$i' and roll='$r'";
                                              mysqli_query($conn,$sql);
                                              $sql2="select * from book where id='$i'";
                                              $re = $conn->query($sql2);
                                              if($re-> num_rows !=0){ 
                                                      $row1 = $re->fetch_assoc();
                                                      $x=$row1['id'];
                                                      $b=$row1['Copies'];
                                                      $bookname=$row1['B'];
                                                      $c=$b+1;
                                                      $q="UPDATE book SET Copies='$c' WHERE id='$i'";
                                                      mysqli_query($conn,$q);
                                                     echo "<script type='text/javascript'>
                                                          alert('Returned with '+$fine);
                                                          location='../html/return_requests.php';
                                                          
                                                          </script>";
                                                        }
                                               else{
                                                       echo "<script type='text/javascript'>
                                                              alert('Book Id wrong' );
                                                              location='../html/return_requests.php';
                                                              
                                                              </script>";
                                                    }
                                                }

                                            
                                               }
                                             
                                               
                                        
                                      
                         
                      else{
                        
                           echo "<script type='text/javascript'>
                                          alert('Student Not exists' );
                                          location='../html/return_requests.php';
                                          
                                          </script>";
                      }
} 
?>