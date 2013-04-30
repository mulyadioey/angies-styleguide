<?php
function page_open() {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Components · Angie&rsquo;s List</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<!-- Le styles -->
	<link href="assets/css/bootstrap.mod.css" rel="stylesheet">
	<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="assets/css/docs.css" rel="stylesheet">
	<link href="assets/css/angies.css" rel="stylesheet">
	<link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
	
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="assets/js/html5shiv.js"></script>
	<![endif]-->
	
	<!-- Le fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="">
	  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="">
	                <link rel="apple-touch-icon-precomposed" href="">
	                               <link rel="shortcut icon" href="">    
</head>

<body data-spy="scroll" data-target=".bs-docs-sidebar">

	<!-- Navbar
	================================================== -->
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand" href="./getting-started.html">Angie's List</a>
				<div class="nav-collapse collapse">
					<!-- `.active` for the `<li>`s is done via JS. -->
					<ul class="nav">						
						<li class="">
							<a href="./getting-started.html">Getting Started</a>
						</li>              
						<li class="">
							<a href="./basics.html">The Basics</a>
						</li>
						<li class="">
							<a href="./components.html">Components</a>
						</li>
						<li class="">
							<a href="./modules.html">Modules</a>
						</li>              
					</ul>
				</div>
			</div>
		</div>
	</div>
<?php
}

function page_close() {
?>
	<!-- Le javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap-transition.js"></script>
	<script src="assets/js/bootstrap-alert.js"></script>
	<script src="assets/js/bootstrap-modal.js"></script>
	<script src="assets/js/bootstrap-dropdown.js"></script>
	<script src="assets/js/bootstrap-scrollspy.js"></script>
	<script src="assets/js/bootstrap-tab.js"></script>
	<script src="assets/js/bootstrap-tooltip.js"></script>
	<script src="assets/js/bootstrap-popover.js"></script>
	<script src="assets/js/bootstrap-button.js"></script>
	<script src="assets/js/bootstrap-collapse.js"></script>
	<script src="assets/js/bootstrap-carousel.js"></script>
	<script src="assets/js/bootstrap-typeahead.js"></script>
	<script src="assets/js/bootstrap-affix.js"></script>
	
	<script src="assets/js/holder/holder.js"></script>
	<script src="assets/js/google-code-prettify/prettify.js"></script>
	
	<script src="assets/js/application.js"></script>
	
	
	<!-- TypeKit Font -->
	<script type="text/javascript">
	  (function() {
		var config = {
		  kitId: 'bap4dbx',
		  scriptTimeout: 3000
		};
		var h=document.getElementsByTagName("html")[0];h.className+=" wf-loading";var t=setTimeout(function(){h.className=h.className.replace(/(\s|^)wf-loading(\s|$)/g," ");h.className+=" wf-inactive"},config.scriptTimeout);var tk=document.createElement("script"),d=false;tk.src='//use.typekit.net/'+config.kitId+'.js';tk.type="text/javascript";tk.async="true";tk.onload=tk.onreadystatechange=function(){var a=this.readyState;if(d||a&&a!="complete"&&a!="loaded")return;d=true;clearTimeout(t);try{Typekit.load(config)}catch(b){}};var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(tk,s)
	  })();
	</script>
	
	<!-- -->
	<script type="text/javascript">
	$(function () {
		
		// Adding `.select` to top nav depending on the current url.
		var page_name = window.location.pathname.substring(1).split('/')[0];	// e.g. modules.html
	    $('.navbar-fixed-top ul > li > a[href*="' + page_name + '"]').parent().addClass('active');
    });
    </script>
</body>
</html>
<?php
}
?>