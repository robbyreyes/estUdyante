<div class="container">
    <div id="sign">
        <h1>Sign up </h1>    
        <row>
            <col-md-12>
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
                    <div class="form-group form">
                        <input class="form-control" type="school" required="" placeholder="School" id="inputPassword" name="school"/>
                    </div>
                    <div class="form-group form">
                        <input class="form-control" type="course" required="" placeholder="Course" id="inputPassword" name="course"/>
                    </div>
                    <div class="form-group form">
                        <input class="form-control" type="address" required="" placeholder="Address" id="inputPassword" name="address"/>
                    </div>
                    <div class="form-group form">
                        <input class="form-control" type="birthday" required="" placeholder="Birthday" id="inputPassword" name="birthday"/>
                    </div>
                    <div class="form-group text-right">
                        <a href="<?php echo site_url('estu/homepage') ?>"><button type="submit" class="btn btn-primary">Sign Up</button></a>
                    </div>
            </form>
            </col-md-12>
        </row>
    </div>
<
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