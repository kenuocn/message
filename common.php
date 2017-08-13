<?php
   header("contnet-type:text/html;charset=utf-8");
   require_once "function.php";
   require_once "config.php";
    db_localhost($db_localhost,$db_name,$db_user,$db_pass);  //获取数据库连接函数

    //获取选择数据库函数;
    db_select($db_name);
   
    // mysql_query("use $db_name");

    //数据库编码
    mysql_query("set names utf8");

    //准备sql语句
    $sql="select * from mes_info order by id desc";

    //发送sql语句
    $res=mysql_query($sql);

    // $rew = mysql_fetch_assoc ($res);

    // var_dump($rew);

    //定义一个空数组
    $rews=array();

    while($rew = mysql_fetch_assoc ($res)) {
       $rews[] = $rew;
    }
?>