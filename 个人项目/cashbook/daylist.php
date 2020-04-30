<?php
//header("Content-type: text/html; charset=utf8");


   $dbhost = 'localhost:3306';  //mysql服务器主机地址
   $dbuser = 'root';      //mysql用户名
   $dbpass = '';//mysql用户名密码

   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   if(! $conn )
   {
     die("Could not connect: " . mysqli_error());
   }
   // echo "success";

   // 设置编码，防止中文乱码
mysqli_select_db($conn,'stiterm');
mysqli_query($conn , "set names utf8");



	// $sql="SELECT * FROM `cashbook`";//根据传入的参数查询数据库中的数据
  $date = $_GET['day'];
  $sql = "select * from cashbook where `sdate` = '$date' ";
 	$result = mysqli_query($conn,$sql);
	if (!$result)
	  {  
		die('Error: ' . mysqli_connect_error());
	 }
  //fetch_all查询所有行

	$data = mysqli_fetch_all($result,MYSQLI_ASSOC); 


  
 	echo json_encode($data);//返回二维数组形式的值供小程序端用

 	mysqli_close($conn);

?>
