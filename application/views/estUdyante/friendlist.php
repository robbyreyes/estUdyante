
    <div class="container-fluid">
        <div id="content">
            <div class="row" id="contentrow">
                <div class="col-md-8 col-md-offset-0" id="feed">
                    <div class="row" id="write">
                        <div class="col-md-9">
                            <h1 class="text-left">Following (<?php echo "$followingcounter People"?>)</h1>
                        </div>
                    </div>

                <div class="row" id="row_divider"></div>

                <div class="col-md-12 col-md-offset-0" id="feed">

                <?php

                    if($matefollow!=null)
                    {
                       foreach(array_reverse($matefollow) as $mf){?>

                        <div class="row" id="write">
                                <div class="col-md-2"><img class="img-responsive" src="<?php echo base_url('assets/img/account.png') ?>" alt="friend" width="65">
                                </div>
                                <div class="col-md-9">
                                    <a href="profile/id/<?php echo $mf["user_id"] ?>">
                                    <h3 class="text-left"><?php
                                        echo $mf['firstname'].' '.$mf['lastname'];
                                    ?></h3>
                                    </a>
                                </div>
        				</div>

                        <div class="row" id="row_divider"></div>

                <?php
                        }
                    }
                    else
                    {
                        echo'<div class="col-md-12"><h4><center>No People</center></h4></div>';
                    }
                ?>

                </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>


</html>
