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
                <?php include('includes/sidebar_nav_eng.php'); ?>
				<div class="span6 margin_main_container">
					<div class="title_bkgd">
						<h1>Engineering Team</h1>
					</div>
					
					<a href="#" class="float_right">Download vCard</a><br/>
					<a href="mailto:dalfonso@cesgroup.ca" class="float_right">dalfonso@cesgroup.ca</a><br/>
					<span class="float_right">Connect: <a href="#" class="text_decoration"><span class="linkedin_link">LinkedIn</span></a></span>
					
					<img src="img/people/daniel.png" class="picture_position" alt="Daniel Alfonso CES Engineering">
					
					<div class="employee_info"><strong>DANIEL ALFONSO PONTE</strong> :: B.Sc. Mech . Eng. :: ENGINEER</div>
					
					<p>
						Daniel Alfonso Ponte is an intermediate project engineer with specialty in building energy data analysis. Daniel specialties include methods for modeling building energy systems, heat transfer processes, creating whole-building energy models using a variety of software programs (EE4, HAP, eQUEST, EnergyPlus, RETScreen) to estimate the energy performance of newly constructed buildings, modeling-assisted Life-Cycle Analysis (LCA) of building energy efficiency measures and creating calibrated energy models of existing buildings based on monitored data, verifying building performance and identifying opportunities for improvement in building performance. 
					</p>
                </div>
				
				<div class="span16 margin_main_container">
					<img src="img/people/side-vanc.png" alt="CES Engineering Vancouver Office">
				</div>
            </div>	
			</div>
			

            <?php include('includes/footer.php'); ?>

</div> <!-- /container -->

<?php include('includes/js.php'); ?>
    </body>
</html>
