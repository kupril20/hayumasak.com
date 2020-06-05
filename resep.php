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
        height: 475px;
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
        height: 515px;
        color : white;
        font-family: santalum;
        font-size: 18px;
        text-align: justify;}

</style>
</head>
<body>
<div id="menubar">
<a href="main.php">
  <img src="logo.png" style="width: 80px; height : 50px;float: left;">
</a>
</div>

<div>
<nav>
<a class="active" href=resep.php>Beranda</a><br>
<a href=akun.php>Akun</a><br>
<a href=postingan.php>Postingan</a><br>
<a href=index.php>Logout</a><br>
</nav> 
</div>
<div class="post">

<img src="Sayur%20sop.jpg" alt="" style=" width: 500px;
float:right;box-shadow: 2px 3px 3px black; border-radius : 20px;
margin : 20px 6px;">
<br>
<h2>Sayur Sop</h2>
perspiciatis ipsum consequatur, sed impedit dolore nobis error rem, quam fugiat beatae nemo debitis alias labore est repellendus fuga numquam in?
<br><br>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid perspiciatis ipsum consequatur, sed impedit dolore nobis error rem, quam fugiat beatae nemo debitis alias labore est repellendus fuga numquam in?
<br><br>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid perspiciatis ipsum consequatur, sed impedit dolore nobis error rem, quam fugiat beatae nemo debitis alias labore est repellendus fuga numquam in?
<br>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid perspiciatis ipsum consequatur, sed impedit dolore nobis error rem, quam fugiat beatae nemo debitis alias labore est repellendus fuga numquam in?
  
</div>
    
<footer style="background-color: #333; color : white;text-align : center; padding : 30px 10px;" ><div style="color : white">Copyright &copy; 2020</div><br>
</footer>
</body>
</html>