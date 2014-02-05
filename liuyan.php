<?php include"header.php" ?>
<div class="span12">
	<ul class="thumbnails">
		<li class="span2">
		</li>
		<li class="span4">
			<ul class="nav nav-list bs-docs-sidenav affix-top">
				<li>
					<a href="index.php">概览</a>
				</li>
				<li>
					<a href="shuoming.php">制作说明</a>
				</li>
				<li>
					<a href="upload.php">开始制作</a>
				</li>
				<li>
					<a href="code.php">核心代码</a>
				</li>
				<li>
					<a href="about.php">关于</a>
				</li>
				<li class="active">
					<a href="liuyan.php">留言</a>
				</li>
			</ul>
		</li>
		<li class="span8">
			<div class="table">	
				<div style="overflow: auto;display: block;width: 620px;height: inherit;">
					<?php include "list.php" ?>	
				</div>
			</div>
		</li>
	</ul>
</div>
<?php include"footer.php" ?>