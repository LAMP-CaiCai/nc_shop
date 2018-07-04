<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台登录管理系统</title>
	<style>
		#iframeTop{
			width: 100%;
			height: 50px;
		}
		#iframeLeft{
			width: 18%;
			height: 700px;
			float: left;
		}
		#iframeMain{
			width: 82%;
			height: 700px;
		}
	</style>
</head>
	<body>
		<iframe src="./top.php" id="iframeTop" name="iframeTop" frameborder="0"></iframe>
		<hr>
		<iframe src="./menu.php" id="iframeLeft" name="iframeLeft" frameborder="0"></iframe>
		<iframe src="./main.php" id="iframeMain" name="iframeMain" frameborder="0"></iframe>
	</body>
</html>