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
						<h1>energy performance</h1>
					</div>
					<img src="img/services/energyperfmain.png" class="main_picture" />
					<div class="row animated fadeInLeft" id="margin-top">
							<div class="span17">
								<a href="./services-incentive-management.php"><img src="img/services/incentivemanagement.png" class="opacity" alt="Incentive Management"></a>
							</div>
							<div class="span17">
								<a href="./services-energy-studies.php"><img src="img/services/energystudies.png" class="opacity" alt="Energy Studies"></a>
							</div>
							<div class="span17">
								<a href="./services-building-energy-simulation.php"><img src="img/services/buildingenergysimulation.png" class="opacity" alt="Building Energy Simulation"></a>
							</div>
							<div class="span17">
								<a href="./services-inverse-modeling.php"><img src="img/services/inversemodeling.png" class="opacity" alt="Inverse Modeling"></a>
							</div>
							<div class="span17">
								<a href="./services-real-vs-estimated-energy.php"><img src="img/services/realversusestimated.png" class="opacity" alt="Real VS Estimated Energy"></a>
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
