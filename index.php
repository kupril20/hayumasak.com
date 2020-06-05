<!DOCTYPE html>
<html>
<head>
	<title>Hayumasak.com</title>
<link rel="stylesheet" href="index.css">
<style>
	body {
	background-image: url(bg1.jpg);
			background-repeat: no-repeat;
			background-position: center;
			background-size: cover;
			background-attachment: fixed;
}
</style>
</head>
<body>
	<center>
	<div class="kotak">
		<center>
			<img src="logo.png" style="width: 100px">
		<h2>Hayumasak.com</h2>
		<form method="POST">
			<table>
				<tr>
					<td>Username :</td>
				</tr>
				<tr>
					<td><input type="text" placeholder="    masukan username" name="Username"></td>
				</tr>
				<tr>
					<td>Password :</td>
				</tr>
				<tr>
					<td><input type="password"
					placeholder="      masukan password" name="Password"><br><br></td>
				</tr>
				<tr>
					<td><input type="submit" name="Asup" value="Masuk" action="<?= $action; ?>"></td>
				</tr>
				<tr>
					<td><input type="submit" name="tblSignUp" value="Buat Akun Baru"></td>
				</tr>
			</table><br><br>

			
			<?php
				include "koneksi.php";

				if(isset($_POST['Asup'])){
					$Username = $_POST['Username'];
					$Password = $_POST['Password'];

					$login = mysqli_query($koneksi, "SELECT * FROM admin");
					while($data = mysqli_fetch_array($login)){
						if($data['Username'] == $Username && $data['Password'] == $Password){
							header("location:main.php");

						}
					}
					//=========================== nilai tanpa balik ==========
					if($Username == "admin" && $Password == "admin"){
						
						header("location:Admin.php");
					}
					else {
						 echo "
       					 <script type='text/javascript'>
        				 alert('Username & Password Anda Salah!');
       					 </script>";

					}
					//=========================================================
				}
				if(isset($_POST['tblSignUp'])){
					header("location:SignUp.php");
				}
			?>
		</form>
            <div style="color : white">Copyright &copy; 2020</div>
	</center>
</div>
</center>
</body>
</html>