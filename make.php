<?php include "header.php" ?>
<div class="span12">
	<ul class="thumbnails">
		<li class="span2">
		</li>
		<li class="span4">
			<ul class="nav nav-list bs-docs-sidenav affix-top">
				<li class="active">
					<a href="gaishu.php">概览</a>
				</li>
				<li class="">
					<a href="shuoming.php">制作说明</a>
				</li>
				<li class="">
					<a href="upload.php">开始制作</a>
				</li>
				<li class="">
					<a href="code.php">核心代码</a>
				</li>
				<li>
					<a href="about.php">关于</a>
				</li>
				<li class="">
					<a href="liuyan.php">留言</a>
				</li>
			</ul>
		</li>
		<li class="span6">
			<div class="table">
			<div id="zsytoo" align="center">
			<?php  $path=$_GET['path']?>
<?php
$txt =array('A','B','C','D','E','F','G','H','I','J','K');
//加载原始图像
$rawImage = ImageCreateFromGIF("$path");
//获取原始图像宽高
$rawImgWidth = ImagesX($rawImage);
$rawImgHeigh = ImagesY($rawImage);
//获取原始图像灰度
$grayData = getGrayData($rawImage,$rawImgWidth,$rawImgHeigh);
//销毁图像
ImageDestroy($rawImage);
//创建文字图像
$txtImage = ImageCreate($rawImgWidth*6,$rawImgHeigh*9);
//新图像背景色
imagecolorallocate($txtImage,0,0,0);
//获取最大灰度
for($i=0;$i<count($grayData);$i++){
$maxGrayArray[$i] = max($grayData[$i]);
}
$maxGray = max($maxGrayArray);
//设置灰度对应颜色
for($i=0;$i<$maxGray+1;$i++){
$color = 255-round(200/$maxGray)*$i+55;
$gray[$i] = imagecolorallocate($txtImage,$color,$color,$color);
}
//绘制字符
for($y=0;$y<$rawImgHeigh;$y++){
for($x=0;$x<$rawImgWidth;$x++){
Imagechar($txtImage,1,$x*6,$y*9,$txt[rand(0,10)],$gray[$grayData[$x][$y]]);
}
}
//创建最终图像
$Image = ImageCreate($rawImgWidth*10,$rawImgHeigh*10);
//拉伸图像
imagecopyresampled($Image, $txtImage, 0, 0, 0, 0,$rawImgWidth*10,$rawImgHeigh*10,$rawImgWidth*6,$rawImgHeigh*9);
//输出图像
ImagePNG($Image);
//销毁图像
ImageDestroy($Image);/*
获取灰度值
*/
function getGrayData($mImage,$mImgWidth,$mImgHeigh){
for($mY=0;$mY<$mImgHeigh;$mY++){
for($mX=0;$mX<$mImgWidth;$mX++){
$mRGB = Imagecolorat($mImage, $mX, $mY);
$mR = ($mRGB >> 16) & 0xFF;
$mG = ($mRGB >> 8) & 0xFF;
$mB = $mRGB & 0xFF;;
$mGrayData[$mX][$mY] = ($mR * 19595 + $mG * 38469 + $mB * 7472) >> 16;
}
}
return $mGrayData;
}
?>            

			
			
			
				<hr>
				<p align="center">
				<a class="btn btn-primary" href="upload.php">重选</a> <a class="btn" href="">下载</a>
				</p>
			</div>
			</div>
		</li>
	</ul>
</div>
<?php include "footer.php" ?>