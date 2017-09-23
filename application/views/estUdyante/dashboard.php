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
			</div>
			<div class="col-md-6">
				<div class="row pan1">					
					<form role="form" class="" method="post"><span class="reauth-email"> </span>
					<div class="form-group">
						<input class="form-control" type="email" required="" placeholder="Email" autofocus="" id="inputEmail" />
					</div>	
					<div class="form-group">					
            			<input class="form-control" type="password" required="" placeholder="Password" id="inputPassword" />
            		</div>	
					<div class="form-group text-right">
						<a href="">Forgot Password?</a>
						<a href="<?php echo site_url('estu/homepage') ?>"><button type="submit" class="btn btn-primary">Log In</button></a>
					</div>	
					</form>
				</div>
				<div class="row pan2">
					<p class="lead">Sign up</p>
					<form role="form" class="" method="post"><span class="reauth-email"> </span>
					<div class="form-group col-md-6 n">						
						<input class="form-control" type="fname" required="" placeholder="First Name" autofocus="" id="inputName" />
					</div>
					<div class="form-group col-md-6 n">	
						<input class="form-control" type="lname" required="" placeholder="Last Name" autofocus="" id="inputName" />
					</div>
					<div class="form-group">						
						<input class="form-control" type="email" required="" placeholder="Email" autofocus="" id="inputEmail" />
					</div>	
					<div class="form-group">						
						<input class="form-control" type="password" required="" placeholder="Password" id="inputPassword" />
					</div>	
					<div class="form-group text-right">
						<button type="submit" class="btn btn-primary">Sign Up</button>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
	
	





