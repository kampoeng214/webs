<?php


include "../koneksi.php";
// mengaktifkan session
session_start();
 
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
  header("location:../index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>
		<center>Rekapitulasi Kehadiran</center>
	</title>
	<!-- Library CSS -->
	<?php
		include "bundle_css.php";
	?>


</head>


<body class="hold-transition skin-blue sidebar-mini">



	<div class="wrapper">
		<?php
        include 'content_header.php';
       ?>
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel -->
				<div class="user-panel">
					<div class="pull-left image">
						<p></p>
					</div>
				</div><!-- sidebar menu: : style can be found in sidebar.less -->
				<ul class="sidebar-menu">
					<li class="header">
						<h4><b>
								<center>Menu Panel</center>
							</b></h4>
					</li>
					<li><a href="index.php"><i class="fa fa-home"></i><span>Home</span></a></li>

					<li><a href="siswa.php"><i class="fa fa-users"></i><span>Siswa</span></a></li>
					<li><a href="kelas.php"><i class="fa fa-columns"></i><span>kelas</span></a></li>


					<li><a href="absensi.php"><i class="fa fa-calendar"></i><span>absensi</span></a></li>
					<li class="active"><a href="laporan.php"><i class="fa fa-user-circle-o"></i><span>laporan
							</span></a></li>

				</ul>
			</section>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					laporan
				</h1>

				<ol class="breadcrumb">
					<li><i class="fa fa-user-circle-o"></i> laporan</li>
				</ol>
			</section>

			<!-- Main content -->
			<section class="content">
				<div class="row">
					<div class="col-xs-12">
						<div class="box">
							<div class="box-header">

							</div><!-- /.box-header -->
							<div class="box-body">

								<form method='post' action=''>
									Start Date <input type='date' class='dateFilter' name='fromDate'
										value='<?php if(isset($_POST['fromDate'])) echo $_POST['fromDate']; ?>'>

									End Date <input type='date' class='dateFilter' name='endDate'
										value='<?php if(isset($_POST['endDate'])) echo $_POST['endDate']; ?>'>

									Search <input type='text' class='' name='search'
										value='<?php if(isset($_POST['search'])) echo $_POST['search']; ?>'>


									<input type='submit' name='but_search' value='Search'>
								</form>
								<!-- <a href='print.php?fromDate=".$fromDate."&endDate=".$endDate."&search=".$search."'>
									<p><button>pdf</button></p>
								</a> -->
								<div class="form-group">
									<br></br>
									<table id="data"
										class="table table-bordered table-striped table-scalable display nowrap">
										<?php
							include "dt_laporan.php";
						?>
									</table>
								</div><!-- /.box-body -->
							</div><!-- /.box -->
						</div><!-- /.col -->
					</div><!-- /.row -->
			</section><!-- /.content -->

			<!-- Modal Popup Dosen -->
			<div id="ModalAddDosen" class="modal fade" tabindex="-1" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
									aria-hidden="true">&times;</span></button>
							<h4 class="modal-title">Tambah User Instruktur</h4>
							<br />
							<h6 class="modal-title">Username Dan Password = NIP Instruktur</h6>
						</div>
						<div class="modal-body">
							<form action="user_add_dosen.php" name="modal_popup" enctype="multipart/form-data"
								method="post">
								<div class="form-group">
									<label>Usergroup</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select name="Id_Usergroup_User" class="form-control">
											<option value=2 selected>Instruktur</option>
										</select>
									</div>
								</div>

								<div class="modal-footer">
									<button class="btn btn-success" type="submit">
										Create User
									</button>
									<button type="reset" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">
										Cancel
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<!-- Modal Popup Dosen -->
			<div id="ModalAddMahasiswa" class="modal fade" tabindex="-1" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
									aria-hidden="true">&times;</span></button>
							<h4 class="modal-title">Tambah User Siswa</h4>
							<br />
							<h6 class="modal-title">Username Dan Password = NIM Siswa</h6>
						</div>
						<div class="modal-body">
							<form action="user_add_mahasiswa.php" name="modal_popup" enctype="multipart/form-data"
								method="post">
								<div class="form-group">
									<label>Usergroup</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select name="Id_Usergroup_User" class="form-control">
											<option value=3 selected>Siswa</option>
										</select>
									</div>
								</div>

								<div class="modal-footer">
									<button class="btn btn-success" type="submit">
										Create User
									</button>
									<button type="reset" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">
										Cancel
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<!-- Modal Popup untuk delete-->
			<div class="modal fade" id="modal_delete">
				<div class="modal-dialog">
					<div class="modal-content" style="margin-top:100px;">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" style="text-align:center;">Are you sure to delete this information ?
							</h4>
						</div>
						<div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
							<a href="#" class="btn btn-danger" id="delete_link">Delete</a>
							<button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
						</div>
					</div>
				</div>
			</div>

		</div><!-- /.content-wrapper -->
		<?php
		include	"content_footer.php";
	?>
	</div><!-- ./wrapper -->
	<!-- Library Scripts -->
	<?php
		include "bundle_script.php";
	?>




</body>

</html>