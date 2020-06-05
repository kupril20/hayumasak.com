<!DOCTYPE html>
<html>
<head>
	<title>Hayumasak.com</title>

<style>
 body {
	background-image: url(bgUser.jpg);
			background-repeat: no-repeat;
			background-position: center;
			background-attachment: fixed;
			background-size: cover;
}
    
/* Add a black background color to the top navigation */
#menubar {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
#menubar a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 22px 30px;
  text-decoration: none;
  font-size: 20px;
font-family: santalum;
   
}

/* Change the color of links on hover */
#menubar a:hover {
  background-color: green;
  color: white;
}

/* Add a color to the active/current link */
#menubar a.active {
  background-color: orangered;
  color: white;
}
    
* {
  margin: 0px;
padding: 0px;
   
}

/* Style the search field */
form.example input[type=text] {
  height: 50px;
  font-size: 17px;
  border: 1px solid grey;
  float: center;
  width: 60%;
  background: #f1f1f1;
  margin-top: 100px;
    border-radius: 15px
}

/* Style the submit button */
form.example button {
  float: center;
  width: 15%;
  height: 50px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  cursor: pointer;
    margin-top: 80px;
    border-radius: 15px
}

form.example button:hover {
  background: #0b7dda;
}

/* Clear floats */
form.example::after {
  content: "";
  clear: both;
  display: table;
}
/*td {background-color: #6B3F1D;padding: 20px 10px; border-radius: 20px;opacity: 0.8;}*/
    
table {
        margin-top: 150px;
    background-color: #6B3F1D;
    padding: 60px 10px;    
    }
    
img { margin: 20px 15px;
  			float: left;
  			width: 90%; height: 200px;
            border-radius: 30px;
/*            border: 3px black solid;*/
            box-shadow: 2px 3px 3px black;
           }

    .text, h3,h4{color :white; margin-left: 20px;
    text-align:justify; margin-right: 15px}
    ol {margin-left: 50px; color: white; margin-bottom: 10px}
    
    h1 {color: orange;font-family: santalum;
    margin-top: 100px; font-size: 72px; text-shadow: 1px 5px 5px black; }
</style>
    

</head>
<body>
<div id="menubar">
  <img src="logo.png" style="width: 100px; height : 50px; margin : 5px;">
  <a class="active" href="index.php">Logout</a>
  <a href="#news">Tips</a>
  <a href="#contact">Kategori</a>
    <a href="resep.php">Buat Resep</a>
</div>
<div>
<center> 
    
    <h1>Hayumasak.com</h1>
    
<form action="" class="example">
  <input type="text" placeholder="  Cari Menu Masakan..." name="search">
  <button type="submit" >Cari</button>
</form>
</center>   
</div>
<table>
    <tr>
    <td>
    <img src="balabala.jpg" alt="">
    <h3>Bala-Bala</h3>
    <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid perspiciatis ipsum consequatur, sed impedit dolore nobis error rem, quam fugiat beatae nemo debitis alias labore est repellendus fuga numquam in?<br>
    <h3>Langkah-Langkah</h3><br>
    <ol>
    <li>Siapkan Terigu</li>
    <li>Siapkan Terigu</li>
    <li>Siapkan Terigu</li>
    <li>Siapkan Terigu</li>
    <li>Siapkan Terigu</li>
    </ol>
    <h4>Respe by Mamah Minor</h4>
    </p>
    </td>
    
    <td>
    <img src="Sayur%20sop.jpg" alt="">
    <h3>Bala-Bala</h3>
        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid perspiciatis ipsum consequatur, sed impedit dolore nobis error rem, quam fugiat beatae nemo debitis alias labore est repellendus fuga numquam in?<br>
    <h3>Langkah-Langkah</h3><br>
    <ol>
    <li>Siapkan Terigu</li>
    <li>Siapkan Terigu</li>
    <li>Siapkan Terigu</li>
    <li>Siapkan Terigu</li>
    <li>Siapkan Terigu</li>
    </ol>
    <h4>Respe by Mamah Minor</h4>
    </p>
    </td>

    <td>
	<img src="sayurkacang.jpg" alt="">
    <h3>Bala-Bala</h3>
       <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid perspiciatis ipsum consequatur, sed impedit dolore nobis error rem, quam fugiat beatae nemo debitis alias labore est repellendus fuga numquam in?<br>
    <h3>Langkah-Langkah</h3><br>
    <ol>
    <li>Siapkan Terigu</li>
    <li>Siapkan Terigu</li>
    <li>Siapkan Terigu</li>
    <li>Siapkan Terigu</li>
    <li>Siapkan Terigu</li>
    </ol>
    <h4>Respe by Mamah Minor</h4>
    </p>
    </td>

    <tr>    
    <td>
	<img src="perkedel.jpg" alt="">
    <h3>Bala-Bala</h3>
        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid perspiciatis ipsum consequatur, sed impedit dolore nobis error rem, quam fugiat beatae nemo debitis alias labore est repellendus fuga numquam in?<br>
    <h3>Langkah-Langkah</h3><br>
    <ol>
    <li>Siapkan Terigu</li>
    <li>Siapkan Terigu</li>
    <li>Siapkan Terigu</li>
    <li>Siapkan Terigu</li>
    <li>Siapkan Terigu</li>
    </ol>
    <h4>Respe by Mamah Minor</h4>
    </p>
    </td>

    <td>
    <img src="kangkung.jpg" alt="">
    <h3>Bala-Bala</h3>
        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid perspiciatis ipsum consequatur, sed impedit dolore nobis error rem, quam fugiat beatae nemo debitis alias labore est repellendus fuga numquam in?<br>
    <h3>Langkah-Langkah</h3><br>
    <ol>
    <li>Siapkan Terigu</li>
    <li>Siapkan Terigu</li>
    <li>Siapkan Terigu</li>
    <li>Siapkan Terigu</li>
    <li>Siapkan Terigu</li>
    </ol>
    <h4>Respe by Mamah Minor</h4>
    </p>
    </td>
    
    <td>
	<img src="nasgor.jpg" alt="">
    <h3>Bala-Bala</h3>
        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid perspiciatis ipsum consequatur, sed impedit dolore nobis error rem, quam fugiat beatae nemo debitis alias labore est repellendus fuga numquam in?<br>
    <h3>Langkah-Langkah</h3><br>
    <ol>
    <li>Siapkan Terigu</li>
    <li>Siapkan Terigu</li>
    <li>Siapkan Terigu</li>
    <li>Siapkan Terigu</li>
    <li>Siapkan Terigu</li>
    </ol>
    <h4>Respe by Mamah Minor</h4>
    </p>
   </td>
    </tr> 
</table>    

<footer style="background-color: #333; color : white;text-align : center; padding : 30px 10px;" ><div style="color : white">Copyright &copy; 2020</div><br>
</footer>
</body>
</html>