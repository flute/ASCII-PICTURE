<?php
	include ("conn.php");
	$user = $_POST['username'];
	$email = $_POST['email'];
	$content = $_POST['message'];
	$time = date('Y年m月d日H:i',time());
	if($_POST['email']=="")$email = "****************";
	if($_POST['message']!=""&&$_POST['username']!="")
    	{
			if($_POST['sub'])
    			{
 					$sql="insert into list(id,user,email,content,time)"." values(NULL,'$user','$email','$content','$time')";
					 mysql_query($sql);
 				}
    	}
?>
<meta http-equiv="Refresh" content="0;url=liuyan.php">


