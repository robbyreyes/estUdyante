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
<?php 
foreach($information as $i)
    $i['avatar'];
    $i['cover']
?>
    <div class="container" id="cont">
    <div class="row prof">
        <div class="row details">
            <div class="col-md-3" id="avatarcol">
                <img class="bigavatar" alt="<?php echo "$name's avatar"?> " src="<?php echo base_url($i['avatar'])?>" width="200" id="myImg">
            </div>
            <div id="myModalpic" class="modal">
              <span class="close" onclick="document.getElementById('myModalpic').style.display='none'">&times;</span>
              <img class="modal-content" id="img01">
              <div id="caption"></div>
            </div>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h2 class="modal-title">Comments</h2>
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
            <div class="col-md-6" id="nameholder">
                <h1 id="name"><?php echo $name?></h1>
            </div>
        </div>
    </div>
        <!--<div>
            <button class="btn btn-primary">Upload Picture</button>
            <button class="btn btn-primary" id="btn">Edit Profile Details</button>
        </div>-->
         <div class="row" id="profilesecrow">
            <div class="col-md-3 col-md-12 col-md-12 info">
                <div class="row" id="rowinfo">
                    <div class="col-md-12" id="personalinfo">
                        <div class="row">
                            <div class="col-md-12 col-md-offset-0">
                                <p class="lead">Personal Information</p>
                            </div>
                        </div>

                         <?php 

                         if($information!=null)

                        foreach(array_reverse($information) as $i){?>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="col-md-12">
                                    <p><b>School:</b> <?php echo $i['school']?></p>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="schoolField" placeholder="TUP, PNU, ADU"/>
                                </div>
                                <div class="col-md-12">
                                    <p><b>Birthday:</b> <?php echo $i['birthday']?> </p>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="bdayField" placeholder="01/01/1999" />
                                </div>
                                <div class="col-md-12">
                                    <p id="cont"><b>Contact No: </b><?php echo $i['contact']?></p>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="contactField" placeholder="09*********" />
                                </div>
                                <div class="col-md-12">
                                    <p><b>Address:</b> <?php echo $i['address']?> </p>
                                </div>
                                   <a href="<?php echo base_url('profile/editinfo/'.$m.'') ?>"><button class="btn btn-default" type="button">Edit Info </button></a>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="addressField" placeholder="123 Papasa tayo Sa. Defense natin, Manila" />
                                </div>
                                <div class="col-md-12" id="space">
                                    &nbsp;
                                </div>
                                <div class="col-md-12">
                                     <?php
                                    }
                                        else
                                        {?>
                                             <div class="row">
                            <div class="col-md-12 ">
                                <div class="col-md-12">
                                    <p><b>School:</b>  </p>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="schoolField" placeholder="TUP, PNU, ADU"/>
                                </div>
                                <div class="col-md-12">
                                    <p><b>Birthday:</b>  </p>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="bdayField" placeholder="01/01/1999" />
                                </div>
                                <div class="col-md-12">
                                    <p id="cont"><b>Contact No:</b></p>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="contactField" placeholder="09*********" />
                                </div>
                                <div class="col-md-12">

                                    <p><b>Address:</b></p>
                                </div>
                                    <a href="<?php echo base_url('profile/info/'.$m.'') ?>"><button class="btn btn-default" type="button">Add Info </button></a>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="addressField" placeholder="123 Papasa tayo Sa. Defense natin, Manila" />
                                
                                </div>
                                <div class="col-md-1" id="space">
                                    &nbsp;
                                </div>
                                <div class="col-md-12">
                                   <?php     
                                    }
                                     ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="rowfriends">
                    <div class="col-md-12">
                        <p class="lead">Follow </p>
                        <p>Following:</p>
                        <p>Followers:</p>
                        <h4 class="text-center"> <a href="<?php echo base_url('friendlist') ?>">See all</a></h4></div>
                </div>
            </div>
            <div class="col-md-7 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-xs-12" id="feed">
                        <button class="btn"><a href=<?php echo base_url('message/id/'.$profile.'')?>>Message</a></button>
                        <?php
                        if($mate_validate=="USER")
                        {
                            //echo $mate_validate;
                        }
                        elseif($mate_validate=="UNFOLLOW")
                        {
                          ?>

                            <form role="form" class="" method="post" action = "<?php echo base_url('profile/modify/'.$m.'')?>">
                                <input class="btn" name="follow" value="Follow" type="submit">
                           </form><?php
                           $mate_validate = "FOLLOW";
                        }
                        elseif($mate_validate=="FOLLOW")
                        {
                            ?><form role="form" class="" method="post" action = "<?php echo base_url('profile/modify/'.$m.'')?>">
                                <input class="btn" name="unfollow" value="Unfollow" type="submit">
                             </form><?php

                        }
                        else
                        {
                            echo "ERROR";
                        }


                        if($post!=null)

                        foreach(($post) as $p){?>
                        <div class="row" id="post">
                            <div class="row">
                                <a href=<?php echo base_url('profile/id/'.$p['user_id'].'') ?>>
                                <div class="col-md-2 col-sm-2 col-xs-3">
                                    <img id="avatar" class="img-circle" src="<?php echo base_url($i['avatar'])?>"alt="Avatar"> </a> 
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <div class="row">

                                        <h4><a href=<?php echo base_url('profile/id/'.$p['user_id'].'') ?>><?php echo $p['name']?></a> </h4>  
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
                                    <?php if($p['user_id']==$this->session->userdata('logged_user'))
                                        {?>
                                    <input class="btn btn-danger button" id="deletePost" value="Delete" name="delete" value="Delete" type="submit">
                                 <?php } ?>
                                 </div>
                            </div>
                        </div>

                        <div class="row" id="row_divider"></div>
                        <?php
                        }

                        else
                        {
                            echo'<div class="col-md-12"><h4><center>There is no post</center></h4></div>';
                        }                        
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url('bootstrap/js/profilepicmodal.js')?>"></script>

</body>

</html>

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