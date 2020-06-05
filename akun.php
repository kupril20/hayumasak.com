<!DOCTYPE html>
<html>
<head>
	<title>Beranda</title>
<style>
    	body {
	background-image: url(BgBeranda.jpg);
			background-repeat: no-repeat;
			background-position: center;
			background-size: cover;
			background-attachment: fixed;
}
#menubar{
  background-color: #333;
  overflow: hidden;
  width: 100%;
  height: 60px;
}
* {
  margin: 0px;
padding: 0px;
   
}
h1 {color: limegreen;font-family: santalum; text-align: center;
    margin-top: 50px; font-size: 42px; text-shadow: 1px 5px 5px black; }

nav { background-color: #6B3F1D;;
        width: 10%;
        height: 450px;
    float: left;
    padding: 20px 15px;
    font-size: 20px;
    font-family: santalum;
    
    }
a { 
    text-decoration: none;
    color: orange;
    text-shadow: 1px 1px 1px black;
    }
a:hover {
  color: white;
}
a.active {
  color: green;
    text-shadow: 1px 1px 1px black;
}
   
.post, p { margin-left: 10px;
    width: 97%;
    margin-left: 10px;
    padding-left: 10px;
        height: 490px;
        color : white;
        font-family: santalum;
        font-size: 18px;
        text-align: justify;}
    
    input {margin-left: 1px; width: 200%; height: 30px; font-size: 17px;}  

    td {text-align: left; padding: 7px 50px; font-size: 22px;}
</style>
</head>
<body>
<div id="menubar"><a href="main.php">
    <img src="logo.png" style="width: 80px; height : 50px;float: left;"></a>
</div>

<div>
<nav>
<a  href=resep.php>Beranda</a>
<a class="active" href=akun.php>Akun</a>
<a href=#>Postingan</a>
<a href=index.php>Logout</a>
</nav> 
</div>
<div class="post">
<br>
<h2 style="text-align : center">DATA USER</h2>
<form method="POST">
<table>
<tr>
<td>&nbsp;&nbsp;&nbsp;Username </td> 
<td><input type="text"  name="Username"></td>
</tr>
<tr>
<td>&nbsp;&nbsp;&nbsp;Email </td> 
<td><input type="text"  name="Email"></td>
</tr>
<tr>
<td>&nbsp;&nbsp;&nbsp;Password </td> 
<td><input type="password"name="Password"></td>
</tr>
<tr>
<td>&nbsp;&nbsp;&nbsp;Konfirmasi Password </td> 
<td><input type="password"  name="Konfirmasi_password"></td>
</tr>
<tr>
<td>&nbsp;&nbsp;&nbsp;No. Telp </td> 
<td><input type="text" name="No_telp"></td>
</tr>
<tr>
<td>&nbsp;&nbsp;&nbsp;Alamat </td> 
<td><input type="text" name="Alamat" style="height: 60px;"></td>
</tr>
<tr>
<td>&nbsp;&nbsp;&nbsp;Komentar </td> 
<td><input type="text" name="Komentar"></td>
</tr>
<tr>
				<td>   
                <input type="submit" name="simpan" value="Tendeun" style="width : 150px; font-size: 20px;
    font-family: santalum; background-color : orange; border-radius : 10px;">
                    </td>
</tr>
  <?php
				include "koneksi.php";
					
					if(isset($_POST['simpan'])){
        $Username = $_POST['Username'];
        $Email = $_POST['Email'];
        $No_telp = $_POST['No_telp'];
		$Password = $_POST['Password'];
		$Konfirmasi_password = $_POST['Konfirmasi_password'];
        $Alamat = $_POST['Alamat'];
        $Komentar = $_POST['Komentar'];
                        
						if ($Username != "" || $Email != "" || $No_telp != ""|| $Password != ""|| $Konfirmasi_password != ""|| $Alamat != ""|| $Komentar != "") {

							if($Konfirmasi_password == $Password){
							$input = mysqli_query($koneksi, "INSERT INTO akun VALUES ('$Username','$Email','$No_telp','$Password','$Konfirmasi_password','$Alamat','$Komentar')");
							header("location:akun.php");
						      }
						}

						
					}
			?>
</table>
    </form>
</div>
    
<footer style="background-color: #333; color : white;text-align : center; padding : 30px 10px;" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid perspiciatis ipsum consequatur, sed impedit dolore nobis error rem, quam fugiat beatae nemo debitis alias labore est repellendus fuga numquam in?<br><br>
Copyright &copy; 2019 by Aprilyani Sanjaya
</footer>
</body>
</html>