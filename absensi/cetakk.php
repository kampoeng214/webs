<?php
include('../koneksi.php');
require_once("../dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$sql = "SELECT a.*,b.*, TIMEDIFF(jampulang,jamdatang) AS hours FROM tblkehadiran as a INNER JOIN mahasiswa as b ON a.uid = b.uid";
	$fromDate = $_GET['fromDate'];
	$endDate = $_GET['endDate'];
	$search = $_GET['search'];
	if(($fromDate != '') && ($endDate != '')){
		$sql .= " and date between '".$fromDate."' and '".$endDate."' ";
	}
	if(($search != '')){
	   $sql .= " and b.Nama_Mahasiswa like '%".$search."%'";
   }
//    print_r($sql);
   $query = mysqli_query($konek, $sql);
// print_r($query);
$html = '<center><p><h2>Rekapitulasi Kehadiran</h2></p>
<p><h3>SLB FITRIA-ABCD</h3></p>
<P><h3>Tanggal : '.$fromDate.' s/d '.$endDate.'</h3></P></center><hr/><br/>';

//$html .= '<center><h6>Tanggal : '.$fromDate.' s/d '.$endDate.'</h6></center><hr/><br/>';
$html .= '<table border="1" width="100%">
 <tr>
 <th>No</th>
 <th>uid</th>
 <th>nama</th>
 <th>jamdatang</th>
 <th>jampulang</th>
 <th>status</th>
 <th>durasi kehadiran</th>
  </tr>';
$no = 1;
while($row = mysqli_fetch_array($query))
{
 $html .= "<tr>
 <td>".$no."</td>
 <td>".$row['uid']."</td>
 <td>".$row['Nama_Mahasiswa']."</td>
<td>".$row['jamdatang']."</td>
 <td>".$row['jampulang']."</td>
 <td>".$row['status']."</td>
 <td>".$row['hours']."</td>
 </tr>";
  $no++;
}
$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan_siswa.pdf');
?>