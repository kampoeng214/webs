<!DOCTYPE html>
<html>

<head>
    <title>CETAK PRINT DATA DARI DATABASE DENGAN PHP - WWW.MALASNGODING.COM</title>
</head>

<body>

    <center>
        <h2>DATA LAPORAN BARANG</h2>
        <h4>WWW.MALASNGODING.COM</h4>
    </center>

    <?php
 include '../koneksi.php';
$emp_query = "SELECT *, TIMEDIFF(jampulang,jamdatang) AS hours FROM tblkehadiran INNER JOIN mahasiswa ON tblkehadiran.uid = mahasiswa.uid";
 //$emp_query = "SELECT a.*,b.* FROM tblkehadiran as a LEFT JOIN mahasiswa as b ON a.uid = b.uid ORDER BY a.id WHERE 1";
 // Date filter
 $fromDate = '';
 $endDate = '';
 $search = '';
 if(isset($_POST['but_search'])){
     $fromDate = $_POST['fromDate'];
     $endDate = $_POST['endDate'];
     $search = $_POST['search'];
     if(!empty($fromDate) && !empty($endDate)){
         $emp_query .= " and date between '".$fromDate."' and '".$endDate."' ";
     }
     if(!empty($search)){
        $emp_query .= " and mahasiswa.Nama_Mahasiswa like '%".$search."%'";
    }
 }
//  echo "<a href='print.php?fromDate=".$fromDate."&endDate=".$endDate."&search=".$search."'><p><button>pdfdsdwdfwdfedwdfced</button></p></a>";
?>
    <table border="1" style="width: 100%" <tr>
        <th>UID</th>
        <th>NAMA</th>
        <th>JAMDATANG</th>
        <th>JAMPULANG</th>
        <th>STATUS</th>
        <th width="100px">Total Durasi kehadiran</th>
        </tr>

        <tbody>
            <?php
                // Sort
                $emp_query .= " ORDER BY date DESC";
                $employeesRecords = mysqli_query($konek,$emp_query);

                // print_r($employeesRecords);
                // Check records found or not
                if(mysqli_num_rows($employeesRecords) > 0){
                    while($empRecord = mysqli_fetch_assoc($employeesRecords)){
                        $id = $empRecord['id'];
                        $uid = $empRecord['uid'];
                        $jamdatang = $empRecord['jamdatang'];
                        $jampulang = $empRecord['jampulang'];
						$date = $empRecord['date'];
                        $status = $empRecord['status'];
                        $nama = $empRecord['Nama_Mahasiswa'];
                        $hours = $empRecord['hours'];

                        echo "<tr>";
                        echo "<td>". $uid ."</td>";
                        echo "<td>". $nama ."</td>";
                        echo "<td>". $jamdatang ."</td>";

                        echo "<td>". $jampulang ."</td>";
						
                        echo "<td>". $status ."</td>";
                        echo "<td>". $hours ."</td>";
                        echo "</tr>";
                    }
                }else{
                    echo "<tr>";
                    echo "<td colspan='4'>No record found.</td>";
                    echo "</tr>";
                }
                ?>

    </table>
    <script>
        window.print();
    </script>

</body>

</html>