<?php
    header("contnet-type:text/html;charset=utf-8");
    require_once "function.php";
    require_once "config.php";

    db_localhost($db_localhost,$db_name,$db_user,$db_pass);  //获取数据库连接函数

    //获取选择数据库函数;
    db_select($db_name);

    //验证码函数
    number();

   //接受数据
  	$title = $_POST['title'];
  	$title = htmlentities($title);
  	$content = $_POST['content'];
  	$content = htmlentities($content);
  	$addtime = date("Y-m-d");
    $captcha = $_POST['captcha'];

//对数据进行验证
    if($title == '' ||$content == ''){
      echo "<script>
            alert('标题或者内容不能为空,请输入内容！');
              window.location.href='add.php';
              </script>";
          exit;
      }

   //验证码验证和标题和内容是否为空
    if($captcha){
        session_start();
         if($title == "" || $content == ""){
           echo "<script>alert('标题或者内容不能为空,请输入内容！');window.location.href='add.php';</script>";
              exit;
         }else{
          if(strtolower($captcha)==$_SESSION['captcha']){
            echo "";
          }else{
            echo "<script>alert('验证码错误');window.location.href='add.php';</script>";
              exit;
          }
         }
    }

  //处理首位空格
  $title=trim($title);
  $content=trim($content);

  // //连接数据库
  // //
  // $con=@mysql_connect("localhost","root","");

  //  if(!$con){
  //  echo "<script>alert('连接数据库失败，请检查账号密码！');
  //        window.location.href='add.php';
  //  </script>";
  //  exit;
  //  }else{
  //    echo "";
  //  }
  
  //  //选择数据库
  //  mysql_select_db("message");

   //设置数据库编码
   mysql_query("set names utf8");

   //准备sql语句
   $sql = "insert into mes_info values(null,'{$title}','{$content}','{$addtime}')";

   //发送sql语句
   $res = mysql_query($sql);

   //判断插入数据是否成功！
   if(!$res){
      echo "<script>alert('添加失败！');
      window.location.href='add.php';</script>";
   }else{
      echo "<script>alert('添加成功！')
      window.location.href='index.php';</script>";
   }

   //关闭数据库资源
   mysql_close($con);
?>