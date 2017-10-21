


<div class="container" id="cont">
        <div class="row">
            <div class="container">
                <div id="sign">
                    <h1>Edit Information </h1>
                    <?php
                      if($information!=null)

                        foreach(array_reverse($information) as $i){?>
                        <col-md-12>
                        <form role="form" class="" method="post" enctype="multipart/form-data" ><span class="reauth-email" enctype="multipart/form-data"> </span>
                                <div class="form-group col-md-12 n form">
                                    <input class="form-control" type="address"  placeholder="Address" autofocus="" id="address" name="address" value="<?php echo $i['address']?>"/>
                                </div>
                                  <div class="form-group col-md-12 n form">
                                    <input class="form-control" type="contact"  placeholder="Contact number" autofocus="" id="contact" name="contact" value="<?php echo $i['contact']?>"/>
                                </div>
                                <div class="form-group col-md-12 n form">
                                    <input class="form-control" type="school"  placeholder="School" autofocus="" id="school" name="school" value="<?php echo $i['school']?>"/>
                                </div>
                                 <div class="form-group col-md-12 n form">
                                    <input class="form-control" type="birthday"  placeholder="Birthday" autofocus="" id="birthday" name="birthday" value="<?php echo $i['birthday']?>"/>
                                </div>
                                <div class="form-group text-right">
                                    <a href="../bookcatalog" class="btn btn-danger btn-md">Cancel</a> 
                                    <button type="submit" class="btn btn-primary"> Add Information
                                    <span class="glyphicon glyphicon-save"></span>   
                                    </button>
                                     <?php
                                    }?>
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
    swal("Congrats!", "Your information has been updated", "success")

	.then((willRedirect) => {
		if (willRedirect) {
			 location.href = '<?php echo base_url('profile/id/'.$m.''); ?>';
		}
	});

</script>
<?php
}
?>

 