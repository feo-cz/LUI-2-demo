<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<title>LUI - Less UI</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1" />


	<?php if(0){ ?>
		<link rel="stylesheet/less" href="/demo.less" />
		<script>
			less = {
				env: "development",
				async: false,
				fileAsync: false,
				poll: 1000,
				functions: {},
				dumpLineNumbers: "comments",
				relativeUrls: false
			};
		</script>
		<script src="/lui/js/less/less.min.js" type="text/javascript"></script>
	<?php } else { ?>
		<!-- COMPILED STYLES -->
		<link rel="stylesheet" href="/demo.css" />
	<?php } ?>

	<script src="/lui/js/jquery/jquery-2.2.0.min.js"></script>
	<script src="/lui/js/jquery/jquery-ui.js"></script>
	<script src="/lui/js/jquery/ui/ui.js"></script>
</head>
<body>

	<section class="demo_header">
		<header>
			LUI<span>Less UI</span>
			<a class="github" href="https://github.com/wUFr/LUI" target="_blank">Follow project on GitHub</a>
			<a class="home" href="//<?php echo $_SERVER['SERVER_NAME']; ?>">Home</a>
		</header>
		
	</section>

	
	<section class="container max_xl demo_content">
		<div class="row">
			<div class="col-12">
				<?php
					//print_r(preg_match('/[^A-Za-z0-9#\\-_]/', $_GET["page"]));
					if(isset($_GET["page"]) AND !preg_match('/[^A-Za-z0-9#\\-_]/', $_GET["page"])){
						$page = stripslashes(str_replace('/','',$_GET["page"]));
						$file = $_SERVER['DOCUMENT_ROOT'] . "/demos/".$page.".php";
						include($file);
					}
					else {
						$file = $_SERVER['DOCUMENT_ROOT'] . "/demos/homepage.php";
						include($file);
					}
				?>
			</div>
		</div>
	</section>
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-77419221-1', 'auto');
	ga('send', 'pageview');
	</script>
</body>
</html>