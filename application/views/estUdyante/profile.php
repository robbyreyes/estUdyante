<div class="container" id="cont">
<div class="row prof">
    <div class="row details">
        <div class="col-md-3" id="avatarcol">
            <img class="bigavatar" alt="<?php echo "$name's avatar"?> " src="<?php echo base_url(''.$avatar.'')?>" width="200" id="myImg">
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
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="col-md-1">
                                <p>School: </p>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="schoolField" placeholder="TUP, PNU, ADU"/>
                            </div>
                            <div class="col-md-1">
                                <p>Birthday: </p>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="bdayField" placeholder="01/01/1999" />
                            </div>
                            <div class="col-md-1">
                                <p id="cont">Contact No:</p>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="contactField" placeholder="09*********" />
                            </div>
                            <div class="col-md-1">
                                <p>Address: </p>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="addressField" placeholder="123 Papasa tayo Sa. Defense natin, Manila" />
                            </div>
                            <div class="col-md-1" id="space">
                                &nbsp;
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-success edit" id="save">Save details</button>
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
                                <img id="avatar" class="img-circle" src="<?php echo base_url(''.$p['avatar'].'')
                                ?>"alt="Avatar"> </a>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <div class="row">

                                    <h4><a href=<?php echo base_url('profile/id/'.$p['user_id'].'') ?>><?php echo $p['name']?></a> </h4>
                                </div>

                                <div class="row">
                                    <p id="time"><?php echo $p['postdate'] ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12" id="activepost">
                              <p id="postbody"><?php echo $p['body']?></p>
                          </div>
                        </div>

                        <div class="row postbuttons">
                            <div class="col-md-12">
                              <form role="form" class="" method="post" action = "<?php echo base_url('profile/delete/'.$m.'')?>">
                                <button type="button" class="btn btn-primary btn-md button">
                                    <span class="glyphicon glyphicon-thumbs-up"></span> Like
                                </button>
                                <button type="button" class="btn btn-info btn-md button" data-toggle="modal" data-target="#myModal">
                                    <span class="glyphicon glyphicon-pencil"></span> Comment
                                </button>
                                <?php if($p['user_id']==$this->session->userdata('logged_user'))
                                    {?>
                                <input class="btn btn-danger button" id="deletePost" value="Delete" name="delete" value="Delete" type="submit">
                               </form>
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
