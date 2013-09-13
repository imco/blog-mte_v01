<?php
	/*
		Template Name: blog
	*/
 get_header(); 
 ?>
<div class='blog container'>
	<div class='column left'>
	<?php while (have_posts()) : the_post(); ?>
		<div class='post'>
			<h1 class='title'>
			<a href='<?php the_permalink() ?>'><?php the_title() ?></a></h1>
			<h2 class='info'><?=the_author_meta('user_nicename')?> |
				<span class='date'><?php the_time('jS. M. Y'); ?></span>
					
			</h2>

			<p>
				<?php the_post_thumbnail(0,array(
					'alt' => 'post name',
				));?>
			<?php if(is_single()) 
				the_content();
			      else
				the_excerpt(); ?> 
			</p>
			<?php include 'share.php' ?>
			<div class='clear'></div>
			<div class='shadow'></div>
		</div>
		<?php endwhile;?>
	</div>
	<div class='column right'>
		<h1>NOTAS RECIENTES</h1>

		<ul>

		<?php query_posts('orderby=date&showposts=10');
		while (have_posts()) : the_post(); ?>
			<li><a href='<?php the_permalink() ?>'><?php the_title() ?></a></li>
		<?php endwhile;?>
		</ul>
	</div>
	<div class='clear'></div>
</div>
<?php get_footer(); ?>
