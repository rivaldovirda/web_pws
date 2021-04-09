<!-- banner -->
<div class="banner">
	<!-- header -->
	<div class="header">
		<div class="container">
			<div class="header-w3lsrow"> 
				<div class="menu"> 
					<div class="toggle"></div> 
					<ul class="w3nav">
						<li><a href="<?php echo base_url();?>" class="active"> Home</a></li>
						<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pilih <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url();?>index.php/wisatakota_smg">Kota Semarang</a></li>
								<li><a href="<?php echo base_url();?>index.php/wisatakab_smg">Kab.Semarang</a></li>     
							</ul>
						</li> 
						<li><a href="<?php echo base_url();?>index.php/about"> Tentang Kami</a></li> 
						<li><a href="<?php echo base_url();?>index.php/contact"> Kontak</a></li>
					</ul>
					<div class="clearfix"> </div>
				</div> 
				<div class="logo">
					<h1><a href="<?php echo base_url();?>">PWS</a></h1>
				</div>  
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //header --> 
	<!-- banner-text -->
	<div class="banner-text"> 
		<div class="container">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<div class="banner-w3lstext">
							<h2>Welcome</h2>
							<p>Selamat datang di website baru kami, disini kami akan memberikan informasi mengenai tempat-tempat wisata yang ada didaerah semarang dan sekitarnya.</p>
						</div>
					</li>
				</ul> 
			</div> 	
			<!-- FlexSlider --> 
			<script defer src="<?php echo base_url();?>assets/js/jquery.flexslider.js"></script>
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
			<!-- End-slider-script -->
		</div>
	</div>
	<!-- //banner-text --> 
</div>
<!-- //banner -->
<!-- welcome -->
<div class="welcome"> 
	<div class="container">
		<div class="col-md-7 welcome-w3lleft">
			<h3>Welcome !</h3>
			<h5>Selamat Datang </h5>
			<p>Web ini dibuat untuk memudahkan para wisatawan untuk mencari tau informasi mengenai tempat wisata yang ingin mereka kunjungi. Semoga dengan adanya
				web ini tempat wisata di daerah semarang dan sekitarnya yang sebelumnya belum dikenali atau masih asing ditelinga bisa lebih diketahui oleh para
				wisatawan yang berkunjung ke semarang. </p>  
		</div>  
		<div class="col-md-5 welcome-w3lright">
			<p><center>akses tempat wisata dengan mudah</p>
			<div class="welcome-grids">
				<div class="service-box">
					<div class="agileits-wicon">
						<i class="fa fa-motorcycle" aria-hidden="true"></i>
					</div>
				</div> 
				<div class="clearfix"> </div>
			</div>
			<div class="welcome-grids">
				<div class="col-md-6 col-sm-6 col-xs-6 service-box">
					<div class="agileits-wicon">
						<i class="fa fa-bus" aria-hidden="true"></i>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6 service-box">
					<div class="agileits-wicon">
						<i class="fa fa-car" aria-hidden="true"></i>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div> 
		<div class="clearfix"> </div>
	</div> 
</div>
<!-- //welcome -->
<!-- trips -->
<div class="trips"> 
	<div class="container">
		<div class="trips-agileinfo"> 
			<div class="col-md-6 trip-agileitsimg">  
				
			</div> 
			<div class="col-md-6 trip-agileitstext welcome-w3lleft"> 
				<h3>Explore</h3>
				<h5>Cari tempatnya</h5>
				<p>Disini anda dapat menemukan berbagai macam jenis tempat wisata yang berada didaerah semarang dan sekitarnaya. ayo temukan tempat-tempat baru yang belum pernah anda kunjungi. </p> 
				<div id="owl-demo" class="owl-carousel owl-theme">
					<div class="item agile-item">
						<img src="<?php echo base_url();?>assets/images/i1.jpg" class="trip-w3img" alt=""/>  
					</div> 
					<div class="item agile-item">
						<img src="<?php echo base_url();?>assets/images/i2.jpg" class="trip-w3img" alt=""/>  
					</div> 
					<div class="item agile-item">
						<img src="<?php echo base_url();?>assets/images/i3.jpg" class="trip-w3img" alt=""/>  
					</div>
					<div class="item agile-item">
						<img src="<?php echo base_url();?>assets/images/i4.jpg" class="trip-w3img" alt=""/>  
					</div>
				</div> 
				<script>
					$(document).ready(function() { 
						$("#owl-demo").owlCarousel({ 
						  autoPlay: 3000, //Set AutoPlay to 3 seconds
					 
						  items : 3,
						  itemsDesktop : [768,3],
						  itemsDesktopSmall : [414,4]
					 
						});
					 
					}); 
				</script>  	
			</div> 
			<div class="clearfix"> </div>
		</div>  
	</div> 
</div>
<!-- //trips -->
<!-- news -->
<div class="news"> 
	<div class="container">
		<h3 class="w3agileits-title">Sedang Populer</h3>
		<div class="new-agileinfo">
			<div class="col-md-4 news-left">
				<ul id="demo1_thumbs" class="list-inline"> 

					<?php foreach ($populer->result() as $row) { ?>

					<li><a href="<?php echo base_url().'assets/images/populer/'.$row->gambar_besar;?>"><img src="<?php echo base_url().'assets/images/populer/'.$row->gambar_kecil;?>" alt="" data-desoslide-caption="<h3><?php echo $row->nama_tempat;?></h3> <br><?php echo $row->deskripsi;?>">
						<div class="news-w3text">
							<h4><?php echo $row->nama_tempat;?></h4>	
							<p><?php echo $row->alamat;?></p>
							<h6><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $row->tanggal;?></h6>
						</div> 
					</a></li>	

					<?php } ?>

				</ul>
			</div>
			<div id="demo1_main_image" class="col-md-8  news-right"></div>
		</div>    
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.desoslide.css">
		<script src="<?php echo base_url();?>assets/js/jquery.desoslide.js"></script> 
		<script>
		$('#demo1_thumbs').desoSlide({
			main: {
				container: '#demo1_main_image',
				cssClass: 'img-responsive'
			},
			 effect: 'sideFade',
			caption: true
		});
		</script> 

		

	</div>
</div>
<!-- //news --> 