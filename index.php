





<!DOCTYPE html>
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>cake ordering </title>
	<meta name="description" content="">
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/media-queries.css">    

   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.png" >

</head>

<body>





<?php require"config.php"; ?>

<?php

 if(isset($_POST['submit']))
          {
            if(empty($_POST['name']) OR empty($_POST['contact']) OR empty($_POST['flvr']) OR empty($_POST['wt']) OR empty($_POST['addr']) )
            {
              echo "<script>alert('fill all fields');</script>";
           

            }
            else
            {
              $name=$_POST['name'];
              $contact=$_POST['contact'];
              $flvr=$_POST['flvr'];
              $weight=$_POST['wt'];
              $address=$_POST['addr'];
              
              $final_name= str_replace('-', ' ',trim($name)); 

              $insert=$conn->prepare("INSERT INTO cake(name,contact,flvr,wt,addr) VALUES(:name,:contact,:flvr,:wt,:addr)");
              $insert->execute([
                ':name'=>$final_name,
                ':contact'=>$contact,
                ':flvr'=>$flvr,
              ':wt'=>$weight,
              ':addr'=>$address,
            

                ]);

              header("location: index.php");
             // echo "<script>window.location.href='".ADMINURL."/categories-admins/show-categories.php'</script>";

            }
          }
  


?>





   <!-- Intro Section
   ================================================== -->
   <section id="intro">

   	<header class="row">	 

			<div id="logo" >
				<a href="#" >
                 <img src="images/logo.png" alt="Zoon">                  
              </a>					
			</div>

		   <nav id="nav-wrap">

		      <a class="menu-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
			   <a class="menu-btn" href="#" title="Hide navigation">Hide navigation</a>

		      <ul id="nav" class="nav">
		         <li class="current"><a class="smoothscroll" href="#home">Home</a></li>
		         <li><a class="smoothscroll" href="#about">About</a></li>			         
			      <li><a class="smoothscroll" href="#location">Location</a></li>
		      </ul> <!-- end #nav -->

		   </nav> <!-- end #nav-wrap --> 	        

   	</header> <!-- Header End -->   	

   	<div  id="main" class="row">

	   	<div class="twelve columns">
	   			
	   		<h1>We are currently working on something awesome. Stay tuned!</h1>

	   		<p> Dearest employer, thanks for all you do. May you have an unforgettable birthday and good fortune in the year to come.</p>

	   		<h3>Have look at on our ratings.</h3>

	   		<div id="counter" class="cf">
	   			<span>9/10<em>Satisfaction ratings</em></span> 
 					<span>6Hr <em>Order Before</em></span>
					<span>9/10 <em>service ratings</em></span>
 					</div>					

   			<div id="mc_embed_signup">
	            <form action="#contacts" method="post" id="mc-embedded-subscribe-form" name="" class="validate" target="_blank" novalidate>
	                  
	               <div style="position: absolute; left: -5000px;"><input type="text" name="" value=""></div>
	               
	               <!-- <div class="clear"> --><input type="submit" value="Subscribe" name="subscribe" id="#contact" class="button"><!-- </div> -->
	               
	          	</form>
	         </div>

	         <ul class="social">
	            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
	            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
	            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
	            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
	            <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>

         </div> 

      </div> <!-- main end -->    	

   </section> <!-- end intro section -->


   <!-- About Section
   ================================================== -->
   <section id="about">

      <div class="row section-header">

      	<div class="twelve columns">	

      		<div class="icon-wrap">
            	<i class="fa fa-group"></i>
         	</div>

	         <h1>About Us.</h1>

	         <p class="lead">Our cakes & Desserts receive a lot of compliments and are complimented by wide range of exclusive desserts.<br>
	         	Our theme based Creative Cakes, Cake pop , Cup Cakes and Desserts for Parities, make you Party Unique and Inevitable. We spend more time in understanding customers expectation,
	         </p>

         </div>

      </div> <!-- end section-header -->             	

      <div class="row section-content">
				
			<div class="six columns">
		      <h3>Our Process.</h3>

		      <p>Our theme based Creative Cakes, Cake pop , Cup Cakes and Desserts for Parities, make you Party Unique and Inevitable. We spend more time in understanding customers expectation, </p>
	      </div>

	      <div class="six columns">
		      <h3>Our Approach.</h3>

		      <p>Our theme based Creative Cakes, Cake pop , Cup Cakes and Desserts for Parities, make you Party Unique and Inevitable. We spend more time in understanding customers expectation,</p>
	      </div>            

      </div> <!-- end section-content -->  

      <div class="row section-content">
				
			<div class="six columns">
		      <h3>Our Services.</h3>

		      <p>Red Velvet Cakes
These cakes are the perfect symbol of love. Goes great with occasions like anniversaries, valentine’s day, etc. as you buy cake of red velvet flavour
Butterscotch Cakes
Creamy, tasty and wonderfully frosted, these butterscotch cakes are the perfect desserts for any celebration.

Designer Cakes
designer theme cakes are open for customisation. Personalised cakes that are available for special theme celebrations.

Heart-Shaped Cakes
our heart-shaped cakes are available in many different flavours and types. Find your favourite ones today! and get delivered through cake delivery near me
</p>
	      </div>

	      <div class="six columns">
		      <h3>Our Objective.</h3>

		      <p>
