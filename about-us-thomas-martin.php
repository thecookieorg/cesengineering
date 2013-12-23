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
                <?php include('includes/sidebar_nav_ass.php'); ?>
				<div class="span6 margin_main_container">
					<div class="title_bkgd">
						<h1>Associates</h1>
					</div>
					
					<a href="#" class="float_right">Download vCard</a><br>
					<a href="mailto:tmartin@cesgroup.ca" class="float_right">tmartin@cesgroup.ca</a><br>
					<span class="float_right">Connect: <a href="#" class="text_decoration"><span class="linkedin_link">LinkedIn</span></a></span>
					
					<img src="img/people/tom.png" class="picture_position" alt="Thomas Martin CES Engineering">
					
					<div class="employee_info"><strong>THOMAS MARTIN</strong> :: EIT, LEED AP BD+C :: ASSOCIATE</div>
					
					<p>
						Tom Martin is an intermediate project manager specializing in building energy simulation and analysis, and received his BASc with distinction from UBC in mechanical engineering. Tom has created over 25 energy models for LEED certification, code compliance, building retrofit savings calculations, and life cycle analysis of energy efficiency measures, using the modeling programs eQuest, EE4, EnergyPlus, IES-ve and HAP. In addition to modeling, Tom is currently involved in creating custom models of building and equipment performance for building monitoring and verification purposes, and in energy management and optimization projects for existing buildings. 
					</p>
                </div>
				
				<div class="span16 margin_main_container">
					<img src="img/people/side-vanc.png" alt="CES Engineering Vancouver">
				</div>
            </div>	
			</div>
			

            <?php include('includes/footer.php'); ?>

</div> <!-- /container -->

<?php include('includes/js.php'); ?>
    </body>
</html>
