<?php include ("conn.php");  ?>
<h4 align="center">留言板</h4><hr>
<form action="write.php" method="post">
姓名:<input type="text" name="username"/>*
邮箱:<input type="text" name="email"/><br>
评论:<textarea name="message" id="con" cols="70%" rows="10"></textarea>*
<img src="em/0.gif" onclick='inserttag("[em0","]");' /> 
<img src="em/1.gif" onclick='inserttag("[em1","]");' />
<img src="em/2.gif" onclick='inserttag("[em2","]");' />
<img src="em/3.gif" onclick='inserttag("[em3","]");' />
<img src="em/4.gif" onclick='inserttag("[em4","]");' />
<img src="em/5.gif" onclick='inserttag("[em5","]");' /> 
<img src="em/6.gif" onclick='inserttag("[em6","]");' />
<img src="em/7.gif" onclick='inserttag("[em7","]");' />
<img src="em/8.gif" onclick='inserttag("[em8","]");' />
<img src="em/9.gif" onclick='inserttag("[em9","]");' /><br>
<input id="submit" type="submit" name="sub" value="提交留言"/>
</form> 	
<table>
<?php
	function get_ubb($str) 
		{
			$str = preg_replace("/(\[)em(.*?)(\])/i", "<img src=\"em/\\2.gif\" />", $str);
			return $str;
		}
	$sql="select * from list order by id desc";//生成倒序遍历的数组，让留言倒序输出
	$query=mysql_query($sql);
	while($rs=mysql_fetch_array($query))
		{
			echo"<n>".$rs['user']."</n>"."丨". $rs['email']."丨"."<m>". $rs['time']." </m>"."<br>". get_ubb($rs['content'])."<hr>";
		}
?>
</table>
<script>
function inserttag(topen,tclose){
var themess = document.getElementById('con');//编辑对象
themess.focus();
if (document.selection) {//如果是否ie浏览器
var theSelection = document.selection.createRange().text;//获取选区文字
//alert(theSelection);
if(theSelection){
document.selection.createRange().text = theSelection = topen+theSelection+tclose;//替换
}else{
document.selection.createRange().text = topen+tclose;
}
theSelection='';

}else{//其他浏览器

var scrollPos = themess.scrollTop;
var selLength = themess.textLength;
var selStart = themess.selectionStart;//选区起始点索引，未选择为0
var selEnd = themess.selectionEnd;//选区终点点索引
if (selEnd <= 2)
selEnd = selLength;

var s1 = (themess.value).substring(0,selStart);//截取起始点前部分字符
var s2 = (themess.value).substring(selStart, selEnd)//截取选择部分字符
var s3 = (themess.value).substring(selEnd, selLength);//截取终点后部分字符

themess.value = s1 + topen + s2 + tclose + s3;//替换

themess.focus();
themess.selectionStart = newStart;
themess.selectionEnd = newStart;
themess.scrollTop = scrollPos;
return;
}
}
</script>