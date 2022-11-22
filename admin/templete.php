<?php session_start(); ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Nacoss FPM Admin</title>

	<!-- Site favicon -->
	<link rel="icon" type="image/png" href="../vendors/images/icon.png">

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
	<link rel="stylesheet" type="text/css" href="../vendors/styles/stylle.css">

</head>
<body>
<?php 
include("../connection.php");
  // Check, if username session is NOT set then this page will jump to login page
  if (isset($_SESSION['admin_login'])) {
    $admin_login = $_SESSION['admin_login'];
  } else {
    header('Location: login.php');
    exit();
  }
?>
<?php 
  $query = "SELECT * FROM `admin` WHERE `email` ='$admin_login'";
  //initializing result as a query
  $result = mysqli_query($con,$query);
  //display records from records table 
  while($rows = mysqli_fetch_array($result))
  {
   $full_name = $rows['full_name']; 
   $email = $rows['email'];
   $role = $rows['role'];
 }
 ?>  
	<div class="header">
				<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
		</div>
					<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="../vendors/images/icon.png" alt="">
						</span>
						<span class="user-name">  <?php echo $email; ?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="logout.php"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>
		</div>

	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.php">
				<img src="../vendors/images/icon.png" style="width: 50px;height: 50px;">
				<span style="text-align:center;font-family : Arial Black;font-size: 30px;">&nbsp;NACOSS</span>
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li>
						<a href="index.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-dvd"></span><span class="mtext">Dashboard</span>
						</a>
					</li>
					<li>
						<a href="verify_payment.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-menu"></span><span class="mtext">Verify Payment</span>
						</a>
					</li>
					<li>
						<a href="student.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-group"></span><span class="mtext">Student</span>
						</a>
					</li>
					
					<li>
						<a href="fees.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-wallet"></span><span class="mtext">Nacoss Fees</span>
						</a>
					</li>
										<li>
						<a href="budget.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-open-book"></span><span class="mtext">Budget</span>
						</a>
					</li>
										<li>
						<a href="notification.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-notification"></span><span class="mtext">Notification</span>
						</a>
					</li>
					<li>
						<a href="logout.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-logout"></span><span class="mtext">Log Out</span>
						</a>
					</li>
					
					</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>