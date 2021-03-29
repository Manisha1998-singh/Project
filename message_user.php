<?php

 require 'includes/config.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> Intrend Interior Category Flat Bootstrap Responsive Website Template | Contact : W3layouts</title>
<style> 
        table, th, td { 
            border: 4px solid black; 
            border-collapse: collapse; 
        } 
          
        th, td { 
            padding: 5px; 
            text-align: left; 
        } 

		th { 
            background-color: #000000;
			
        }

		td { 
            font-weight: bold;
			color: black;
        }  

		h2 { 
            font-weight: bold;
			color: black;
        }  
          
        .center {

            margin-left: auto;
            margin-right: auto;
            width: 70%; 
            background-color: #F5F5F5; 
			align: center;
           } 
    </style> 

	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Intrend Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
		
	<!-- css files -->
	<link rel="stylesheet" href="web_home/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="web_home/css_home/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
	<!-- //web-fonts -->
	
</head>
<style type="text/css">
	.card-header{
		padding: 15px;
		font-size: 30px;
	}
	.card-body{
		padding: 15px;
	}
	.card-footer{
		text-align: left;
		padding: 15px;
	}
</style>

<body>

<!-- banner -->
<div class="inner-page-banner" id="home"> 	   
	<!--Header-->
	<header>
		<div class="container agile-banner_nav">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				
				<h1><a class="navbar-brand" href="home.php">BTKIT <span class="display"></span></a></h1>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="services.php">Hostels</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>
						<li class="nav-item active">
						<a class="nav-link" href="message_user.php">Message Received</a>
					</li>
						
							<li class="nav-item">
								<a  class="nav-link"  href="profile.php">My Profile</a>
							</li>
							<li class="nav-item">
								<a  class="nav-link" href="includes/logout.inc.php">Logout</a>
							</li>
						</ul>
					</li>
					</ul>
				</div>
			  
			</nav>
		</div>
	</header>
	<!--Header-->
</div>
<!-- //banner --> 
<br>
<br>


    
    <h2 style="text-align:center; font-weight: bold;">Message By Warden </h2><br>


<table class="center">
  <thead>
	<tr>
	  <th style="color:White;">Name</th>
	  <th style="color:White;"><b>Course </b></th>
	  <th style="color:White;"><b>Year </b></th>
	  <th style="color:White;"><b>Hostel </b></th>
	  <th style="color:White;"><b>Message </b></th>
	  
	  
	</tr>
  </thead>
  <tbody>
  <?php
			
			
		  $sql = "SELECT  Name, Course, Year, Hostel_id, Message FROM applicable ";
		  $result = mysqli_query($conn,$sql);
		  
		  if($result->num_rows > 0){
			  while($row = $result -> fetch_assoc()){
				  echo "<tr><td>". $row["Name"] ."</td><td>". $row["Course"] ."</td><td>". $row["Year"]."</td><td>". $row["Hostel_id"]."</td><td>". $row["Message"]."</td></tr>\n";
				
			  }
			  echo "</table>";
		  }
		
  ?>
  </tbody>
</table>
<br>
<br>

<!-- footer -->
<footer class="py-5">
	<div class="container py-md-5">
		<div class="footer-logo mb-5 text-center">
			<a class="navbar-brand" href="https://kecua.ac.in/" target="_blank">BTKIT <span class="display"> DWARAHAT</span></a>
		</div>
		<div class="footer-grid">
			
			<div class="list-footer">
				<ul class="footer-nav text-center">
					<li>
						<a href="home.php">Home</a>
					</li>
					<li>
						<a href="services.php">Hostels</a>
					</li>
					
					<li>
						<a href="contact.php">Contact</a>
					</li>
					<li>
						<a href="profile.php">Profile</a>
					</li>
				</ul>
			</div>
			
		</div>
	</div>
</footer>
<!-- footer -->

<!-- js-scripts -->		

	<!-- js -->
	<script type="text/javascript" src="web_home/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="web_home/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->

	<!-- start-smoth-scrolling -->
	<script src="web_home/js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="web_home/js/move-top.js"></script>
	<script type="text/javascript" src="web_home/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->
	
<!-- //js-scripts -->

</body>
</html>
