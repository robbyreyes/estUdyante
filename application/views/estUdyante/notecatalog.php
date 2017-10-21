<div class="container-fluid">
        <div id="content">
            <div class="row" id="contentrow">
                <div class="col-md-8 col-md-offset-0" id="feed">
                    <div class="row" id="write">
                        <div class="col-md-9">
                            <h1 class="text-left">Note Catalog</h1></div>
                        <div class="col-md-9">
                            <p class="text-left">Note catalog</p>
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
                           <a href="<?php echo base_url('notecatalog/addnote') ?>"><button class="btn btn-default" type="button">Add Note </button></a>
                        </div>
                    </div>
                    <div class="row" id="row_divider"></div>
                </div>


                <?php
                if($note!=null)
                {
                    foreach(array_reverse($note) as $s){?>
                    <div class="col-md-8 col-md-offset-0" id="feed">
                       <a href=<?php echo base_url('notecatalog/noteinfo/'.$s['note_ID'].'') ?>> <div class="row" id="write">
                            <div class="col-md-2"><img class="img-responsive" src="<?php echo base_url('assets/img/Document_black-512.png') ?>" alt="Note Cover" width="80"></div>
                            <div class="col-md-9">
                                <h1 class="text-left"><?php echo $s['note_name'] ?></h1></div>
                            <div class="col-md-9">
                            </div>
                        </div>
                        <div class="row" id="row_divider"></div>
                        </a>
                    </div>
                <?php
                    }
                }
                else
                {  
                    echo '<div class="col-md-8 col-md-offset-0" id="feed">';
                    echo "no book";
                    echo '</div>';
                }
                ?>


            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
