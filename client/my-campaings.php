 
<!-- section -->
<section class="versions wrap-content">


	<!-- Campaings -->
	<div class="section-campaing-list">

		<header class="heading-second sticky-top">
			<div class="container-fluid">
				<div class="row d-flex align-items-center">
					<div class="col-title col-md-12 order-md-1  order-lg-1 col-lg-3   d-flex align-items-center">
						<h2 class="h1">
							My Campaings <span class="number">(30)</span> 
						</h2> 

					</div>
					<div class="col-video  col order-md-3 order-md-2 order-lg-2">

					<!-- Video Collapse -->
										<div class="wrap-video-dropdown">
											<a href="javascript:;"  class="btn-video rounded trans-3">
												<span class="title">Watch the tutorial</span>
												<i class="icon-play trans-3"></i>
											</a>
											<div class="video trans-5">
												<div class="embed-responsive embed-responsive-16by9">
													<iframe src="https://player.vimeo.com/video/259411563" class="embed-responsive-item"   frameborder="0" title="Aqui un buen titulo" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>	
												</div>
											</div>
										</div>
										<!-- end Video Collapse -->

					</div>
					<div class="col-actions col-md-8 col-lg-5  order-lg-3 order-md-3 d-flex align-items-center justify-content-end top-links">
					 
						<?php include('../partials/filter.php') ?>
					</div>
				</div>
			</div>
		</header>	


		<div class="campaing-list">
			<div class="container-fluid">

				<div class="row">					
					<div class="col-xl-12 d-flex flex-wrap justify-content-between"> 
						<?php 
						for($i=1;$i<=30;$i++): ?>
							
							<?php include('../partials/card-project.php'); ?>
							

						<?php endfor; ?>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- end Campaings -->

</section>
<!-- end section -->
</div>

