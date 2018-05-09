l<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html> <!-- memberitahu browser bahwa ini versi HTML 5-->
<html lang="en">
<head>
<title>Form Login</title> <!-- Judul, dibagian tab-->
	<!-- Meta tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- membuat tampilan responsive-->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <!-- membuat browser membaca semua karakter / bahasa-->
		<meta name="keywords" content="Form Login, Manajemen Informatika" /> <!-- fungsi SEO / search engin optimation -->
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script> <!-- load java script -->
	<!-- Meta tags -->


<!-- font-awesome icons -->
   <link rel="stylesheet" href="css/font-awesome.min.css" /> <!-- memanggil file intern, di folder css, file nya font-awesome.com -->

<!-- //font-awesome icons -->
<!--stylesheets-->
<link href="css/style.css" rel='stylesheet' type='text/css' media="all"> <!-- memanggil file intern, di folder css, file nya style.css -->
<!--//style sheet end here-->

<link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet"> <!-- memanggil file luat, stylesheet menandakan dia berbentuk css-->

</head> <!-- batas dari head -->
<body> <!-- awal dari body / konten web -->

<?php
		if(isset($_GET["Login_error"]))
			{echo "<h2 style='color:red';>username atau password salah</h2>";
		}
?>

<h1>Login Admin</h1> <!-- Heading / Judul dibagian konten, semakin besar h nya, semakin kecil ukuran teks yang ditampilkan -->

<div class="main-w3"> <!-- memanggil class main-w3 di file class -->
   <form action="proses_login.php" method="post">
        <h2><span class="fa fa-user t-w3" aria-hidden="true"></span></h2>
     <div class="login-w3ls">
         <div class="icons">
             
		     <input type="email" name="email" placeholder="Email" required="">
			 <span class="fa fa-user" aria-hidden="true"></span>
          <div class="clear"></div> 
		</div> 		   
		 <div class="icons">
				
				<input type="password" name="password" placeholder="Password" required="">
				<span class="fa fa-key" aria-hidden="true"></span>
		         <div class="clear"></div>
		</div>
	     <div class="btnn">
         <input type="checkbox" class="checked"><span class="span">INGAT SAYA?</span><br>
	          <button type="submit">Login</button><br>
       	      <a href="#" class="for" >LUPA PASSWORD?</a>  
        </div>	
     </div>
   </form>

 </div> 

    <div class="copy">
    <p>&copy;2017 Manajemen Informatika 12.5A.16. All Rights Reserved | Design by Yusuf Mulyadi™
</div>
</body>
</html>