<?php include 'templete.php'; ?>

	<div class="main-container">
				<!-- Export Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4 text-center"><b>Student (Nacoss Members)</b></h4>
					</div> <hr>
					<div class="pb-20">
						<table class="table hover stripe data-table-export nowrap">
							<thead>
								<tr>
									<th class="table-plus">S/N</th>
									<th>Full Name</th>
									<th>ID Number</th>
									<th>Phone Number</th>
									<th>Gender</th>
									<th>State</th>
									<th>City</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								
                  <?php
$result = mysqli_query($con,"SELECT * FROM `student` ORDER BY `id` DESC");
      $sn = 0;
      //display records from records table 
      while ($rows = mysqli_fetch_array($result)) {
      $sn++;

        echo "    
								<tr>
									<td class='table-plus'><b>".$sn."</b></td>
									<td class='text-capitalize'>".$rows['full_name']."</td>
									<td class='text-uppercase'>".$rows['id_number']."</td>
									<td>".$rows['phone_no']."</td>
									<td class='text-capitalize'>".$rows['gender']."</td>
									<td class='text-capitalize'>".$rows['state']."</td>
									<td class='text-capitalize'>".$rows['city']."</td>
										<td>
										<div class='dropdown'>
											<a class='btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle' href='#' role='button' data-toggle='dropdown'>
												<i class='dw dw-more'></i>
											</a>
											<div class='dropdown-menu dropdown-menu-right dropdown-menu-icon-list'>
												<a class='dropdown-item' href='user-info.php?user=$rows[id_number]'><i class='dw dw-eye'></i> View</a>
												<a class='dropdown-item' href='#'><i class='dw dw-delete-3'></i> Delete</a>
											</div>
										</div>
									</td>
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
	
</body>
</html>