<?php include 'templete.php'; ?>


	<div class="main-container">

<?php include('../connection.php');
if (isset($_POST['add_budget'])) { 
    $budget_head = mysqli_real_escape_string($con,$_POST['budget_head']);
    $budget_amount = mysqli_real_escape_string($con,$_POST['budget_amount']);
    $budget_content = mysqli_real_escape_string($con,$_POST['budget_content']);

    $Today = date('y:m:d');
    $todaydate = date('d/i/Y',strtotime($Today));

if ($budget_head != "" && $budget_amount != "" && $budget_content != ""){
 $query = mysqli_query($con,"INSERT INTO `budget`(`heading`, `content`, `amount`, `admin`, `date`) VALUES ('$budget_head', '$budget_content', '$budget_amount', '$email', '$todaydate')");
       if($query){
echo "<div id='alert_warning' style='text-align:center;'  class='alert  alert-success alert-dismissible' role='alert'>
 <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span ariahidden='true'>&times;</span></button>
 <strong>Success</strong> New Budget was added Successfuly</div>";
      }
} else {
echo "<div id='alert_warning' style='text-align:center;'  class='alert  alert-warning alert-dismissible' role='alert'>
 <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span ariahidden='true'>&times;</span></button>
 <strong>Warning!</strong> All fields is requered</div>";
}
}

?>
				<div class="faq-wrap">
					<div id="accordion">
						<div class="card">
							<div class="card-header">
								<button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq1">
									<b>Add New Budget</b>
								</button>
							</div>
							<div id="faq1" class="collapse" data-parent="#accordion">
								<div class="card-body">
																					
<form method="POST">
	<label><b>Budget Heading</b></label>
<input type="text" class="form-control" name="budget_head">
<br>
	<label><b>Budget Amount</b></label>
<input type="text" class="form-control" name="budget_amount">
<br>
<label><b>Budget Content</b></label>
<textarea class="form-control" name="budget_content"></textarea><br>
<input type="submit" class="btn btn-success" name="add_budget" value="Add Budget">
</form>

								</div>
							</div>
						</div>

					</div>
					</div>



				<!-- Export Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4 text-center"><b>Nacoss Budgets:</b></h4>
					</div> <hr>
					<div class="pb-20">
						<table class="table hover stripe data-table-export nowrap">
							<thead>
								<tr>
									<th class="table-plus">S/N</th>
									<th>Content</th>
									<th>Amount</th>
									<th>Admin</th>
									<th>Date</th>
								</tr>
							</thead>

							<tbody>
								 <?php
$result = mysqli_query($con,"SELECT * FROM `budget` ORDER BY `id` DESC");
      $sn = 0;
      //display records from records table 
      while ($rows = mysqli_fetch_array($result)) {
      $sn++;

        echo "    
								<tr>
									<td class='table-plus'><b>".$sn."</b></td>
									<td> <button type='button' class='btn btn-link ' data-container='body' data-toggle='popover' data-placement='top' data-content='".$rows['content']."' title='".$rows['heading']."'>
							".$rows['heading']."
						</button></td>
									<td> ₦".$rows['amount']."</td>
									<td>".$rows['admin']."</td>
									<td>".$rows['date']."</td>
								</tr>";
                  
} ?>
								
							</tbody>
						</table>
					</div>
				</div>
				<!-- Export Datatable End -->
		
	</div>

		<!-- js -->
	<script src="../vendors/scripts/core.js"></script>
	<script src="../vendors/scripts/script.min.js"></script>

	<script src="../src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="../src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<!-- Datatable Setting js -->
	<script src="../vendors/scripts/datatable-setting.js"></script>


	<!-- buttons for Export datatable -->
	<script src="../src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	<script src="../src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	<script src="../src/plugins/datatables/js/buttons.print.min.js"></script>
	<script src="../src/plugins/datatables/js/buttons.html5.min.js"></script>
	<script src="../src/plugins/datatables/js/buttons.flash.min.js"></script>
	<script src="../src/plugins/datatables/js/pdfmake.min.js"></script>
	<script src="../src/plugins/datatables/js/vfs_fonts.js"></script>
 <script type="text/javascript">
            window.setTimeout(function() {
                $("#alert_warning").fadeTo(500, 0).slideUp(500, function(){
                    $(this).remove(); 
                });
            }, 3000);
        </script>	
</body>
</html>