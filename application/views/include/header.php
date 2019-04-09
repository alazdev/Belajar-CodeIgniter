<head>
<title>CommGanga - Electronic Store a Ecommerce</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Electronic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- Custom Theme files -->
<link href="<?php echo base_url()?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url()?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url()?>css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url()?>css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="<?php echo base_url()?>css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="<?php echo base_url()?>js/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url()?>css/jquery.countdown.css" /><!-- countdown --> 
<!-- //js -->  
<!-- start-smooth-scrolling -->
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<link rel="icon" href="<?php echo base_url()?>images/commganga.png">
    <style>
        .register input[type="file"],.register input[type="rage"],.register input[type="number"],.register select,.register textarea{
            outline:none;
            border:1px solid #DFDFDF;
            background:#f5f5f5;
            padding:10px;
            color:#212121;
            width:100%;
            font-size:14px;
            margin-bottom: 20px;
        }
    </style>
<!-- //end-smooth-scrolling --> 
</head> 
<body>
    <!-- for bootstrap working -->
    <script type="text/javascript" src="<?php echo base_url()?>js/bootstrap-3.1.1.min.js"></script>
    <!-- //for bootstrap working -->
    <!-- header modal -->
    <?php if (!$this->session->userdata('admin') && !$this->session->userdata('user')) {?>
    <div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;</button>
                    <h4 class="modal-title" id="myModalLabel">Don't Wait, Login now!</h4>
                </div>
                <div class="modal-body modal-body-sub">
                    <div class="row">
                        <div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
                            <div class="sap_tabs">  
                                <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                                    <ul>
                                        <li class="resp-tab-item" aria-controls="tab_item-0"><span>Sign in</span></li>
                                        <li class="resp-tab-item" aria-controls="tab_item-1"><span>Sign up</span></li>
                                    </ul>       
                                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                        <div class="facts">
                                            <div class="register">
                                                <form action="<?php echo base_url()?>index.php/login/proses_login" method="post">         
                                                    <input name="username" placeholder="Username" type="text"
                                                        required onkeyup="this.value = this.value.toLowerCase()"
                                                        oninvalid="this.setCustomValidity('Masukkan Username Anda Disini')"
                                                        oninput="this.setCustomValidity('')">             
                                                    <input name="password" placeholder="Password" type="password"
                                                        required minlength="8"
                                                        oninvalid="this.setCustomValidity('Masukkan Password Anda! (8 Karakter)')"
                                                        oninput="this.setCustomValidity('')">
                                                    <div class="sign-up">
                                                        <input type="submit" value="Sign in"/>
                                                    </div>
                                                </form>
                                            </div>
                                        </div> 
                                    </div>   
                                    <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
                                        <div class="facts">
                                            <div class="register">
                                                <form action="<?php echo base_url()?>index.php/login/registrasikan" method="post" enctype="multipart/form-data">        
                                                    <input placeholder="Username" id="username" name="username" type="text" required onkeyup="this.value = this.value.toLowerCase()" oninvalid="this.setCustomValidity('Masukkan Username Anda Disini')" oninput="this.setCustomValidity('')">
                                                    <span id="avaibility"></span>
                                                    <?php foreach($user as $data){?>
                                                    <input type="hidden" name="cek" value="<?php echo $data['username']?>">
                                                   <?php }?>
                                                    <input placeholder="Email Address" name="email" type="email" required  oninvalid="this.setCustomValidity('Email Anda Masih Kosong')" oninput="this.setCustomValidity('')"><br/><br/>
                                                    <input name="gender" type="radio" value="Laki-laki" checked>Laki-laki
                                                    <input name="gender" type="radio" value="perempuan">Perempuan<br/><br/>
                                                    <input name="age" type="range" min="13" max="55" value="13" id="age" oninput="nilai(value)"><output for="age" id="volume">13 Tahun</output><br/><br/>
                                                    <script>
                                                        function nilai(age){
                                                            document.querySelector('#volume').value = age+' Tahun';
                                                        }
                                                    </script>
                                                    <input type="file" name="profilePicture" required  oninvalid="this.setCustomValidity('Masukkan File Foto Anda')" oninput="this.setCustomValidity('')" accept="image/x-png, image/jpeg">
                                                    <input placeholder="Password" name="password" type="password" minlength="8" required  oninvalid="this.setCustomValidity('Password Tidak Bolh Kosong(8 Karakter)')" oninput="this.setCustomValidity('')">
                                                    <div class="sign-up">
                                                        <input type="submit" value="Create Account"/>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>                                                            
                                </div>  
                            </div>
                            <script src="<?php echo base_url()?>js/easyResponsiveTabs.js" type="text/javascript"></script>
                            <script type="text/javascript">
                                $(document).ready(function () {
                                    $('#horizontalTab').easyResponsiveTabs({
                                        type: 'default', //Types: default, vertical, accordion           
                                        width: 'auto', //auto or any width like 600px
                                        fit: true   // 100% fit in a container
                                    });
                                });
                            </script>
                            <div id="OR" class="hidden-xs">OR</div>
                        </div>
                        <div class="col-md-4 modal_body_right modal_body_right1">
                            <div class="row text-center sign-with">
                                <div class="col-md-6">
                                    <h3 class="other-nw">Sign in with</h3>
                                </div>
                                <div class="col-md-4">
                                    <ul class="social">
                                        <li class="social_facebook"><a href="#" class="entypo-facebook"></a></li>
                                        <li class="social_dribbble"><a href="#" class="entypo-dribbble"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } else { ?>
    <div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;</button>
                    <h4 class="modal-title" id="myModalLabel">Hai <?php echo $this->session->userdata('username')?></h4>
                </div>
                <div class="modal-body modal-body-sub">
                    <div class="row">
                        <div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
                            <div class="sap_tabs">  
                                <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                                    <?php foreach ($user as $data) {
                                        if ($data['username'] == $this->session->userdata('username')){
                                    ?>
                                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                        <div class="facts">
                                            <div class="register">
                                                <form action="" method="post">
                                                    <input name="user" placeholder="<?php echo $data['email']?>" type="text" readonly="">
                                                    <input name="user" placeholder="<?php echo $data['age']?> Tahun" type="text" readonly="">
                                                    <input name="user" placeholder="<?php echo $data['gender']?>" type="text" readonly="">
                                                    <input name="user" placeholder="Status : <?php echo $data['role']?>" type="text" readonly="">
                                                </form>
                                            </div>
                                        </div> 
                                    </div>
                                    <?php } }?>  
                                    <ul>
                                        <a href="<?php echo base_url()?>index.php/login/logout" class="out"><li onclick="destroy()" class="resp-tab-item"<span> Log Out</span></li></a>
                                    </ul>                                                        
                                </div>  
                            </div>
                            <script src="<?php echo base_url()?>js/easyResponsiveTabs.js" type="text/javascript"></script>
                            <script type="text/javascript">
                                $(document).ready(function () {
                                    $('#horizontalTab').easyResponsiveTabs({
                                        type: 'default', //Types: default, vertical, accordion           
                                        width: 'auto', //auto or any width like 600px
                                        fit: true   // 100% fit in a container
                                    });
                                });
                            </script>
                        </div>
                        <?php foreach ($user as $data) {?>
                        <?php if ($data['username'] == $this->session->userdata('username')) {?>
                        <div class="col-md-4 modal_body_right modal_body_right1">
                            <div class="hs-wrapper hs-wrapper1">
                                <img width="100%" src="<?php echo base_url()?>images/profilePictures/<?php echo $data['profilePicture'];?>" />
                                <img width="100%" src="<?php echo base_url()?>images/profilePictures/<?php echo $data['profilePicture'];?>" />
                                <img width="100%" src="<?php echo base_url()?>images/profilePictures/<?php echo $data['profilePicture'];?>" />
                                <img width="100%" src="<?php echo base_url()?>images/profilePictures/<?php echo $data['profilePicture'];?>" />
                                <img width="100%" src="<?php echo base_url()?>images/profilePictures/<?php echo $data['profilePicture'];?>" />
                                <img width="100%" src="<?php echo base_url()?>images/profilePictures/<?php echo $data['profilePicture'];?>" />
                            </div>
                        </div>
                        <?php } } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <?php if (!$this->session->userdata('admin') && !$this->session->userdata('user')){ ?>
    <script>
        $('#myModal88').modal('show');
    </script>
    <?php }?>

    <!-- header -->
    <div class="header" id="home1">
        <div class="container">
            <div class="w3l_login">
                <a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
            </div>
            <div class="w3l_logo">
                <h1><a href="index.html">CommGanga<span>Your stores. Your place.</span></a></h1>
            </div>
            <div class="cart cart box_1"> 
                <form action="" method="post" class="last"> 
                    <input type="hidden" name="cmd" value="_cart" />
                    <input type="hidden" name="display" value="1" />
                    <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
                </form>   
            </div>  
        </div>
    </div>
    <!-- //header -->
</body>