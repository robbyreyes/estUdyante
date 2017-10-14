    <div class="container" id="cont">
        <div class="row">
            <div class="col-md-3" id="avatarcol">
                <img class="img-circle" src="<?php echo base_url('assets/img/account.png') ?>" width="200" id="myImg">
            </div>
            <div id="myModal" class="modal">
              <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
              <img class="modal-content" id="img01">
              <div id="caption"></div>
            </div>
            <div class="col-md-6" id="nameholder">
                <h1><?php echo $name?></h1></div>
        </div>
        <div>
            <button class="btn btn-primary">Upload Picture</button>
            <button class="btn btn-primary">Edit Profile Details</button>
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

                        <?php

                        if($post!=null)
                        {

                        foreach(array_reverse($post) as $p){?>
                        <div class="row" id="story">
                          <div class="col-md-12">
                              <h4><a href="<?php echo base_url('profile') ?>"><img class="img-circle" src="<?php echo base_url('assets/img/account.png') ?>"
                                 alt="Avatar" width="30"><?php echo $p['user_name']?></a> &nbsp; <?php echo $p['postdate'] ?></h4></div>
                          <div class="col-md-12" id="activepost">
                              <p id="activepostp"><?php echo $p['body']?></p>
                          </div>
                        </div>
                        <div class="row" id="row_divider"></div>
                        <?php
                        }

                        }
                        else
                        {
                            echo'<div class="col-md-12"><h4><center>There is no post</center></h4></div>';
                        }


                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/profilepicmodal.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
