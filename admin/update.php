<?php

    require_once "../function.php";//引入函数库
    require_once "../config.php";//引入数据库配置信息
 	
 	$title=$_POST['title']; //接受表单

 	$content=$_POST['content'];

 	$addtime=date("Y.m.d H:i:s");

 	$id=$_POST['id'];  //接受帖子的唯一id

    db_localhost($db_localhost,$db_name,$db_user,$db_pass);  //获取数据库连接函数

    //获取选择数据库函数;
    db_select($db_name);

    mysql_query("set names utf8");//设置发送过去的编码

    $sql="update mes_info set title='{$title}',content='{$content}',addtime='{$addtime}' where id='{$id}'"; //准备sql语句

    //var_dump($sql);
    //
     $res=mysql_query($sql);  //发送sql语句

      if($res){
      	echo "<script>alert('修改成功!');window.location.href='list.php';</script>"; 
      }else{
      	echo "<script>alert('修改失败!');window.location.href='edit.php?id={$id}';</script>";
      }   //修改失败,自动返回根据id返回到修改页面

?>