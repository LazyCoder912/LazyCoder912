
<?php
require("../../pdf/fpdf.php")
   
 if(isset($_POST['return'])){
                     $r=$_POST['roll'];
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
                                    if($days>14){

                                    }else
                                    {
                                      $pd=new fpdf();
                                      $fine=($days*5);
                                      $pdf->Addpage();
                                      $pdf->cell($roll);
                                      $pdf->cell($fine);
                                      $pdf->output();
                                    }
                                    
}
?>