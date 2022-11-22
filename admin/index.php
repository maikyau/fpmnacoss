<?php include 'templete.php'; ?>
<style type="text/css">
.menu{
	max-width: 150px; 
	margin: 0px auto;
	padding-top: 25px;
	height: 120px;
	border: 2px solid silver;
	border-radius: 10px;
	overflow: hidden;
}
</style>
<?php 
$student_count = mysqli_query($con,"SELECT COUNT(`id`) as `id` FROM `student`");
   while($rows = mysqli_fetch_array($student_count)){ $student_no = $rows['id']; }

   $u_count = mysqli_query($con,"SELECT SUM(`amount`) FROM `fees`");
   while($rows = mysqli_fetch_array($u_count)){ $out_e = $rows['SUM(`amount`)']; }

   $b_count = mysqli_query($con,"SELECT SUM(`amount`) FROM `budget`");
   while($rows = mysqli_fetch_array($b_count)){ $budget_amont = $rows['SUM(`amount`)']; }


   if ($out_e == "") { $out_e = 0;}
   if ($budget_amont == "") { $budget_amont = 0;}
    $remain_bal = $out_e - $budget_amont;
 ?>
<div class="main-container">





			<div class="card-box pd-20 height-100-p mb-30">
				<div class="row align-items-center">
					<div class="col-md-4">
						<img style="display: block;margin-right: auto;margin-left: auto;height:150px;width:150px;" src="../vendors/images/icon.png" alt="">
					</div>
					<div class="col-md-8">
						<h4 class="font-25 weight-500 mb-10 text-capitalize">
							Welcome back <br><div class="weight-600 font-30 text-blue"> <?php echo $full_name; ?><span style="color:red;text-transform:uppercase;"> ( <?php echo $role; ?>)</span></div>
						</h4>
					</div>
				</div>
			</div>


			<div class="row pb-10">
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark"> ₦ <?php echo $out_e; ?>.00</div>
								<div class="font-14 text-secondary weight-500">Total Earning</div>
							</div>
							<div class="widget-icon">
								<div class="icon" data-color="#00eccf"><i class="icon-copy dw dw-calendar1"></i></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark"> ₦ <?php echo $budget_amont; ?>.00</div>
								<div class="font-14 text-secondary weight-500">Amount Spent</div>
							</div>
							<div class="widget-icon">
								<div class="icon" data-color="#ff5b5b"><i class="icon-copy fa fa-mail-forward" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark"> ₦ <?php echo $remain_bal; ?>.00</div>
								<div class="font-14 text-secondary weight-500">Balance</div>
							</div>
							<div class="widget-icon">
								<div class="icon"><i class="icon-copy fa fa-money" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark"> <?php echo $student_no; ?></div>
								<div class="font-14 text-secondary weight-500">Total Student</div>
							</div>
							<div class="widget-icon">
								<div class="icon" data-color="#09cc06"><i class="icon-copy fa fa-users" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</div>
			</div>

<div class="card-box" style="padding: 20px;margin: 10px;">
	<h4 class="text-black h4 text-center">Menu</h4> <hr>
<div class="row">
	<div style="text-align:center;" class="col-4"><div class="menu"><a href="verify_payment.php" data-color="black"><b>
<span style="font-size:40px;color: #0051BD;" class="micon dw dw-menu"></span> <br>Verify Payment</b></a></div></div>
	
	<div style="text-align:center" class="col-4"><div class="menu"><a href="student.php" data-color="black"><b>
<span style="font-size:40px;color: #0051BD;" class="micon dw dw-group"></span> <br> Students</b></a></div></div>

	<div style="text-align:center" class="col-4"><div class="menu"><a href="fees.php" data-color="black"><b>
<span style="font-size:40px;color: #0051BD;" class="micon dw dw-wallet"></span> <br>Nacoss Fees</b></a></div></div>
</div>
	<br>
	<br>
<div class="row">
	<div style="text-align:center;" class="col-4"><div class="menu"><a href="budget.php" data-color="black"><b>
<span style="font-size:40px;color: #0051BD;" class="micon dw dw-open-book"></span> <br>Budget</b></a></div></div>
	
	<div style="text-align:center" class="col-4"><div class="menu"><a href="notification.php" data-color="black"><b>
<span style="font-size:40px;color: #0051BD;" class="micon dw dw-notification"></span> <br> Notification</b></a></div></div>

	<div style="text-align:center" class="col-4"><div class="menu"><a href="logout.php" data-color="black"><b>
<span style="font-size:40px;color: #0051BD;" class="micon dw dw-logout"></span> <br> Log Out</b></a></div></div>
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