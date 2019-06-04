<?php
include_once 'dbconn.php';
include_once 'session.php';
$count=0;
$btnId=$_POST["btnId"];
$output = '';
$sql="SELECT * FROM wpoets where button_id='$btnId'";
$Execute=mysqli_query($conn,$sql);
while ($row=(mysqli_fetch_array($Execute))) {

  $btnDesc=$row["description"];

  $btnImage=$row["image"];
  // <img src='../images/$btnImage' class='d-block w-100' alt='$btnId'>
  if($count==0){
    $output .= '<div class="carousel-item item active">';
}else{
  $output .= '<div class=" carousel-item item">';
}
$output .= '
   <img   class="img-fluid" src="../images/'.$row["image"].'" alt="'.$row["image"].'" />
   <div class="carousel-caption" id="#carouselcaption">
    <h3>'.$btnDesc.'</h3>
   </div>
  </div>
  ';
$count=$count+1;


}//while ends
echo $output;
if (!$Execute)
{
  die('Error: ' . mysqli_error($conn));
}



mysqli_close($conn);
?>