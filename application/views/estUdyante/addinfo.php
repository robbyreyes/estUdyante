<div class="container" id="cont">
        <div class="row">
            <div class="container">
                <div id="sign">
                      <?php
                    if( isset($errors) ){
                        echo $errors;
                    }
                    ?>
                    <h1>Add Information </h1>
                    <row>
                        <col-md-12>
                        <form role="form" class="" method="post" enctype="multipart/form-data" ><span class="reauth-email" enctype="multipart/form-data"> </span>
                                <div class="form-group col-md-12 n form">
                                    <input class="form-control" type="address"  placeholder="Address" autofocus="" id="address" name="address"/>
                                </div>
                                  <div class="form-group col-md-12 n form">
                                    <input class="form-control" type="contact"  placeholder="Contact number" autofocus="" id="contact" name="contact"/>
                                </div>
                                <div class="form-group col-md-12 n form">
                                    <input class="form-control" type="school"  placeholder="School" autofocus="" id="school" name="school"/>
                                </div>
                                 <div class="form-group col-md-12 n form">
                                    <input class="form-control" type="birthday"  placeholder="Birthday" autofocus="" id="birthday" name="birthday"/>
                                </div>
                                <div class="form-group text-right">
                                    <a href="../bookcatalog" class="btn btn-danger btn-md">Cancel</a> 
                                    <button type="submit" class="btn btn-primary"> Add Information
                                    <span class="glyphicon glyphicon-save"></span>   
                                    </button>
                                      
                                </div>
                        </form>

                        </col-md-12>
                    </row>
                </div>
            </div>
       </div>
</div>
         
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>


<?php
if( isset($saved) && $saved==TRUE ){
?>
<script type="text/javascript">
    swal("Congrats!", "Your information has been added", "success")

	.then((willRedirect) => {
		if (willRedirect) {
			 location.href = '<?php echo base_url('profile/id/'.$m.''); ?>';
		}
	});

</script>
<?php
}
?>

 