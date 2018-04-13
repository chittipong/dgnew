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
	$page_title=$myFn->getPageInfo($conn,'title','chlorine_dioxide',$lang);
	$page_keyword=$myFn->getPageInfo($conn,'keyword','chlorine_dioxide',$lang);
	$page_desc=$myFn->getPageInfo($conn,'description','chlorine_dioxide',$lang);
	
	$page=8;
	if($lang=='TH'){
		$p1_title=$myFn->getData($conn,'title_th','content',"WHERE page='$page' AND specific_name='p1'");
		$p1_detail=$myFn->getData($conn,'desc_th','content',"WHERE page='$page' AND specific_name='p1'");
		
		$p2_title=$myFn->getData($conn,'title_th','content',"WHERE page='$page' AND specific_name='p2'");
		$p2_detail=$myFn->getData($conn,'desc_th','content',"WHERE page='$page' AND specific_name='p2'");
		
		$p3_title=$myFn->getData($conn,'title_th','content',"WHERE page='$page' AND specific_name='p3'");
		$p3_detail=$myFn->getData($conn,'desc_th','content',"WHERE page='$page' AND specific_name='p3'");
		
	}else{
		$p1_title=$myFn->getData($conn,'title_en','content',"WHERE page='$page' AND specific_name='p1'");
		$p1_detail=$myFn->getData($conn,'desc_en','content',"WHERE page='$page' AND specific_name='p1'");
		
		$p2_title=$myFn->getData($conn,'title_en','content',"WHERE page='$page' AND specific_name='p2'");
		$p2_detail=$myFn->getData($conn,'desc_en','content',"WHERE page='$page' AND specific_name='p2'");
		
		$p3_title=$myFn->getData($conn,'title_en','content',"WHERE page='$page' AND specific_name='p3'");
		$p3_detail=$myFn->getData($conn,'desc_en','content',"WHERE page='$page' AND specific_name='p3'");
	}
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
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li><a href="#">Services</a><i class="icon-angle-right"></i></li>
					<li class="active">Chlorine Dioxide</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
    
	<section id="content">
        <div class="container">
        	<div class="row">
              <div class="col-lg-12">
               	<!--<h1>Boiler Steam Production</h1>-->
                <!--<img src="images/boiler/main.JPG">-->
                <h2><?php echo $p1_title ?></h2>
                <p class="margintop30 fontSize18">
            		<?php echo $p1_detail ?>
                </p>
				<div class="col-lg-12 margintop40"><img src="images/chlorine-dioxide/main.jpg"> </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="solidline">
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-6">
           	    	 <img src="images/chlorine-dioxide/001.jpg"> 
                </div>
                <div class="col-lg-6"> 
                <?php echo $p2_detail ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                	<img src="images/chlorine-dioxide/002.jpg">
                </div>
              <div class="col-lg-6">
              <h4><?php echo $p3_title ?></h4>
                <p>
                    <?php echo $p3_detail ?>
                </p>
              </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="solidline">
                    </div>
                </div>
            </div>
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
<script src="js/myCustom.js"></script>
</body>
</html>