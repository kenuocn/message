<?php
header("contnet-type:text/html;charset=utf-8");
    
    require_once "../function.php";
    require_once "../config.php";

    db_localhost($db_localhost,$db_name,$db_user,$db_pass);  //获取数据库连接函数

    //获取选择数据库函数;
    db_select($db_name);

    //验证码函数
    number();

    $username=isset($_POST['username'])?$_POST['username']:"";

    $password=isset($_POST['password'])?$_POST['password']:"";

    $captcha=isset($_POST['captcha']) ? $_POST['captcha'] : "";

    $password=md5($password);


 	//数据库编码
    mysql_query("set names utf8");

    $sql="select * from mes_admin where username='{$username}' and password='{$password}'";

    $res=mysql_query($sql);

    $user=mysql_fetch_assoc($res);


  
      session_start();
        if($username==""||$password==""){
          echo "<script>alert('密码不能为空');window.location.href='login.php';</script>";
          exit;
        }else{
          if($password!=$user['password']){
            echo "<script>alert('密码错误!');window.location.href='login.php';</script>";
                   exit;
          }else{
            if(strtolower($captcha)==$_SESSION['captcha']){
              //开启session
             $_SESSION['username']=$username;
             echo "<script>alert('正在跳转到后台页面!');window.location.href='index.php'</script>";
           }else{
             echo "<script>alert('验证码错误');window.location.href='login.php';</script>";
                         exit;
           }
          }
        }
  


    /*if($password!=$user['password']){
        echo "<script>alert('密码错误!');window.location.href='login.php';</script>";
         exit;
     }
    
        if($captcha){
            session_start();
            if($username==$user['username']&&$password==$user['password']){
                if(strtolower($captcha)==$_SESSION['captcha']){
                            //开启session
                             $_SESSION['username']=$username;

                            echo "<script>alert('正在跳转到后台页面!');window.location.href='index.php'</script>";
                             
                      }else{
                         echo "<script>alert('验证码错误');window.location.href='login.php';</script>";
                         exit;
                      }
                      }else{
                         echo "<script>alert('账号或密码错误');window.location.href='login.php'</script>";
                         exit;
            }
        }
        */
?>