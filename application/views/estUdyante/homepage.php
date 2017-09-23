
    
    <div class="container-fluid">
        <div id="content">
            <div class="row" id="contentrow">
                <div class="col-md-7 col-md-offset-0" id="feed">
                    <div class="row" id="write">
                        <div class="col-md-2"><img class="img-circle img-responsive" src="<?php echo base_url('assets/img/account.png') ?>" alt="Avatar" width="80"></div>
                        <div class="col-md-7">
                            <input class="input-lg" type="text" placeholder="Write Something..." id="writepost">
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-info" type="submit">POST </button>
                        </div>
                    </div>
                    <div class="row" id="row_divider"></div>
                    <div class="row" id="post">
                        <div class="col-md-12">
                            <h4><img class="img-circle" src="<?php echo base_url('assets/img/account.png') ?>" alt="Avatar" width="30"> Robby Reyes</h4></div>
                        <div class="col-md-12" id="activepost">
                            <p id="activepostp">POSTPOSTPOSTPOSTPOSTPOSTPOSTPOSTPOSTPOSTPOSTPOSTPOSTPOST </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-1" id="divider"></div>
                <div class="col-md-3" id="function">
                    <div class="row" id="book">
                        <div class="col-md-12">
                            <h4 class="text-center"><img src="<?php echo base_url('assets/img/book-icon-149.png') ?>" alt="Avatar" width="30"> </h4></div>
                        <div class="col-md-12">
                            <a href="<?php echo site_url('estu/bookcatalog') ?>"><button class="btn btn-default" type="button">Exchange Books </button></a>
                        </div>
                    </div>
                    <div class="row" id="row_divider"></div>
                    <div class="row" id="book">
                        <div class="col-md-12">
                            <h4 class="text-center"><img src="<?php echo base_url('assets/img/Document_black-512.png') ?>" alt="Avatar" width="30"> </h4></div>
                        <a href="<?php echo site_url('estu/notecatalog') ?>"><button class="btn btn-default" type="button">Exchange Notes</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>