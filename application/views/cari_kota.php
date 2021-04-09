<!-- banner -->
<div class="banner w3about">
<!-- header -->
<div class="header">
	<div class="container">
		<div class="header-w3lsrow"> 
			<div class="menu"> 
				<div class="toggle"></div> 
				<ul class="w3nav">
					<li><a href="<?php echo base_url();?>"> Home</a></li>
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pilih <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url();?>index.php/wisatakota_smg" class="active">Kota Semarang</a></li>
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
		<div class="banner-w3lstext">
			<h2>Tempat Wisata</h2>
		</div> 	 
	</div>
</div>
<!-- //banner-text --> 
</div>
<!-- //banner -->
<!-- gallery -->
<div class="gallery">
	<div class="container">  
		<h3 class="w3agileits-title">Hasil Pencarian</h3>
		<div class="gallery-grids-top">
			<div class="gallery-grids">

				<?php foreach ($result as $row) { ?>

				<div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img hover ehover14"> 
					<h1><span class="label label-default"><?php echo $row->nama_tempat;?></span></h1>
					<img class="example-image img-responsive" src="<?php echo base_url().'assets/images/kota_smg/'.$row->foto_utama;?>" alt=""/>
					<h2><?php 
							echo anchor('info_kota/info/'.$row->id,'<span class="label label-info">Informasi',array());
						?></span></h2>
				</div>

				<?php } ?>

				<div class="clearfix"> </div>
				<script src="<?php echo base_url();?>assets/js/lightbox-plus-jquery.min.js"></script>	
			</div> 
		</div>
	</div>
</div>