<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
<style>
    	body {
	background-image: url(bgAdmin.jpg);
			background-repeat: no-repeat;
			background-position: center;
			background-size: cover;
			background-attachment: fixed;
}
    h2 {color: white}

    table {border: 1px solid white; padding: 20px;
    margin: 30px 30px; width: 80%; background-color: orange;}
    
    td,th,a {color: black; text-decoration: none;
    font-size: 20px; font-family: santalum;}
    td,th {border: 1px solid black; padding: 10px;
    }
    

</style>
</head>
<body>
	<center>
        <h2>Menu Admin</h2>
	</center>
    <center>
	<table >
		<tr>
			<th style="color : red;text-shadow: 2px 2px 2px black;">Username</th>
			<th style="color : red;text-shadow: 2px 2px 2px black;">Password</th>
            <td><a href="editData.php?id=<?= $data['Username']; ?>"style="color : red;text-shadow: 2px 2px 2px black;">Edit</a></td>
			<td><a href="hapusData.php?id=<?= $data['Username']; ?>"style="color : red;text-shadow: 2px 2px 2px black;">Hapus</a></td>
		</tr>
	<?php
		include "koneksi.php";

		$dataakun = mysqli_query($koneksi, "SELECT * FROM admin");
		while($data = mysqli_fetch_array($dataakun)){
	?>
		<tr>
			<td><?= $data['Username']; ?></td>
			<td><?= $data['Password']; ?></td>
			<td><a href="editData.php?id=<?= $data['Username']; ?>">Edit</a></td>
			<td><a href="hapusData.php?id=<?= $data['Username']; ?>">Hapus</a></td>
		</tr>
	<?php		
		}
	?>	
	</table>
	<form method="POST">
	<input type="submit" name="tblKembali" value="Kembali">
	</form>
	<?php
		
		if(isset($_POST['tblKembali'])){
			header("location:index.php");
		}

	?>
	</center>
</body>
</html>