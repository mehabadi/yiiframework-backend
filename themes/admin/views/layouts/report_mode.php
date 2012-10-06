<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->baseUrl ; ?>/themes/general/css/report.css" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>My School</title>
	
	<style>	
		body{
			direction: rtl ;
			text-align: center ;
		}
		.total_list{			
			border-collapse:collapse;
			border-spacing:0;
			border:1px solid #000000;
			font:13px "b mitra";
			font-weight: bold;
			width:100%;			
		}

		.minor_list{
			border-collapse:collapse;
			border-spacing:0;
			border:1px solid #000000;
			font:13px "b mitra";
			font-weight: bold;
			width:230px;
			height:841px ;
			margin: 0px 50px 50px 50px ;
		}	
	</style>
</head>

<body>

<?php echo $content; ?>

</body>
</html>