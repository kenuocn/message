<?php
 	header("contnet-type:text/html;charset=utf-8");
 	require_once "function.php";
 	require_once "common.php";
    require_once "config.php";

/***********************分页制作*******************************/
	//页码，当前页
	$page = isset($_GET['page']) ? $_GET['page'] : 1;
	//总的记录数量
	$total = mysql_num_rows($res);
	//每页显示的数量
	$pagesize = 3;
	//末页
	$maxpage = ceil($total/$pagesize);
	//偏移量
	$offset = ($page-1)*$pagesize;
	//sql语句
	$sql1 = "select * from mes_info order by id desc limit {$offset},{$pagesize}";

	//发送sql
	$res1 = mysql_query($sql1);

	$row1=array();

	while($row=mysql_fetch_assoc($res1)){
		$row1[]=$row;
	}
?>
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
		      <li><a href="add.php">发布留言</a></li>
		    </ul>
		  </div><!-- /.navbar-collapse -->
		</nav>
		<div class="row">
		  <div class="col-md-3">
		  	<div class="panel panel-primary">
				<div class="panel-heading">
					最新内容
				</div>
				<div class="panel-body">
				  	<ul>

				  	<?php foreach($rews as $k=>$v):?>
				  		<li>
				  		<?php 
							if(mb_strlen($v['title'])>10){
 								echo mb_substr($v['title'],0,10,'utf-8')."...";
 							}else{
 								echo $v['title'];
 								};?>
				  		</li>
					<?php endforeach;?>
				  	</ul>
				</div>
			</div>
		  </div>
		  <div class="col-md-9">
			<?php foreach($row1 as $key=>$v): ?>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<span class="glyphicon glyphicon-star"></span>
					<?php echo $v['title'];?>
				</div>
				<div class="panel-body" style="height:120px;">
				  	<?php echo $v['content'];?>
				</div>
				<div class="panel-footer">
					<?php echo $v['addtime'];?>
				</div>
			</div>
			<?php endforeach;?>
			<ul class="pager">
			  <li class="previous"><a href="index.php?page=1">&larr; 首页</a></li>
			  <li><a href="index.php?page=<?php echo $page<=1 ? $page : $page-1;?>">上一页</a></li>
			  <li><a href="index.php?page=<?php echo $page>=$maxpage ? $page : $page+1;?>">下一页</a></li>
			  <li class="next"><a href="index.php?page=<?php echo $maxpage;?>">末页 &rarr;</a></li>
			</ul>
			</div>
		</div>
	</div>
</body>
</html>