<?php 
/******************/
/* 版权：科诺设计 */
/*   QQ：3522322  */
/*   公共函数库   */
 header("contnet-type:text/html;charset=utf-8");

 function db_localhost($db_localhost,$db_name,$db_user,$db_pass){
	$con=@mysql_connect("{$db_localhost}","{$db_user}","{$db_pass}");
	 if(!$con){
	 	echo "<script>alert('数据库连接失败！请检查账号信息');</script>;";
	 	exit;
	  }else{
	 	echo "";
	  }
}


 function db_select($db_name){
 	mysql_select_db("{$db_name}");
 }

 function captcha(){ //干扰线;干扰点函数
     
 	session_start();

 	for($i=0;$i<200;$i++){
 	 		$pointcolor=imagecolorallocate($image,rand(50,200),rand(50,200),rand(50,200));
 	 		imagesetpixel($image,rand(1,99),rand(1,29),$pointcolor);
 	}

 	for($i=0;$i<3;$i++){
 		
 		$linecolor = imagecolorallocate($image,rand(80,220),rand(80,220),rand(80,220));

 		imageline($image,rand(1,99),rand(1,29),rand(1,99),rand(1,29),$linecolor);
 	}

 	header("content-type:image/png");

 	imagepng($image);

 	imagedestroy($image); //回收资源

 }

  function number(){  //随机数函数

 	$image = imagecreatetruecolor(100,30);

 	$bgcolor=imagecolorallocate($image,255,255,255);

 	imagefill($image,0,0,$bgcolor);

 	$captch_code='';

 	 for($i=0;$i<4;$i++){
 	 	
 	 	$fontsize=6;

 	 	$fontcolor=imagecolorallocate($image,rand(0,120),rand(0,120),rand(0,120));

 	 	$data='abcdefghijkmnpqrseuvwxy3456789';

 	 	$fontcontent=substr($data,rand(0,strlen($data)),1);

 	 	$captch_code.=$fontcontent;

 	 	$x = ($i*100/4) + rand(5,10);

 	 	$y = rand(5,10);

 	 	imagestring($image,$fontsize,$x,$y,$fontcontent,$fontcolor);

 	 }

 	 $_SESSION['captcha']=$captch_code;
  }

  function session(){
  	session_start();
  	if(empty($_SESSION['username'])){
   		echo "你没权限访问,请从后台登陆页面进入后台!";
   		header("Refresh:1,url=login.php");
   		exit;
   	}
  }
?>