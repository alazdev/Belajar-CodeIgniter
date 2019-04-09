                <?php if ($this->session->userdata('user')){
                    if($this->session->userdata('username') == $product['userHave']){ ?>
                <section>
                    <div class="modal-body">
                        <div class="col-md-12 modal_body_right"> 
                            <div class="facts">
                                <div class="register">
                                    <form action="<?php echo base_url()?>index.php/product/edit/" method="post" enctype="multipart/form-data">         
                                        <br/><br/>
                                        <input type="hidden" name="no" value="<?php echo $product['no']?>">
                                        <input placeholder="Name Product" name="productName" type="text" required oninvalid="this.setCustomValidity('Nama Product Harus Ada!')" oninput="this.setCustomValidity('')" value="<?php echo $product['productName']?>"><br/><br/>
                                        <input class="col-md-12 col-75 cont" type="text" value="Maaf Untuk Sekarang Gambar Belum Bisa Diedit" readonly><br/><br/><br/>
                                        <input class="col-md-12 col-75 cont" placeholder="Prize($)" name="prize" type="number" min="1" max="500" required oninvalid="this.setCustomValidity('Masukkan Harga Dengan benar(1 -500)')" oninput="this.setCustomValidity('')" value="<?php echo $product['prize']?>"><br/><br/>
                                        <input class="col-md-12 col-75 cont" placeholder="Qty" name="qty" type="number" min="1" max="1000" required oninvalid="this.setCustomValidity('Masukkan Qty Dengan benar(1 - 1000)')" oninput="this.setCustomValidity('')"  value="<?php echo $product['qty']?>"><br/><br/>
                                        <select class="col-md-12 col-75 cont" name="catagories" required oninvalid="this.setCustomValidity('Pliss Centang Salah Satunya')" oninput="this.setCustomValidity('')">
                                            <option value="Android" <?php if($product['catagories'] == 'Android'){?>selected <?php } ?>>Android</option>
                                            <option value="IOS" <?php if($product['catagories'] == 'IOS'){?>selected <?php } ?>>IOS</option>
                                            <option value="Latop" <?php if($product['catagories'] == 'Laptop'){?>selected <?php } ?>>Laptop</option>
                                        </select><br/><br/>
                                        <select class="col-md-12 col-75 cont" name="brand" required oninvalid="this.setCustomValidity('Pliss Centang Salah Satunya')" oninput="this.setCustomValidity('')">
                                            <option value="Apple" <?php if($product['brand'] == 'Apple'){?>selected <?php } ?>>Apple</option>
                                            <option value="Asus" <?php if($product['brand'] == 'Asus'){?>selected <?php } ?>>Asus</option>
                                            <option value="Acer" <?php if($product['brand'] == 'Acer'){?>selected <?php } ?>>Acer</option>
                                            <option value="Lenovo" <?php if($product['brand'] == 'Lenovo'){?>selected <?php } ?>>Lenovo</option>
                                            <option value="Samsung" <?php if($product['brand'] == 'Samsung'){?>selected <?php } ?>>Samsung</option>
                                            <option value="Vivo" <?php if($product['brand'] == 'Vivo'){?>selected <?php } ?>>Vivo</option>
                                        </select><br/><br/>
                                        <textarea class="col-md-12 col-75 cont" name="desc" placeholder="Describe Product" required  oninvalid="this.setCustomValidity('Tampaknya Ini Tidak Boleh Kosong')" oninput="this.setCustomValidity('')"><?php echo $product['desc']?></textarea>
                                        <div>
                                            <input type="submit" value="Edit"/>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </section>
                <?php } else if(!($this->session->userdata('username') == $product['userHave'])){ ?>
                <div class="team">
                    <div class="container">
                        <h3>OOPs</h3>
                        <div class="wthree_team_grids">
                            <h1 align="center">ERROR</h1>
                            <p>Ini Bukan Product Anda.</p>
                        </div>
                    </div>
                </div>
                <?php } } else if ($this->session->userdata('admin')){?>
                <div class="team">
                    <div class="container">
                        <h3>OOPs</h3>
                        <div class="wthree_team_grids">
                            <h1 align="center">ERROR</h1>
                            <p>Admin Tidak Diperkenankan Edit Product, Daftarlah Sebagai User.</p>
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