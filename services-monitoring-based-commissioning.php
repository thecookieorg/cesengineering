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
						<h1>Monitoring Based Commmissioning</h1>
					</div>
					<img src="img/services/continuousoptmain.png" class="main_picture" alt="Monitoring Based Commissioning">
					<p>
						Monitoring based commissioning (MBCx) combines ongoing building energy system monitoring with standard retro-commissioning 
						(RCx) practices with the aim of providing substantial, persistent, energy savings. <br>
						There are three primary streams of additional energy savings from MBCx relative to traditional RCx:
						<ul>
							<li>Savings from persistence and optimization of savings from RCx thanks to early identification of deficiencies through 
							metering and trending. Several studies have shown that RCx savings can degrade without an explicit 
							effort to monitor and maintain them.</li>
							<li>Savings from measures identified through metering and trending during the initial commissioning effort i.e. 
							measures unlikely to be found from RCx alone. Haves et al. [2008] provide several examples of such measures,
							e.g. poor control of chilled water distribution to air handlers; unnecessary chiller operation due to disabled 
							chiller lockout; poor VAV zone control due to inoperative actuators on air dampers and hot water valves.</li>
						</ul>
						Continually identified new measures. By virtue of the continuous nature of the monitoring, MBCx can identify new 
						problems that emerge after the initial retro-commissioning investigation stage, such as equipment cycling and 
						excessive simultaneous heating and cooling.
					</p>
                </div>
            </div>	
			</div>
			

           <?php include('includes/footer.php'); ?>

</div> <!-- /container -->

<?php include('includes/js.php'); ?>
    </body>
</html>
