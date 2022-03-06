<?php 
require('./dbconn.php');
$r=$_SESSION['ss']; 
?>
<html>
<head>
  <link rel="Stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <link rel="stylesheet"href="../css/style.css">
  <title>Lms</title>
  <link rel="icon" type="image/icon" href="../images/g.jpg">   
</head>
<body>
  
<?php
require("../../pdf/fpdf.php");
   
                     $d=date("Y-m-d");
                     $sql="select * from issue where roll='$r'";
                     $re = $conn->query($sql);
                      $row = $re->fetch_assoc();
                                    $name=$row['name'];
                                    $bid=$row['id'];
                                    $bname=$row['B'];
                                    $sroll=$row['roll'];
                                    $da=$row['d'];
                                    $diffrence=strtotime($d)-strtotime($da);
                                    $days=floor($diffrence/(60*60*24));
                                    
                                      $pdf=new fpdf();
                                      $fine=($days*5);
                                      $pdf->Addpage();
                                       $pdf->SetFont('Arial', 'B',  10);
                                      $pdf->cell(100,10,"Galgotias University",0,1);
                                       $pdf->cell(100,5,"Plot No.2, Sector 17-A,Yamuna Expressway",0,1);
                                       $pdf->cell(100,5,"Greater Noida, Gautam Budh Nagar, Uttar Pradesh",0,1); 
                                       $pdf->cell(100,5,"201310.",0,1);
                                       $pdf->cell(100,5,"Contact No. - 0120 437 0000",0,1);
                                        $pdf->SetFont('Arial', 'B',  20);
                                        $pdf->cell(100,10,"Galgotias University",0,1);
                                       $pdf->Line(10,50,200,50);
                                       $pdf->ln(10);
                                       $pdf->SetFont('Arial', 'I',  10);
                                       $pdf->cell(20,5,"Name:",0,0);
                                       $pdf->cell(100,5,$name,0,1);
                                       $pdf->cell(25,5,"Book Name:",0,0);
                                       $pdf->cell(100,5,$bname,0,1);
                                       $pdf->cell(20,5,"Book id:",0,0);
                                       $pdf->cell(100,5,$bid,0,1);
                                       $pdf->cell(20,5,"Fine :",0,0);
                                       $pdf->cell(100,5,$fine,0,1);

                                      ob_end_clean();
                                      $pdf->output();
                                    
                                    
?>
    
  </body>
  </html>


