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
	$page_title=$myFn->getPageInfo($conn,'title','contactus',$lang);
	$page_keyword=$myFn->getPageInfo($conn,'keyword','contactus',$lang);
	$page_desc=$myFn->getPageInfo($conn,'description','contactus',$lang);
	
//GET CONTENT===========================
$page=3;
if($lang=='TH'){
	$p1_title=$myFn->getData($conn,'title_th','content',"WHERE page='$page' AND specific_name='p1'");
	$p1_detail=$myFn->getData($conn,'desc_th','content',"WHERE page='$page' AND specific_name='p1'");
	
	$p2_title=$myFn->getData($conn,'title_th','content',"WHERE page='$page' AND specific_name='p2'");
	$p2_detail=$myFn->getData($conn,'desc_th','content',"WHERE page='$page' AND specific_name='p2'");
	
	$p3_title=$myFn->getData($conn,'title_th','content',"WHERE page='$page' AND specific_name='p3'");
	$p3_detail=$myFn->getData($conn,'desc_th','content',"WHERE page='$page' AND specific_name='p3'");
	
	$p4_title=$myFn->getData($conn,'title_th','content',"WHERE page='$page' AND specific_name='p4'");
	$p4_detail=$myFn->getData($conn,'desc_th','content',"WHERE page='$page' AND specific_name='p4'");
}else{
	$p1_title=$myFn->getData($conn,'title_en','content',"WHERE page='$page' AND specific_name='p1'");
	$p1_detail=$myFn->getData($conn,'desc_en','content',"WHERE page='$page' AND specific_name='p1'");
	
	$p2_title=$myFn->getData($conn,'title_en','content',"WHERE page='$page' AND specific_name='p2'");
	$p2_detail=$myFn->getData($conn,'desc_en','content',"WHERE page='$page' AND specific_name='p2'");
	
	$p3_title=$myFn->getData($conn,'title_en','content',"WHERE page='$page' AND specific_name='p3'");
	$p3_detail=$myFn->getData($conn,'desc_en','content',"WHERE page='$page' AND specific_name='p3'");
	
	$p4_title=$myFn->getData($conn,'title_en','content',"WHERE page='$page' AND specific_name='p4'");
	$p4_detail=$myFn->getData($conn,'desc_en','content',"WHERE page='$page' AND specific_name='p4'");
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
					<li class="active"><?php echo $txt_contact ?></li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d484.3962415587083!2d100.4774203160419!3d13.768623733520547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb990755bdc8b32d3!2z4Lia4Lij4Li04Lip4Lix4LiXIOC4lOC4teC5geC4reC4meC4lOC5jOC4iOC4teC5gOC4hOC4oeC4teC4oOC4seC4k-C4keC5jOC5geC4reC4meC4lOC5jOC5gOC4l-C4o-C4lOC4lOC4tOC5ieC4hyDguIjguLPguIHguLHguJQ!5e0!3m2!1sth!2s!4v1500792314846" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<div class="container">
    	<div class="row">
        	<div class="col-lg-6">
            <h2><?php echo $p1_title ?></h2>
            <address>
            	<p>
                	<?php echo $p1_detail ?>
                </p>
            </address>
            </div>
            <div class="col-lg-6">
            <h2><?php echo $p2_title ?></h2>
            <address>
            	<p>
                	<?php echo $p2_detail ?>
                </p>
            </address>
            </div>
            <div class="col-lg-6">
            <h2><?php echo $p3_title ?></h2>
            <address>
            	<p>
                	<?php echo $p3_detail ?>
                </p>
            </address>
            </div>
            <div class="col-lg-6">
            <h2><?php echo $p4_title ?></h2>
            <address>
            	<p>
                	<?php echo $p4_detail ?>
                </p>
            </address>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12">
                <div class="solidline">
                </div>
            </div>
        </div>
            
		<div class="row">
			<div class="col-lg-12">
				<h2><?php echo $txt_contact ?></h2>
				<form id="contactform" action="contact/contact.php" method="post" class="validateform" name="send-contact">
					<div id="sendmessage">
						 Your message has been sent. Thank you!
					</div>
					<div class="row">
						<div class="col-lg-4 field">
							<input type="text" name="name" placeholder="* Enter your full name" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-4 field">
							<input type="text" name="email" placeholder="* Enter your email address" data-rule="email" data-msg="Please enter a valid email" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-4 field">
							<input type="text" name="subject" placeholder="Enter your subject" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12 margintop10 field">
							<textarea rows="12" name="message" class="input-block-level" placeholder="* Your message here..." data-rule="required" data-msg="Please write something"></textarea>
							<div class="validation">
							</div>
							<p>
								<button class="btn btn-theme margintop10 pull-left" type="submit">Submit message</button>
								<span class="pull-right margintop20">* Please fill all required form field, thanks!</span>
							</p>
						</div>
					</div>
				</form>
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
<script src="js/validate.js"></script>
</body>
</html>