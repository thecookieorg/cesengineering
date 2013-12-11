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
						<h1>real versus estimated energy consumption</h1>
					</div>
					<img src="img/services/energyperfmain.png" class="main_picture" alt="CES Services - Energy Performance">
					<p>
						<strong>Energy Model Calibration</strong><br/>
						<br>
						Our experience with energy modeling, energy monitoring, and measurement and verification has led to the development of an effective process 
						for the calibration of energy models to real building data.  Model calibration is required for the verification of savings of new 
						construction relative to a simulated code baseline building.  
						This process can uncover issues causing excessive energy use that cannot be identified through examining trend logs only.   
						Calibrated simulations are also used to calculated energy savings of potential energy conservation measures for existing buildings, 
						and are required by some government supported efficiency programs to appropriately account for interactive effects between building systems.  
						These calibrated models can be used to determine the minimum energy control sequences for building systems.<br>
						<br>
						<strong>Energy Model Reviewing</strong><br>
						<br>
						Energy modeling is a complex process involving hundreds of model parameters, and the proper interpretation of dozens of requirements 
						from building energy standards.  Often, limitations in the capabilities of modeling software programs require creative 
						‘work-arounds’ to correctly simulate building operation or account for building performance.  
						If your company would like an experienced modeler to review your simulations for accuracy, consistency and to address issues 
						that can arise, CES can help.
					</p>
                </div>
            </div>	
			</div>
			

            <?php include('includes/footer.php'); ?>

</div> <!-- /container -->

<?php include('includes/js.php'); ?>
    </body>
</html>
