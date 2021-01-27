
	<!-- jQuery 2.1.4 -->
    <script src="../aset/plugins/jQuery/jQuery-2.1.4.min.js"  ></script>
	
	<script src="../aset/plugins/jQueryUI/jQuery-ui.min.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../aset/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../aset/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../aset/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../aset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../aset/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../aset/dist/js/app.min.js"></script>
	<!-- Daterange Picker -->
	<script src="../aset/plugins/daterangepicker/moment.min.js"></script>
	<script src="../aset/plugins/daterangepicker/daterangepicker.js"></script>
	<script src="../aset/plugins/select2/select2.full.min.js"></script>
	<script src="../aset/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

	
	
	<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" ></script>
	<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js" ></script>
	<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" ></script>
	<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js" ></script>
	<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js" ></script>
	<!-- page script -->
    <script>
      $(function () {	
		// Daterange Picker
		$('#Tanggal_Lahir').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true,
			format: 'YYYY-MM-DD'
		});
		
		  // Data Table
		
      });
    </script>
	
	<!-- Date Time Picker -->
	<script>
		$(function (){
			$('#Jam_Mulai').datetimepicker({
				format: 'HH:mm'
			});
			
			$('#Jam_Selesai').datetimepicker({
				format: 'HH:mm'
			});
		});
	</script>
	
	<!-- Javascript Edit--> 
	<script type="text/javascript">
		// $(document).ready(function () {

		// 	$("#data").dataTable({
		// 	// dom:'Bfrtip',
		// 	// buttons: [
		// 	// 	{
		// 	// 		extend: 'pdf',
		// 	// 		messageTop: "test message"
		// 	// 	},
		// 	// 	'csv' ,'print','copy'
		// 	// ]
			
		// });		
		// Dosen
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "siswa_modal_edit.php",
					type: "GET",
					data : {uid: m,},
					success: function (ajaxData){
					$("#ModalEditSiswa").html(ajaxData);
					$("#ModalEditSiswa").modal('show',{backdrop: 'true'});
					}
				});
			});
		
		// Mahasiswa
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "siswa_modal_edit.php",
					type: "GET",
					data : {uid: m,},
					success: function (ajaxData){
					$("#ModalEditSiswa").html(ajaxData);
					$("#ModalEditSiswa").modal('show',{backdrop: 'true'});
					}
				});
			});
			
		// Ruangan
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "ruangan_modal_edit.php",
					type: "GET",
					data : {Kode_Ruangan: m,},
					success: function (ajaxData){
					$("#ModalEditRuangan").html(ajaxData);
					$("#ModalEditRuangan").modal('show',{backdrop: 'true'});
					}
				});
			});

		// Matakuliah
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "kelas_modal_edit.php",
					type: "GET",
					data : {Kode_Kelas: m,},
					success: function (ajaxData){
					$("#ModalEditKelas").html(ajaxData);
					$("#ModalEditKelas").modal('show',{backdrop: 'true'});
					}
				});
			});
			
		// Jurusan
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "jurusan_modal_edit.php",
					type: "GET",
					data : {Kode_Jurusan: m,},
					success: function (ajaxData){
					$("#ModalEditJurusan").html(ajaxData);
					$("#ModalEditJurusan").modal('show',{backdrop: 'true'});
					}
				});
			});
			
		// Jenjang
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "jenjang_modal_edit.php",
					type: "GET",
					data : {Kode_Jenjang: m,},
					success: function (ajaxData){
					$("#ModalEditJenjang").html(ajaxData);
					$("#ModalEditJenjang").modal('show',{backdrop: 'true'});
					}
				});
			});
			




// keterangan
$(".open_modal_keterangan").click(function(e) {
			var m = $(this).attr("id");
				$.ajax({
					url: "absensi_modal_keterangan.php",
					type: "GET",
					data : {uid: m,},
					success: function (ajaxData){
					$("#ModalKeteranganSiswa").html(ajaxData);
					$("#ModalKeteranganSiswa").modal('show',{backdrop: 'true'});
					}
				});
			});




	</script>
	
	<!-- Javascript Delete -->
	<script>
		function confirm_delete(delete_url){
			$("#modal_delete").modal('show', {backdrop: 'static'});
			document.getElementById('delete_link').setAttribute('href', delete_url);
		}
	</script>

<script>
        $(document).ready(function(){
			(function(){
			$("FormsDate").datepicker();
			$("EndDate").datepicker();
            });
        });
</script>

<script type='text/javascript'>
        $(document).ready(function(){
            $('.dateFilter').datepicker({
                dateFormat: "yy-mm-dd"
            });
        });
        </script>