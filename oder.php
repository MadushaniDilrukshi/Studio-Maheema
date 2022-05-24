<?php require_once('inc/connection.php');?>
<?php

if(isset($_POST['submit'])){

$add = $_POST['address'];
$tell = $_POST['tell'];
$date = $_POST['date'];
$dis  = $_POST['dist'];
$type = $_POST['type'];
$Otell = $_POST['otell'];
$email = $_POST['email'];
$unam = $_POST['unam'];
$fram = $_POST['frame'];
$requ = $_POST['requs'];

	


$query = "INSERT INTO maheema_studio.oder (DelliverAddress,DelliverContactNumber,DelliverDate,DelliverDistrict,OderType,OderContactNumber,OderEmail,GoogleDriveLink,NoOfFrame,NoOfRequird) VALUES ('{$add}','{$tell}','{$date}','{$dis}','{$type}','{$Otell}','{$email}','{$unam}','{$fram}','{$requ}')";

	$result = mysqli_query($connection,$query);

	if($result){
		
		//echo "1 record added ";
	
	}
	else{

		echo "databse query faild.";
	}
}
?>

<html>
<head> 
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="style.css">
			
			<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		    <script src="https://www.w3schools.com/lib/w3.js"></script>
  
</head>

<body style="background-color:#46393e;">

<header>

<style>
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

body {
  background-color: #274F5A;
}



/* The grid: Four equal columns that floats next to each other */
.column1 {
  float: left;
  width: 10%;
  padding: 10px;
}

/* Style the images inside the grid */
.column1 img {
  opacity: 0.8; 
  cursor: pointer; 
}

.column1 img:hover {
  opacity: 1;
}

/* Clear floats after the columns */
.row1:after {
  content: "";
  display: table;
  clear: both;
}

/* The expanding image container */
.container {
  position: relative;
  display: none;
}

/* Expanding image text */
#imgtext {
  position: absolute;
  bottom: 15px;
  left: 15px;
  color: white;
  font-size: 20px;
}

/* Closable button inside the expanded image */
.closebtn {
  position: absolute;
  top: 10px;
  right: 15px;
  color: white;
  font-size: 35px;
  cursor: pointer;
}



div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 140px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
h3{
	
	text-align: center;
	color: #F6358A;
     font-size: 35px;

} 
</style>


				  <nav class="navbar">
				  
					<img class="nature" src="home/01.jpg" width="100%" height="550px">
					<img class="nature" src="home/02.jpg" width="100%" height="550px">
					<img class="nature" src="home/03.jpg" width="100%" height="550px">
					<img class="nature" src="home/04.jpg" width="100%" height="550px">
					<img class="nature" src="home/05.jpg" width="100%" height="550px">
					<img class="nature" src="home/06.jpg" width="100%" height="550px">
					
				  <div class="logo" >
							 <img src="home/logo.png">
						</div>
						
					   <ul>
						  <li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
						   <li><a href="PACKAGE.html"><i class="fa fa-camera"></i>Package</a></li>
						   <li><a href="ABOUTUS.html"><i class="fa fa-user"></i>About Us</a></li>
						   <li><a href="GALLERY.html"><i class="fa fa-picture-o"></i>Gallery</a></li>
						   <li><a href="RequestQuote.html"><i class="fa fa-file-text"></i>Request Quote</a></li>
						   <li><a href="CONTACTUS.html"><i class="fa fa-address-book"></i></i>Contact Us</a></li>
							<li><a href="index1.php"><i class="fa fa-file-text"></i>LOGOUT</a></li>
					   </ul>
					   
					   
				  </nav>
		</header><br/>



<!-- The four columns -->

<div class="gallery">
  <a target="_blank" href="online/online1.jpg">
    <img src="online/online1.jpg" title="example 1" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Number 01</div>
</div>

<div class="gallery">
  <a target="_blank" href="online/online2.jpg">
    <img src="online/online2.jpg" title="example 2" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Number 02</div>
</div>

<div class="gallery">
  <a target="_blank" href="online/online3.jpg">
    <img src="online/online3.jpg" title="example 3" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Number 03</div>
</div>

<div class="gallery">
  <a target="_blank" href="online/online5.jpg">
    <img src="online/online5.jpg" title="example 4" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Number 04</div>
</div>

<div class="gallery">
  <a target="_blank" href="online/online6.jpg">
    <img src="online/online6.jpg" title="example 5" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Number 05</div>
</div>







</body>
<h2 >Click Image</h2>

><h3> ONLINE ORDER FORM</h3>
<center
<br>
<br>
<form action="#" method="post" >

