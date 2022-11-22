<?php include 'templete.php'; ?>

	<div class="main-container">

							
				<!-- Export Datatable start -->
				<div style="min-height:200px;" id="hide" class="contact-directory-box">
								<div style="border-bottom: solid 2px silver;" class="pd-20">
						<h4 class="text-black text-center h4"><b>Payment Vefication</b></h4>
					</div>
					<div id="show_ver">	</div>

<!-- end here -->
<div class="contact-dire-info text-center">
	<div class="form-group">
									<h4><b>RRR:</b></h4>
	<input type="text" id="rrr" name="rrr" class="form-control form-control-md" required="" autocomplete="off">
								</div>
<input type="button" id="rrr_submit" class="btn btn-success" value="Verify">	

</div>								
								</div>

<br>

				<!-- Export Datatable End -->
		
	</div>

		<!-- js -->
	<script src="../vendors/scripts/core.js"></script>
	<script src="../vendors/scripts/script.min.js"></script>
			<!-- add sweet alert js & css in footer -->
	<script src="../src/plugins/sweetalert2/sweetalert2.all.js"></script>
	<script src="../src/plugins/sweetalert2/sweet-alert.init.js"></script>

<script type="text/javascript">
$('#rrr_submit').click(function(){
		var rrr = $("#rrr").val();
	if (rrr!="") {
	          $.ajax({
            url: 'ver_pay.php',
            type: 'POST',
            async: false,
            data: {
              'ver_pay': 1,
              'rrr':rrr,  },
            success: function(data) { 
              if (data == "not_pay") {
           swal(
                {
                    type: 'error',
                    title: 'Errors in RRR',
                    text: 'Sorry! RRR Does not Pay Nacoss.',
                }
            )

              }
  else{
 $("#show_ver").html(data);

              }

            }
          });
	}else{
            swal(
                {
                    type: 'error',
                    title: 'Fill cannot be empty',
                    text: 'Please enter RRR Number and try again.',
                }
            )
	}
	


	});
</script>

</body>
</html>