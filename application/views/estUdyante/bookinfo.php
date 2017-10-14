<?php
 if( isset($book) && $book!=null ){
    foreach($book as $s)
       {

         $s['book_name'];
         $s['book_desc'];
         $s['book_author'];
                              
       }
    }
                            
 ?>
 <div class="container">
        <div class="row product">
            <div class="col-md-3 col-md-offset-0">
			 <img  src= "<?php echo base_url ('assets/img/kafka_on_the_shore.jpg'); ?>" class="img-responsive" > </div> 
			 
				<div class="col-md-7">
                <h2><?php echo $s['book_name'] ?> </h2>
                <p><?php echo $s['book_desc'] ?></p>
                <p><b>Book Author: <?php echo $s['book_author'] ?></b></p>
                <button class="btn btn-success btn-lg" type="button">Exchange </button>
                <div class="row">
                    <div class="col-md-12">
                        <h2>Posted By: <?php echo $name?></h2>
                        <h3>Book Details</h3></div>
                </div>
            </div>
            <div class="col-md-7 col-md-push-0">
               
                <p>Page length: 450</p>
				<p>English</p>
				<p>Romance</p>
				
            </div>
        </div>
       
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>