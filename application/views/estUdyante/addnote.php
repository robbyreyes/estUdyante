<div class="container" id="cont">
        <div class="row">
            <div class="container">
                <div id="sign">
                    <h1>Add Notes </h1>
                    <row>
                        <col-md-12>
                        <form role="form" class="" method="post" enctype="multipart/form-data" ><span class="reauth-email" enctype="multipart/form-data"> </span>
                                <div class="form-group col-md-12 n form">
                                    <input class="form-control" type="note_name"  placeholder="Note's name" autofocus="" id="note_name" name="note_name"/>
                                </div>
                                <div class="form-group col-md-12 n form">
                                    <input class="form-control" type="note_desc"  placeholder="Description" autofocus="" id="note_desc" name="note_desc"/>
                                </div>
                               <input type="file" id="file" name="file"/>
                                <div class="form-group text-right">
                                    <a href="../notecatalog" class="btn btn-danger btn-md">Cancel</a> 
                                    <button type="submit" class="btn btn-primary"> Add Notes
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
    swal("Nice one Buddy!", "The note has been added!", "success")

	.then((willRedirect) => {
		if (willRedirect) {
			 location.href = '<?php echo base_url('notecatalog'); ?>';
		}
	});

</script>
<?php
}
?>

 