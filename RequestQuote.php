
<?php require_once('inc/connection.php');?>
<?php

if(isset($_POST['submit'])){


$weddingdate = $_POST['weddingdate'];
$weddingloca = $_POST['weddingloca'];	
$homecomingdate = $_POST['homecomingdate'];	
$homecomingloca = $_POST['homecomingloca'];
$album_size = $_POST['album_size'];
$Pages = $_POST['Pages'];
$tc_size = $_POST['tc_size'];
$Pages1 = $_POST['Pages'];
$tc_amount = $_POST['tc_amount'];
$fp1624 = $_POST['fp1624'];
$fp1218wof = $_POST['fp1218wof'];
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$contact_no = $_POST['contact_no'];
$message = $_POST['message'];


$query = "INSERT INTO maheema_studio.booking (Wedding_Date,WeddingLocation,HomecomingDate,HomecomingLocation,AlbumSize,Pages,ThankYouCardSize,ThankYouCardType,ThankYouCardAmount,FramedPhotos,EnlargedPhotosWithoutFrame,FullName,Email,ContactNo,Message) VALUES ('{$weddingdate}','{$weddingloca}','{$homecomingdate}','{$homecomingloca}','{$album_size}','{$Pages}','{$tc_size}','{$Pages1}','{$tc_amount}','{$fp1624}','{$fp1218wof}','{$full_name}','{$email}','{$contact_no}','{$message}')";

	$result = mysqli_query($connection,$query);

	if($result){
		
		echo "1 record added ";
	
	}
	else{

		echo "databse query faild.";
	}
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		
            <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/quote.css">
		<link rel="stylesheet" type="text/css" href="css/new.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://www.w3schools.com/lib/w3.js"></script>
		
</head>
<body> 

   <header>
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
						   <li><a href="oder.php"><i class="fa fa-clone"></i>Online Order</a></li>
						   <li><a href="RequestQuote.html"><i class="fa fa-file-text"></i>Request Quote</a></li>
						   <li><a href="CONTACTUS.html"><i class="fa fa-address-book"></i></i>Contact Us</a></li>
						   <li><a href="index1.php"><i class="fa fa-file-text"></i>LOGOUT</a></li>
								  
			       </ul>
				   
				   
			  </nav>
	</header>
</br>
</br></br></br>
    
	<section>		  
  <div class="row " >
    <div class="container-fluid">
	
	<h1 class="PageTitle"style="text-align:center;">Request Quote</h1>
        <form action="#" method = "post" class="form-style-7">
            <ul>
				 <li>
                    <label for="weddingdate">Wedding Date</label>
                    <input type="date" name="weddingdate" value=""  maxlength="100">
                </li>
                <li>
                    <label for="weddingloca">Wedding Location</label>
                    <input type="text" name="weddingloca" value=""  maxlength="100">
                </li>
                <li>
                    <label for="homecomingdate">Homecoming Date</label>
                    <input type="date" name="homecomingdate" value=""  maxlength="100">
                </li>
                <li>
                    <label for="homecomingloca">Homecoming Location</label>
                    <input type="text" name="homecomingloca" value=""  maxlength="100">
                </li>
               
				   <li>
                    <label for="album_size">Album Size</label>
                    <select name="album_size">
                          <option value="10 x 24">10 x 24</option>
						  <option value="12 x 24">12 x 24</option>
						  <option value="12 x 30">12 x 30</option>
						  <option value="12 x 36">12 x 36</option>
                    </select><br/>
					
					
				
				<a href="Package Details.html" target="_blank" onclick="alert('More Information to Plz visit Package Details !');">More Information</a>
				
				
                </li>
              
                <li>
                    <label for="Pages">Pages</label>
                    <select name="Pages">
                          <option value="20 pages">20 pages</option>
						  <option value="30 pages">30 pages</option>
						  <option value="50 pages">50 pages</option>
						  <option value="60 pages">60 pages</option>
                    </select>
                </li>

                <li>
                    <label for="tc_size">Thank You Card Size</label>
                    <select name="tc_size">
                        <option value="6 x 4">6 x 4</option>
						<option value="4 x 8">4 x 8</option>
						<option value="4 x 10">4 x 10</option>
						<option value="6 x 6">6 x 6</option>
						<option value="6 x 8">6 x 8</option>
                    </select>
                </li>
				
				<li>
                    <label for="tc_amount">Thank You Card Amount</label>
                    <input type="text" name="tc_amount" value=""  maxlength="100">
                </li>
				<li>
                    <label for="fp1624">16 x 24 Framed Photos</label>
                    <input type="text" name="fp1624" value=""  maxlength="100">
                </li>
				<li>
                    <label for="fp1218wof">12 x 18 Enlarged Photos Without Frame</label>
                    <input type="text" name="fp1218wof" value=""  maxlength="100">
                </li>
			
				<li>
                    <label for="full_name">Full Name</label>
                    <input type="text" name="full_name" value=""  maxlength="100">
                </li>
				<li>
                    <label for="email">Email</label>
                    <input type="text" name="email" value=""  maxlength="100">
                </li>
				<li>
                    <label for="contact_no">Contact No</label>
                    <input type="text" name="contact_no" value=""  maxlength="100">
                </li>
				<li>
                    <label for="message">Message</label>
                   <textarea name="message" id="message" cols="45" rows="10"></textarea><br/>
                </li>
			
                 <li> <center><p><input class="btn btn-primary" type="submit"   name="submit" ></P><br/>
				  <P><input class="btn btn-warning" type="reset"  value="Reset"><center></p>
				</li>
				
                </ul>
				</form>
				
				</div>
				</div>
   </section>

       <div class="footer">	 
					    <div class="inner-footer">	   
					          	<div id="fbPanel"><div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/Maheema-Studio-101764431670316/" 
								data-tabs="timeline,messages" data-small-header="false" data-width="500" data-adapt-container-width="true" 
								data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" 
								fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=101764431670316&amp;container_width=546&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FMaheemaStudio%2F&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline%2Cmessages&amp;width=500">
								<span style="vertical-align: bottom; width: 500px; height: 500px;">
								<iframe name="f353a67e523b128" width="500px" height="1000px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="../home.html" style="border: none; visibility: visible; width: 500px; height: 500px;" class=""></iframe></span></div></div>
  
				
			              
						  
						
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
					      Copyrights &copy; Maheema Studio 2020. All Rights Reserved. 
			   
			         </div>
			   <div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div>
			   
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
