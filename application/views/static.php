<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Portal Wisata Semarang</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Drive Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="<?php echo base_url();?>assets/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="<?php echo base_url();?>assets/css/style.css" type="text/css" rel="stylesheet" media="all"> 
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/flexslider.css" type="text/css" media="all" property="" /> 
<link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet"> 			<!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/lightbox.css">
<link href="<?php echo base_url();?>assets/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
<!-- //Custom Theme files -->  
<!-- js -->
<script src="<?php echo base_url();?>assets/js/jquery-2.2.3.min.js"></script>  
<script src="<?php echo base_url();?>assets/js/smoothscroll.min.js"></script> 
<!-- //js -->
<!-- web-fonts -->  
<link href="//fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- //web-fonts --> 
</head>
<body> 

		<!-- //main content -->
		<?php echo $contents; ?>
		
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-4 footer-grids">
				<h3>Review</h3>
				<p>Website ini masih dalam proses pengembangan jika anda masih menemui bug kami mohon maaf anda juga dapat langsung mengontak kami pada menu Kontak, TERIMA KASIH.</p>
			</div>
			<div class="col-md-3 footer-grids">
				<h3>Kontak Kami</h3>
				<p>Jl.Imam Bonjol<br>
					<span>Hp : 08511223344</span>
				</p>
				<div class="footer-bottom">
					<a href="#"><i class="fa fa-facebook"> </i><span>Facebook</span></a>
					<a href="#"><i class="fa fa-twitter"> </i><span>Twitter</span></a>
					<a href="#"><i class="fa fa-instagram"> </i><span>Instagram</span></a>
					<a href="#"><i class="fa fa-google"> </i><span>Gmail</span></a>
				</div>
			</div>
			<div class="clearfix"> </div>
			<div class="footer-copy">
				<p>© 2019 All rights reserved</a></p>
			</div>
		</div>
	</div>
	<!-- //footer --> 
	<!-- menu js -->
	<script>
		$('.toggle').on('click', function() {
			$('.menu').toggleClass('open');  
			$('.w3nav').toggleClass('show-w3nav');  
			$('.w3nav a').toggleClass('show-w3nav-link');  
			$('.toggle').toggleClass('close');  
		});
	</script>
	<!-- //menu js -->
	<script src="<?php echo base_url();?>assets/js/owl.carousel.js"></script>
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	
	<!-- smooth-scrolling-of-move-up -->
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
	<!-- //smooth-scrolling-of-move-up --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
</body>
</html>