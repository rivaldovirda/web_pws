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
			<h2>Informasi</h2>
		</div> 	 
	</div>
</div>
<!-- //banner-text --> 
</div>
<!-- //banner -->
<!-- short codes -->
<div class="codes">
	<div class="container"> 

		<?php foreach ($kota_smg->result() as $row) {  ?>

		<div class="grid_3 grid_5 w3">
			<h3 class="w3ls-hdg"><center><?php echo $row->nama_tempat;?></h3>
			<center><img class="example-image img-responsive" src="<?php echo base_url().'assets/images/kota_smg/'.$row->foto_utama;?>" width="400" height="400" alt=""/></center>
			<br>
			<div class="well w3l">
				<h4>Deskripsi :</h4>
				<?php echo $row->deskripsi;?>
			</div>
			<div class="well w3l">
				<h4>Alamat :</h4>
				<p><?php echo $row->alamat;?></p>
				<iframe src="<?php echo $row->maps;?>"></iframe>
			</div>
			<div class="well w3l">
				<h4>Telp :</h4>
				<?php echo $row->telp;?>
			</div>
			<div class="well w3l">
				<h4>Jam Operasional :</h4>
				<?php echo $row->jam;?>
			</div>
			<div class="well w3l">
				<h4>Harga Tiket :</h4>
				<?php echo $row->tiket;?>
			</div>
		</div> 
		<h3 class="w3agileits-title">Foto</h3> 
			<div class="gallery-grids-top">
				<div class="gallery-grids">
					<div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img hover ehover14"> 
						<a class="example-image-link" href="<?php echo base_url().'assets/images/kota_smg/'.$row->foto1;?>" data-lightbox="example-set" data-title="">
						<img class="example-image img-responsive" src="<?php echo base_url().'assets/images/kota_smg/'.$row->foto1;?>" alt=""/>
							<div class="overlay">
								<h4>Lihat</h4>
							</div> 
						</a> 
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img hover ehover14">
						<a class="example-image-link" href="<?php echo base_url().'assets/images/kota_smg/'.$row->foto2;?>" data-lightbox="example-set" data-title="">
							<img class="example-image img-responsive" src="<?php echo base_url().'assets/images/kota_smg/'.$row->foto2;?>" alt=""/> 
							<div class="overlay">
								<h4>Lihat</h4>
							</div> 
						</a> 
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img hover ehover14">
						<a class="example-image-link" href="<?php echo base_url().'assets/images/kota_smg/'.$row->foto3;?>" data-lightbox="example-set" data-title="">
							<img class="example-image img-responsive" src="<?php echo base_url().'assets/images/kota_smg/'.$row->foto3;?>" alt=""/>
							<div class="overlay">
								<h4>Lihat</h4>
							</div> 
						</a>
					</div>	
					<div class="clearfix"> </div>	
					<script src="<?php echo base_url();?>assets/js/lightbox-plus-jquery.min.js"></script>	
				</div>
			</div>

			<?php } ?>
	</div> 
</div>  