
    <div class="container-fluid">
        <div id="content">
            <div class="row" id="contentrow">
                <div class="col-md-8 col-md-offset-0" id="feed">
                    <div class="row" id="write">
                        <div class="col-md-9">
                            <h1 class="text-left">Books Catalog</h1></div>
                        <div class="col-md-9">
                            <p class="text-left">Book catalog</p>
                        </div>
                    </div>
                    <div class="row" id="row_divider"></div>
                </div>
                <div class="col-md-1" id="divider"></div>
                <div class="col-md-3" id="function">
                    <div class="row" id="book">
                        <div class="col-md-12">
                            <h4 class="text-center"><img src="<?php echo base_url('assets/img/book-icon-149.png') ?>" alt="book icon" width="30"> <i class="glyphicon glyphicon-plus"></i></h4></div>
                        <div class="col-md-12">
                            <button class="btn btn-default" type="button">Exchange Book </button>
                        </div>
                    </div>
                    <div class="row" id="row_divider"></div>
                </div>
                <div class="col-md-8 col-md-offset-0" id="feed">
                   <a href="<?php echo base_url('bookcatalog/bookinfo2') ?>"> <div class="row" id="write">
                        <div class="col-md-2"><img class="img-responsive" src="<?php echo base_url('assets/img/stock-vector-mathematics-vector-cover-a-background-from-scientific-formulas-for-book-textbook-notebook-320996975.jpg') ?>" alt="Book Cover" width="80"></div>
                        <div class="col-md-9">
                            <h1 class="text-left">Mathematics 1</h1></div>
                        <div class="col-md-9">
                            <p class="text-left">Author:<?php echo $name?> </p>
                        </div>
                    </div>
                    <div class="row" id="row_divider"></div>
                    </a>
                </div>
                <div class="col-md-8 col-md-offset-0" id="feed">
                    <a href="<?php echo base_url('bookcatalog/bookinfo') ?>"><div class="row" id="write">
                        <div class="col-md-2"><img class="img-responsive" src="<?php echo base_url('assets/img/kafka_on_the_shore.jpg') ?>" alt="Book Cover" width="80"></div>
                        <div class="col-md-9">
                            <h1 class="text-left">Kafka on the shore</h1></div>
                        <div class="col-md-9">
                            <p class="text-left">Author: <?php echo $name?></p>
                        </div>
                    </div>
                    <div class="row" id="row_divider"></div>
                </a>
                </div>
                <div class="col-md-8 col-md-offset-0" id="feed">
                   <a href="<?php echo base_url('bookcatalog/bookinfo3') ?>"> <div class="row" id="write">
                        <div class="col-md-2"><img class="img-responsive" src="<?php echo base_url('assets/img/Percy-Jackson-The-Lightning-Thief-Original-Cover.jpg') ?>" alt="Book Cover" width="80"></div>
                        <div class="col-md-9">
                            <h1 class="text-left">The Lighning Thief</h1></div>
                        <div class="col-md-9">
                            <p class="text-left">Author: <?php echo $name?></p>
                        </div>
                    </a>
                    </div>
                    <div class="row" id="row_divider"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
