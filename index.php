<?php
ob_start();
session_start();

include("class/connect_db.php");
include("class/Mymenu.php");
include("class/MyFunction.php");
	
//GET LANGUAGE==========================
$lang=isset($_SESSION['sess_lang'])? $_SESSION['sess_lang']:'TH';			

//CONNECT DATABASE=======================
	$conn=connectDb();
	$myMenu=new Mymenu();
	$myFn=new MyFunction();
	
	//$myMenu->__construc($lang,$conn);

//GET PAGE INFO=========================
	$page_title=$myFn->getPageInfo($conn,'title','index',$lang);
	$page_keyword=$myFn->getPageInfo($conn,'keyword','index',$lang);
	$page_desc=$myFn->getPageInfo($conn,'description','index',$lang);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $page_title ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="<?php echo $page_keyword ?>">
<meta name="description" content="<?php echo $page_desc ?>" />
<meta name="author" content="DG-CHEMICAL" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
<!-- Theme skin -->
<link href="skins/default.css" rel="stylesheet" />
<!-- Custom CSS -->
<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
<div id="wrapper">
	<!-- start header -->
	<header>
        <?php include("common/inc_nav.php"); ?>
	</header>
	<!-- end header -->
    
	<section id="featured">
	<!-- start slider -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
	<!-- Slider -->
        <?php include("common/inc_slider.php"); ?>
	<!-- end slider -->
			</div>
		</div>
	</div>	
	
	</section>
	<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="big-cta">
					<div class="cta-text">
                    <?php 
						if($lang=='TH'){
							$p1_title=$myFn->getData($conn,'title_th','content',"WHERE page='1' AND specific_name='p1'");
							$p1_detail=$myFn->getData($conn,'desc_th','content',"WHERE page='1' AND specific_name='p1'");
						}else{
							$p1_title=$myFn->getData($conn,'title_en','content',"WHERE page='1' AND specific_name='p1'");
							$p1_detail=$myFn->getData($conn,'desc_en','content',"WHERE page='1' AND specific_name='p1'");
						}
					?>
                    	<h2><?php echo $p1_title ?></2>
						<h4><?php echo $p1_detail ?></h4>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		<!-- end divider -->
		<!-- Our Service -->
        <?php include("inc/inc_ourservice.php"); ?>
        <!-- End Our Service -->
	</div>
	</section>
	<!-- Footer -->
    <?php include("common/inc_footer.php"); ?>
    <!-- End Footer -->
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
</body>
</html>