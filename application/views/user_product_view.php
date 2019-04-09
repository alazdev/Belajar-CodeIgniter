    <!-- new-products -->
    <?php if ($this->session->userdata('user')){?>
    <div class="new-products">
        <div class="container">
            <h3>ALL Products</h3>
            <div class="agileinfo_new_products_grids">
                <!-- Products Start-->
                <?php if ($this->session->userdata('user')) { ?>
                <div class="col-md-3">
                    <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
                        <div class="hs-wrapper hs-wrapper1">
                            <img style="width: 100%; " src="<?php echo base_url()?>images/+.png" />
                            <img style="width: 100%; " src="<?php echo base_url()?>images/+.png" />
                            <img style="width: 100%; " src="<?php echo base_url()?>images/+.png" />
                            <img style="width: 100%; " src="<?php echo base_url()?>images/+.png" />
                            <img style="width: 100%; " src="<?php echo base_url()?>images/+.png" />
                            <img style="width: 100%; " src="<?php echo base_url()?>images/+.png" />
                            <img style="width: 100%; " src="<?php echo base_url()?>images/+.png" />
                            <div class="w3_hs_bottom w3_hs_bottom_sub">
                                <ul>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#add_product"><span class="glyphicon glyphicon-upload" aria-hidden="true"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="simpleCart_shelfItem">
                            <p><i class="item_price" data-toggle="modal" data-target="#add_product"></i></p>
                            <form action="#" method="post">  
                                <a href="" data-toggle="modal" data-target="#add_product"><button class="w3ls-cart">Add Product</button></a>
                            </form>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php foreach($product as $data){
                    if ($data['userHave'] == $this->session->userdata('username')){
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
                        <h5>
                            <a href="#" data-toggle="modal" data-target="#<?php echo $data['no']?>"><?php echo $data['productName'];?></a>&emsp;
                            <a class="agile-icon" href="<?php echo base_url().'index.php/product/delete/'.$data['no'].'/'.$data['pictures'].'/'.$data['userHave']?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>&emsp;
                            <a class="agile-icon" href="<?php echo base_url().'index.php/product/view_edit/'.$data['no']?>"><i class="fa fa-edit" aria-hidden="true"></i></a>
                        </h5>
                        <div class="simpleCart_shelfItem">
                            <p><span>$<?php echo ($data['prize']+40);?></span> <i class="item_price">$<?php echo $data['prize'];?></i></p>
                            <p>
                            </p>
                        </div>
                    </div>
                </div>
                <?php } }?>
                <!-- //Products Finish-->
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //new-products -->
    <?php foreach($product as $data) { ?>
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
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <?php }?>
    <div class="modal video-modal fade" id="add_product" tabindex="-1" role="dialog" aria-labelledby="myModal2">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                </div>
                <section>
                    <div class="modal-body">
                        <div class="col-md-12 modal_body_right"> 
                            <div class="facts">
                                <div class="register">
                                    <form action="<?php echo base_url()?>index.php/product/add/" method="post" enctype="multipart/form-data">         
                                        <input placeholder="Name Product" name="productName" type="text" required oninvalid="this.setCustomValidity('Nama Product Harus Ada!')" oninput="this.setCustomValidity('')"><br/><br/>
                                        <input class="col-md-12 col-75 cont" type="file" name="pictures" accept="image/x-png, image/jpeg" required  oninvalid="this.setCustomValidity('Masukkan Foto Productmu')" oninput="this.setCustomValidity('')"><br/><br/>
                                        <input class="col-md-12 col-75 cont" placeholder="Prize($)" name="prize" type="number" min="1" max="500" required oninvalid="this.setCustomValidity('Masukkan Harga Dengan benar(1 -500)')" oninput="this.setCustomValidity('')"><br/><br/>
                                        <select class="col-md-12 col-75 cont" name="catagories" required oninvalid="this.setCustomValidity('Pliss Centang Salah Satunya')" oninput="this.setCustomValidity('')">
                                            <option value="Android">Android</option>
                                            <option value="IOS">IOS</option>
                                            <option value="Latop">Laptop</option>
                                        </select><br/><br/>
                                        <select class="col-md-12 col-75 cont" name="brand" required oninvalid="this.setCustomValidity('Pliss Centang Salah Satunya')" oninput="this.setCustomValidity('')">
                                            <option value="Apple">Apple</option>
                                            <option value="Asus">Asus</option>
                                            <option value="Acer">Acer</option>
                                            <option value="Lenovo">Lenovo</option>
                                            <option value="Samsung">Samsung</option>
                                            <option value="Vivo">Vivo</option>
                                        </select><br/><br/>
                                        <textarea class="col-md-12 col-75 cont" name="desc" placeholder="Describe Product" required  oninvalid="this.setCustomValidity('Tampaknya Ini Tidak Boleh Kosong')" oninput="this.setCustomValidity('')"></textarea>
                                        <div>
                                            <input type="submit" value="Add"/>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <?php } else if ($this->session->userdata('admin')){?>
    <div class="team">
        <div class="container">
            <h3>OOPs</h3>
            <div class="wthree_team_grids">
                <h1 align="center">ERROR</h1>
                <p>Admin Tidak Diperkenankan Menjual Product, Daftarlah Sebagai User.</p>
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