<?php session_start(); ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Nacoss FPM Admin Login</title>

	<!-- Site favicon -->
	<link rel="icon" href="../vendors/images/icon.png">
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="../vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="../src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../vendors/styles/style.css">

	</head>
<body class="login-page">
	<?php  include('../connection.php'); ?>

	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">

<?php 
if(isset($_POST['login'])){   
      $email = mysqli_real_escape_string($con,$_POST['email']);
      $password = md5($_POST['password']);

$login = mysqli_query($con,"SELECT `email`, `password` FROM `admin` WHERE `email` = '$email' AND `password` = '$password' ");
 if (mysqli_num_rows($login) == 1){
 $_SESSION['admin_login']=$_POST['email'];
   header("Location:index.php");
  exit();
}
else{
echo "<div id='alert_message' style='max-width:500px;margin-left: auto;margin-right: auto;' class='alert alert-dismissible alert-info'>
      <button class='close' type='button' data-dismiss='alert'>×</button><strong>Warning</strong>
Incorrect Email or Password.
      </div>  ";
}

};
 ?>

			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="../vendors/images/nacos.png" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Admin Login</h2>
						</div>
						<form method="POST">
							<div class="input-group custom">
								<input type="email" name="email" class="form-control form-control-lg" placeholder="Username" required>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="password" name="password" class="form-control form-control-lg" placeholder="**********" required>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
										<input type="submit" name="login" class="btn btn-primary btn-lg btn-block" value="Sign In">
										</div>
							
								</div>
							</div>
						</form>
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
	 <script type="text/javascript">
            window.setTimeout(function() {
                $("#alert_message").fadeTo(500, 0).slideUp(500, function(){
                    $(this).remove(); 
                });
            }, 5000);
        </script>
</body>
</html>