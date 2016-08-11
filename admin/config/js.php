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
<!-- fontawesome -->
<script src="https://use.fontawesome.com/4df32fd8cc.js"></script>
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
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="config/js/loginindex.js"></script>
<!-- tynymce -->
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

<!-- dropzone -->
<script src="js/dropzone.js"></script>
<script>
	$(document).ready(function(){
		$("#console-debug").hide();

		$("#btn-debug").click(function(){
			$("#console-debug").toggle();
		});

		$(".btn-delete").on("click", function() {
			
			var selected = $(this).attr("id");
			var pageid = selected.split("del_").join("");
			
			var confirmed = confirm("Are you sure you want to delete this page?");
			
			if(confirmed == true) {
				
				$.get("ajax/pages.php?id="+pageid);
				
				$("#page_"+pageid).remove();				
				
			}
			

			
			//alert(selected);
			
		})

	});

	tinymce.init({ selector:'textarea' });
	// tinymce.init({
	//     selector: ".editor",
	//     theme: "modern",	    
	//     plugins: [
	//          "code advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
	//          "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
	//          "save table contextmenu directionality emoticons template paste textcolor"
	//    ],
	//    content_css: "css/content.css",
	//    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons", 
	//    style_formats: [
	//         {title: 'Bold text', inline: 'b'},
	//         {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
	//         {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
	//         {title: 'Example 1', inline: 'span', classes: 'example1'},
	//         {title: 'Example 2', inline: 'span', classes: 'example2'},
	//         {title: 'Table styles'},
	//         {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
	//     ]
	//  }); 

</script>
