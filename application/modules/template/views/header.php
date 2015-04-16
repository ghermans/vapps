<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8">
<title>Virtual simulators</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://klantenservice.telenet.be/sites/all/themes/ecare/css/fonts.css">
<link rel="stylesheet" type="text/css" href="//static.telenet.be/assets/fonts/omnes-breuer-logo/stylesheet.css">

<link rel="stylesheet" href="<?php echo base_url('assets/css/layout.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/component.css'); ?>" />
<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/js/modernizr.custom.js'); ?>"></script> 
<script src="<?php echo base_url('assets/js/classie.js');?>"></script>

 
 </head>
<body>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <a href="<?php echo base_url();?>"><img class="" src="http://klantenservice.telenet.be/sites/all/themes/ecare/images/rebranding/telenet_logo.png" alt=""> <font size="5">Desktop configurator</font></a>

                </div>
            </div>
        </div>
    </header>
 <!-- Navigation -->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url();?>">Selecteer een categorie</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
              <?php     
              if (!$this->ion_auth->logged_in())
		{
                   foreach ($groups as $groups_item)
                   {
                ?>
        <li><a href="<?php echo base_url("apps/");?>/<?php echo $groups_item['apps_group_name'];?>"><span class="<?php echo $groups_item['apps_group_icon']; ?>"> <?php echo $groups_item['apps_group_name'];?></span></a></li>


        <?php
                }
                }else
                {
                ?>
                    <li class="dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-folder"></i>  Applications <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                       <li><a href="<?php echo base_url("apps/groups");?>">Applicatie groepen</a></li>
                       <li><a href="<?php echo base_url("apps/");?>">Applicaties</a></li>
                     </ul>
        </li>       
                    <li class="dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-file"></i>  Artikels <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                       <li><a href="<?php echo base_url("apps/");?>">Artikels</a></li>
                       <li><a href="<?php echo base_url("apps/groups");?>">groepen</a></li>
                       </ul>
        </li>         
                    <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-users"></i>  User management <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
              <li><a href="<?php echo base_url("auth");?>">Accounts</a></li>
              <li><a href="<?php echo base_url("auth/create_group");?>">Account groups</a></li>
          </ul>
        </li>                
               <?php } ?>
                

       
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php      if (!$this->ion_auth->logged_in())
		{
                ?>
                    <li><a href="<?php echo base_url('feedback');?>"><i class="fa fa-lightbulb-o fa-lg"></i> Feedback</a></li>
                    <?php
                }else {
                    ?>
                    <li><a href="<?php echo base_url('feedback');?>"><i class="fa fa-lightbulb-o fa-lg"></i> Feedback</a></li>
                    <li><a href="<?php echo base_url('auth/logout');?>"><i class="fa fa-sign-out fa-lg"></i> Afmelden</a></li>

                    <?php
                        }
                ?>
                </ul>                   

        </div>
    </nav>
 <div class="container">
