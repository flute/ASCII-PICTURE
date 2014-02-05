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
				<li class="active">
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
				<li>
					<a href="liuyan.php">留言</a>
				</li>
			</ul>
		</li>
		<li class="span8">
			<div class="table">
				<div id="myCarousel" class="carousel slide"> 
    <ol class="carousel-indicators"> 
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li> 
       <li data-target="#myCarousel" data-slide-to="1"></li> 
                  <li data-target="#myCarousel" data-slide-to="2"></li> 
    </ol> 
      <div class="carousel-inner"> 
                  <div class="item active"> 
                    <img src="img/1.jpg" alt=""> 
                    <div class="carousel-caption"> 
                      <h4>原图</h4> 
                      <p>这是原图哦~也就是你上传的图片。</p> 
                    </div> 
                  </div> 
        <div class="item"> 
        <img src="img/2.jpg" alt=""> 
            <div class="carousel-caption"> 
               <h4>生成的ASCII风格图像</h4> 
               <p>这就是生成的ASCII风格图像，很帅吧？想不想拥有一张自己的ASCII头像呢？快来试试吧~</p> 
            </div> 
        </div> 
        <div class="item"> 
        <img src="img/3.jpg" alt=""> 
            <div class="carousel-caption"> 
              <h4>你还在等什么？</h4> 
              <p>come on！</p> 
            </div> 
        </div> 
      </div> 
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a> 
        <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a> 
</div> 
    <script>     
    $('.carousel').carousel() 
    </script>
						
					
			</div>
		</li>
	</ul>
</div>
<?php include"footer.php" ?>