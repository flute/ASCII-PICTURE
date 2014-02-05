<?php include "header.php" ?>
<div class="span12">
	<ul class="thumbnails">
		<li class="span2">
		</li>
		<li class="span4">
			<ul class="nav nav-list bs-docs-sidenav affix-top">
				<li>
					<a href="index.php">概览</a>
				</li>
				<li class="">
					<a href="shuoming.php">制作说明</a>
				</li>
				<li class="active">
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
		<li class="span8">
			<div class="table">
			<div class="zsy" align="center">
				<?php
					if(isset($_POST["upload"]))
						{
							function backImageUrl($photo)
                            {  
                            	$typearr = array("image/gif","image/png");    
  								if(!in_array($photo["type"],$typearr))
                           			{  
   										echo "<img src='img/404.png' width=620 height=360>";
										echo "<br>";
										echo "<strong>很抱歉，目前仅支持格式为png/gif的图片，您可以使用电脑自带的画图功能将图片转化为png/gif格式后再试！带来的不便请您谅解~</strong>";
										echo"</div>";
										echo"<hr>";
										echo"<p align='center'>";
										echo"<a class='btn btn-primary' href='upload.php'>重选</a>";  
 						 			 }  
  
                                else
                                	{
                                    	$suffixname = strrchr($photo["name"],'.');  
  										$s = new SaeStorage();  
 										$s->upload( 'test' ,$photo["tmp_name"].$suffixname,$photo["tmp_name"] );  
  										$erjin  = $s->read( 'test' ,$photo["tmp_name"]) ;  
 								 		 return $s->getUrl( 'test' ,$photo["tmp_name"]).$suffixname;  
                                    }
							}  
								$path = backImageUrl($_FILES["photo"]);  
								echo "<img src='$path' width=400 height=auto>";
								echo"</div>";
								echo"<hr>";
								echo"<p align='center'>";
								echo"<a class='btn btn-primary' href='upload.php'>重选</a> <a class='btn' href='post.php?path=$path' target='blank'>制作</a>";
						}
				?>
				</p>
			</div>
		</li>
	</ul>
</div>
<?php include "footer.php" ?>