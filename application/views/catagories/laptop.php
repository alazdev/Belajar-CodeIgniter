	<!-- banner -->
	<div class="banner banner2">
		<div class="container">
			<h2>Top Selling <span>All</span> <i>$40 Discount</i></h2> 
		</div>
	</div> 
	<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="<?php echo base_url()?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Categories Products</li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs --> 
	<!-- mobiles -->
	<div class="mobiles">
		<div class="container">
			<div class="w3ls_mobiles_grids">
				<div class="col-md-4 w3ls_mobiles_grid_left">
					<div class="w3ls_mobiles_grid_left_grid">
						<h3>Categories</h3>
						<div class="w3ls_mobiles_grid_left_grid_sub">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							  <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
								  <h4 class="panel-title asd">
									<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Categories
									</a>
								  </h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								  <div class="panel-body panel_text">
									<ul>
										<li><a href="<?php echo base_url()?>index.php/product/catagories_android">Android</a></li>
										<li><a href="<?php echo base_url()?>index.php/product/catagories_laptop">Laptop</a></li>
										<li><a href="<?php echo base_url()?>index.php/product/catagories_ios">IOS</a></li>
									</ul>
								  </div>
								</div>
							  </div>
							  <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
								  <h4 class="panel-title asd">
									<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Brand
									</a>
								  </h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								   <div class="panel-body panel_text">
									<ul>
										<li><a href="<?php echo base_url()?>index.php/product/brand_vivo">VIVO</a></li>
										<li><a href="<?php echo base_url()?>index.php/product/brand_samsung">Samsung</a></li>
										<li><a href="<?php echo base_url()?>index.php/product/brand_acer">Acer</a></li>
										<li><a href="<?php echo base_url()?>index.php/product/brand_lenovo">Lenovo</a></li>
										<li><a href="<?php echo base_url()?>index.php/product/brand_asus">Asus</a></li>
										<li><a href="<?php echo base_url()?>index.php/product/brand_apple">Aplle</a></li>
									</ul>
								  </div>
								</div>
							  </div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-8 w3ls_mobiles_grid_right">
					<div class="w3ls_mobiles_grid_right_grid2">
						<div class="w3ls_mobiles_grid_right_grid2_left">
							<h3>Laptop</h3>
						</div>
						<div class="clearfix"> </div>
					</div>
					<?php foreach ($product as $data) { if ($data['catagories']=='Laptop'){
						if(!($this->session->userdata('username') == $data['userHave'])){?>
					<div class="w3ls_mobiles_grid_right_grid3">
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
							<div class="agile_ecommerce_tab_left mobiles_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="<?php echo base_url()?>images/productPictures/<?php echo $data['pictures']?>" alt=" " class="img-responsive" />
									<img src="<?php echo base_url()?>images/productPictures/<?php echo $data['pictures']?>" alt=" " class="img-responsive" />
									<img src="<?php echo base_url()?>images/productPictures/<?php echo $data['pictures']?>" alt=" " class="img-responsive" />
									<img src="<?php echo base_url()?>images/productPictures/<?php echo $data['pictures']?>" alt=" " class="img-responsive" />
									<img src="<?php echo base_url()?>images/productPictures/<?php echo $data['pictures']?>" alt=" " class="img-responsive" />
									<img src="<?php echo base_url()?>images/productPictures/<?php echo $data['pictures']?>" alt=" " class="img-responsive" />
									<img src="<?php echo base_url()?>images/productPictures/<?php echo $data['pictures']?>" alt=" " class="img-responsive" /> 
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#<?php echo $data['no']?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="#" data-toggle="modal" data-target="#<?php echo $data['no']?>"><?php echo $data['productName']?></a></h5>
								<div class="simpleCart_shelfItem">
									<p><span>$<?php echo ($data['prize']+40);?></span> <i class="item_price">$<?php echo $data['prize']?></i></p>
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart" />
										<input type="hidden" name="add" value="1" /> 
										<input type="hidden" name="w3ls_item" value="<?php echo $data['productName']?>" /> 
										<input type="hidden" name="amount" value="<?php echo $data['prize']?>"/>   
										<button type="submit" class="w3ls-cart">Add to cart</button>
									</form>
								</div>
								<?php if($data['date'] == date('Y-m-d')){?>
								<div class="mobiles_grid_pos">
									<h6>New</h6>
								</div>
							<?php } ?>
							</div>
						</div>
					</div>
				<?php } else if (($this->session->userdata('username') == $data['userHave'])){?>
				<?php }else {?>
					<div class="w3ls_mobiles_grid_right_grid3">
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
							<div class="agile_ecommerce_tab_left mobiles_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="<?php echo base_url()?>images/productPictures/<?php echo $data['pictures']?>" alt=" " class="img-responsive" />
									<img src="<?php echo base_url()?>images/productPictures/<?php echo $data['pictures']?>" alt=" " class="img-responsive" />
									<img src="<?php echo base_url()?>images/productPictures/<?php echo $data['pictures']?>" alt=" " class="img-responsive" />
									<img src="<?php echo base_url()?>images/productPictures/<?php echo $data['pictures']?>" alt=" " class="img-responsive" />
									<img src="<?php echo base_url()?>images/productPictures/<?php echo $data['pictures']?>" alt=" " class="img-responsive" />
									<img src="<?php echo base_url()?>images/productPictures/<?php echo $data['pictures']?>" alt=" " class="img-responsive" />
									<img src="<?php echo base_url()?>images/productPictures/<?php echo $data['pictures']?>" alt=" " class="img-responsive" /> 
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#<?php echo $data['no']?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="#" data-toggle="modal" data-target="#<?php echo $data['no']?>"><?php echo $data['productName']?></a></h5> 
								<div class="simpleCart_shelfItem">
									<p><span>$<?php echo ($data['prize']+40);?></span> <i class="item_price">$<?php echo $data['prize']?></i></p>
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart" />
										<input type="hidden" name="add" value="1" /> 
										<input type="hidden" name="w3ls_item" value="<?php echo $data['productName']?>" /> 
										<input type="hidden" name="amount" value="<?php echo $data['prize']?>"/>   
										<button type="submit" class="w3ls-cart">Add to cart</button>
									</form>
								</div> 
								<div class="mobiles_grid_pos">
									<h6>New</h6>
								</div>
							</div>
						</div>
					</div>
				<?php } } }?>
				</div>
			</div>
		</div>
	</div>
    <!-- //new-products -->
    <?php foreach($product as $data){ ?>
    <div class="modal video-modal fade" id="<?php echo $data['no'];?>" tabindex="-1" role="dialog" aria-labelledby="myModal2">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                </div>
                <section>
                    <div class="modal-body">
                        <div class="col-md-5 modal_body_left">
                            <img src="<?php echo base_url()?>images/productPictures/<?php echo $data['pictures']?>" alt=" " class="img-responsive" />
                        </div>
                        <div class="col-md-7 modal_body_right">
                            <h4><?php echo $data['productName'];?></h4>
                            <p><?php echo $data['desc'];?></p>
                            <?php if ($data['rate']==5) { ?>
                            <div class="rating">
                                <div class="rating-left">
                                    <img src="<?php echo base_url()?>images/star-.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="rating-left">
                                    <img src="<?php echo base_url()?>images/star-.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="rating-left">
                                    <img src="<?php echo base_url()?>images/star-.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="rating-left">
                                    <img src="<?php echo base_url()?>images/star-.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="rating-left">
                                    <img src="<?php echo base_url()?>images/star-.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <?php } else if ($data['rate']==4) { ?>
                            <div class="rating">
                                <div class="rating-left">
                                    <img src="<?php echo base_url()?>images/star-.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="rating-left">
                                    <img src="<?php echo base_url()?>images/star-.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="rating-left">
                                    <img src="<?php echo base_url()?>images/star-.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="rating-left">
                                    <img src="<?php echo base_url()?>images/star-.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="rating-left">
                                    <img src="<?php echo base_url()?>images/star.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <?php } else if ($data['rate']==3) { ?>
                            <div class="rating">
                                <div class="rating-left">
                                    <img src="<?php echo base_url()?>images/star-.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="rating-left">
                                    <img src="<?php echo base_url()?>images/star-.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="rating-left">
                                    <img src="<?php echo base_url()?>images/star-.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="rating-left">
                                    <img src="<?php echo base_url()?>images/star.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="rating-left">
                                    <img src="<?php echo base_url()?>images/star.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <?php } else if ($data['rate']==2)  { ?>
                            <div class="rating">
                                <div class="rating-left">
                                    <img src="<?php echo base_url()?>images/star-.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="rating-left">
                                    <img src="<?php echo base_url()?>images/star-.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="rating-left">
                                    <img src="<?php echo base_url()?>images/star.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="rating-left">
                                    <img src="<?php echo base_url()?>images/star.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="rating-left">
                                    <img src="<?php echo base_url()?>images/star.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <?php } else { ?>
                            <div class="rating">
                                <div class="rating-left">
                                    <img src="<?php echo base_url()?>images/star-.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="rating-left">
                                    <img src="<?php echo base_url()?>images/star.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="rating-left">
                                    <img src="<?php echo base_url()?>images/star.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="rating-left">
                                    <img src="<?php echo base_url()?>images/star.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="rating-left">
                                    <img src="<?php echo base_url()?>images/star.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <?php } ?>
                            <div class="modal_body_right_cart simpleCart_shelfItem">
                                <p><span>$<?php echo ($data['prize']+40);?></span> <i class="item_price">$<?php echo $data['prize'];?></i></p>
                                <form action="" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1"> 
                                    <input type="hidden" name="w3ls_item" value="<?php echo $data['productName'];?>"> 
                                    <input type="hidden" name="amount" value="<?php echo $data['prize'];?>">   
                                    <button type="submit" class="w3ls-cart">Add to cart</button>
                                </form>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <?php } ?>