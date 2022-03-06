<?php 
session_start();
      $dbservername = "localhost:3307";
      $dbusername = "root";
      $dbpassword = "root";
      $conn = mysqli_connect($dbservername, $dbusername, $dbpassword);
      if(!$conn){
         echo " Not connected";
      }
      if(!mysqli_select_db($conn,'project')){
      	echo "database not selected";
      }
?>