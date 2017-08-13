<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>留言板</title>
	<link rel="stylesheet" href="bs/css/bootstrap.min.css">
	<script src="bs/js/jquery.min.js"></script>
	<script src="bs/js/bootstrap.min.js"></script>
	<script src="bs/js/holder.min.js"></script>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-inverse" >
		  <div class="navbar-header">
		    <a class="navbar-brand"  href="index.php">留言板</a>
		  </div>
		 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    <ul class="nav navbar-nav">
		      <li><a href="#">发布留言</a></li>
		    </ul>
		  </div><!-- /.navbar-collapse -->
		</nav>
		<div class="row">
		  <div class="col-md-3">
		  	<div class="panel panel-primary">
				<div class="panel-heading">
					排行
				</div>
				<div class="panel-body">
				  	内容
				</div>
			</div>
		  </div>
		  <div class="col-md-9">			
				<form role="form" action="instrt.php" method="post">
					<div class="form-group">
					   	<label>留言主题</label>
					    <input type="text" class="form-control" name="title">
					</div>
					<div class="form-group">
					    <label>留言内容</label>
						<textarea class="form-control" rows="10" name="content"></textarea>
					</div>
					   <input type="text" name="captcha" class="form-control" id="inputcaptcha" placeholder="请输入验证码" style="width:110px;float:left;" maxlength="4">
				      <a href="javascript:void(0)" onclick="document.getElementById('captcha_ig').src='./captcha.php?r='+Math.random()"><img id="captcha_ig" src="./captcha.php?r=<?php echo rand();?>" style="float:left;margin-left:30px;"/></a>
					  	<input type="submit" class="btn btn-default" value="发表" style="float:right;width:80px;">
					  						</form>
			</div>
		</div>
	</div>
</body>
</html>