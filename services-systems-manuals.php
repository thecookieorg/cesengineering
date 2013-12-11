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
						<h1>Systems manuals</h1>
					</div>
					<img src="img/services/buildingcx-main.png" class="main_picture" />
					<p>
						The systems manual is an essential deliverable of the commissioning process. Usually assembled by the Commissioning Authority, 
						with the assistance of the Contractor and the A/E team, the Systems Manual provides the operating staff with the information 
						needed to understand and optimally operate the commissioned systems. The Systems Manual is provided in addition to the 
						O&M Manuals submitted by the contractors. The Systems Manual generally focuses on operating, rather than maintaining, the equipment. 
						It also focuses on the interactions between systems. <br/>
						The systems manual development stretches throughout all phases of the project. 
						It shall be outlined in the Owners Project Requirement during design phase with the responsible parties identified. 
						The systems manuals shall be updated throughout the remainder of the project. 
						Systems manuals components required by the contractor shall be included in the project specifications and the contract documents. <br/>
						<br/>
						At a minimum the Systems Manual should include the following for each commissioned system:
						<ul>
							<li>Final version of the Design Narrative</li>
							<li>Single-Line Diagrams, Flow Diagrams</li>
							<li>As-built sequences of operations, control drawings, and original setpoints</li>
							<li>Operating instructions for integrated building systems</li>
							<li>Recommended schedule of maintenance requirements and frequency, if not already included in the O&M Manuals</li>
							<li>Recommended schedule for re-testing of commissioned systems</li>
							<li>Recommended schedule of calibrating sensors and actuators</li>
						</ul>
					</p>
                </div>
            </div>	
			</div>
			

           <?php include('includes/footer.php'); ?>

</div> <!-- /container -->

<?php include('includes/js.php'); ?>
    </body>
</html>
