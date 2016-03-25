<?php include "inc/header.php"	?>
<?php include_once("analyticstracking.php") ?>
<!-- /HEAD BLOCK ================================================= -->
	<body onload="timer=setTimeout(function(){ window.location='savings_detail.php';}, 5000)">
    <div class="container">
			<!-- NAVBAR BLOCK ================================================ -->
			<?php include "inc/navbar.php" ?>
			<!-- /NAVBAR BLOCK ================================================ -->
			
			
			<!-- ONE Connect Demo Factory - Optimisation Target - Jumbotron Banner-->
			<div class="row">
				<div class="col-sm-12">
					<div id="" class="wbJumbotronBanner wbAccountBanner">
						<div class="row clearfix">
							<div class="col-sm-8 col-sm-offset-2">
                				<h1 class="text-center">Processing Request</h1>
							</div>
						</div>
            		</div>
				</div>
			</div>

			<?php
			    //long_process.php
			    echo 'processing...';
			    for($i=1;$i<=3;$i++){
			        //do something
			        echo '...';
			        sleep(1);
			    }
			    
			?>





			<!-- FOOTER BLOCK ================================================ -->
			<?php include "inc/footer.php" ?>
			<!-- /FOOTER BLOCK ================================================ -->