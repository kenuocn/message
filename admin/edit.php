<?php
	header("contnet-type:text/html;charset=utf-8");
    require_once "../function.php";
    require_once "../config.php";

    session(); //session函数

    db_localhost($db_localhost,$db_name,$db_user,$db_pass);  //获取数据库连接函数

    //获取选择数据库函数;
    db_select($db_name);

	$id=$_GET['id'];

	mysql_query("set names utf8");

   	$sql="select * from mes_info where id = {$id}";  //准备带id条件的sql语句.

   	$res=mysql_query($sql);  //发送带id条件的sql语句.


   	//var_dump($res);

   	$rew=mysql_fetch_assoc($res);  //

   
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>管理</title>
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
				<form role="form" action="update.php" method="post">
				  	<input type="hidden" name="id" value="<?php echo $id;?>">
					  <div class="form-group">
					    <label>留言主题</label>
					    <input type="text" class="form-control" name="title" value="<?php echo $rew['title'];?>">
					  </div>
					  <div class="form-group">
					    <label>留言内容</label>
					   <textarea class="form-control" rows="10" name="content"><?php echo $rew['content'];?></textarea>
					  </div>
					  <input type="submit" class="btn btn-default" value="发表">
				</form>
		  </div>
		</div>
	</div>
</body>
</html>


