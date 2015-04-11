<div id="blog-articles" class="blog-articles">
	<?php
	if(isset($_GET['new'])){
	$new = intval($_GET['new']);
	}else{
		$new = 0;
	}
	$row_first = $new ? $new : 9999999999;
	$row_query = $connect->Connect()->query("SELECT * FROM news WHERE id <= '".$row_first."' ORDER BY `id` DESC LIMIT 8");
	$counter = 1;
	while($counter<=7 && $row=mysqli_fetch_array($row_query)){
	if($counter == 1){
	}else{
	}
	if($row['contentlnk'] != NULL)
	?>
	<div class="article-wrapper">
		<a href="<?php echo BASE_URL.'blog/'.$row['id'].'/'.$url->CleanString($row['title']); ?>/" itemprop="url">
		<div class="article-image" style="background-image:url(assets/images/news/<?php echo $row['image']; ?>.jpg)">
			<div class="article-image-frame"></div>
		</div>
			<div class="article-content" itemprop="blogPost" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
				<h2 class="header-2" >
					<span class="article-title" itemprop="headline"><?php echo $row['title']; ?></span>
				</h2>
				<span class="clear"><!-- --></span>
				<div class="article-summary" itemprop="description"><?php echo $news->NewsWordLimit($row['content']); ?></div>
				<span class="clear"><!-- --></span>
				<meta itemprop="datePublished" content="2014-03-05T15:58:48Z" />
				<meta itemprop="dateModified" content="2014-03-05T15:58:48Z" />
				<meta itemprop="inLanguage" content="en-GB" />
				<meta itemprop="interactionCount" content="UserComments:0" />
				<meta itemprop="thumbnailUrl" content="<?php echo BASE_URL ?>assets/images/news/<?php echo $row['image']; ?>.jpg" />
			</div>
		</a>
		<div class="article-meta">
			<span class="publish-date" title="<?php echo $row['date']; ?>"><?php echo $news->ago(strtotime($row['date'])); ?></span>
			<a href="<?php echo BASE_URL.'blog/'.$row['id'].'/'.$url->CleanString($row['title']); ?>/#comments" class="comments-link"><?php echo $row['comments']; ?></a>
		</div>
		<span class="clear"><!-- --></span>
	</div>
	<?php
	$counter++;
	}
	?>
</div>