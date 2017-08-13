<?php 
 require_once "../function.php";
 session();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>留言板</title>
	<link rel="stylesheet" href="../bs/css/bootstrap.min.css">
	<script src="../bs/js/jquery.min.js"></script>
	<script src="../bs/js/bootstrap.min.js"></script>
	<script src="../bs/js/holder.min.js"></script>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-inverse" >
		  <div class="navbar-header">
		    <a class="navbar-brand"  href="index.php">管理</a>
		    <a class="navbar-brand"  href="add.php">发布留言</a>
		  </div>
		</nav>
		<div class="row">
		  <div class="col-md-3">
		  	<div class="list-group">
			  <a href="index.php" class="list-group-item active">
			    管理列表
			  </a>
			  <a href="list.php" class="list-group-item">留言管理</a>
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
					  	<input type="submit" class="btn btn-default" value="发表">
					</form>
			</div>
		</div>
	</div>
</body>
</html>