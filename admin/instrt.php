<?php
	header("contnet-type:text/html;charset=utf-8");
    
    require_once "../function.php";
    require_once "../config.php";

    //获取数据库连接函数
    db_localhost($db_localhost,$db_name,$db_user,$db_pass);  

    //获取选择数据库函数;
    db_select($db_name);

    mysql_query("set names utf8");


    $title=$_POST['title'];

    $content=$_POST['content'];

    $addtime=date("Y.m.d H.i.s");

    $sql="insert into mes_info values(null,'{$title}','{$content}','{$addtime}')";

    $res=mysql_query($sql);


     if($res){
     	echo "<script>alert('添加成功!');window.location.href='add.php';</script>";
     }else{
     	echo "<script>alert('添加失败!');window.location.href='add.php';</script>";
     }




?>