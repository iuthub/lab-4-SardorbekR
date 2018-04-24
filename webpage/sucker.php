<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<title>Thanks Sucker!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<?php  
			if ((empty($_REQUEST['name']))||(empty($_REQUEST['section']))||(empty($_REQUEST['Card_Type']))||(empty($_REQUEST['Credit_Card']))){
				echo "<h1>Sorry</h1>"; 
			?> Empty fields left!
			<a href="index.php"> Try again</a>
		
			<?php }else {?><h1>Thanks Sucker</h1><hr /><br>
		<strong>Your info has been recorded</strong><br><br><?php
			$name=$_GET['name'];
			$section=$_GET['section'];
			$Card_Type=$_GET['Card_Type'];
			$Credit_Card=$_GET['Credit_Card'];
			 ?><dl>
			<dt>Name:</dt><dd> <?= $name?></dd> 
			<dt>Section:</dt><dd > <?= $section?></dd> 
			<dt>Card_Type:</dt><dd>  <?= $Card_Type?></dd> 
			<dt>Credit_Card: </dt> <dd>  <?= $Credit_Card ?> </dd></dl>	

			<p> Here are all suckers who have submitted here</p>
			<?php 
				$string= $_REQUEST['name'] . ";" . $_REQUEST['section'] . ";" . $_REQUEST['Card_Type'] . ";" . $_REQUEST['Credit_Card'] . "<br>";
				file_put_contents("sucker.txt", $string, FILE_APPEND); ?>
				<?= file_get_contents("sucker.txt");
							?>
	</body>
	<?php }
		?>
</html>