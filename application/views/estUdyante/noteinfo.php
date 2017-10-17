<?php
 if( isset($note) && $note!=null ){
    foreach($note as $s)
       {
         $s['note_name'];
         $s['note_desc'];
       }
}
elseif($note==null)
{
    echo "no book";
}
?>

 <div class="container">
        <div class="row product">
            <div class="col-md-3 col-md-offset-0">
			 <img  src= "<?php echo base_url ('assets/img/Document_black-512.png'); ?>" class="img-responsive" > </div>

				<div class="col-md-7">
                <h2><?php echo $s['note_name'] ?> </h2>
                <p><?php echo $s['note_desc'] ?></p>
                <button class="btn btn-success btn-lg" type="button" name="create_document" id="create_document">Download </button>
                <div class="row">
                    <div class="col-md-12">
                        <h2>Posted By: <?php echo $name;?></h2>
                        <h3>Book Details</h3></div>
                </div>
            </div>
            <div class="col-md-7 col-md-push-0">
            </div>
        </div>
<a href="../notecatalog" class="btn btn-danger btn-md">Back</a>    

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
