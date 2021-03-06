<?php 
  $con = mysqli_connect('localhost', 'root', '', 'estudyante'); 
  $user=$this->session->userdata('logged_user');
  if (isset($_POST['liked'])) {
    $post_id = $_POST['postid'];
    $result = mysqli_query($con, "SELECT * FROM posts WHERE id=$post_id");
    $row = mysqli_fetch_array($result);
    $n = $row['total_likes'];
    mysqli_query($con, "INSERT INTO like_table (user_id, post_id) VALUES ($user, $post_id)");
    mysqli_query($con, "UPDATE posts SET total_likes=$n+1 WHERE id=$post_id");

    echo $n+1;

    $result = mysqli_query($con, "SELECT * FROM user1 WHERE id=$user");
    $info = mysqli_fetch_array($result);
    $notif_subject = $info['firstname'];
    if($n!=0)
      $notif_text = $info['firstname']." and ".$n." estudyante liked your post";
    else
      $notif_text = $info['firstname']." liked your post";
    $result = mysqli_query($con, "SELECT * FROM posts WHERE id=$post_id");
    $info2 = mysqli_fetch_array($result);
    $notif_user = $info2['user_id'];
    $type = "LIKE";

    if($notif_user!=$user)
      mysqli_query($con, "INSERT INTO notification (user_id, notif_subject, notif_text, notif_user, type) VALUES ('$user','$notif_subject','$notif_text','$notif_user','$type')");

    exit();
  }
    
  if (isset($_POST['unliked'])) {
    $post_id = $_POST['postid'];
    $result = mysqli_query($con, "SELECT * FROM posts WHERE id=$post_id");
    $row = mysqli_fetch_array($result);
    $n = $row['total_likes'];

    mysqli_query($con, "DELETE FROM like_table WHERE post_id=$post_id AND user_id=$user");
    mysqli_query($con, "UPDATE posts SET total_likes=$n-1 WHERE id=$post_id");
    
    echo $n-1;
    exit();
  }
