<?php
	if($lang=='EN'){
		$menu_index='Home';
		$menu_about='About Us';
		$menu_contact='Contact Us';
		$menu_service='Services';
		$menu_boiler='Boiler';
		$menu_RO='Reverse Osmosis';
		$menu_WT='Water Treatment';
		$menu_CT='Cooling Tower';
		$menu_CD='Chlorine Dioxide';
		$menu_SP='Swimming Pool';
		
		$txt_contact="Contact Us";
		$txt_about="About D&G";
		$txt_ourservice="Our Services";
	}else{
		$menu_index='หน้าแรก';
		$menu_about='เกี่ยวกับเรา';
		$menu_contact='ติดต่อเรา';
		$menu_service='บริการ';
		$menu_boiler='Boiler';
		$menu_RO='Reverse Osmosis';
		$menu_WT='Water Treatment';
		$menu_CT='Cooling Tower';
		$menu_CD='Chlorine Dioxide';
		$menu_SP='Swimming Pool';
		
		$txt_contact="ติดต่อเรา";
		$txt_about="เกี่ยวกับ D&G";
		$txt_ourservice="บริการของเรา";
	}
?>
<?php
	$queryString = $_SERVER['QUERY_STRING'];					//Get Query string
?>

<div class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="images/dg-logo.jpg" width="83" height="38"> <span>DG</span>-CHEMICALS</a>
        </div>
        <div id="changeLangCn">
            <a href="change_lang.php?p=<?php echo $_SERVER['PHP_SELF'] ?>&q=<?php echo $queryString ?>&l=TH"><img src="images/th.png"></a>
            <a href="change_lang.php?p=<?php echo $_SERVER['PHP_SELF'] ?>&q=<?php echo $queryString ?>&l=EN"><img src="images/en.png"></a>
            </div>
            
        <div class="navbar-collapse collapse ">
        	
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php"><?php echo $menu_index ?></a></li>
                <li><a href="aboutus.php"><?php echo $menu_about ?></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false"><?php echo $menu_service ?> <b class=" icon-angle-down"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="boiler.php"><?php echo $menu_boiler ?></a></li>
                        <li><a href="reverse-osmosis.php"><?php echo $menu_RO ?></a></li>
                        <li><a href="water-treatment.php"><?php echo $menu_WT ?></a></li>
                        <li><a href="cooling-tower.php"><?php echo $menu_CT ?></a></li>
                        <li><a href="chlorine-dioxide.php"><?php echo $menu_CD ?></a></li>
                        <li><a href="swimming-pool.php"><?php echo $menu_SP ?></a></li>
                    </ul>
                </li>
                <!--<li class="dropdown">
                    <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Features <b class=" icon-angle-down"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="components.html">Components</a></li>
                        <li><a href="pricingbox.html">Pricing box</a></li>
                    </ul>
                </li>-->
                <!--<li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="blog.html">Blog</a></li>-->
                <li><a href="contactus.php"><?php echo $menu_contact ?></a></li>
            </ul>
        </div>
    </div>
</div>