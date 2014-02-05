<?php  $path=$_GET['path'];
if(pathinfo($path,PATHINFO_EXTENSION)==("gif"||"jpeg"||"gif")){
$txt =array('A','B','C','D','E','F','G','H','I','J','K');
//加载原始图像
if(pathinfo($path,PATHINFO_EXTENSION)=="gif")
$rawImage = ImageCreateFromGIF("$path");
else if(pathinfo($path,PATHINFO_EXTENSION)=="png")
$rawImage = ImageCreateFromPNG("$path");
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
//定义文件头
header('Content-type: image/png');
//输出图像
ImagePNG($Image);
//销毁图像
ImageDestroy($Image);
/*
获取灰度值
*/
}
else echo"fbfdb";
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