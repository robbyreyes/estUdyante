<?php
 if( isset($note) && $note!=null ){
    foreach(array_reverse($note) as $s)
       {
         $s['note_name'];
         $s['note_desc'];
         $s['file'];
         $s['note_ID'];
       }
}
elseif($note==null)
{
    echo "no note";
}
?>

 <div class="container cont">
        <div class="row product">
            <div class="col-md-3 col-md-offset-0">
			     <img  src= "<?php echo base_url ('assets/img/Document_black-512.png'); ?>" class="img-responsive" > 
            </div>
            <div class="row">
				<div class="col-md-7">

                    <h1><?php echo $s['note_name'] ?> </h1>
                    <p><?php echo $s['note_desc'] ?></p>
                    <p>Posted By: <?php echo $name;?></p>
                    <a href=<?php echo base_url('notecatalog/download/'.$s['note_ID'].'')?>> <button class="btn btn-success btn-lg" type="button" name="create_document" id="create_document">DOWNLOAD</button></a>
                    

                </div>
            </div>
            <div>
                <div class="col-md-10">
                </div>
                <div class="col-md-2">
                    <center><a href=<?php echo base_url('notecatalog')?> class="btn btn-danger btn-md">Back</a> </center>
                </div>
            </div>  
        </div>
              

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
