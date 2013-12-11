<?php include('includes/head_services.php'); ?>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
		<?php include_once("analyticstracking.php") ?>

        <?php include('includes/nav_services.php'); ?>

        <div class="container">

			<div class="main_content">
			<!-- Example row of columns -->
            <div class="row animated fadeInLeft">
                <?php include('includes/sidebar_nav_services.php'); ?>
				<div class="span8 margin_main_container">
					<div class="title_bkgd">
						<h1>mep design services</h1>
					</div>
					<img src="img/services/mepdesignservmain.png" class="main_picture" />
					<div class="row animated fadeInLeft" id="margin-top">
							<div class="span18">
								<a href="./services-retrofit-design.php"><img src="img/services/retrofitdesignsmaller.png" class="opacity" alt="Retrofit Design"></a>
							</div>
							<div class="span18">
								<a href="./services-new-constriction-design.php"><img src="img/services/newconstruciondesign.png" class="opacity" alt="New Construction Design"></a>
							</div>
							<div class="span18">
								<a href="./services-design-build-projects.php"><img src="img/services/designbuildprojects.png" class="opacity" alt="Design Buidling Projects"></a>
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
