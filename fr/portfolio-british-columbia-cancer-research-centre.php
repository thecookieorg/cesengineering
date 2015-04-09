<?php include('includes/head_portfolio.php'); ?>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
		<?php include_once("analyticstracking.php") ?>

       <?php include('includes/nav_portfolio.php'); ?>

        <div class="container">

			<div class="main_content">
			<!-- Example row of columns -->
            <div class="row animated fadeInLeft">
                <?php include('includes/sidebar_nav_portfolio.php'); ?>
				<div class="span8 margin_main_container">
                    <div class="title_bkgd">
						<h1>BC Cancer Research Centre <!--<img src="img/services/green-line.png" class="green_line" />--></h1>
					</div>
					<img src="img/portfolio/content/bc-cancer-research-center.png" class="main_picture" alt="BC Cancer Research Centre Picture">
					<p>The BC Cancer Research Centre is a state-of-the-art LEED Gold research facility located in Vancouver, BC.  The building’s sustainability features include a heat recovery chiller, exhaust air heat recovery, radiant heating systems and energy efficient lighting.<br>
					<br>
					CES was hired to conduct an energy audit and retrocommission the building under BC Hydro’s Continuous Optimization program.  CES is currently in the investigation phase and has identified nearly two dozen possible measures to improve operation and greatly reduce energy use, particularly for the chilled water plant.  The goal of the Continuous Optimization Program is to reduce electrical energy use by 10% but it is anticipated that this target can be greatly exceeded.</p>
                </div>
            </div>	
			</div>
			

           <?php include('includes/footer.php'); ?>

</div> <!-- /container -->

<?php include('includes/js.php'); ?>
    </body>
</html>
