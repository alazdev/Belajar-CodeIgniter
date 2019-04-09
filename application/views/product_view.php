    <!-- new-products -->
    <div class="new-products">
        <div class="container">
            <h3>ALL Products</h3>
            <div class="agileinfo_new_products_grids">
                <!-- Products Start-->
                <?php foreach($product as $data){
                    if ($this->session->userdata('user')){
                        if (!($data['userHave'] == $this->session->userdata('username'))){
                 ?>
                <div class="col-md-3">
                    <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
                        <div class="hs-wrapper hs-wrapper1">
                            <img width="100%" src="<?php echo base_url()?>images/productPictures/<?php echo $data['pictures'];?>" />
                            <img width="100%" src="<?php echo base_url()?>images/productPictures/<?php echo $data['pictures'];?>" />
                            <img width="100%" src="<?php echo base_url()?>images/productPictures/<?php echo $data['pictures'];?>" />
                            <img width="100%" src="<?php echo base_url()?>images/productPictures/<?php echo $data['pictures'];?>" />
                            <img width="100%" src="<?php echo base_url()?>images/productPictures/<?php echo $data['pictures'];?>" />
                            <img width="100%" src="<?php echo base_url()?>images/productPictures/<?php echo $data['pictures'];?>" />
                            <div class="w3_hs_bottom w3_hs_bottom_sub">
                                <ul>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#<?php echo $data['no'];?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h5><a href="#" data-toggle="modal" data-target="#<?php echo $data['no']?>"><?php echo $data['productName'];?> [<?php echo $data['brand'];?>]</a></h5>
                        <div class="simpleCart_shelfItem">
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
                </div>
                <?php } }else {?>
                <div class="col-md-3">
                    <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
                        <div class="hs-wrapper hs-wrapper1">
                            <img width="100%" src="<?php echo base_url()?>images/productPictures/<?php echo $data['pictures'];?>" />
                            <img width="100%" src="<?php echo base_url()?>images/productPictures/<?php echo $data['pictures'];?>" />
                            <img width="100%" src="<?php echo base_url()?>images/productPictures/<?php echo $data['pictures'];?>" />
                            <img width="100%" src="<?php echo base_url()?>images/productPictures/<?php echo $data['pictures'];?>" />
                            <img width="100%" src="<?php echo base_url()?>images/productPictures/<?php echo $data['pictures'];?>" />
                            <img width="100%" src="<?php echo base_url()?>images/productPictures/<?php echo $data['pictures'];?>" />
                            <div class="w3_hs_bottom w3_hs_bottom_sub">
                                <ul>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#<?php echo $data['no'];?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h5><a href="#" data-toggle="modal" data-target="#<?php echo $data['no']?>"><?php echo $data['productName'];?></a></h5>
                        <div class="simpleCart_shelfItem">
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
                </div>
                <?php } } ?>
                <!-- //Products Finish-->
                <div class="clearfix"> </div>
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