<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="<?php echo URL ?>Public/imgs/milogo.png" type="image/gif" sizes="32x32">
	<link rel="stylesheet" href="<?php echo URL ?>Public/css/login.css">
	<link rel="stylesheet" href="<?php echo URL ?>Public/css/pub.css">
	<title>小米账号 - 登录</title>
</head>
<body>
	<div class="w">
		<div class="denglu">
			<a href="<?php echo URL ?>/index.php">
				<img src="<?php echo URL ?>Public/imgs/mistore_logo.png">
			</a>
		</div>
	</div>
	<!-- <div class="clear"></div> -->
	<div class="w middle">
		<div class="middle_1">
			<div class="form mt30">
				<div class="mt30">
					<ul>
						<li>
							<a href="" class="den">账号登录</a>
						</li>
						<li>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
						<li>
							<a href="" class="zhu">账号注册</a>
						</li>
					</ul>
				</div>
				<div class="form_1">
					<form action="" method="post" class="form_2">
							<input type="text" placeholder="邮箱/手机号码/小米ID"><br><br>
							<input type="password" placeholder="密码"><br><br>
							<input class="submit" type="submit" value="登 录">
					</form>
				</div>
			</div>
		</div>
	</div>
<?php
	require PATH.'Common/footer.php';
?>
</body>
</html>