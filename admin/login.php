<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>YICMS留言板</title>
	<link rel="stylesheet" href="../bs/css/bootstrap.min.css">
	<script src="../bs/js/jquery.min.js"></script>
	<script src="../bs/js/bootstrap.min.js"></script>
	<script src="../bs/js/holder.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-default"  style="width:600px;margin:10px auto;">
		  <div class="panel-heading">
		  	管理员登陆
		  </div>
		  <div class="panel-body">
			<form class="form-horizontal" role="form" method="post" action="common.php">
				  <div class="form-group">
				    <label class="col-sm-2 control-label">Username</label>
				    <div class="col-sm-10">
				      <input type="text" name="username" class="form-control" placeholder="Usename">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
				    <div class="col-sm-10">
				      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputcaptcha" class="col-sm-2 control-label">验证码：</label>
				    <div class="col-sm-10">
				      <input type="text" name="captcha" class="form-control" id="inputcaptcha" placeholder="请输入验证码" style="width:110px;float:left;" maxlength="4">
				      <a href="javascript:void(0)" onclick="document.getElementById('captcha_ig').src='../captcha.php?r='+Math.random()"><img id="captcha_ig" src="../captcha.php?r=<?php echo rand();?>" style="float:left;margin-left:30px;"/></a>
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <input type="submit" class="btn btn-default" value="登陆">
				    </div>
				  </div>
			</form>		    
		  </div>
		</div>
	</div>
</body>
</html>