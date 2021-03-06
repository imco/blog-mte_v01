<?php
	/**
	* Template Name: blog
	*/
 get_header(); 
 ?>
<div class='blog container'>
	<div class='column left'>
	<?php while (have_posts()) : the_post(); ?>
		<div class='post'>
			<h1 class='title'>
			<a href='<?php the_permalink() ?>'><?php the_title() ?></a></h1>
			<h2 class='info'>
				<span class='date'><?=custom_the_time('j \d\e\ F \d\e\ Y  '); ?></span>
					
			</h2>

			<div class='content-post'>

			<?php custom_the_content(); ?> 
			</div>
			<?php include 'share.php'; echo $share; ?>
			<div class='clear'></div>
			<div class='shadow'></div>
		</div>
		<?php endwhile;?>
	</div>
	<div class='column right'>
		<h1>NOTAS RECIENTES</h1>

		<ul>

		<?php query_posts('orderby=date&showposts=20');
		while (have_posts()) : the_post(); ?>
			<li><a href='<?php the_permalink() ?>'><?php the_title() ?></a></li>
		<?php endwhile;?>
		</ul>
	</div>
	<div class='clear'></div>
</div>
<?php get_footer(); ?>
