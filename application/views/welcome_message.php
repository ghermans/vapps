<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8">
<title>Virtual simulators</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://klantenservice.telenet.be/sites/all/themes/ecare/css/fonts.css">
<link rel="stylesheet" href="<?php echo base_url('assets/css/layout.css'); ?>">
      
<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

 
 </head>
<body>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="" src="http://klantenservice.telenet.be/sites/all/themes/ecare/images/rebranding/telenet_logo.png" alt="">

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
               <div class="tabbable">
                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-apple"></i> Apple</a></li>
                    <li><a href="#tab2" data-toggle="tab"><i class="fa fa-windows"></i> Windows</a></li>
                    <li><a href="#mail" data-toggle="tab"><i class="fa fa-envelope"></i> Mail clients</a></li>
                </ul>
            </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url('index.php/feedback');?>"><i class="fa fa-lightbulb-o"></i> Feedback</a></li>
                </ul>                   

        </div>
    </nav>
    
<div class="container">
    <div class="well well">
        <p><i  class="fa fa-info-circle fa-lg"></i> Om optimaal ondersteuning te kunnen bieden, hebben we een online simulator van de ondersteunde besturingssystemen en mail applicaties.           
        </span>
    </div>
    <div class="tab-content">
        <div class="tab-pane active" id="tab1">
                  <h2 class="pane-title">Slecteer een emulator...</h2>

<div class="row">
  <div class="col-sm-6 col-md-3">
    <div class="well">
      <div class="caption">
        <h3>OS 4.2</h3>
        <p><a href="#" class="btn btn-warning" role="button">Open emulator</a></p>
      </div>
    </div>
  </div>
    
  <div class="col-sm-6 col-md-3">
    <div class="well">
      <div class="caption">
        <h3>Mac OS X 10.6</h3>
        <p><a href="#" class="btn btn-warning" role="button">Open emulator</a></p>
      </div>
    </div>
  </div>
    
  
</div>
        </div>
        <div class="tab-pane" id="tab2">
<div class="row">
  <div class="col-sm-6 col-md-3">
    <div class="well">
      <div class="caption">
        <h3>Windows Vista</h3>
        <p><a href="#" class="btn btn-warning" role="button">Open emulator</a></p>
      </div>
    </div>
  </div>
    
  <div class="col-sm-6 col-md-3">
    <div class="well">
      <div class="caption">
        <h3>Windows 7</h3>
        <p><a href="#" class="btn btn-warning" role="button">Open emulator</a></p>
      </div>
    </div>
  </div>

      <div class="col-sm-6 col-md-3">
    <div class="well">
      <div class="caption">
        <h3>Windows 8</h3>
        <p><a href="#" class="btn btn-warning" role="button">Open emulator</a></p>
      </div>
    </div>
  </div>
      <div class="col-sm-6 col-md-3">
    <div class="well">
      <div class="caption">
        <h3>Windows 8.1</h3>
        <p><a href="#" class="btn btn-warning" role="button">Open emulator</a></p>
      </div>
    </div>
  </div>    

      <div class="col-sm-6 col-md-3">
    <div class="well">
      <div class="caption">
        <h3>Windows 10</h3>
        <p><a onclick="popupCenter('http://staff.idevelopment.be/va/images/win10/win10.html', 'win10',1035,795);" href="javascript:void(0);" class="btn btn-warning" role="button">Open emulator</a></p>
      </div>
    </div>
  </div>
</div>
        </div>
  <div class="tab-pane" id="mail">
<div class="row">
  <div class="col-sm-6 col-md-3">
    <div class="well">
      <div class="caption">
        <h3>Outlook 2010</h3>
        <p><a href="#" class="btn btn-warning" role="button">Open emulator</a></p>
      </div>
    </div>
  </div>
    
  <div class="col-sm-6 col-md-3">
    <div class="well">
      <div class="caption">
        <h3>Outlook 2013</h3>
        <p><a href="#" class="btn btn-warning" role="button">Open emulator</a></p>
      </div>
    </div>
  </div>
</div>
</div>
        
  <div class="tab-pane" id="feedack">
<div class="row">
  <div class="col-sm-6 col-md-3">
    <div class="well">
      <div class="caption">
        <h3>Outlook 2010</h3>
        <p><a href="#" class="btn btn-warning" role="button">Open emulator</a></p>
      </div>
    </div>
  </div>
    
  <div class="col-sm-6 col-md-3">
    <div class="well">
      <div class="caption">
        <h3>Outlook 2013</h3>
        <p><a href="#" class="btn btn-warning" role="button">Open emulator</a></p>
      </div>
    </div>
  </div>
</div>
</div>        
    </div>

</div>

    <footer class="footer">
      <div class="container">
	<p class="text-muted">Page rendered in <strong>{elapsed_time}</strong> seconds. -  <?php  echo  (ENVIRONMENT === 'development') ?  'Virtual simulators Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>

</div>
    </footer>
    

 <script>
    function popupCenter(url, title, w, h) {
      var left = (screen.width/2)-(w/2);
      var top = (screen.height/2)-(h/2);
      return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
    }
</script>
</body>
</html>