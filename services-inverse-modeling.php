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
						<h1>inverse modeling and performance benchmarking</h1>
					</div>
					<img src="img/services/energyperfmain.png" class="main_picture" alt="Inverse Modeling and Performance Benchmarking">
					<p>
						CES specializes in the mathematical techniques necessary for creating accurate baselines of building energy use and 
						equipment performance, including thermal efficiencies of boilers, heat pumps and chillers.  
						Often these baselines can be created using trend log data from existing sensors and meters through a building’s DDC system, 
						requiring minimal implementation cost.<br>
						<br>
						Performance benchmarking provides a quantitative method for determining and tracking building performance, 
						allowing building operators and facility managers to measure the success of their energy efficiency projects. 
						CES can work with you to develop tools for a tracking system that meets your specific needs.  
						Eco OPERA Systems provides Energy Management and Information Systems (EMIS) which automate the tracking process and can
						provide instantaneous feedback over any desired time interval.<br>
						<br>
						Baselines of equipment performance can be used to monitor key pieces of equipment and to alert building operators to equipment 
						issues that would otherwise go undetected.  Equipment baselines can also be used to calibrate building energy models to 
						much higher accuracies, enabling more accurate predictions of energy savings when modifying, re-commissioning, 
						or retrofitting a building.
					</p>
                </div>
            </div>	
			</div>
			

            <?php include('includes/footer.php'); ?>

</div> <!-- /container -->

<?php include('includes/js.php'); ?>
    </body>
</html>
