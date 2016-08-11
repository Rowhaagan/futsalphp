<!-- Modernizr JS -->
<script src="config/js/modernizr-2.6.2.min.js"></script>
<!-- FOR IE9 below -->
<!--[if lt IE 9]>
<script src="js/respond.min.js"></script>
<![endif]-->
<!-- jQuery -->
<script src="config/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="config/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="config/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="config/js/jquery.waypoints.min.js"></script>
<!-- Owl Carousel -->
<script src="config/js/owl.carousel.min.js"></script>
<!-- Magnific Popup -->
<script src="config/js/jquery.magnific-popup.min.js"></script>
<!-- Stellar -->
<script src="config/js/jquery.stellar.min.js"></script>
<!-- countTo -->
<script src="config/js/jquery.countTo.js"></script>
<!-- WOW -->
<script src="config/js/wow.min.js"></script>
<script>
	new WOW().init();
</script>
<!-- Main -->
<script src="config/js/main.js"></script>
<script>
	$(document).ready(function(){
		$("#console-debug").hide();

		$("#btn-debug").click(function(){
			$("#console-debug").toggle();
		});
	});
</script>