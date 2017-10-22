<section class="engine"><a href="#">web builder</a></section><section class="header9 cid-qyM5yLUrLb mbr-fullscreen mbr-parallax-background" id="header9-h" data-rv-view="62">

    <div class="container">
        <div class="row">
        <div class="media-container-column mbr-white col-md-8">
            <h1 class="mbr-section-title align-left mbr-bold pb-3 mbr-fonts-style display-1"></h1>
            <h3 class="mbr-section-subtitle align-left mbr-light pb-3 mbr-fonts-style display-2"><strong>Welcome to estÜdyante</strong></h3>
            <p class="mbr-text align-left pb-1 mbr-fonts-style display-6">If you haven't sign up yet click the sign up button below.</p>
            <div class="mbr-section-btn align-left"><a class="btn btn-md btn-warning display-4" href="index.html#header15-i">SIGN UP</a></div>
        </div>
        <div class="media-container-column mbr-white col-md-4">
            <div class="form-container">
                <div class="media-container-column" data-form-type="formoid">
                    <h3 class="mbr-section-subtitle align-left mbr-light"><strong>LOG IN</strong></h3>
                    <form class="mbr-form" action="<?php echo base_url('validate')?>" method="post">
                        <div data-for="email">
                            <div class="form-group">
                                <input name="email" class="form-control" type="email" required="" placeholder="Email" autofocus="" id="inputEmail"/>
                            </div>
                        </div>
                        <div data-for="password">
                            <div class="form-group">
                                <input name="password" class="form-control" type="password" required="" placeholder="Password" id="inputPassword" />
                            </div>
                        </div>
                        <span class="input-group-btn"><button href="" type="submit" class="btn btn-form btn-primary display-4"><span class="mbri-login mbr-iconfont mbr-iconfont-btn"></span>LOGIN</button></span>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>


</section>

<section class="cid-qyM7KxSN9e mbr-fullscreen mbr-parallax-background" id="header15-i" data-rv-view="67">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);"></div>

    <div class="container align-right">
<div class="row">
    <div class="mbr-white col-lg-8 col-md-7 content-container">
        <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">SIGN UP</h1>
        <p class="mbr-text pb-3 mbr-fonts-style display-5">Connect with your classmates and friends — and other fascinating students. Get in-the-moment updates on the things that interest you. And exchange useful notes and used books that you haven’t read yet.&nbsp;<br></p>
    </div>
    <div class="col-lg-4 col-md-5">
    <div class="form-container">
        <div class="media-container-column" data-form-type="formoid">
            <?php
                    if( isset($errors) ){
                        echo $errors;
                    }
                    ?>
            <form autocomplete="off" class="mbr-form" action="<?php echo base_url('signup')?>" method="post">
                <div data-for="name">
                    <div class="form-group">
                        <input class="form-control" type="fname" required="" placeholder="First Name" autofocus="" id="inputName" name="fname"/>
                    </div>
                </div>
                <div data-for="name">
                    <div class="form-group">
                        <input class="form-control" type="lname" required="" placeholder="Last Name" autofocus="" id="inputName" name="lname"/>
                    </div>
                </div>
                <div data-for="email">
                    <div class="form-group">
                        <input class="form-control" type="sgemail" required="" placeholder="Email" id="inputPassword" name="email"/>
                    </div>
                </div>
                <div data-for="password">
                    <div class="form-group">
                        <input class="form-control" type="password" required="" placeholder="Password" id="inputPassword" name="password"/>
                    </div>
                </div>
                <div class="form-group text-right">
                        <span class="input-group-btn"><button name="signup" value="signup" type="submit" class="btn btn-form btn-primary display-4"> Sign Up </button></span>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
    </div>

</section>

<section class="cid-qyM1LhZkF5 mbr-reveal" id="footer1-g" data-rv-view="70">

    <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-12 col-md-3">
                <div class="media-wrap">
                    <a href="https://mobirise.com/">
                        <img src="assets/images/logo2.png" alt="Mobirise" media-simple="true">
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3"></h5>
                <p class="mbr-text"></p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Contacts
                </h5>
                <p class="mbr-text">
                    Email: support@mobirise.com
                    <br>Phone: +1 (0) 000 0000 001
                    <br>Fax: +1 (0) 000 0000 002
                </p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Links
                </h5>
                <p class="mbr-text"><a href="https://github.com/robbyreyes/estUdyante" target="_blank">Github</a></p>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright 2017 estÜdyante - All Rights Reserved
                    </p>
                </div>
                <div class="col-md-6">

                </div>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/jarallax/jarallax.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>


</body>
</html>
