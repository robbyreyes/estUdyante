<div class="container">
    <div id="sign">
        <h1>Sign up </h1>
        <row>
            <col-md-12>

            <?php
    				if( isset($errors) ){
    					echo $errors;
    				}
    				?>
            <form role="form" class="" method="post"><span class="reauth-email"> </span>
                    <div class="form-group col-md-6 n form">
                        <input class="form-control" type="fname" required="" placeholder="First Name" autofocus="" id="inputName" name="fname"/>
                    </div>
                    <div class="form-group col-md-6 n form">
                        <input class="form-control" type="lname" required="" placeholder="Last Name" autofocus="" id="inputName" name="lname"/>
                    </div>
                    <div class="form-group form">
                        <input class="form-control" type="email" required="" placeholder="Email" id="inputPassword" name="email"/>
                    </div>
                    <div class="form-group form">
                        <input class="form-control" type="password" required="" placeholder="Password" id="inputPassword" name="password"/>
                    </div>

                    <div class="form-group text-right">
                        <a href="<?php echo base_url('homepage') ?>"><button type="submit" class="btn btn-primary"> Sign Up </button></a>
                    </div>
            </form>
            </col-md-12>
        </row>
    </div>
</div>
<?php
if( isset($saved) && $saved==TRUE ){
?>
<script type="text/javascript">
    alert("The new user record was successfully created!");
    location.href = '<?php echo site_url(''); ?>';
</script>
<?php
}
?>
