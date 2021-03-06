<!DOCTYPE html>
<html>

<meta name="viewport" content="width=device-width; initial-scale=1.0" />
<meta name="author" content="Team Reyes" />
<meta name="description" content="The description of website" />


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?php echo base_url('bootstrap/css/mystyle.css')?>" rel="stylesheet" />
    <link href="<?php echo base_url('bootstrap/css/profilepic.css')?>" rel="stylesheet" />
    <link href="<?php echo base_url('bootstrap/css/bootstrap.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('bootstrap/css/homepage.css'); ?>" rel='stylesheet' />
    <link href="<?php echo base_url('bootstrap/css/creative.css'); ?>" rel='stylesheet' />
    <link href="<?php echo base_url('bootstrap/css/profile.css'); ?>" rel='stylesheet' />

    <script src="<?php echo base_url('bootstrap/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('bootstrap/js/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('bootstrap/js/profilepicmodal.js'); ?>"></script>	
    <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('bootstrap/js/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('bootstrap/js/profilepicmodal.js')?>"></script>
    <script src="<?php echo base_url('bootstrap/js/profiledetails.js')?>"></script>
    <script src="<?php echo base_url('bootstrap/js/sweetalert.min.js')?>"></script>
    <script src="<?php echo base_url('bootstrap/js/timeago.js')?>"></script>
</head>
<body>
<nav class="nb navbar-default navbar-fixed-top">
        <div class="container-fluid nb">
            <div class=" navbar-header"><a class="nav navbar-brand navbar-link" href="<?php echo base_url('homepage') ?>"><img src="<?php echo base_url('assets/img/estulogo.png') ?>" width="120"> </a>

                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
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
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href=<?php echo base_url('profile/id/'.$this->session->userdata('logged_user')) ?> ><?php echo $headername ?> </a></li>
                    <li role="presentation">
                        <a href="<?php echo base_url('homepage/index/0') ?>"><img src="<?php echo base_url('assets/img/home-512.png') ?>" width="15"> </a>
                    </li>
                    <li role="presentation">
                        <a href="<?php echo base_url('friendlist') ?>"><img src="<?php echo base_url('assets/img/users-256x256.png') ?>" alt="Friends" width="25"> </a>
                    </li>
                    <li role="presentation">
                        <a href="#"> <img src="<?php echo base_url('assets/img/filled_message1600.png') ?>" alt="Message" width="20"></a>
                    </li>
                    <li class="dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span><img src="<?php echo base_url('assets/img/10118-200.png') ?>" alt="Notification" width="25"></a>
                       <ul class="dropdown-menu" id="notification"></ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"> <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="<?php echo base_url('bookcatalog/index/0') ?>">Exchange Book </a></li>
                            <li role="presentation"><a href="<?php echo base_url('notecatalog') ?>">Share Notes </a></li>
                            <li role="presentation"><a href="#">Settings </a></li>
                            <li role="presentation"><a href="<?php echo base_url('validate/logout') ?>">Logout </a></li>
                            <li class="dropdown-header" role="presentation">estUdyante </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<script>
$(document).ready(function(){  
   function load_unseen_notification(view = '')
   {
    $.ajax({
     url:"<?php echo base_url().'fetch'?>",
     method:"POST",
     data:{view:view},
     dataType:"json",
     success:function(data)
     {
      $('#notification').html(data.notification);
      if(data.unseen_notification > 0)
      {
       $('.count').html(data.unseen_notification);
      }
     }
    });
   }
   
   load_unseen_notification();
   
   
   $(document).on('click', '.dropdown-toggle', function(){
    $('.count').html('');
    load_unseen_notification('yes');
   });
   
   setInterval(function(){ 
    load_unseen_notification();
   }, 1500);
   
  });
</script>
