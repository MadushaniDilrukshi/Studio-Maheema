<?php require_once('inc/connection.php');?>
<?php

if(isset($_POST['submit'])){

$uname = $_POST['unam'];
$password = $_POST['password'];

 $sql = "SELECT * FROM maheema_studio.user WHERE uname = '$uname' and pass = '$password'";
      $result = mysqli_query($connection,$sql);
          
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($result) {
			if(mysqli_num_rows($result)==1){
				
				header('location: index.html');
			}else{
				$err[]='invalid user name or password';
			}
		
      }else {
				$err[]='database quary faild';

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
						   <li><a href="login.php"><i class="fa fa-address-book"></i></i>LOGIN</a></li>
						   <li><a href="register.php"><i class="fa fa-address-book"></i></i>REGISTER</a></li>
					   </ul>
					   
					   
				  </nav>
		</header><br/>

<center>		

<h1 style="color: #66ff66">LOGIN</h1><br><br><br>

  <form action="login.php" method="post" >
						  
						  <?php
if(isset($err) && !empty($err)){
echo '<p class ="err" style="color:  #ff0000"> invalid user name or password</p>';

}
?>

<p style="color: #ffffff">user name: </p><input type="text" name="unam"/><br><br>
<p style="color: #ffffff">password : </p><input type="text" name="password"/><br><br>
<input type = "submit" value ="~-submit-~" name="submit"><br><br><br>


</form>
		
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
									   <li><a href="index.html"><i class="fa fa-home"></i>Home</a></li><br/>
									   <li><a href="PACKAGE.html"><i class="fa fa-camera"></i>Package</a></li><br/>
									   <li><a href="ABOUTUS.html"><i class="fa fa-user"></i>About Us</a></li><br/>
									   <li><a href="GALLERY.html"><i class="fa fa-picture-o"></i>Gallery</a></li><br/>
									   <li><a href="ONLINEORDER.html"><i class="fa fa-clone"></i>Online Order</a></li><br/>
									   <li><a href="RequestQuote.html"><i class="fa fa-file-text"></i>Request Quote</a></li><br/>
									   <li><a href="CONTACTUS.html"><i class="fa fa-address-book"></i></i>Contact Us</a></li>
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
		