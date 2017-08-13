<?php
 header("contnet-type:text/html;charset=utf-8");
    
    require_once "../function.php";
    require_once "../config.php";

    //获取数据库连接函数
    db_localhost($db_localhost,$db_name,$db_user,$db_pass);  

    //获取选择数据库函数;
    db_select($db_name);

    session(); //session函数

    mysql_query("set names utf8"); //设置数据库编码

    $sql="select * from mes_info";//准备查询mes_info表sql语句

    $res=mysql_query($sql); //发送mes_info语句到数据库

    $rews=array();

    	while($rew=mysql_fetch_assoc($res)){  //用mysql_fetch_assoc函数遍历$res的内容
    		$rews[]=$rew;
    	}

    //var_dump($rews);
    //
    // foreach($rews as $k=>$v){  //foreach遍历$v[]的内容 []是下标，方便去值;
    	 
    // 	 $v["title"];
    // 	 $v["addtime"];
    // }
    // 
    $i=0;
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

			<div class="panel panel-warning">
				<div class="panel-heading">
					留言管理
				</div>
			    <div class="panel-body">
			   		<table class="table table-bordered">
					  <tr>
					  	<th>序号</th>
					  	<th>标题</th>
					  	<th>留言时间</th>
					  	<th>操作</th>
					  </tr>
					<?php foreach($rews as $k=>$v):?>
					  <tr>
					  	<td><?php $i++; echo $i;?></td>
					  	<td><?php echo $v["title"] ;?></td>
					  	<td><?php echo $v["addtime"] ;?></td>
					  	<td><a href="edit.php?id=<?php echo $v['id'];?>">修改</a>
							<a href="delete.php?id=<?php echo $v['id'];?>" onclick="return confirm('确定要删除吗？');" >删除</a>
					  	</td>
					  </tr>
					<?php endforeach;?>
					</table>
			    </div>
			    <div class="panel-footer">
					<ul class="pager">
					  	<li class="previous"><a href="#">&larr; 首页</a></li>
					  	<li><a href="#">上一页</a></li>
  						<li><a href="#">下一页</a></li>
					  	<li class="next"><a href="#">末页 &rarr;</a></li>
					</ul>
			    </div>
			</div>
		  </div>
		</div>
	</div>
</body>
</html>
