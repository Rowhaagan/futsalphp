<nav class="fh5co-nav-style-1" role="navigation" data-offcanvass-position="fh5co-offcanvass-left">
				<?php if($debug == 1) { ?>
					<button id="btn-debug" class="btn btn-default"><i class="fa fa-bug"></i></button>
				<?php } ?>
			<div class="container">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 fh5co-logo">
					<a href="#" class="js-fh5co-mobile-toggle fh5co-nav-toggle"><i></i></a>
					<a href="#">Manfootster</a>
				</div>
				<div class="col-lg-6 col-md-5 col-sm-5 text-center fh5co-link-wrap">
					<ul data-offcanvass="yes">
					<?php nav_main($conn, $path); ?>
					</ul>
				</div> 
				<div class="col-lg-3 col-md-4 col-sm-4 text-right fh5co-link-wrap">
					<ul class="fh5co-special" data-offcanvass="yes">
						<li><a href="#">Login</a></li>
						<li><a href="#" class="call-to-action">Get Started</a></li>
					</ul>
				</div>
			</div>
</nav>