				<thead>
					<tr>
						<th>NIM</th>
						<th>siswa</th>
						<th>Tanggal Lahir</th>
						<th>Jenis Kelamin</th>
						<th>Telpon</th>
						<th>Alamat</th>
						<th>No Registrasi</th>
						<th>uid</th>
						<th>Kelas</th>
						<th>Action</th>
					</tr>
				</thead>
				
				<tbody>
					<?php
						$querymhs = mysqli_query ($konek, "SELECT NIM, Nama_Siswa, DATE_FORMAT(Tanggal_Lahir, '%d-%m-%Y')as Tanggal_Lahir, JK, No_Telp, Alamat, No_Registrasi, uid, Kode_Kelas_Mhs, Nama_Kelas FROM siswa LEFT JOIN kelas ON Kode_Kelas_Mhs = Kode_Kelas");
						//$querymhs = mysqli_query ($konek, "SELECT NIM, Nama_Mahasiswa, DATE_FORMAT(Tanggal_Lahir, '%d-%m-%Y')as Tanggal_Lahir, JK, No_Telp, Alamat, Kode_Jurusan_Mhs, Nama_Jurusan,  No_Registrasi, uid, Kode_Kelas_Mhs, Nama_Kelas FROM mahasiswa Left join jurusan on Nama_Jurusan ");
						if($querymhs == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
							
						while ($mhs = mysqli_fetch_array ($querymhs)){
							
							echo "
								<tr>
									<td>$mhs[NIM]</td>
									<td>$mhs[Nama_Siswa]</td>
									<td>$mhs[Tanggal_Lahir]</td>
									<td>
								";
									if($mhs["JK"] == "L"){
										echo "Laki - laki";
									}
									else{
										echo "Perempuan";
									}
							echo "
									</td>
									<td>$mhs[No_Telp]</td>
									<td>$mhs[Alamat]</td>
									<td>$mhs[No_Registrasi]</td>
									<td>$mhs[uid]</td>
									<td>$mhs[Nama_Kelas]</td>
									
									
									<td>
										<a href='#' class='open_modal' id='$mhs[uid]'>Edit</a> |
										<a href='#' onClick='confirm_delete(\"siswa_delete.php?uid=$mhs[uid]\")'>Delete</a> 
									</td>
								</tr>";
						}
					?>
				</tbody>