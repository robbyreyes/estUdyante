
    <div class="container" id="cont">
        <div class="row">
            <div class="col-md-3" id="avatarcol"><img class="img-circle" src="<?php echo base_url('assets/img/account.png') ?>" width="200" id="avatar"></div>
            <div class="col-md-6" id="nameholder">
                <h1><?php echo $name?></h1></div>
        </div>
        <div class="row" id="profilesecrow">
            <div class="col-md-3 col-md-offset-0">
                <div class="row" id="rowinfo">
                    <div class="col-md-12" id="personalinfo">
                        <div class="row">
                            <div class="col-md-12 col-md-offset-0">
                                <p class="text-info">Personal Information</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-md-offset-0">
                                <p>School: </p>
                                <p>Birthday: </p>
                                <p>Contact No:</p>
                                <p>Address: </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="rowfriends">
                    <div class="col-md-12">
                        <p class="lead">Friends </p>
                        <p>Number of friends</p>
                        <h4 class="text-center"> <a href="<?php echo base_url('friendlist') ?>">See all</a></h4></div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-8" id="feed">
                        <div class="row" id="story">
                            <div class="col-md-2"><img class="img-circle img-responsive" src="<?php echo base_url('assets/img/account.png') ?>" alt="Avatar" width="80"></div>
                            <div class="col-md-9">
                                <h3 class="text-left"><?php echo $name?></h3></div>
                            <div class="col-md-9">
                                <p class="text-left">POST POST POST POST POST POST POST POST</p>
                            </div>
                        </div>
                        <div class="row" id="story">
                            <div class="col-md-2"><img class="img-circle img-responsive" src="<?php echo base_url('assets/img/account.png') ?>" alt="Avatar" width="80"></div>
                            <div class="col-md-9">
                                <h3 class="text-left"><?php echo $name?></h3></div>
                            <div class="col-md-9">
                                <p class="text-left">POST POST POST POST POST POST POST POST</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
