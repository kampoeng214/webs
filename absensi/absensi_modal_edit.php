<?php

include "../koneksi.php";

$uid	= $_GET["uid"];

$queryabs = mysqli_query($konek, "SELECT * FROM tblkehadiran WHERE uid='$uid'");
if($queryabs == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($abs = mysqli_fetch_array($queryabs)){

?>
	
	<script src="../aset/plugins/daterangepicker/moment.min.js"></script>
	<script src="../aset/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- page script -->
    <script>
      $(function () {	
		// Daterange Picker
		  $('#Tanggal_Lahir2').daterangepicker({
			  singleDatePicker: true,
			  showDropdowns: true,
			  format: 'YYYY-MM-DD'
		  });
      });
    </script>
<!-- Modal Popup Dosen -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit absensi</h4>
					</div>
					<div class="modal-body">
						<form action="absensi_edit.php" name="modal_popup" enctype="multipart/form-data" method="get">
							<div class="form-group">
								<label>uid</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-university"></i>
										</div>
										<input name="uid" type="text" class="form-control" value="<?php echo $abs["uid"]; ?>" readonly />
									</div>
							</div>
							<div class="form-group">
								<label>jampulang</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-university"></i>
										</div>
										<input name="jam" type="text" class="form-control" value="<?php echo $abs["jampulang"]; ?>"/>
									</div>
							</div>
							
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Save
								</button>
								<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
									Cancel
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			
<?php
			}

?>