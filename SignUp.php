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
<center>
<div class="kotaksignup">
	<img src="logo.png" style="width: 100px">
	<form method="POST">
		<div id="signup">Buat Akun Baru</div>
		<table>
			<tr>
				<td>Username :</td>
			</tr>
			<tr>
				<td><input type="text" 
				placeholder=" masukan username"
					name="Username"></td>
			</tr>
			<tr>
				<td>Password :</td>
			</tr>
			<tr>
				<td><input type="password" 
				placeholder=" masukan password"
					name="Password"></td>
			</tr>
			<tr>
				<td>Konfirmasi Password :</td>
			</tr>
			<tr>
				<td><input type="password"
				placeholder=" masukan ulang password" 
				 name="Konfirmasi"><br><br><br></td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" name="tblBuat" value="Sign Up"></td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" name="tblKembali" value="Kembali"></td>
			</tr>
			<?php
				include "koneksi.php";
					
					if(isset($_POST['tblBuat'])){
						$Username = $_POST['Username'];
						$Password = $_POST['Password'];
						$Konfirmasi = $_POST['Konfirmasi'];

						if ($Username != "" || $Password != "") {

							if($Konfirmasi == $Password){
							$input = mysqli_query($koneksi, "INSERT INTO admin (Username,Password) VALUES ('$Username','$Password')");
							header("location:index.php");
						      }
						}

						
					}

					if(isset($_POST['tblKembali'])){
						header("location:index.php");
					}


			?>
		</table><br>
		<div style="color : white">Copyright &copy; 2020</div>
	</form>

</div>
</center>
</body>
</html>