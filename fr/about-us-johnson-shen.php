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
					<a href="mailto:jshen@cesgroup.ca" class="float_right">jshen@cesgroup.ca</a><br/>
					<span class="float_right">Connect: <a href="#" class="text_decoration"><span class="linkedin_link">LinkedIn</span></a></span>
					
					<img src="img/people/johnson.png" class="picture_position" alt="Johnson Shen CES Engineering">
					
					<div class="employee_info"><strong>JOHNSON SHEN</strong> :: BASc, EIT :: ENERGY MODELLER</div>
					
					<p>
						Johnson Shen is a recent graduate from the University of British Columbia with a Bachelor of Applied Science in Engineering Physics, Mechanical Option. Johnson worked with CES as a junior commissioning agent while on Co-op and is now involved in Energy analysis projects mainly utilizing energy modeling programs such as eQUEST and EE4.
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
