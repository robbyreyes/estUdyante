<?php
 if( isset($book) && $book!=null ){
    foreach(array_reverse($book) as $s)
       {
         $s['book_ID'];
         $s['book_name'];
         $s['book_desc'];
         $s['book_author'];
         $s['image'];
       }
}
elseif($book==null)
{
    echo "no book";
}
?>


<div class="container-fluid">
        <div id="content">
            <div class="row" id="contentrow">
                <div class="col-md-8 col-md-offset-0" id="feed">
                    <div class="row" id="write">
                        <div class="col-md-9">
                            <h1 class="text-left">Books Catalogue</h1></div>
                        <div class="col-md-9">
                            <p class="text-left">Book catalogue</p>
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
                           <a href="<?php echo base_url('bookcatalog/addbook') ?>"><button class="btn btn-default" type="button">Add Book </button></a>
                        </div>
                    </div>
                    <div class="row" id="row_divider"></div>
                </div>


                <?php
                if($book!=null)
                {
                    foreach(array_reverse($book) as $s)
                    {?>
                        <div class="col-md-8 col-md-offset-0" id="feed">
                           <a href=<?php echo base_url('bookcatalog/bookinfo/'.$s['book_ID'].'') ?>> <div class="row" id="write">
                                <div class="col-md-2"><img class="img-responsive" src="<?php echo $s['image'] ?>" alt="Book Cover" width="80"></div>
                                <div class="col-md-9">
                                    <h1 class="text-left"><?php echo $s['book_name'] ?></h1></div>
                                <div class="col-md-9">
                                    <p class="text-left">Author: <?php echo $s['book_author']?> </p>
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
