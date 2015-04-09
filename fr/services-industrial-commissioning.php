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
						<h1>industrial commissioning</h1>
					</div>
					<img src="img/services/industrialcxmain.png" class="main_picture" />
					<div class="row animated fadeInLeft" id="margin-top">
							<div class="span2">
								<a href="services-heat-and-power-plant.php"><img src="img/services/heatandpower.png" class="opacity" alt="Heat and Power Plant"></a>
							</div>
							<div class="span2">
								<a href="services-laboratory-high-containment-facilities.php"><img src="img/services/laboratoruhigh.png" class="opacity" alt="Laboratory High COntainment Facilities"></a>
							</div>
							<div class="span2">
								<a href="services-high-voltage-substations.php"><img src="img/services/highvoltage.png" class="opacity" alt="High Voltage Substations"></a>
							</div>
							<div class="span2">
								<a href="services-decon-chambers.php"><img src="img/services/deconchambers.png" class="opacity" alt="Decon Chambers"></a>
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
