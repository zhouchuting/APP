<?php
 
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





// $con=mysqli_connect("localhost","root","root","DBname"); 
// if (!$con)
//   {
//   die('Could not connect: ' . mysqli_connect_error());
//   }
 
 
// mysqli_query($con,"set names utf8");

$title = $_POST['title'];
$cate = $_POST['cate'];
$account = $_POST['account'];
$sdate = $_POST['sdate'];
 
if (!empty($_POST['title'])&&!empty($_POST['cate'])&&!empty($_POST['account'])&&!empty($_POST['sdate']))
{
	$sql="INSERT INTO cashbook (title, cate, account,sdate) VALUES ('$title','$cate','$account','$sdate')";
	$result = mysqli_query($conn,$sql);
	if (!$result)
	  {  
		die('Error: ' . mysqli_connect_error());
	 }
 
}
 
 
 
 
  // $sql1 = "SELECT * FROM person";
  // $result1 = mysqli_query($con,$sql1);
  
  mysqli_close($conn);
  
?>
 

 
 
<
 -->