?>  

    <div class="container-fluid">
        <div id="content">
            <div class="row" id="contentrow">
                
				<div>
				<div class="col-md-2 col-sm-4 col-xs-12 col-xs-auto " id="function">
                <div class="affix ">
					<div class="row">
                        <div class="col-md-12 pic1">
						
                            <h4 class="text-center profile"><img src="<?php echo base_url('assets/img/account.png') ?>" alt="Avatar" width="90" height="90"> </h4></div>
                        <div class="col-md-12 name">
                            <h3><a href=<?php echo base_url('profile/id/'.$this->session->userdata('logged_user')) ?> ><?php echo $headername ?> </a></h3>
                        </div>
                    </div>
                    <div class="row" id="book">
                        <div class="col-md-12">
                            <h4 class="text-center"><img src="<?php echo base_url('assets/img/book-icon-149.png') ?>" alt="Avatar" width="30"> </h4></div>
                        <div class="col-md-12">
                            <a href="<?php echo base_url('bookcatalog/index/0') ?>"><button class="btn btn-default" type="button">Exchange Books </button></a>
                        </div>
                    </div>
                   
                    <div class="row" id="book">
                        <div class="col-md-12">
                            <h4 class="text-center"><img src="<?php echo base_url('assets/img/Document_black-512.png') ?>" alt="Avatar" width="30"> </h4></div>
                        <a href="<?php echo base_url('notecatalog') ?>"><button class="btn btn-default" type="button">Exchange Notes</button></a>
                    </div>
					<div class="row" id="book">
					<div class="col-md-12">
						<h4 class="text-center"><img src="<?php echo base_url('assets/img/msg.png') ?>" alt="Avatar" width="30"> </h4></div>
                   <a  href="<?php echo base_url('notecatalog') ?>"><button class="btn btn-default" type="button">Messages</button></a>
                    </div>
				
                </div>
                </div>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12 col-xs-auto" id="feed">
                    <div class="row" id="write">
                        <form role="form" class="" method="post" action= <?php echo base_url('homepage/status')?>>
                          <div class="col-md-10">
                            <div class="form-group">
                              <textarea name="body" class="form-control input-lg" type="text" rows="3" placeholder="What's on your mind?" id="writepost"></textarea>
                            </div>
                          </div>
                          <div class="col-md-2 wr">
                              <button class="btn btn-info postbutton wr" name="post" type="submit"><span class="glyphicon glyphicon-pencil"></span> POST</button>
                          </div>
                        </form>
                    </div>
                          <!--APPEARING MODAL-->
                          <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Comments</h4>
                                </div>
                                <div class="modal-body col-md-12">
                                  <div class="col-md-4">
                                      <?php echo $name;?>:
                                  </div>
                                  <div class="col-md-8">
                                      <input class="form-control" type="text"/>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-info" data-dismiss="modal">
                                    <span class="glyphicon glyphicon-edit"></span> Comment
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>

                        <?php
                        if($post!=null)
                        {
                            foreach($post as $p){?>
                            <div class="row" id="post">
                            <div class="row">
                                <a href="profile/id/<?php echo $p["user_id"] ?>">
                                <div class="col-md-2 col-sm-1 col-xs-3 avatarcol">
                                    <img id="avatar" class="img-circle img-responsive "src="<?php echo base_url(''.$p['avatar'].'') 
                                    ?>"alt="Avatar"> </a> 
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <div class="row">

                                        <h4><a href=<?php echo base_url('profile/id/'.$p['user_id'].'') ?>><?php echo $p['user_name']?></a> </h4>  
                                    </div>
                              
                                    <div class="row">
                                        <p id="time"><time class="timeago" datetime="<?php echo $p['postdate'];?>"></time></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">  
                              <div class="col-md-12" id="activepost">
                                  <p id="postbody"><?php echo strip_tags($p['body'])?></p>
                              </div>
                            </div>
                              <!--BUTTON FOR MODAL-->
                              <div class="row postbuttons">
                                <div class="col-md-12">
                                <span class="likes_count"><?php echo $p['total_likes']; ?> likes</span>
                                  <?php
                                    $user=$this->session->userdata('logged_user');
                                    $rowid=$p['id'];
                                    $result = mysqli_query($con, "SELECT * FROM like_table WHERE user_id=$user AND post_id=$rowid");
                                    if (mysqli_num_rows($result)==1): ?>
                                        <span class="unlike btn btn-primary btn-md button" data-id="<?php echo $p['id']; ?>"><span class="glyphicon glyphicon-thumbs-up"></span> Unlike</span>

                                      <span class="like hide btn btn-primary btn-md button" data-id="<?php echo $p['id']; ?>"><span class="glyphicon glyphicon-thumbs-up"></span> Like</span>
                                  <?php else:?>
                                        <span class="like btn btn-primary btn-md button" data-id="<?php echo $p['id']; ?>"><span class="glyphicon glyphicon-thumbs-up"></span> Like</span>

                                        <span class="unlike hide btn btn-primary btn-md button" data-id="<?php echo $p['id']; ?>"><span class="glyphicon glyphicon-thumbs-up"></span> Unlike</span>
                                  <?php endif?>
                                  <button type="button" class="btn btn-info btn-md button" data-toggle="modal" data-target="#myModal">
                                    <span class="glyphicon glyphicon-pencil"></span> Comment
                                  </button>
                                  <?php if($p['user_id']==$this->session->userdata('logged_user'))
                                        {
                                          echo 
                                    '<input class="btn btn-danger button" id="deletePost" value="Delete" name="delete" value="Delete" type="submit">';
                                    echo '</form>';
                                  } ?>
                                 </div>
                            </div>

                              
                            </div>
                            
                        <?php
                            }

                        }
                        else
                        {
                            echo'<div class="col-md-12"><h4><center>There is no post</center></h4></div>';
                        }
                        ?> 
                        <div class="row">
                          <center>                        
                            <?php echo $this->pagination->create_links();?>
                          </center> 
                        </div>
                </div>
				
				<!---mybook --->
				  <div class="col-md-3 col-sm-12 col-xs-12 col-xs-auto " id="mybook">
				  <div>
				   <div class="row mybooks" id="mybooks">
                        
						<div class="col-md-12 bewk">
                        <a href="<?php echo base_url('bookcatalog/index/0') ?>"><button class="btn btn-default" type="button">MY BOOKS</button></a>
						</div>
						<div class="col-md-4 ">
						<img src="<?php echo base_url('assets/img/kafka_on_the_shore.jpg') ?>" alt="Avatar" width="80" height="100">
						</div>
								<div class="col-md-4 ">
								<img src="<?php echo base_url('assets/img/Percy-Jackson-The-Lightning-Thief-Original-Cover.jpg') ?>" alt="Avatar" width="80" height="100">
								</div>
										<div class="col-md-4 book">
										<img src="<?php echo base_url('assets/img/stock-vector-mathematics-vector-cover-a-background-from-scientific-formulas-for-book-textbook-notebook-320996975.jpg') ?>" alt="Avatar" width="80" height="100">
										</div>
						
						<a class="see" href="<?php echo base_url('bookcatalog/index/0') ?>">See all</a>
						</div>
						
						</div>
						<div>

						<!---find note --->
						<div class="row mybooks" id="mybooks">
                        
						<div class="col-md-12 bewk">
                        <a href="<?php echo base_url('notecatalog') ?>"><button class="btn btn-default" type="button">FIND NOTE</button></a>
						
						</div>
						<div class=" text-center col-md-6 ">
						<img src="<?php echo base_url('assets/img/Document_black-512.png') ?>" alt="Avatar" width="30" height="30">
						</div>
								 <form autocomplete="off" role="form" method="post" action = <?php echo base_url('homepage/search')?>>
                    <div class="col-md-5 col-sm-5 searchbar">
                        <div class="input-group">
                            <input name="search" class="form-control search" type="text" placeholder="Search" id="AnnualSearchBox">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"> <i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
										
						
						
                    </div>
					</div>
					

                <div class="col-md-1" id="divider"></div>

            </div>
        </div>
    </div>
