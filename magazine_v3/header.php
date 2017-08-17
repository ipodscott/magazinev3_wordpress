<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no" />

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

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
		}
		
		.open-overlay-logo img{
			width: 240px;
			background-position: center center;
			background-size: 120px 120px;
			background-repeat: no-repeat;
			background-image: url(<?php bloginfo('template_directory'); ?>/images/disk_bg.svg);
		}
		
	</style>

            
    </head>
<body>
	<!-- Open ALl --> <div class="all" name="the-top">
<?php wp_head(); ?>