Eggless Cakes
100% eggless cakes that are delicious and divine in taste. Now enjoy cakes without any compromises in your dietary preferences.

Pinata Cakes
smash these up to the party with your loved ones. The delicious cake base comes coated with a chocolate shell that you must crack open!

Pull Me Up Cakes
order the best cake online from FlowerAura and celebrate your biggest days in a grand fashion! Grab these tasty delights which come topped with molten chocolate ganache, and send cake online to surprise your dear ones with something new. Pull the clear film from the side upwards to coat these tasty cakes.
		      </p>
	      </div>            

      </div> <!-- end section-content -->       
      <div class="row"><h1>Variety of Cakes</h1>
  <div class="column">
    <img src="images/img1.jpg" alt="Nature" onclick="myFunction(this);"><h3>This is chocolate cake</h3>
  </div>
  <div class="column">
    <img src="images/img2.jpg" alt="Snow" onclick="myFunction(this);"><h3>This is chocolate cake</h3>
  </div>
  <div class="column">
    <img src="images/img3.jpg" alt="Mountains" onclick="myFunction(this);" ><h3>This is chocolate cake</h3>
  </div>
  <div class="column">
    <img src="images/img4.jpg" alt="Lights" onclick="myFunction(this);"><h3>This is chocolate cake</h3>
  </div>
</div>
<!-- The expanding image container -->
<div class="container">
  <!-- Close the image -->
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times; </span>

  <!-- Expanded image -->
  <img id="expandedImg" style="width:50%; height: 50%; " align="center">
  <!-- Image text -->
  <div id="imgtext">
</div>
</div>

      <div id="call-to-action" >	       

		   <div class="row section-ads">

		      <div class="twelve columns" >		         		

			      <h2><a href="">Order your favourite cake for your loveonce.</a></h2>

			      <p class="lead">
			      Looking for an awesome and tasty cake! Try <a href=""><span>CakeBake</span></a>.
					Get <span>$50 off</span> when you sign up with the promocode <span>CakeBake</span>. 
					<!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. -->							
					</p>
					<div class="contacts">		
			  				<form method="post" action="index.php" id="contactform" style="padding:2em 5em;">
                  <div class="form">
                    <div class="row">
                      <div class="col-md-2">
                        <input type="text" name="name" placeholder="Name"><br>
                      </div>
                      <div class="col-md-2">
                         <input type="number" name="contact" placeholder="Contact Number"><br>
                      </div>
                      <div class="col-md-2">
                        <input type="text" name="flvr" placeholder="flavour"><br>
                      </div>
                      <div class="col-md-2">
                        <input type="text" name="wt" placeholder="per/kg"><br>
                      </div>
                      
                    </div>
                    <textarea type="text" name="addr" rows="7" placeholder="delivery address"></textarea><br>    
                    <div class="action"> 
                    	
                   		<input type="submit" class="button" style="background-color: rgba(255, 77, 77, 1);" name="submit" value="order now">
                   </div>
                  </div>
                </form>

			<div class="row contact-details">		           		         

			   <div class="columns">

				   <h3><i class="fa fa-home"></i>Address.</h3>
				   <p><br>Maharashtra , Akola ,444002
						 <br>
						</p>

			   </div> 

			   <div class="columns">

				   <h3><i class="fa fa-phone"></i>Phone Numbers.</h3>
				   <p>0987654321
				   </p>

			   </div>	 

			   <div class="columns end">

				   <h3><i class="fa fa-envelope"></i>Emails.</h3>
				   <p>meghashirsat@gmail.com<br>
				   	raginiyadav@gmail.com

				   </p>

			   </div>          	

		 	</div> <!-- end contact-details -->		  

		</div>

					
			   </div>

		   </div> <!-- end section-ads -->		         	         

	   </div> <!-- end call-to-action -->		   	

   </section> <!-- About Section End-->    
 					
   <!-- Location Section
   ================================================== -->
	<section id="location">

		

	</section> <!-- end location section -->

   <!-- footer
   ================================================== -->
   <footer>

      <div class="row">

         <div class="twelve columns">            

            <ul class="copyright">
               <li>&copy;Miss. Ragini S. S. Yadav</li>
               <li>Design by <a title="Styleshout" href="http://www.styleshout.com/">Miss. Ragini S. S. Yadav</a></li>          
            </ul>

         </div>          

      </div>

      <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#intro"><i class="icon-up-open"></i></a></div>

   </footer> <!-- Footer End-->   

   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"></script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

	<script src="js/waypoints.js"></script>
   <script src="js/jquery.countdown.js"></script>
   <script src="js/jquery.placeholder.js"></script>
   <script src="js/backstretch.js"></script>  
   <script src="js/init.js"></script>
   <script type="text/javascript">
   	
   	function myFunction(imgs) {
  // Get the expanded image
  var expandImg = document.getElementById("expandedImg");
  // Get the image text
  var imgText = document.getElementById("imgtext");
  // Use the same src in the expanded image as the image being clicked on from the grid
  expandImg.src = imgs.src;
  // Use the value of the alt attribute of the clickable image as text inside the expanded image
  imgText.innerHTML = imgs.alt;
  // Show the container element (hidden with CSS)
  expandImg.parentElement.style.display = "block";
}
   </script>

</body>

</html>