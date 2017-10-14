<div class="container-fluid bg">
	<div class="row logpanel">
		<div class="col-md-12 login">
			<div class="col-md-6 descpanel">
				<h1>Welcome to estÜdyante</h1>
				<br >
				<br >
				<p> Connect with your classmates and friends — and other fascinating students.
					Get in-the-moment updates on the things that interest you.
					And exchange useful notes and used books that you haven’t read yet.</p>
				<p><b>Prototype views below</b></p>
				<a href="<?php echo site_url('estu/homepage') ?>">Homepage</a>
				<a href="<?php echo site_url('estu/bookcatalog') ?>">Book Catalog</a>
				<a href="<?php echo site_url('estu/notecatalog') ?>">Note Catalog</a>
				<a href="<?php echo site_url('estu/friendlist') ?>">Friend List</a>
				<a href="<?php echo site_url('estu/profile') ?>">Profile</a>
				<a href="<?php echo site_url('estu/bookinfo') ?>">book info</a>
				<a href="<?php echo site_url('estu/signup') ?>">Sign Up</a>
				<a href="<?php echo site_url('newsfeed/newsfeed') ?>">newsfeed</a>
			</div>
			<div class="col-md-6">
				<div class="row pan1">
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
					<h1>Sign up</h1>
					<p>New to estUdyante? Click here to sign up!
					<a href="<?php echo base_url('signup') ?>"><button type="submit" class="btn btn-primary">Sign Up</button></a></p>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
