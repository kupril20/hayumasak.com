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
        height: 490px;
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
        height: 529px;
        color : white;
        font-family: santalum;
        font-size: 18px;
        text-align: justify;}
    
    input {margin-left: 1px; width: 200%; height: 30px; font-size: 17px;}  

    td {text-align: left; padding: 7px 50px; font-size: 22px;}
</style>
</head>
<body>
<div id="menubar">
<a href="main.php">
    <img src="logo.png" style="width: 80px; height : 50px;float: left;"></a>
</div>

<div>
<nav>
<a  href=resep.php>Beranda</a><br>
<a  href=#>Akun</a><br>
<a class="active" href=postingan.php>Postingan</a><br>
<a href=index.php>Logout</a><br>
</nav> 
</div>
<div class="post">
<br>
<h2 style="text-align : center">POSTINGAN</h2>
<form method="POST">
<table>
<tr>
<td>&nbsp;&nbsp;&nbsp;Judul </td> 
<td><input type="text"  name="Judul"></td>
</tr>
<tr>
<td>&nbsp;&nbsp;&nbsp;Keterangan </td> 
<td><input type="text"  name="Keterangan"></td>
</tr>
<tr>
<td>&nbsp;&nbsp;&nbsp;Bahan-bahan </td> 
<td><input type="text"name="Bahan" style="height: 70px;"></td>
</tr>
<tr>
<td>&nbsp;&nbsp;&nbsp;Langkah-langkah </td> 
<td><input type="text"name="Langkah" style="height: 70px;"></td>
</tr>
<tr>
<td>&nbsp;&nbsp;&nbsp;Gambar </td> 
<td><input type="text"  name="Gambar"></td>
</tr>
<tr>
				<td>   
                <input type="submit" name="post" value="Post" style="width : 150px; font-size: 20px;
    font-family: santalum; background-color : orange; border-radius : 10px;">
                    </td>
</tr>
  <?php
				include "koneksi.php";
					
					if(isset($_POST['post'])){
        $Judul = $_POST['Judul'];
        $Keterangan = $_POST['Keterangan'];
        $Bahan = $_POST['Bahan'];
		$Langkah = $_POST['Langkah'];
		$Gambar = $_POST['Gambar'];
                        
						if ($Judul != "" || $Keterangan != "" || $Bahan != ""|| $Langkah != ""|| $Gambar != "") {
							$input = mysqli_query($koneksi, "INSERT INTO post VALUES ('$Judul','$Keterangan','$Bahan','$Langkah','$Gambar')");
							header("location:postingan.php");
						      
						}

						
					}
			?>
</table>
    </form>
</div>
    
<footer style="background-color: #333; color : white;text-align : center; padding : 30px 10px;" ><div style="color : white">Copyright &copy; 2020</div>
</footer>
</body>
</html>