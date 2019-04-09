	<?php if ($this->session->userdata('admin')) {?>
	<div class="team">
		<div class="container">
			<h3>OUR Users</h3>
			<?php foreach ($user as $data) {
				if ($data['role']=='User1'){
			?>
			<div class="wthree_team_grids">
				<div class="col-md-3 wthree_team_grid">
					<img src="<?php echo base_url()?>images/profilePictures/<?php echo $data['profilePicture']?>" alt="" class="img-responsive" />
					<h4>
						<?php echo $data['username']?>
						<a class="agile-icon" href="<?php echo base_url().'index.php/product/delete_user/'.$data['username'].'/'.$data['profilePicture']?>"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</a>
						<span><?php echo $data['role']?>
							<a class="agile-icon" href="<?php echo base_url().'index.php/product/edit_role/'.$data['username']?>"><i class="fa fa-adn" aria-hidden="true"></i> Jadikan Admin</a>
						</span>
						
					</h4>
					
					
				</div>
			</div>
			<?php } }?>
		</div>
	</div>
	<div class="team">
		<div class="container">
			<h3>All Admin</h3>
			<?php foreach ($user as $data) {
				if ($data['role']=='Admin'){
			?>
			<div class="wthree_team_grids">
				<div class="col-md-3 wthree_team_grid">
					<img src="<?php echo base_url()?>images/<?php echo $data['profilePicture']?>" alt=" " class="img-responsive" />
					<h4><?php echo $data['username']?> <span><?php echo $data['role']?></span></h4>
				</div>
			</div>
			<?php } }?>
		</div>
	</div>
	<?php } else if ($this->session->userdata('user')){?>
	<div class="team">
		<div class="container">
			<h3>OOPs</h3>
			<div class="wthree_team_grids">
				<h1 align="center">ERROR</h1>
				<p>Tampaknya Anda Tidak Berhak Membuka Page bagian Ini</p>
			</div>
		</div>
	</div>
	<?php } else {?>
	<div class="team">
		<div class="container">
			<h3>Something Wrong</h3>
			<div class="wthree_team_grids">
				<h1 align="center">ERROR</h1>
				<p>Tampaknya Anda Belum Login.</p>
			</div>
		</div>
	</div>
	<?php }?>