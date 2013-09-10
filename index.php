<?php
	/*
		Template Name: blog
	*/
 get_header(); 
 ?>
<div class='blog container'>
	<div class='column left'>
	<?php //for($p=0;$p<2;$p++) { ?>
	<?php while (have_posts()) : the_post(); ?>
		<div class='post'>
			<h1 class='title'>
			<a href='<?php the_permalink() ?>'><?php the_title() ?></a></h1>
			<h2 class='info'><?=the_author_meta('user_nicename')?> |
				<span class='date'><?php the_time('jS. M. Y'); ?></span>
					
			</h2>

			<p>
				<?php //$this->print_img_tag('schoolchildren.png'); ?>
				<?php the_post_thumbnail(0,array(
					'class' => 'noste',
					'alt' => 'post name',
				));?>
			<?php if(is_single()) 
				the_content();
			      else
				the_excerpt(); ?> 
			</p>
			<div class='share-bt bl'>
				<div class='social'>
					<div class='btns'>
						<a href='#' class='share-face' 
				 	 	onclick="
						      window.open(
				            		'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 
					          	'El perfil', 
						       	'width=626,height=436'); 
							 return false;">
						  </a>
		
						<div class='tweet'>
							<span class='twitter-icon'></span>
							 <a href='https://twitter.com/share' class='twitter-share-button' data-lang='en' data-text='Blog title' data-via='mejoratuescuela'>
							  </a>
						</div>
						  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</div>
				</div>
				<a href='#' class='button-frame'>
					<span class='bt-share'>
						<?php //$this->print_img_tag('compartir/compartir.png');?>
						Compartir
					</span>
				</a>
			</div>
			<div class='clear'></div>
			<div class='shadow'></div>
		</div>
		<?php endwhile;?>
	</div>
	<div class='column right'>
		<h1>NOTAS RECIENTES</h1>

		<ul>

		<?php query_posts('cat=-3&id=1');
		while (have_posts()) : the_post(); ?>
			<li><a href='<?php the_permalink() ?>'><?php the_title() ?></a></li>
		<?php endwhile;?>
		</ul>
	</div>
	<div class='clear'></div>
</div>
<?php get_footer(); ?>
