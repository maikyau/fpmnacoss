<?php include('../connection.php');
if (isset($_POST['ver_pay'])) { 
    $rrr = mysqli_real_escape_string($con,$_POST['rrr']);


$result = mysqli_query($con,"SELECT * FROM `fees` WHERE `rrr` = '$rrr'");
if (mysqli_num_rows($result) == 0){
echo "not_pay";
  }
  else {
while ($rows = mysqli_fetch_array($result)) {
echo "<div class='contact-dire-info text-center'>
  <div class='contact-avatar'>
  <span>
  <img style='height:100%;width:100%' src='../src/images/icon.png'>
  </span>
  </div>
  <div class='contact-name'>
  <h5 class='text-uppercase'> ".$rows['id_number']."</h5>
  <h5 class='text-uppercase'> ".$rows['full_name']."</h5>
  <h4 class='text-uppercase'> ".$rows['level']." - ".$rows['session']." Session</h4>
  </div>
<div class='profile-sort-desc'>                                            
<h4>Amount pay: ₦ ".$rows['amount']."</h4>
</div>
                                        
 </div>";

}                        
}
}

?>
