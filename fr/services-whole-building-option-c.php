﻿<?php include('includes/head_services.php'); ?>
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
						<h1>Whole Building - IPMVP Option C</h1>
					</div>
					<img src="img/services/measurementmain.png" class="main_picture" alt="Beautiful Panorama Picture of Vancouver">
					<p>
						Option C, whole building level energy savings measurements, is the most utilized method for M&V project due to readiness of energy source meters and limited cost.<br/>
						Option C involves the use of utility meters or aggregated sub-meters to determine the Post-Construction Energy Use of the facility at the whole building level.<br/>
						<br/>
						The Projected Baseline Energy Use is the energy use of a "control group" of similar buildings without the EC Ms or design enhancements. In this regard the Projected Baseline Energy Use is a stipulation.<br/>
						<br/>
						Option C is suitable only for projects, which do not require a high level of savings accuracy and where there are existing buildings available for comparison, which are physically and operationally similar except for the ECMs of the subject building. Even then, the potential for error renders this option suitable for only the most cursory M& V programs.<br/>
						<br/>
						Option C is best applied where:
						<ul>
							<li>The M&V focus is on whole building performance rather than individual ECMs</li>
							<li>A high level of savings accuracy is not required. Seemingly variances in building function, occupancy, or operation can lead to significant variances in energy use</li>
							<li>An appropriate population of potential Baseline buildings is available</li>
							<li>The budget for M& V is limited</li>
						</ul>
						Most large commercial buildings (over 100,000 ft2) have one or more electric interval data meters. One year of data is usually available from this source, and is enough to generate a baseline model. Interval natural gas data, or other heating source, is far less common but is found frequently on college campuses or in hospitals. If the expected savings is too small to be detected using only whole-building interval data, for example less than 5%, then an Option B Retrofit Isolation approach should be used.<br/>
						<br/>
						IPMVP Option C involves measurement of the following whole-building and systems energy types and data sources:
						<ul>
							<li>Whole building electric energy or demand. Most utilities with customers in high demand rate categories record the electric energy use or demand from the building’s electric meter at 15-minute intervals. Many buildings have multiple electric meters, in which case the energy use should be collected from meters on the circuits that power the subsystems that will be affected by the EBCx process</li>
							<li>Natural gas consumption. Short-term interval data for natural gas consumption in a facility is far less common than whole-building electric interval data. However natural gas interval data can be measured using permanently installed calibrated digital flow meters or pulse counters attached to the gas meter faceplate. Their output is usually in volumetric units, such as cubic feet, and can be monitored by the building’s EMCS, or an independent monitoring system.8 While the pulse counters are also relatively inexpensive, they should be installed by the utility or other licensed contractor</li>
							<li>Chilled or hot water use. A building may be connected to a central or district chilled or hot water generation plant. “Btu” meters are commonly used that have flow meters to measure water flow and temperature sensors that measure the temperatures of the entering and leaving water. The Btu meters calculate instantaneous thermal energy use and the result may be recorded by the EMCS or an alternate system. Alternatively, the measured water flow and temperatures are recorded independently and calculated at a later time</li>
							<li>Steam use. A building may also obtain steam from a central plant. At the building, steam is measured using permanently installed steam meters, which measure total pounds of steam entering the building, or steam condensate meters which record the amount of condensed steam returning to the central plant. Condensate meters can be less reliable due to age and corrosion problems, and possible steam system leaks in the building</li>
						</ul>
							Short-term interval data for natural gas, hot or chilled water, or steam are generally not available from their respective utilities or district plants. If these points are available, they are usually connected to the building’s EMCS, or to a separate energy monitoring system. The amount of data varies based on each building’s resources.
					</p>
                </div>
            </div>	
			</div>
			
<?php include('includes/footer.php'); ?>

</div> <!-- /container -->

<?php include('includes/js.php'); ?>
    </body>
</html>
