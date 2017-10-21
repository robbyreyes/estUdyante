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

 <div class="container cont">
        <div class="row product">
            <div class="col-md-3 col-md-offset-0 bookimg">
			     <img class="img-responsive " src= <?php echo base_url($s['image']) ?>> 
            </div>
			<div class="row">
                <div class="col-md-8">
                    <h1><?php echo $s['book_name'] ?> </h1>                
                    <p><b>Book Author: <?php echo $s['book_author'] ?></b></p>
                    <p><b>Posted By: <?php echo $name;?></b></p>
                    </br >
                    <p><?php echo $s['book_desc'] ?></p>
                    </br >
                    <button class="btn btn-success btn-lg" type="button">Exchange </button>
                 </div>
            </div>     
            <div>
                <div class="col-md-10">
                </div>
                <div class="col-md-2">
                    <center><a href=<?php echo base_url('bookcatalog')?> class="btn btn-danger btn-md">Back</a></center>
                </div>
            </div>                 
        </div>

</div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
