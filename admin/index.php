<?php
   header("contnet-type:text/html;charset=utf-8");
    //开启session
    require_once "../function.php";
 	session();
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
            <div class="panel panel-default">
                <div class="panel-heading">网站开发人员:</div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>前端开发:</th>
                                <th>king</th>
                                <th>bootstrap</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                 <th scope="row">网站后台:</th>
                                 <td>king</td>
                                 <td>php开发</td>
                            </tr>
                            <tr>
                                <th scope="row">完成周期</th>
                                <td>48H</td>
                                <td>独立完成</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
		</div>
	</div>
</body>
</html>