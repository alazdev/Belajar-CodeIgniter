
	<!-- navigation -->
	<div class="navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">
						<li><a href="<?php echo base_url();?>">Home</a></li>	
						<!-- Mega Menu -->
						<li class="dropdown"><a href="<?php echo base_url().'index.php/product/catagories_android';?>">Product</a></li>
						<li><a href="<?php echo base_url()?>index.php/product/about">About Us</a></li> 
						<li class="w3pages"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url()?>index.php/product/icons">Web Icons</a></li>
								<li><a href="<?php echo base_url()?>index.php/product/codes">Short Codes</a></li>     
							</ul>
						</li>  
						<li><a href="<?php echo base_url()?>index.php/product/mail">Mail Us</a></li>
						<?php if ($this->session->userdata('admin')) {?>
						<li><a href="<?php echo base_url()?>index.php/product/users">All User Commganga</a></li>
						<?php } else if ($this->session->userdata('user')) {?>
						<li><a href="<?php echo base_url()?>index.php/product/user_product">Your Product</a></li>
						<?php } ?>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->