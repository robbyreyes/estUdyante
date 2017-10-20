

    <div class="container-fluid">
        <div id="content">
            <div class="row" id="contentrow">


                <div class="col-md-3 col-sm-4 col-xs-12 col-xs-auto" id="function">
                <div class="affix">
                    <div class="row" id="book">
                        <div class="col-md-12">
                            <h4 class="text-center"><img src="<?php echo base_url('assets/img/book-icon-149.png') ?>" alt="Avatar" width="30"> </h4></div>
                        <div class="col-md-12">
                            <a href="<?php echo base_url('bookcatalog') ?>"><button class="btn btn-default" type="button">Exchange Books </button></a>

                <div class="col-md-7 col-md-offset-0" id="feed">
                    <div class="row" id="write">
                        <div class="col-md-2" id="avatarcol">
                          <img class="img-circle img-responsive" src="<?php echo base_url('assets/img/account.png') ?>" alt="Avatar" width="80">
                        </div>
                        <form role="form" class="" method="post" action= <?php echo base_url('homepage/status')?>>
                        <div class="col-md-8">
                          <div class="form-group">
                            <textarea name="body" class="form-control input-lg" type="text" rows="3" placeholder="What's on your mind?" id="writepost"></textarea>
                          </div>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-info postbutton" name="post" type="submit"><span class="glyphicon glyphicon-pencil"></span> POST</button>

                        </div>
                    </div>
                    <div class="row" id="row_divider"></div>
                    <div class="row" id="book">
                        <div class="col-md-12">
                            <h4 class="text-center"><img src="<?php echo base_url('assets/img/Document_black-512.png') ?>" alt="Avatar" width="30"> </h4></div>
                        <a href="<?php echo base_url('notecatalog') ?>"><button class="btn btn-default" type="button">Exchange Notes</button></a>
                    </div>
                </div>
                </div>

                <div class="col-md-5 col-sm-12 col-xs-12 col-xs-auto" id="feed">
                    <div class="row" id="write">
                        <form role="form" class="" method="post" action= <?php echo base_url('homepage/status')?>>
                          <div class="col-md-10">
                            <div class="form-group">
                              <textarea name="body" class="form-control input-lg" type="text" rows="3" placeholder="What's on your mind?" id="writepost"></textarea>
                            </div>
                          </div>
                          <div class="col-md-2 wr">
                              <button class="btn btn-info postbutton" name="post" type="submit"><span class="glyphicon glyphicon-pencil"></span> POST</button>
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
                        $p['like']=null;
                        if($post!=null)
                        {
                            foreach(array_reverse($post) as $p){?>
                            <div class="row" id="post">
                            <div class="row">
                                <a href="profile/id/<?php echo $p["user_id"] ?>">

                                <div class="col-md-2 col-sm-1 col-xs-3 avatarcol">
                                    <img id="avatar" src="<?php echo base_url(''.$p['avatar'].'') 
                                    ?>"alt="Avatar"> </a> 

                                <div class="col-md-2 col-sm-2 col-xs-3">
                                    <img id="avatar" class="img-circle" src="<?php echo base_url('assets/img/account.png')
                                    ?>"alt="Avatar"> </a>

                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <div class="row">


                                        <h4><a href=<?php echo base_url('profile/id/'.$p['user_id'].'') ?>><?php echo $p['user_name']?></a> </h4>  
                                    </div>
                              

                                        <h4><a href=<?php echo base_url('profile/id/'.$p['user_id'].'') ?>><?php echo $p['user_name']?></a> </h4>
                                    </div>


                                    <div class="row">
                                        <p id="time"><?php echo $p['postdate'] ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">  

                            <div class="row">

                              <div class="col-md-12" id="activepost">
                                  <p id="postbody"><?php echo $p['body']?></p>
                              </div>
                            </div>
                              <!--BUTTON FOR MODAL-->
                              <div class="row postbuttons">
                                <div class="col-md-12">

                                  <?php if($p['like']=="FALSE")
                                  {
                                    ?>
                                      <a href="<?php echo base_url('homepage/like?id='.$p['id'].'') ?>"><button type="button" class="btn btn-primary btn-md button">
                                        <span class="glyphicon glyphicon-thumbs-up"></span> Like
                                      </button></a>
                                  <?php
                                  }
                                  ?>

                                  <?php if($p['like']=="TRUE"){?>
                                    <a href="<?php echo base_url('homepage/unlike?id='.$p['id'].'') ?>"><button type="button" class="btn btn-primary btn-md button">
                                        <span class="glyphicon glyphicon-thumbs-up"></span> Unlike
                                      </button></a>
                                  <?php }?>

                                  <button type="button" class="btn btn-primary btn-md button">
                                    <span class="glyphicon glyphicon-thumbs-up"></span> Like
                                  </button>

                                  <button type="button" class="btn btn-info btn-md button" data-toggle="modal" data-target="#myModal">
                                    <span class="glyphicon glyphicon-pencil"></span> Comment
                                  </button>
                                  <?php if($p['user_id']==$this->session->userdata('logged_user'))
                                        {

                                          echo 

                                          echo

                                    '<input class="btn btn-danger button" id="deletePost" value="Delete" name="delete" value="Delete" type="submit">';
                                    echo '</form>';
                                  } ?>
                                 </div>
                            </div>


                              
                            </div>
                            


                            </div>
                            <div class="row" id="row_divider"></div>


                        <?php
                            }

                        }
                        else
                        {
                            echo'<div class="col-md-12"><h4><center>There is no post</center></h4></div>';
                        }

                        ?>             

                        ?>

                </div>
                <div class="col-md-1" id="divider"></div>
                <div class="col-md-3" id="function">
                    <div class="row" id="book">
                        <div class="col-md-12">
                            <h4 class="text-center"><img src="<?php echo base_url('assets/img/book-icon-149.png') ?>" alt="Avatar" width="30"> </h4></div>
                        <div class="col-md-12">
                            <a href="<?php echo base_url('bookcatalog') ?>"><button class="btn btn-default" type="button">Exchange Books </button></a>
                        </div>
                    </div>
                    <div class="row" id="row_divider"></div>
                    <div class="row" id="book">
                        <div class="col-md-12">
                            <h4 class="text-center"><img src="<?php echo base_url('assets/img/Document_black-512.png') ?>" alt="Avatar" width="30"> </h4></div>
                        <a href="<?php echo base_url('notecatalog') ?>"><button class="btn btn-default" type="button">Exchange Notes</button></a>
                    </div>

                </div>
                <div class="col-md-1" id="divider"></div>                
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
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