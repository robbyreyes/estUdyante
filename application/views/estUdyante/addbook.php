<div class="container" id="cont">
        <div class="row">
            <div class="container">
                <div id="sign">
                    <h1>Add Book </h1>
                    <row>
                        <col-md-12>
                        <form role="form" class="" method="post"><span class="reauth-email"> </span>
                                <div class="form-group col-md-12 n form">
                                    <input class="form-control" type="book_name"  placeholder="Book's name" autofocus="" id="book_name" name="book_name"/>
                                </div>
                                  <div class="form-group col-md-12 n form">
                                    <input class="form-control" type="book_author"  placeholder="Author" autofocus="" id="book_author" name="book_author"/>
                                </div>
                                <div class="form-group col-md-12 n form">
                                    <input class="form-control" type="book_desc"  placeholder="Description" autofocus="" id="book_desc" name="book_desc"/>
                                </div>
                               

                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-primary"> Add book
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
    alert("The new user record was successfully created!");
    location.href = '<?php echo base_url('bookcatalog'); ?>';
</script>
<?php
}
?>

 