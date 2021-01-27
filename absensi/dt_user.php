<thead>
		<tr>
			<!--<th width="100px"><b>ID</b></th>-->
			<th width="50px"><b>no</b></th>
			<th width="50px"><b>id</b></th>
			<th width="50px"><b>uid</b></th>
			<th width="100px"><b>Nama</b></th>
			<th width="50px"><b>jamdatang</b></th>
			<th width="50px"><b>jampulang</b></th>
			<th width="100px"><b>kelas</b></th>
			<th width="100px"><b>status</b></th>

		</tr>
	</thead>	
<tbody>
	<?php
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    print_r($username);
	$no_urut = 0;
		$queryabs = mysqli_query ($konek, "SELECT a.*,b.* FROM tblkehadiran as a LEFT JOIN mahasiswa as b ON a.uid = b.uid WHERE b.nim = $username ORDER BY a.id desc");
			if($queryabs == false){
			die ("Terjadi Kesalahan : ". mysqli_error($konek));
			}
			while ($abs = mysqli_fetch_array ($queryabs)){
				
				$no_urut++;
				echo "
				<tr>
				<td>$no_urut</td>
					<td>$abs[id]</td>
					<td>$abs[uid]</td>
					<td>$abs[Nama_Mahasiswa]</td>
					<td>$abs[jamdatang]</td>
					<td>$abs[jampulang]</td>
					<td>$abs[Kode_Kelas_Mhs]</td>
					<td>$abs[status]</td>				
				</tr>";			
			}			
		?>
</tbody>

