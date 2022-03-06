<?php 
session_start();
      $dbservername = "localhost:3307";
      $dbusername = "root";
      $dbpassword = "root";
      $conn = mysqli_connect($dbservername, $dbusername, $dbpassword);
mysqli_select_db($conn,'project');
if(isset($_POST['books'])){
          $title=$_POST['title'];
          $author1=$_POST['author1'];
          $publisher=$_POST['publisher'];
          $year=$_POST['year'];
          $availability=$_POST['availability'];
          $id=$_POST['id'];

          $sql="DELETE FROM `book` WHERE B='$title'";
          mysqli_query($conn,$sql);
    
          $sql1="INSERT INTO `book`(B, Author,Publisher, Year,Copies,id) VALUES ('$title','
          $author1','$publisher','$year','$availability','$id')";
           if(!mysqli_query($conn,$sql1)){
            else{echo "<script type='text/javascript'>
                            alert('BookNot Added');
                            location='../html/addbook.php';
                            
                            </script>";
           }
           else{echo "<script type='text/javascript'>
                            alert('Book Added');
                            location='../html/addbook.php';
                            
                            </script>";
             
         }
  }
 
 ?>