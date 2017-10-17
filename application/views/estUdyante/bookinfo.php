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

 <div class="container">
        <div class="row product">
            <div class="col-md-3 col-md-offset-0">
			 <img class="img-responsive" src= <?php echo base_url($s['image']) ?>> </div>

				<div class="col-md-7">
                <h2><?php echo $s['book_name'] ?> </h2>
                <p><?php echo $s['book_desc'] ?></p>
                <p><b>Book Author: <?php echo $s['book_author'] ?></b></p>
                <button class="btn btn-success btn-lg" type="button">Exchange </button>
                <div class="row">
                    <div class="col-md-12">
                        <h2>Posted By: <?php echo $name;?></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-md-push-0">
            </div>
        </div>
                <a href=<?php echo base_url('bookcatalog')?> class="btn btn-danger btn-md">Back</a>      
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>