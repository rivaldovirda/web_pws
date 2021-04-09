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
							<li><a href="<?php echo base_url();?>index.php/wisatakota_smg">Kota Semarang</a></li>
							<li><a href="<?php echo base_url();?>index.php/wisatakab_smg">Kab.Semarang</a></li>     
						</ul>
					</li> 
					<li><a href="<?php echo base_url();?>index.php/about"> Tentang Kami</a></li> 
					<li><a href="<?php echo base_url();?>index.php/contact"  class="active"> Kontak</a></li>
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
			<h2>Kontak</h2>
		</div> 	 
	</div>
</div>
<!-- //banner-text --> 
</div>
<!-- //banner -->
<!-- contact -->
<div class="contact">
	<div class="container">
		<h3 class="w3agileits-title">Hubungi Kami</h3> 
		<div class="contact-info">	
			<div class="col-md-4 contact-grids">
				<div class="cnt-address">
					<h3 class="title1">Alamat</h3> 
					<p>Jl Imam Bonjol.
						<span>No.1</span>
						Semarang
					</p> 
					<p>Telp: (023) 123456
						<span>Hp: 08911223344</span>
						E-mail: <a href="#">pws@gmail.com</a>
					</p>
				</div>
			</div>
			<div class="col-md-8 contact-grids">
				<h5>Bantu Kami untuk mengembangkan website ini</h5>
				<p>Jika anda masih mengalami kendala dalam penggunaan website ini ataupun anda masih menemui bug diprogram ini anda dapat langsung mengontak kami, silahkan tulis keluhan anda dikolom komentar yang sudah kami sediakan </p>		
				<div class="contact-form">  
					<form action="<?php echo base_url('index.php/kontak/insert') ?>" method="post">
						<textarea name="pesan" placeholder="Tulis Disini" required=""></textarea>
						<input type="text" name="nama" placeholder="Nama" required="">
						<input type="text" name="email" placeholder="Email" required=""> 
						<input type="submit" value="SUBMIT">
					</form> 
				</div>
			</div> 
			<div class="clearfix"> </div>
		</div>
	</div>
</div> 
<!-- //contact -->