<?php
    $conn=mysqli_connect("47.101.148.244","root","Imars123","iamsure");
    if (mysqli_connect_errno())
    {echo "link wrong: " . mysqli_connect_error();}
    //mysql_query("SET NAMES utf8");//解决中文乱码问题
    $imgData = $_POST["imgData"];
    $ip = $_SERVER['REMOTE_ADDR'];
	//插入数据到数据库 
	$sql = "UPDATE `imgs` SET `img` = '$imgData' WHERE `class` = 1";
	//mysql_query() 函数执行一条 MySQL 查询。SELECT，SHOW，EXPLAIN 或 DESCRIBE 都需要用这个函数执行
	$conn->query($sql);
    echo "success";
?>
