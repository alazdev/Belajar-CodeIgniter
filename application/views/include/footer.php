
    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="w3_footer_grids">
                <div class="col-md-3 w3_footer_grid">
                    <h3>Contact</h3>
                    <ul class="address">
                        <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Tanjung Jati,<span>Sub-districts Guguak,</span><span>Districts Lima Puluh Kota</span><span>Sumatera Barat</span></li>
                        <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">muhammadlutfi3370@gmail.com</a></li>
                        <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+62 822-8517-6104</li>
                    </ul>
                </div>
                <div class="col-md-3 w3_footer_grid">
                    <h3>Information</h3>
                    <ul class="info"> 
                        <li><a href="<?php echo base_url()?>index.php/product/about">About Us</a></li>
                        <li><a href="<?php echo base_url()?>index.php/product/mail">Contact Us</a></li>
                        <li><a href="<?php echo base_url()?>index.php/product/codes">Short Codes</a></li>
                        <li><a href="<?php echo base_url()?>index.php/product/catagories_android/">Special Products</a></li>
                    </ul>
                </div>
                <div class="col-md-3 w3_footer_grid">
                    <h3>Category</h3>
                    <ul class="info"> 
                        <li><a href="<?php echo base_url()?>index.php/product/catagories_android/">Android</a></li>
                        <li><a href="<?php echo base_url()?>index.php/product/catagories_laptop/">Laptops</a></li>
                        <li><a href="<?php echo base_url()?>index.php/product/catagories_ios/">IOS</a></li>
                    </ul>
                </div>
                <div class="col-md-3 w3_footer_grid">
                    <h3>Profile</h3>
                    <ul class="info"> 
                        <li><a href="<?php echo base_url()?>">Home</a></li>
                        <li><a href="<?php echo base_url()?>index.php/product/catagories_android/">Today's Deals</a></li>
                    </ul>
                    <h4>Follow Us</h4>
                    <div class="agileits_social_button">
                        <ul>
                            <li><a href="https://facebook.com" target="_blank" class="facebook"> </a></li>
                            <li><a href="https://gmail.com" target="_blank" class="google"> </a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="footer-copy">
            <div class="footer-copy1">
                <div class="footer-copy-pos">
                    <a href="#home1" class="scroll"><img src="<?php echo base_url()?>images/arrow.png" alt=" " class="img-responsive" /></a>
                </div>
            </div>
            <div class="container">
                <p>&copy; 2019 Electronic Store. All rights reserved | Design by <a href="https://instagram.com/_elvliar?utm_source=ig_profile_share&igshid=tn3sn64tlfca" target="_blank">Muhammad Lutfi</a></p>
            </div>
        </div>
    </div>
    <!-- //footer --> 
    <!-- cart-js -->
    <script src="<?php echo base_url()?>js/minicart.js"></script>
    <?php if (!$this->session->userdata('admin') && !$this->session->userdata('user')){ ?>
    <?php } else { ?>
    <script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) { 
                }
            }
        });
        Cart.prototype.destroy = function destroy() {
    Storage.prototype.destroy.call(this);

    this._items = [];
    this._settings = { bn: constants.BN };

    this.fire('destroy');
};

    </script>
    <?php } ?>
    <!-- //cart-js -->
    <script src="<?php echo base_url()?>sweet/dist/sweetalert2.all.min.js"></script> 
    <script src="<?php echo base_url()?>sweet/dist/myscript.js"></script>  