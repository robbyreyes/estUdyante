

    <div class="container-fluid">
        <div id="content">
            <div class="row" id="contentrow">
                <div class="col-md-7 col-md-offset-0" id="feed">
                    <div class="row" id="write">
                        <div class="col-md-2"><img class="img-circle img-responsive" src="<?php echo base_url('assets/img/account.png') ?>" alt="Avatar" width="80"></div>
                        <form role="form" class="" method="post" action= <?php echo base_url('homepage/status')?>>
                        <div class="col-md-7">
                            <input name="body" autocomplete="off" class="input-lg" type="text" placeholder="Write Something..." id="writepost">
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-info" type="submit">POST </button>
                        </div>
                    </div>
                    <div class="row" id="row_divider"></div>
                    <div class="row" id="post">

                        <?php
                        foreach(array_reverse($post) as $p){?>

                          <div class="col-md-12">
                              <h4><a href="<?php echo base_url('profile') ?>"><img class="img-circle" src="<?php echo base_url('assets/img/account.png') ?>"
                                 alt="Avatar" width="30"><?php echo $name?></a> &nbsp; <?php echo $p['postdate'] ?></h4></div>
                          <div class="col-md-12" id="activepost">
                              <p id="activepostp"><?php echo $p['body']?></p>
                          </div>

                        <?php
                        }


                        ?>

                    </div>
                      </form>
                </div>
                <div class="col-md-1" id="divider"></div>
                <div class="col-md-3" id="function">
                    <div class="row" id="book">
                        <div class="col-md-12">
                            <h4 class="text-center"><img src="<?php echo base_url('assets/img/book-icon-149.png') ?>" alt="Avatar" width="30"> </h4></div>
                        <div class="col-md-12">
                            <a href="<?php echo base_url('bookcatalog') ?>"><button class="btn btn-default" type="button">Exchange Books </button></a>
                        </div>
                    </div>
                    <div class="row" id="row_divider"></div>
                    <div class="row" id="book">
                        <div class="col-md-12">
                            <h4 class="text-center"><img src="<?php echo base_url('assets/img/Document_black-512.png') ?>" alt="Avatar" width="30"> </h4></div>
                        <a href="<?php echo base_url('notecatalog') ?>"><button class="btn btn-default" type="button">Exchange Notes</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
