<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>Data Pendaftar</h2>
		<table class="table">
			<thead>
				<tr>
					<th>NO</th>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1.</td>
					<td>meng</td>
					<td>Alesssandro@gmail.com</td>
					<td>jl.rumbut</td>
					<td>+638971639</td>
				</tr>
				<tr>
					<td>2.</td>
					<td>ming</td>
					<td>Riafitriyani@gmail.com</td>
					<td>jl.sukatani</td>
					<td>+89606960407</td>
				</tr>

				<?php

				if (isset($_POST['proses'])){


					$no = $_POST['no'];
					$nama_siswa = $_POST['nama_lengkap'];
					$email = $_POST['email'];
					$alamat = $_POST['alamat'];
					$telepon = $_POST['telepon'];

				echo '<tr>
						<td>'.$_POST['no'].'</td>
						<td>'.$_POST['nama_lengkap'].'</td>
						<td>'.$_POST['email'].'</td>
						<td>'.$_POST['alamat'].'</td>
						<td>'.$_POST['telepon'].'</td>
						
					
					</tr>';
				}



				?>

			</tbody>
		</table>
	</div>
</body>
</html>