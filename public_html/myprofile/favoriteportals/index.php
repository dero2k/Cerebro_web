<?php
include("../../var.php");
include(CBASE."common.php");

if($_SERVER['HTTP_REFERER']=="http://www.ingress.com/intel"){ header("Location: /myprofile/intelenhancer/");}
if(!$ob_auth->verified){ header("Location: /?you_need_to_login"); }






$sql = "SELECT settings FROM ingress_verified WHERE email='".addslashes($ob_auth->googledata['email'])."'";
$res = $ob_database->get_single($sql);
$settings = (array)json_decode($res['settings']);




?><!DOCTYPE html>
<html lang="en">
  <head>
    <?php include(CBASE."web/head.php");?>
    <title>Ingress tools</title>


    <!-- Le styles -->


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
  
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          
          <div class="nav-collapse collapse">
<?php include(CBASE."web/nav.php");?>
            
          </div>  <!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">


      <!-- Example row of columns -->
      <div class="span12">
		<?php if($_SERVER['HTTP_REFERER']!="http://www.ingress.com/intel"){ ?>
        <div class="btn-group" data-toggle=""> 
        <a href='/myprofile/' class="btn btn-primary"><i class="icon-info-sign" style='background-image: url("../../img/glyphicons-halflings.png");'></i>&nbsp;</a>
        <a href='/myprofile/bio' class="btn btn-primary">Bio</a>
        
        <a href='/myprofile/favoriteportals' class="btn btn-primary active">Favorite portals</a>
        <a href='/myprofile/intelenhancer' class="btn btn-primary" ><i class="icon-wrench" style='background-image: url("../../img/glyphicons-halflings.png");'></i> IntelEnhancer settings</a>
        </div>
        <?php } ?>
        
        
        <h4>Favorite portals</h4>
        <p>Uses the favorite portals plugin..</p>
        
      </div>
     
    
       
        
       <?php 
	   //print_r($_SESSION['token']);
	   
	   
	$_OUT['plugin'][] = "ap-list";
	$_OUT['plugin'][] = "compute-ap-stats";
	#$_OUT['plugin'][] = "draw-tools";
	$_OUT['plugin'][] = "guess-player-levels";
	$_OUT['plugin'][] = "ipas-link";
	$_OUT['plugin'][] = "keys-on-map";
	$_OUT['plugin'][] = "keys";	
	$_OUT['plugin'][] = "portal-level-numbers";
	$_OUT['plugin'][] = "resonator-display-zoom-level-decrease";	
	$_OUT['plugin'][] = "scoreboard";
	
	#$_OUT['plugin'][] = "max-links";
	#$_OUT['plugin'][] = "pan-control";
	$_OUT['plugin'][] = "player-tracker";
	/*
	$_OUT['plugin'][] = "portal-counts";
	$_OUT['plugin'][] = "portals-list";
	$_OUT['plugin'][] = "privacy-view";	
	$_OUT['plugin'][] = "render-limit-increase";	
	$_OUT['plugin'][] = "reso-energy-pct-in-portal-detail";	

	$_OUT['plugin'][] = "scale-bar";	
	;	
	$_OUT['plugin'][] = "show-address";	
	$_OUT['plugin'][] = "show-linked-portals";	
	$_OUT['plugin'][] = "show-portal-weakness";	
	$_OUT['plugin'][] = "zoom-slider";	
	
	*/ ?>
        
        
        <div class="span12">
         
         



 

    <hr>

         <footer>
        <?php include(CBASE."web/footer.php");?>
      </footer>      

       </div>
      
      
      </div>

      


<?php


?>
    </div> <!-- /container -->

</body>
</html>
