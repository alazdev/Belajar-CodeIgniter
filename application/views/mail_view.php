	<style>
		.contact a{
			background: #347083;
			border: 0px;
			padding: 5px 10px;
			margin: 10px 10px;
			outline: none;
			font-size: 18px;
			color: #fff;
			text-transform: uppercase;
			width: 17%;	
			-webkit-appearance: none;
		}
		.contact a{
			background:#163035;
			-webkit-transition: all 0.5s ease-in-out;
			-moz-transition: all 0.5s ease-in-out;
			-o-transition: all 0.5s ease-in-out;
			transition: all 0.5s ease-in-out;
		}
	</style>
	<!-- banner -->
	<div class="banner banner10">
		<div class="container">
			<h2>Mail Us</h2>
		</div>
	</div>
	<!-- //banner -->    
	<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="<?php echo base_url()?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Mail Us</li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs --> 
	<!-- mail -->
	<div class="mail">
		<div class="container">
			<h3>Mail Us</h3>
			<div class="agile_mail_grids">
				<div class="col-md-5 contact-left">
					<h4>Address</h4>
					<p>Tanjung Jati, sub-districts Guguak, districts Lima Puluh Kota
						<span>Sumatera Barat</span></p>
					<ul>
						<li>Telephone :+62 822-8517-6104</li>
						<li><a href="https://gmail.com" target="_blank">muhammadlutfi3370@gmail.com</a></li>
					</ul>
				</div>
				<?php if ($this->session->userdata('user')){
					foreach($user as $data){
						if($this->session->userdata('username')==$data['username']){?>
				<div class="col-md-7 contact-left">
					<h4>Contact Form</h4>
					<form action="<?php echo base_url()?>index.php/product/add_contact" method="post">
						<input type="text" name="name" placeholder="Your Name" value="<?php echo $data['username']?>" readonly>
						<input type="email" name="email" placeholder="Your Email"  value="<?php echo $data['email']?>" readonly>
						<input type="text" name="phone" placeholder="Telephone No" required oninvalid="this.setCustomValidity('Masukkan Nomor Telephone Dengan Benar!')" oninput="this.setCustomValidity('')">
						<textarea name="message" placeholder="Message..." required oninvalid="this.setCustomValidity('Message Anda Masih Kosong!')" oninput="this.setCustomValidity('')"></textarea>
						<input type="submit" value="Submit" >
					</form>
				</div>
			<?php } } } else if ($this->session->userdata('admin')){ ?>
					<?php foreach ($contact as $data) {?>
				<div class="clearfix"> </div>
				<hr/><hr/>
				<div class="clearfix"> </div>
				<div class="col-md-7 contact-left">
					<form action="<?php echo base_url().'index.php/product/delete_contact/'.$data['no']?>" method="post">
						<textarea name="message" readonly><?php echo 'by '.$data['name'].' ('.$data['email'].' / '.$data['phone'].') ['.$data['message'].']'?></textarea>
						<input type="submit" value="DELETE">
					</form>
				</div>
					<? } ?>
			<?php } } else {?>
				<div class="col-md-7 contact-left">
					<h4>Contact Form</h4>
					<form action="<?php echo base_url()?>index.php/product/add_contact" method="post">
						<input type="text" name="name" placeholder="Your Name" required="">
						<input type="email" name="email" placeholder="Your Email" required="">
						<input type="text" name="phone" placeholder="Telephone No" required="">
						<textarea name="message" placeholder="Message..." required=""></textarea>
						<input type="submit" value="Submit" >
					</form>
				</div>
			<?php } ?>
				<div class="clearfix"> </div>
			</div>

			<div class="contact-bottom">
				<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d96908.54934770924!2d-73.74913540000001!3d40.62123259999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sanimal+rescue+service+near+Inwood%2C+New+York%2C+NY%2C+United+States!5e0!3m2!1sen!2sin!4v1436335928062" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<!-- //mail -->