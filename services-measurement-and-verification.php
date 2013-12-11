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
						<h1>measurement and verification</h1>
					</div>
					<img src="img/services/measurementmain.png" class="main_picture" alt="Measurement And Verification General Picture">
					
						<div class="row animated fadeInLeft" id="margin-top">
							<div class="span18">
								<a href="./services-retrofit-m-and-v-option-b.php"><img src="img/services/retrofitmandv.png" class="opacity" alt="Retrofit Measurement and Verification Option V and Option B"></a>
							</div>
							<div class="span18">
								<a href="./services-whole-building-option-c.php"><img src="img/services/wholebuilding.png" class="opacity" alt="Whole Building Option C"></a>
							</div>
							<div class="span18">
								<a href="./services-whole-building.php"><img src="img/services/wholebuildingsimulated.png" class="opacity" alt="Whole Building"></a>
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
