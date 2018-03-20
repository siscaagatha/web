<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=devidev-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Teknologi Informasi ITS</title>
	
  <style type="text/css">
    .card {
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
}

.card {
  margin-top: 10px;
  box-sizing: border-box;
  border-radius: 2px;
  background-clip: padding-box;
}
.card span.card-title {
    color: black;
    font-size: 24px;
    font-weight: 300;
    text-transform: uppercase;
}

.card .card-image {
  position: relative;
  overflow: hidden;
}
.card .card-image img {
  border-radius: 2px 2px 0 0;
  background-clip: padding-box;
  position: relative;
  z-index: -1;
}
.card .card-image span.card-title {
  position: absolute;
  bottom: 0;
  left: 0;
  padding: 16px;
}
.card .card-content {
  padding: 16px;
  border-radius: 0 0 2px 2px;
  background-clip: padding-box;
  box-sizing: border-box;
}
.card .card-content p {
  margin: 0;
  color: inherit;
}
.card .card-content span.card-title {
  line-height: 48px;
}
.card .card-action {
  border-top: 1px solid rgba(160, 160, 160, 0.2);
  padding: 16px;
}
.card .card-action a {
  color: #ffab40;
  margin-right: 16px;
  transition: color 0.3s ease;
  text-transform: uppercase;
}
.card .card-action a:hover {
  color: #ffd8a6;
  text-decoration: none;
}
  </style>
	<!-- [ FONT-AWESOME ICON ] 
        =========================================================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/library/font-awesome-4.3.0/css/font-awesome.min.css">

	<!-- [ PLUGIN STYLESHEET ]
        =========================================================================================================================-->
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url("assets/images/icon.png")?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/animate.css")?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/owl.carousel.css")?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/owl.theme.css")?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/magnific-popup.css")?>">
	<!-- [ Boot STYLESHEET ]
        =========================================================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/library/bootstrap/css/bootstrap-theme.min.css")?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/library/bootstrap/css/bootstrap.css")?>">
        <!-- [ DEFAULT STYLESHEET ] 
        =========================================================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style.css")?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/responsive.css")?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/color/sisca.css")?>">
        
</head>
<body >
<!--[ LOADERs ]
================================================================================================================================-->	
<div class="preloader">
    <div class="loader theme_background_color">
        <span></span>
      
    </div>
</div>
<!-- [ /PRELOADER ]
=============================================================================================================================-->
<!-- [WRAPPER ]
=============================================================================================================================-->
<div class="wrapper">
  <!-- [NAV]
 ============================================================================================================================-->    
   <!-- Navigation
    ==========================================-->
    <nav  class=" nim-menu navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <!-- <a class="navbar-brand" href="index.html">N<span class="themecolor">i</span>M</a> -->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url()?>">Back</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>


   <!-- [/NAV]
 ============================================================================================================================--> 
    
  
 <!-- [CONTACT]
 ============================================================================================================================-->
 <!--sub-form-->
<section class="sub-form text-center" id="eight">
  <div class="container">
      <?php echo form_open('Welcome/insertCom'); ?>
  <div class="col-md-12">
        <br><br><br><br><br>
        <h3 class="title">Comment to our <span class="themecolor"> Websites</span></h3>
            <p class="lead">Berikan kritik dan saran anda disini.</p>
    </div>
    <?php if (isset($message)) { ?>
    <CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
    <?php } ?> 
      <div class="row">
      <div class="col-md-3 col-sm-3"></div>
      <div class="col-md-6 center-block col-sm-6 ">
       <!-- <form id="mc-form" action="comment/submit.php" method="POST">-->
            
            <!--<input type="name" class="form-control" placeholder="Name" required id="mc-name" name="name">
            <input type="title" class="form-control" placeholder="Title" required id="mc-title" name="title">
            <input type="comment" class="form-control" placeholder="Comment" required id="mc-comment" name="comment">
            <br>-->
            <div class="input-group">
            <?php echo form_error('dname', 'dtitle', 'dcomment'); ?>
            <?php echo form_input(array('id' => 'dname', 'name' => 'dname', "placeholder"=> "Name", 'class' => 'form-control')); ?>
            <?php echo form_input(array('id' => 'dtitle', 'name' => 'dtitle', "placeholder"=> "Title", 'class' => 'form-control')); ?>
            <?php echo form_input(array('id' => 'dcomment', 'name' => 'dcomment', "placeholder"=> "Comment", 'class' => 'form-control')); ?>

          </div>
            

              <span class="input-group-btn">
                 <?php echo form_submit(array('id' => 'submit', 'value' => 'Comment','class'=>"btn btn-default")); ?>
            <!--<button type="submit" class="btn btn-default">COMMENT <i class="fa fa-envelope"></i> </button>-->
              </span> </div>
                            
            </div>
            <?php echo form_close(); ?>
       
        </div>
      </div>
    </div>
  </div>
</section>
<!--sub-form end--> 


 
 <!-- [/CONTACT]
 ============================================================================================================================-->
 
 
 <!-- [FOOTER]
 ============================================================================================================================-->
 
<footer class="site-footer section-spacing text-center " id="eight">
    
  <div class="container">
    <div class="row">
        <!-- Card Projects -->
        <?php foreach($data as $d) { ?>
        <div class="col-md-3 col-md-offset-3">
            <div class="card">
                <span class="card-title"><?php echo $d['title']?></span>
                <div class="card-content">
                    <p style="color: black"><?php echo $d['comment']?></p>
                </div>
            </div>
        </div>
        <?php }?>

      </div>
    </div>
    <div class="row">      
      <div class="col-md-4">
        <p class="footer-links"><a href="#">Terms of Use</a> <a href="#">Privacy Policy</a></p>
      </div>
      <div class="col-md-4"> <small>&copy; 2018 Information Technology. All rights reserved.</small></div>
      <div class="col-md-4"> 
        <!--social-->
        
        <ul class="social">
          <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter "></i></a></li>
          <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
        </ul>
        
        <!--social end--> 
        
      </div>
    </div>
  </div>
</footer>

 
 
 <!-- [/FOOTER]
 ============================================================================================================================-->
 
 
 
</div>
 

<!-- [ /WRAPPER ]
=============================================================================================================================-->

	<!-- [ DEFAULT SCRIPT ] -->
	<script src="<?php echo base_url("assets/library/modernizr.custom.97074.js")?>"></script>
	<script src="<?php echo base_url("assets/library/jquery-1.11.3.min.js")?>"></script>
        <script src="<?php echo base_url("assets/library/bootstrap/js/bootstrap.js")?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.easing.1.3.js")?>"></script>	
	<!-- [ PLUGIN SCRIPT ] -->
        <script src="<?php echo base_url("assets/library/vegas/vegas.min.js")?>"></script>
	<script src="<?php echo base_url("assets/js/plugins.js")?>"></script>
        <!-- [ TYPING SCRIPT ] -->
         <script src="<?php echo base_url("assets/js/typed.js")?>"></script>
         <!-- [ COUNT SCRIPT ] -->
         <script src="<?php echo base_url("assets/js/fappear.js")?>"></script>
       <script src="<?php echo base_url("assets/js/jquery.countTo.js")?>"></script>
	<!-- [ SLIDER SCRIPT ] -->  
        <script src="<?php echo base_url("assets/js/owl.carousel.js")?>"></script>
         <script src="<?php echo base_url("assets/js/jquery.magnific-popup.min.js")?>" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/js/SmoothScroll.js")?>"></script>
        
        <!-- [ COMMON SCRIPT ] -->
	<script src="<?php echo base_url("assets/js/common.js")?>"></script>
  
</body>
</html>