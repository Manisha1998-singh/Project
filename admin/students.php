<?php
  require '../includes/config.inc.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> Student Information</title>
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
	<!--bootsrap -->

	<!--// Meta tag Keywords -->

	<!-- css files -->
	<link rel="stylesheet" href="../web_home/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="../web_home/css_home/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
	<link rel="stylesheet" href="../web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- //web-fonts -->

</head>

<body>

<!-- banner -->
<div class="inner-page-banner" id="home">
	<!--Header-->
	<header>
		<div class="container agile-banner_nav">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">

				<h1><a class="navbar-brand" href="admin_home.php">BTKIT <span class="display"> </span></a></h1>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="admin_home.php">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="create_hm.php">Appoint Hostel Manager</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="students.php">Students</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="admin_contact.php">Contact</a>
						</li>
			            
							<li class="nav-item">
								<a class="nav-link" href="admin_profile.php">My Profile</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="../includes/logout.inc.php">Logout</a>
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
<br><br><br>

<section class="contact py-5">
	<div class="container">
			<div class="mail_grid_w3l">
				<form action="students.php" method="post">
					<div class="row">
					        <div class="col-md-9">
							<input type="text" placeholder="Search by Roll Number" name="search_box">
							</div>
							<div class="col-md-3">
							<input type="submit" value="Search" name="search"></input>
							</div>
					</div>
				</form>
			</div>
	</div>
</section>

<br><br>
<h2 style="text-align:center; font-weight: bold;">Student Information </h2><br>


<table class="center">
  <thead>
	<tr>
	  <th style="color:White;">Student ID</th>
	  <th style="color:White;"><b>Student Name </b></th>
	  <th style="color:White;"><b>Contact </b></th>
	  <th style="color:White;"><b>Department </b></th>
	  <th style="color:White;"><b>Year </b></th>
	  
	  
	</tr>
  </thead>
  <tbody>
  <?php
			
			
		  $sql = "SELECT  Student_id, Fname, Mob_no, Dept, Year_of_study FROM student";
		  $result = mysqli_query($conn,$sql);
		  
		  if($result->num_rows > 0){
			  while($row = $result -> fetch_assoc()){
				  echo "<tr><td>". $row["Student_id"] ."</td><td>". $row["Fname"] ."</td><td>". $row["Mob_no"]."</td><td>". $row["Dept"]."</td><td>". $row["Year_of_study"]."</td></tr>\n";
				
			  }
			  echo "</table>";
		  }
		
  ?>
  </tbody>
</table>
</div>
<br>
<br>


   	   
    
   </tbody>
  </table>
</div>
<br><br>

<h2 style="text-align:center;font-weight: bold; "> Hostel Allotted </h2><br>


  <table class="center">
    <thead>
      <tr>
        <th style="color:White;">Student Name</th>
        <th style="color:White;">Student ID</th>
        <th style="color:White;">Contact Number</th>
        <th style="color:White;">Hostel</th>
        <th style="color:White;">Room Number</th>
      </tr>
    </thead>
    <tbody>
    <?php
	          
			  
			$sql = "SELECT  student.Fname, student.Mob_no, student.Student_id, hostel.Hostel_name FROM  student, hostel WHERE student.Student_id= hostel.Hostel_id";
            $result = mysqli_query($conn,$sql);
			
			if($result->num_rows > 0){
				while($row = $result -> fetch_assoc()){
					echo "<tr><td>". $row["Fname"] ."</td><td>". $row["Mob_no"] ."</td><td>". $row["Student_id"]."</td><td>". $row["Hostel_name"]."</td><td>". $row["Fname"]."</td></tr>\n";
                  
				}
				echo "</table>";
			}
      	
    ?>
    </tbody>
  </table>
</div>
<br><br>

<h2 style="text-align:center; font-weight: bold;"> Rooms Allotted </h2><br>


  <table class="center">
    <thead>
      <tr>
        <th style="color:White;">Hostel Name</th>
        <th style="color:White;">Hostel  ID</th>
        <th style="color:White;">Room Number</th>
        
      </tr>
    </thead>
    <tbody>
    <?php
	          
			  
			$sql = "SELECT  room.Room_no, hostel.Hostel_id, hostel.Hostel_name FROM  room, hostel WHERE room.Room_id= hostel.Hostel_id";
            $result = mysqli_query($conn,$sql);
			
			if($result->num_rows > 0){
				while($row = $result -> fetch_assoc()){
					echo "<tr><td>". $row["Room_no"] ."</td><td>". $row["Hostel_id"] ."</td><td>". $row["Hostel_name"]."</td></tr>\n";
                  
				}
				echo "</table>";
			}
      	
    ?>
    </tbody>
  </table>
</div>
<br>
<br>
<br>

<footer class="py-5">
	<div class="container py-md-5">
		<div class="footer-logo mb-5 text-center">
			<a class="navbar-brand" href=https://kecua.ac.in/ target="_blank">BTKIT <span class="display"> DWARAHAT</span></a>
		</div>
		<div class="footer-grid">
			
			<div class="list-footer">
				<ul class="footer-nav text-center">
					<li>
						<a href="admin_home.php">Home</a>
					</li>
					
					<li>
						<a href="create_hm.php">Appoint</a>
					</li>
					<li>
						<a href="students.php">Students</a>
					</li>
					<li>
						<a href="admin_contact.php">Contact</a>
					</li>
					<li>
						<a href="admin_profile.php">Profile</a>
					</li>
				</ul>
			</div>
			
		</div>
	</div>
</footer>
<!-- footer -->

<!-- js-scripts -->

	<!-- js -->
	<script type="text/javascript" src="../web_home/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="../web_home/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- //js -->

	<!-- banner js -->
	<script src="web_home/js/snap.svg-min.js"></script>
	<script src="web_home/js/main.js"></script> <!-- Resource jQuery -->
	<!-- //banner js -->

	<!-- flexSlider --><!-- for testimonials -->
	<script defer src="web_home/js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
	<!-- //flexSlider --><!-- for testimonials -->

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
<script>
 const searchFun = () =>{

	 let filter = document.getElementById('myInput').value.toUpperCase();
	 let 

 }

</body>
</html>
