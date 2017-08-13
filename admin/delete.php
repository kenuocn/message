<?php
	header("contnet-type:text/html;charset=utf-8");
    
    require_once "../function.php";
    require_once "../config.php";

    db_localhost($db_localhost,$db_name,$db_user,$db_pass);  //获取数据库连接函数

    //获取选择数据库函数;
    db_select($db_name);

    $id=$_GET['id'];

    $sql="delete from mes_info where id='{$id}'";

    $res=mysql_query($sql);

     if($res){
     	echo "<script>alert('删除成功!');window.location.href='list.php';</script>";
     }else{
     	echo "<script>alert('删除失败!');window.location.href='list.php';</script>";
     }


?>