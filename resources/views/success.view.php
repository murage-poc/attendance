<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="customerservice@mimidots.com"/>
	
	<title>KUCSA</title>
	<meta name="description"    content=""/>
	<meta name="keywords"
	      content="mimidots">
	<link rel = "shortcut icon" type = "image/x-icon" href = "favicon.ico">
	<style>
		
		.page-501
		{
			
			position:relative;
			
			width:350px;
			
			height:200px;
			
			margin:100px auto;
			
			text-align: center;
			
		}
		
		
		
		
		
		.text-501
		:nth-of-type(2){
			
			text-shadow:none;
			
			z-index:2;
			
			position:absolute;
			
			top:-139px;
			
			left:-1px;
			
		}
		
	
	</style>
</head>

<body>

<div class="page-501">
	<p class="text-501
">Thank you for attending todays meeting</p>
	
	<p>
		<?php
		use Carbon\Carbon;
		
		echo "You have successfully reported ".Carbon::now()->diffForHumans();
		?>
		<br>
		<a class="btn btn-success" href="/">Return home</a>
	</p>
</div>

<footer>
    <p>
        This website uses cookies. By using our services, you’re agreeing to our <a>Cookie Policy</a>.
    </p>
</footer>
</body>
</html>