<p style="color: #ffffff">Delliver address: </p><input type="text" name="address"/><br><br>
<p style="color: #ffffff">Delliver contact number : </p><input type="text" name="tell"/><br><br>
<p style="color: #ffffff">Delliver date: </p><input type="text" name="date"/><br><br>
<p style="color: #ffffff">Delliver district </p><input type="text" name="dist"/><br><br>
<p style="color: #ffffff">Order type : </p><input type="text" name="type"/><br><br>
<p style="color: #ffffff">Order contact number : </p><input type="text" name="otell"/><br><br>
<p style="color: #ffffff">Order email : </p><input type="text" name="email"/><br><br>
<p style="color: #d9d9d9">upload your picture to drive and include the link here :</p><br>
<p style="color: #ffffff">Googel drive link: </p><input type="text" name="unam"/><br><br>
<p style="color: #ffffff">No of frame: </p><input type="text" name="frame"/><br><br>
<p style="color: #ffffff">No of requird: </p><input type="text" name="requs"/><br><br>
<input type = "submit" value ="SUBMIT" name="submit"><br><br><br>


<form>
</center>

		
		<div class="footer">	 
					    <div class="inner-footer">	   
					          	<div id="fbPanel"><div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/Maheema-Studio-101764431670316/" 
								data-tabs="timeline,messages" data-small-header="false" data-width="500" data-adapt-container-width="true" 
								data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" 
								fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=101764431670316&amp;container_width=546&amp;
								hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FMaheemaStudio%2F&amp;locale=en_US&amp;sdk=joey&amp;
								show_facepile=true&amp;small_header=false&amp;tabs=timeline%2Cmessages&amp;width=500">
								<span style="vertical-align: bottom; width: 500px; height: 500px;">
								<iframe name="f353a67e523b128" width="500px" height="1000px" data-testid="fb:page Facebook Social Plugin" 
								title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" 
								allow="encrypted-media" src="../home.html" style="border: none; visibility: visible; 
								width: 500px; height: 500px;" class=""></iframe></span></div></div>
  
				
			              
						  
						
						  <div class="footer-items">
					           <h4>Site Map</h4>
							   <div class="border"></div>
							   <ul>
									   
									   <li><a href="#"><i class="fa fa-home"></i>Home</a></li><br/>
									   <li><a href="#"><i class="fa fa-camera"></i>Package</a></li><br/>
									   <li><a href="#"><i class="fa fa-user"></i>About Us</a></li><br/>
									   <li><a href="#"><i class="fa fa-picture-o"></i>Gallery</a></li><br/>
									   <li><a href="#"><i class="fa fa-clone"></i>Online Order</a></li><br/>
									   <li><a href="#"><i class="fa fa-file-text"></i>Request Quote</a></li><br/>
									   <li><a href="#"><i class="fa fa-address-book"></i></i>Contact Us</a></li>
								</ul>	   	
					      </div>
						  
						  

						  
						  
						  
						  <div class="footer-items">
					           <h4> Contact us </h4>
							   <div class="border"></div>
							   <ul>
							       <li><i class="fa fa-map-marker" aria-hidden="true"></i>No- 12/A, School Road, Pundaluoya 22120</li><br/>
								   <li><i class="fa fa-mobile" aria-hidden="true"></i>0719318607 / 0728350317</li><br/>
								   <li><i class="fa fa-phone" aria-hidden="true"></i>0515680835</li><br/>
								   <li><i class="fa fa-envelope" aria-hidden="true"></i>maheemastudio@Gmail.com</li><br/>
								   <li><i class="fa fa-skype" aria-hidden="true"></i>Maheema.Studio</li><br/>
									   
							   </ul>	   	
					      </div>
							      
					      
					 
			   </div>
		
	
			   </div>
					 <div class="footer-bottom">
					      Copyrights &copy; Maheema Studio 2021. All Rights Reserved. 
			   
			         </div>
			   <div id="fb-root" class=" fb_reset"><div style="position: 
			   absolute; top: -10000px; width: 0px; height: 0px;"></div></div>
			   
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=201816149883286&autoLogAppEvents=1';
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
				
				<!-- Load Facebook SDK for JavaScript -->
				<div id="fb-root"></div>
				
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>

				<!-- Your customer chat code -->
				<div class="fb-customerchat" attribution="setup_tool" page_id="101764431670316">
				</div>	
			   
			   
			   
			   <script>
               w3.slideshow(".nature", 3000);
               </script>
			   
			   

</body>
</html>
		