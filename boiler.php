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
	$page_title=$myFn->getPageInfo($conn,'title','boiler',$lang);
	$page_keyword=$myFn->getPageInfo($conn,'keyword','boiler',$lang);
	$page_desc=$myFn->getPageInfo($conn,'description','boiler',$lang);
	
//GET CONTENT===========================
if($lang=='TH'){
	$p1_title=$myFn->getData($conn,'title_th','content',"WHERE page='4' AND specific_name='p1'");
	$p1_detail=$myFn->getData($conn,'desc_th','content',"WHERE page='4' AND specific_name='p1'");
	
	$p2_title=$myFn->getData($conn,'title_th','content',"WHERE page='4' AND specific_name='p2'");
	$p2_detail=$myFn->getData($conn,'desc_th','content',"WHERE page='4' AND specific_name='p2'");
	
	$p3_title=$myFn->getData($conn,'title_th','content',"WHERE page='4' AND specific_name='p3'");
	$p3_detail=$myFn->getData($conn,'desc_th','content',"WHERE page='4' AND specific_name='p3'");
	
	$p4_title=$myFn->getData($conn,'title_th','content',"WHERE page='4' AND specific_name='p4'");
	$p4_detail=$myFn->getData($conn,'desc_th','content',"WHERE page='4' AND specific_name='p4'");
	
	$p5_title=$myFn->getData($conn,'title_th','content',"WHERE page='4' AND specific_name='p5'");
	$p5_detail=$myFn->getData($conn,'desc_th','content',"WHERE page='4' AND specific_name='p5'");
	
	$p6_title=$myFn->getData($conn,'title_th','content',"WHERE page='4' AND specific_name='p6'");
	$p6_detail=$myFn->getData($conn,'desc_th','content',"WHERE page='4' AND specific_name='p6'");
	
	$p7_title=$myFn->getData($conn,'title_th','content',"WHERE page='4' AND specific_name='p7'");
	$p7_detail=$myFn->getData($conn,'desc_th','content',"WHERE page='4' AND specific_name='p7'");
	
	$p8_title=$myFn->getData($conn,'title_th','content',"WHERE page='4' AND specific_name='p8'");
	$p8_detail=$myFn->getData($conn,'desc_th','content',"WHERE page='4' AND specific_name='p8'");
	
}else{
	$p1_title=$myFn->getData($conn,'title_en','content',"WHERE page='4' AND specific_name='p1'");
	$p1_detail=$myFn->getData($conn,'desc_en','content',"WHERE page='4' AND specific_name='p1'");
	
	$p2_title=$myFn->getData($conn,'title_en','content',"WHERE page='4' AND specific_name='p2'");
	$p2_detail=$myFn->getData($conn,'desc_en','content',"WHERE page='4' AND specific_name='p2'");
	
	$p3_title=$myFn->getData($conn,'title_en','content',"WHERE page='4' AND specific_name='p3'");
	$p3_detail=$myFn->getData($conn,'desc_en','content',"WHERE page='4' AND specific_name='p3'");
	
	$p4_title=$myFn->getData($conn,'title_en','content',"WHERE page='4' AND specific_name='p4'");
	$p4_detail=$myFn->getData($conn,'desc_en','content',"WHERE page='4' AND specific_name='p4'");
	
	$p5_title=$myFn->getData($conn,'title_en','content',"WHERE page='4' AND specific_name='p5'");
	$p5_detail=$myFn->getData($conn,'desc_en','content',"WHERE page='4' AND specific_name='p5'");
	
	$p6_title=$myFn->getData($conn,'title_en','content',"WHERE page='4' AND specific_name='p6'");
	$p6_detail=$myFn->getData($conn,'desc_en','content',"WHERE page='4' AND specific_name='p6'");
	
	$p7_title=$myFn->getData($conn,'title_en','content',"WHERE page='4' AND specific_name='p7'");
	$p7_detail=$myFn->getData($conn,'desc_en','content',"WHERE page='4' AND specific_name='p7'");
	
	$p8_title=$myFn->getData($conn,'title_en','content',"WHERE page='4' AND specific_name='p8'");
	$p8_detail=$myFn->getData($conn,'desc_en','content',"WHERE page='4' AND specific_name='p8'");
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
					<li class="active">Boiler</li>
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
                <img src="images/boiler/main.jpg" class="marginbot40">
                <h2><?php echo $p1_title ?></h2>
                <p class="margintop30 fontSize18">
            		<?php echo $p1_detail ?>
                </p>
               </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="solidline">
                    </div>
                </div>
            </div>
        
            <div class="row">
                <div class="col-lg-3">
                <img src="images/boiler/boiler-01.jpg" alt="" class="aligncenter">
                  <h4><?php echo $p2_title ?></h4>
                  <p class="myFont1">
                    <?php echo $p2_detail ?>
                  </p>
                  
                 <h4><?php echo $p3_title ?></h4>
                  <p>
                    <?php echo $p3_detail ?>
                  </p>
              </div>
            
            	<div class="col-lg-3">
                    <img src="images/boiler/boiler-02.jpg" alt="" class="aligncenter">
                    <h4><?php echo $p4_title ?></h4>
                    <p>
                        <?php echo $p4_detail ?>
                    </p>
			  </div>
                
              <div class="col-lg-3">
                	<img src="images/boiler/boiler-03.jpg" alt="" class="aligncenter">
                  <h4><?php echo $p5_title ?></h4>
                  <p>
                      <?php echo $p5_detail ?>
                  </p>
              </div>
              
              <div class="col-lg-3">
                <img src="images/boiler/boiler-04.jpg" alt="" class="aligncenter">
                  <h4><?php echo $p6_title ?></h4>
                  <p>
                    <?php echo $p6_detail ?>
                  </p>
                  
                 <h4><?php echo $p7_title ?></h4>
                  <p>
                    <?php echo $p7_detail ?>
                  </p>
                  
                  <h4><?php echo $p8_title ?></h4>
                  <p>
                    <?php echo $p8_detail ?>
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