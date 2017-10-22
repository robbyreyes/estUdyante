
    <div class="container-fluid">
        <div id="content">

            <div class="row" id="contentrow">
                <div class="col-lg-7" id="feed">
                    <div>
                        <div class="col-md-12">
                            <h1 class="text-left my-4">Following (<?php echo "$followingcounter People"?>)</h1>
                        </div>
                    </div>

                <div class="row" id="row_divider"></div>

                <div class="list-group" id="feed">

                <?php

                    if($matefollow!=null)
                    {
                       foreach(array_reverse($matefollow) as $mf){?>

                        <div>
                                <div class="col-md-12 col-lg-6 pdding">
								<div class="col-md-12 pdding">
                                    <a href="profile/id/<?php echo $mf["user_id"] ?> "class="list-group-item lst"><img class="img-responsive imgflt" src="<?php echo base_url('assets/img/account.png') ?>" alt="friend" width="65">
                                    <h3 class="ff"><?php
                                        echo $mf['firstname'].' '.$mf['lastname'];
                                    ?></h3>	
                                    </a>
                                </div>
				
                                </div>
        				</div>

                        <div class="row" id="row_divider"></div>

                <?php
                        }
                    }
                    else
                    {
                        echo'<div class="col-md-12"><h4><center>No People</center></h4></div>';
                    }
                ?>

                </div>
				</div>
			<div class="col-lg-5">
			
					<h1 class="text-left my-4">Find Friends</h1>
			
				
					<div class="col-lg-12 pdding">
					<div class="card-header">
						Someone you may know
					</div>
						<a href="#" class="list-group-item lst3"><h3 class="lst2">Profile 1</h3> <p class="ff">description description  <button class="ff2">follow </button></p> </a>
						<a href="#" class="list-group-item lst3"><h3 class="lst2">Profile 2</h3> <p class="ff">description description <button class="ff2">follow </button> </p> </a>
						<a href="#" class="list-group-item lst3"><h3 class="lst2">Profile 3</h3> <p class="ff">description description <button class="ff2">follow </button> </p> </a>
            
					</div>
					<div class="card my-4">
						<img class="img-responsive card-img-top" src="<?php echo base_url('assets/img/adbook.jpg') ?>" alt="ads">
					</div>
				
          <!-- /.card -->

			</div>
			</div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>


</html>
