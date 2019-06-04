<?php
include_once 'dbconn.php';
include_once 'session.php';
$count=0;
$btnId=$_POST["btnId"];
$output = '';
$sql="SELECT * FROM wpoets where button_id='$btnId'";
$Execute=mysqli_query($conn,$sql);
while ($row=(mysqli_fetch_array($Execute))) {

     if($count == 0)
     {
      $output .= '
      <li data-target="#dynamicImage" data-slide-to="'.$count.'" class="active"></li>
      ';
     }
     else
     {
      $output .= '
      <li data-target="#dynamicImage" data-slide-to="'.$count.'"></li>
      ';
     }
$count=$count+1;

}//while ends
echo $output;
if (!$Execute)
{
  die('Error: ' . mysqli_error($conn));
}



mysqli_close($conn);
?>