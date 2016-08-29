<?php use Roots\Sage\Titles; ?>

	<!-- Section 1: Page Header -->
	<div class="container-fluid">
		<div id="main-title" class="row">
			<div class="col-xs-12">
			  <h1 class="text-uppercase"><?= Titles\title(); ?></h1>
			</div>
		  <?php 
				// If subtitle function from the titles.php file doesn't return false, there must be one. In that case...
			  if(Titles\subtitle()) {

			  	// Save the subhead from the function.
			  	$subhead = Titles\subtitle();

			  	// echo grid
					echo "<div class='col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2'>";
				  
				  // echo p tag
				  echo "<p class='main-subhead'>" . $subhead . "</p>";

				  // echo grid end
				  echo "</div>";
				}	
			?> 
		</div>
	</div>
</header>
