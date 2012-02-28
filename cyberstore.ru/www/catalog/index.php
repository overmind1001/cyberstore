<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>CyberStore - все для киборгов</title>
	<link rel="stylesheet" type="text/css" href="./..//style.css">
</head>
<body>
	<div id="wrapper">
		<div id="our_header">
                        <!--?php include "./..//logo.php";?-->
						<div id="logo">
							<img src="./..//logo.gif">
						</div>
                        <?php include "./..//top_menu.php";?>
		</div>
		<div id="middle">
			<div id="container">
				<div id="our_content" data-role="content">
				</div>			
			</div>
                        <?php include "./..//sideLeft.php";
                        printSideLeft("catalog")?>
		</div>
	</div>
        <?php include "./..//footer.php";?>
</body>
</html>