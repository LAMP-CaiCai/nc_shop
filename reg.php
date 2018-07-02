<?php
	require './init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="<?php echo URL ?>Public/imgs/milogo.png" type="image/gif" sizes="32x32">
	<link rel="stylesheet" href="<?php echo URL ?>Public/css/reg.css">
	<link rel="stylesheet" href="<?php echo URL ?>Public/css/pub.css">
	<title>小米帐号 -注册</title>
</head>
<body>
	<div class="w1">
		<div class="reg">
		</div>
		<div class="zc">
			<h4 class="zc_1">注册小米帐号</h4>
		</div>
		<center><hr>
			<form action="" method="post" style="margin-top:30px;">
				<span class="span">用 户 名</span>&nbsp;&nbsp;&nbsp;&nbsp;
				<input class="input" type="text" name="name" placeholder="请输入用户名"><br><br>

				<span class="span">密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input class="input" type="password" name="pwd" placeholder="请输入密码"><br><br>

				<span class="span">确认密码</span>&nbsp;&nbsp;
				<input class="input" type="password" name="repwd" placeholder="请再次输入密码"><br><br>

				<span class="span">手 机 号</span>&nbsp;&nbsp;&nbsp;&nbsp;
				<input class="input" type="text" name="tel" placeholder="请输入11位手机号"><br><br>

				<span class="span"> &nbsp;&nbsp;E-mail</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input class="input" type="email" name="email" placeholder="请输入常用邮箱"><br><br>

				<input type="submit" class="but but_1" name="" value="注&nbsp;&nbsp;&nbsp;&nbsp;册">
				<input type="submit" class="but but_2" name="" value="登&nbsp;&nbsp;&nbsp;&nbsp;录">
			</form>
		</center>
		<div class="msg">
			<label>
				<i></i>
				<span>注册账号即表示您同意并愿意遵守小米 <a href="">用户协议</a>和<a href=""> 隐私政策</a></span>
			</label>
		</div>
	</div>
<?php
	require PATH.'Common/foot.php';
?>
</body>
</html>