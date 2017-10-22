<!DOCTYPE html>
<html lang="en">

<meta name="viewport" content="width=device-width; initial-scale=1.0" />
<meta name="author" content="Team Reyes" />
<meta name="description" content="The description of website" />

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title;?></title>
  <link href="<?php echo base_url('assets/adminassets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/adminassets/css/simple-sidebar.css')?>" rel="stylesheet">
  
  <script src="<?php echo base_url('assets/adminassets/jquery/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/adminassets/js/sidebar.js')?>"></script>
  <script src="<?php echo base_url('assets/adminassets/js/sweetalert.min.js')?>"></script>
  <script src="<?php echo base_url('assets/adminassets/jquery/modals.js')?>"></script>
  <script src="<?php echo base_url('assets/adminassets/bootstrap/js/bootstrap.bundle.min.js')?>"></script>


</head>
<body>
  <div id="wrapper">
      <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="<?php echo base_url('admin')?>">
                        ADMIN
                    </a>
                </li>
                <li><a href="#"><span class="sym">Reports</span><span class=" caret"></span></a>
                    <li>
                        <a href="<?php echo base_url('admin/reportedposts')?>">Reported Posts</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/reportedusers')?>">Reported Users</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/reportedbooks')?>">Reported Books</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/reportednotes')?>">Reported Notes</a>
                    </li>
                </li>
            </ul>
        </div>
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <h1>estUdyante Admin</h1>
                </div>
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Menu</a>
            </div>
        </div>
</body>