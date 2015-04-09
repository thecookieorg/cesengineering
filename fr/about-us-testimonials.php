<?php include('includes/head_about_us.php'); ?>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
		<?php include_once("analyticstracking.php") ?>

        <?php include('includes/nav_about_us.php'); ?>

        <div class="container">

			<div class="main_content">
			<!-- Example row of columns -->
            <div class="row animated fadeInLeft">
                <?php include('includes/sidebar_nav_about_us.php'); ?>
				<div class="span8 margin_main_container">
					<div class="title_bkgd">
						<h1>Testimonials</h1>
					</div>
					<img src="img/testimonials.png" class="main_picture" alt="CES Engineering Testimonials">
					<div class="row">
					<div class="span22">
						<a href="./about-us-testimonials-ubc-life-sciences-centre.php"><img src="img/testimonials/ubc-testimonials.png" class="opacity" alt="University of British Columbia Life Sciences Centre"></a>
					</div>
					<div class="span22">
						<a href="./about-us-testimonials-yvr-domestic-terminal-level-3-4.php"><img src="img/testimonials/yvr-testimonials.png" class="opacity" alt="Vancouver International Airoprt, YVR, Domestic Terminal Level 3 and 4"></a>
					</div>
					</div>
					<div class="row margin_main_container">
					<div class="span22">
						<a href="./about-us-testimonials-unbc-campus-projects.php"><img src="img/testimonials/unbc-testimonials.png" class="opacity" alt="University of Northern British Columbia Campus Project"></a>
					</div>
					<div class="span22">
						<a href="./about-us-testimonials-finder-containment-level-3-laboratories.php"><img src="img/testimonials/finder-testimonials.png" class="opacity" alt="University of British Columbia Life Sciences Centre - FINDER Level 3 Containment Laboratories"></a>
					</div>
					</div>
                </div>
            </div>	
			</div>
			

            <?php include('includes/footer.php'); ?>

</div> <!-- /container -->

<?php include('includes/js.php'); ?>
    </body>
</html>
