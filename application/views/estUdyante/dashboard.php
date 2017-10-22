
	<div class="row logpanel">
		<div class="col-md-12 login">
			<div class="col-md-6 descpanel">
				<h1>Welcome to estÜdyante</h1>
				<br >
				<br >
				<p> Connect with your classmates and friends — and other fascinating students.
					Get in-the-moment updates on the things that interest you.
					And exchange useful notes and used books that you haven’t read yet.</p>
			</div>
			<div class="col-md-6 logpanel">
				<div class="row pan1">
					<h1>Log In</h1>
					<form autocomplete="off" role="form" class="" method="post" action = "<?php echo base_url('validate')?>">
					<span class="reauth-email"> </span>
					<?php
						echo '<p class="text-danger">'.$this->session->flashdata("error").'</p>';
					?>
					<div class="form-group">
						<input name="email" class="form-control" type="email" required="" placeholder="Email" autofocus="" id="inputEmail"/>
						<span class="text-danger"><?php echo form_error('username'); ?> </span>
					</div>
					<div class="form-group">
            			<input name="password" class="form-control" type="password" required="" placeholder="Password" id="inputPassword" />
						<span class="text-danger"><?php echo form_error('password'); ?> </span>
         			</div>
					<div class="form-group text-right">
						<a href="">Forgot Password?</a>
					<button type="submit" class="btn btn-primary">Log In</button>
					</div>
					</form>
				</div>
				<div class="row pan2">
					<h1>Sign Up</h1>
					<form role="form" class="" method="post"><span class="reauth-email"> </span>
                    <div class="form-group col-md-6 n form">
                        <input class="form-control" type="fname" required="" placeholder="First Name" autofocus="" id="inputName" name="firstname"/>
                    </div>
                    <div class="form-group col-md-6 n form">
                        <input class="form-control" type="lname" required="" placeholder="Last Name" autofocus="" id="inputName" name="lastname"/>
                    </div>
                    <div class="form-group form">
                        <input class="form-control" type="email" required="" placeholder="Email" id="inputPassword" name="email"/>
                    </div>
                    <div class="form-group form">
                        <input class="form-control" type="password" required="" placeholder="Password" id="inputPassword" name="password"/>
                    </div>

                    <div class="form-group text-right">
					<button type="submit" class="btn btn-primary"> Sign Up </button></a>
                    </div>
                    </form>
					</div>
					</form>
				</div>
			</div>
		</div>
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