</body>

</html>
<script type="text/javascript">
  function adjustHeight(ctrl) {
    $(ctrl).css({'height':'auto','overflow-y':'hidden'}).height(ctrl.scrollHeight);
  }
  $('textarea').each(function () {
    adjustHeight(this);
  }).on('input', function () {
    adjustHeight(this);
  });    
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('.wr').click(function(){
      setInterval(function(){
        $('.post').load('<?php echo base_url('homepage')?>').fadeIn("slow");
      },1000);
    });
  });
</script>

<script>
  $(document).ready(function(){
    // when the user clicks on like
    $('.like').on('click', function(){
      var postid = $(this).data('id');
          $post = $(this);
          $url="<?php echo base_url('homepage');?>"
      $.ajax({
        url: $url,
        type: 'post',
        data: {
          'liked': 1,
          'postid': postid
        },
        success: function(response){
          $post.parent().find('span.likes_count').text(response + " likes");
          $post.addClass('hide');
          $post.siblings().removeClass('hide');
        }
      });
    });

    // when the user clicks on unlike
    $('.unlike').on('click', function(){
      var postid = $(this).data('id');
        $post = $(this);
        $url="<?php echo base_url('homepage');?>"
      $.ajax({
        url: $url,
        type: 'post',
        data: {
          'unliked': 1,
          'postid': postid
        },
        success: function(response){
          $post.parent().find('span.likes_count').text(response + " likes");
          $post.addClass('hide');
          $post.siblings().removeClass('hide');
        }
      });
    });
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('time.timeago').timeago();
  })
</script>