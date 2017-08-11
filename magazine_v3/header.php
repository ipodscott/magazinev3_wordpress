<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image" content="<?php bloginfo('template_directory'); ?>/images/screenshot.jpg" />
    <title></title>
      
	<style>
		
		body{
			background-color: #000;
		}
		
		.all{
		opacity: 0;
		-webkit-opacity: 0;
		}
		
		
		.open-overlay{
			display: block;
			position: fixed;
			top:0px;
			left: 0px;
			width: 100%;
			height: 100vh;
			z-index: 99999;
			background-color: #121212;
		}
		
		.open-overlay-box{
			display: table;
			height: 100vh;
			width: 100%;
			text-align: center;
		}
		
		.open-overlay-logo{
			display: table-cell;
			vertical-align: middle;
			opacity: 0.2;
			-webkit-opacity: 0.2;
		}
		
		.open-overlay-logo img{
			max-width: 120px !important;
			width: 90%;
		}
		
	</style>

            
    </head>
<body>
	<!-- Open ALl --> <div class="all" name="the-top">
<?php wp_head(); ?>