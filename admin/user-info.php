<?php include 'templete.php'; ?>
<link rel="stylesheet" type="text/css" href="../src/plugins/dropzone/src/dropzone.css">

<div class="main-container">
<?php 
 $user_number =$_GET['user'];
  $result = mysqli_query($con,"SELECT `id_number`, `email`, `full_name`, `phone_no`, `date_of_birth`, `gender`, `state`, `city`, `address`, `date` FROM `student` WHERE `id_number` ='$user_number'");
  while($rows = mysqli_fetch_array($result))
  {
   $id_number = $rows['id_number']; 
   $email = $rows['email'];
   $full_name = $rows['full_name'];
   $phone_no = $rows['phone_no'];
   $date_of_birth = $rows['date_of_birth'];
   $gender = $rows['gender'];
   $state = $rows['state'];
   $city = $rows['city'];
   $address = $rows['address'];
   $date = $rows['date'];
 }

 ?>  


		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
						<div class="pd-20 card-box height-50-p">
							<div class="profile-photo">
								
								<img src="../vendors/images/icon.png" alt="" class="avatar-photo">
							</div>
							<h5 class="text-center h5 mb-0"><?php echo $user_number; ?></h5>
							<h6 class="text-center mb-0"><?php echo $full_name; ?></h6>
							

					</div>
					</div>
					<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
						<div class="card-box" style="padding: 20px;">
			<h4 class="text-blue h5 mb-20">Student Information</h4>
			<span><b>Phone Number: </b><br> <?php echo $phone_no; ?></span><br><br>
			<span><b>Email: </b><br> <?php echo $email; ?></span><br><br>
			<span><b>Gender / Date of Birth: </b><br> <?php echo $gender; ?> / <?php echo $date_of_birth; ?></span><br><br>
			<span><b>State/City: </b><br> <?php echo $state; ?> / <?php echo $city; ?></span><br><br>
			<span><b>Address: </b><br> <?php echo $address; ?></span><br><br>

						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- js -->
	<script src="../vendors/scripts/core.js"></script>
	<script src="../vendors/scripts/script.min.js"></script>
	<script src="../vendors/scripts/process.js"></script>
	<script src="../vendors/scripts/layout-settings.js"></script>
	<script src="../src/plugins/cropperjs/dist/cropper.js"></script>

</body>
</html>