<?php

include "../koneksi.php";

$uid	= $_GET["uid"];

$querymhs = mysqli_query($konek, "SELECT * FROM siswa WHERE uid='$uid'");
if($querymhs == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($mhs = mysqli_fetch_array($querymhs)){

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
						<h4 class="modal-title">Edit Mahasiswa</h4>
					</div>
					<div class="modal-body">
						<form action="siswa_edit.php" name="modal_popup" enctype="multipart/form-data" method="GET">
							<div class="form-group">
								<label>NIM</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="NIM" type="text" class="form-control" value="<?php echo $mhs["NIM"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Mahasiswa</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="Nama_Siswa" type="text" class="form-control" value="<?php echo $mhs["Nama_Siswa"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Tanggal Lahir</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input id="Tanggal_Lahir2" name="Tanggal_Lahir" type="text" class="form-control" value="<?php echo $mhs["Tanggal_Lahir"]; ?>">
									</div>
							</div>
							<div class="form-group">
								<label>Jenis Kelamin</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user-o"></i>
										</div>
										<select name="JK" class="form-control">
											<option value="<?php echo $mhs["JK"]; ?>" selected>
											<?php
												if ($mhs["JK"]=="L"){
													echo "Laki - laki";
												}
												else{
													echo "Perempuan";
												}
											?>
											</option>
											<?php
												if ($mhs["JK"]=="L"){
													echo "<option value='P'>Perempuan</option>";
												}
												else{
													echo "<option value='L'>Laki - laki</option>";
												}
											?>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>No. Telp</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-phone"></i>
										</div>
										<input name="No_Telp" type="text" class="form-control" value="<?php echo $mhs["No_Telp"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Alamat</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-flag"></i>
										</div>
										<input name="Alamat" type="text" class="form-control" value="<?php echo $mhs["Alamat"]; ?>"/>
									</div>
							</div>
							
							<div class="form-group">
								<label>No. Registrasi</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa-id-card"></i>
										</div>
										<input name="No_Registrasi" type="text" class="form-control" value="<?php echo $mhs["No_Registrasi"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>uid</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa-id-card"></i>
										</div>
										<input name="uid" type="text" class="form-control" value="<?php echo $mhs["uid"]; ?>" readonly />
									</div>
							</div>

							<div class="form-group">
								<label>Kelas</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-graduation-cap"></i>
										</div>
										<select name="Kode_Kelas_Mhs" class="form-control">
										<?php
										
											$querymhsjrs=mysqli_query($konek, "SELECT Kode_Kelas_Mhs, Kode_Kelas, Nama_Kelas FROM mahasiswa INNER JOIN Kelas ON Kode_Kelas_Mhs=Kode_Kelas WHERE NIM='$NIM'");
											if($querymhsjrs==false){
												die("Terdapat Kesalahan : ".mysqli_error($konek));
											}
											while($mhsjrs=mysqli_fetch_array($querymhsjrs)){
												echo "<option value=$mhsjrs[Kode_Kelas_Mhs] selected>$mhsjrs[Nama_Kelas]</option>";
											}
										
											$queryjrs = mysqli_query($konek, "SELECT * FROM kelas");
											if($queryjrs==false){
												die("Terdapat Kesalahan : ". mysqli_error($konek));
											}
											while($jrs=mysqli_fetch_array($queryjrs)){
												if($jrs["Kode_Kelas"]!=$mhs["Kode_Kelas_Mhs"]){
													echo "<option value=$jrs[Kode_Kelas]>$jrs[Nama_Kelas]</option>";
												}
											}
											
										?>
										</select>
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