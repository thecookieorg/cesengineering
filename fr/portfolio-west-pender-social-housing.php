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
						<h1>West Pender Social Housing</h1>
					</div>
					<img src="img/portfolio/west-pender.png" class="main_picture" alt="West Pender Social Housing Main Picture">
					<p>The Pender Suites is a predominantly residential tower owned and operated by the BC Housing and located in Vancouver, BC.  The building, targeting LEED gold, has a number of energy efficient design features including – a low temperature radiant heating system served by air source heat pumps, heat recovery fan coil units which reject heat from the common areas and commercial zones to the heating system, demand controlled ventilation, a high efficiency lighting system, and high performance glazing.<br>
					<br>
					CES was hired to validate the Pender Suites design energy efficiency for LEED certification.  The model was created with the modeling program EE4.  Due to the complexity of the mechanical system and the limitations of EE4, a number of modeling workarounds were required to correctly credit the building energy efficiency.  The modeling showed an annual energy cost reduction of 50% relative to the MNECB baseline, corresponding to 6 LEED points for EAc1 – Optimize Energy Performance.</p>
                </div>
            </div>	
			</div>
			

           <?php include('includes/footer.php'); ?>

</div> <!-- /container -->

<?php include('includes/js.php'); ?>
    </body>
</html>
