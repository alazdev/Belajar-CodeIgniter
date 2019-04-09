
	<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<h3>Top Brands</h3>
			<div class="sliderfig">
				<ul id="flexiselDemo1">			
					<li>
						<a href="<?php echo base_url()?>index.php/product/brand_vivo/"><img src="<?php echo base_url()?>images/tb1.png" alt=" " class="img-responsive" /></a>
					</li>			
					<li>
						<a href="<?php echo base_url()?>index.php/product/brand_samsung/"><img src="<?php echo base_url()?>images/tb2.png" alt=" " class="img-responsive" /></a>
					</li>			
					<li>
						<a href="<?php echo base_url()?>index.php/product/brand_acer/"><img src="<?php echo base_url()?>images/tb3.png" alt=" " class="img-responsive" /></a>
					</li>			
					<li>
						<a href="<?php echo base_url()?>index.php/product/brand_lenovo/"><img src="<?php echo base_url()?>images/tb4.png" alt=" " class="img-responsive" /></a>
					</li>			
					<li>
						<a href="<?php echo base_url()?>index.php/product/brand_apple/"><img src="<?php echo base_url()?>images/tb5.png" alt=" " class="img-responsive" /></a>
					</li>			
					<li>
						<a href="<?php echo base_url()?>index.php/product/brand_asus/"><img src="<?php echo base_url()?>images/tb6.png" alt=" " class="img-responsive" /></a>
					</li>
				</ul>
			</div>
			<script type="text/javascript">
					$(window).load(function() {
						$("#flexiselDemo1").flexisel({
							visibleItems: 4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems:2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						
					});
			</script>
			<script type="text/javascript" src="<?php echo base_url()?>js/jquery.flexisel.js"></script>
		</div>
	</div>
	<!-- //top-brands --> 