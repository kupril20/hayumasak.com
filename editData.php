<!DOCTYPE html>
<html>
<head>
	<title>Hayumasak.com</title>
<link rel="stylesheet" href="index.css">
<style>
	body {
	background-image: url(bgSingup.jpg);
			background-repeat: no-repeat;
			background-position: center;
			background-size: cover;
			background-attachment: fixed;
}
</style>
</head>
<body >
    <?php 
    include "koneksi.php";
    $id = $_GET['id'];
	$edit = mysqli_query($koneksi, "SELECT * FROM admin WHERE id_akun = '$id'");
    ?>
<center>
<div class="kotaksignup">
	<img src="logo.png" style="width: 100px">
	<form method="POST">
		<div id="signup">Edit Akun</div>
		<table>
            
			<tr>
				<td>Username :</td>
			</tr>
			<tr>
				<td><input type="text" 
				placeholder=" masukan username baru"
					name="Username"></td>
			</tr>
			<tr>
				<td>Password :</td>
			</tr>
			<tr>
				<td><input type="password" 
				placeholder=" masukan password baru"
					name="Password"></td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" name="tblBuat" value="Simpan"></td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" name="tblKembali" value="Kembali"></td>
			</tr>
			<?php
            
				include "koneksi.php";
					if(isset($_POST['tblBuat'])){
                       
						$Username = $_POST['Username'];
						$Password = $_POST['Password'];
                       
							$update = mysqli_query($koneksi, "UPDATE admin SET Username = '$Username', Password = '$Password' WHERE id_akun = '$id'");
				header("location:admin.php");					
					
            }
					if(isset($_POST['tblKembali'])){
						header("location:admin.php");
					}
                

			?>
            
		</table><br>
		<div style="color : white">Copyright &copy; 2020</div>
	</form>

</div>
</center>
</body>
</html>