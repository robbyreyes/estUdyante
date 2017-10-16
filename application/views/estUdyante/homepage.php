

    <div class="container-fluid">
        <div id="content">
            <div class="row" id="contentrow">
                <div class="col-md-7 col-md-offset-0" id="feed">
                    <div class="row" id="write">
                        <div class="col-md-2"><img class="img-circle img-responsive" src="<?php echo base_url('assets/img/account.png') ?>" alt="Avatar" width="80"></div>
                        <form role="form" class="" method="post" action= <?php echo base_url('homepage/status')?>>
                        <div class="col-md-7">
                            <input name="body" autocomplete="off" class="input-lg" type="text" placeholder="Write Something..." id="writepost">
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-info" type="submit">POST </button>
                        </div>
                    </div>
                    <div class="row" id="row_divider"></div>
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
                            foreach(array_reverse($post) as $p){?>
                            <div class="row" id="post">
                              <div class="col-md-12">
                                  <h4><a href="profile/id/<?php echo $p["user_id"] ?>"><img class="img-circle" src="<?php echo base_url('assets/img/account.png') ?>"
                                     alt="Avatar" width="30"><?php echo $p['user_name']?></a> &nbsp; <?php echo $p['postdate'] ?></h4></div>
                              <div class="col-md-12" id="activepost">
                                  <p id="activepostp"><?php echo $p['body']?></p>
                              </div>
                              <!--BUTTON FOR MODAL-->
                              <button type="button" class="btn btn-primary btn-md">
                                <span class="glyphicon glyphicon-thumbs-up"></span> Like
                              </button>
                              <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">
                                <span class="glyphicon glyphicon-pencil"></span> Comment
                              </button>
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
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
