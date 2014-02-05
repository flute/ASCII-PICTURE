<?php include"header.php" ?>
<div class="span12">
	<ul class="thumbnails">
		<li class="span2">
		</li>
		<li class="span4">
			<ul class="nav nav-list bs-docs-sidenav affix-top">
				<li class="">
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
			<hr><strong>温馨提示：</strong><span>上传的图片小于100K时效果最好，如果你要制作的图片大于150K，建议您使用电脑自带的画图功能将其缩小后再试，这样会更佳！</span><br>
			<strong>Ps:</strong><span>目前仅支持格式为png/gif的图片，您可以使用电脑自带的画图功能将图片转化为png/gif格式后再试！带来的不便请您谅解~</span>
			<hr>
				<div id="form">
					<form method="post" action="show.php" enctype="multipart/form-data">
						<label>	请选择要上传的图片：</label><input type="file" name="photo" id="file"><br>
						<input type="submit" name="upload" id="button" value="上传">
					</form>	
				</div>
			</div>
		</li>
	</ul>
</div>
<?php include"footer.php" ?>