<?php
/*
	Template Name: notas
*/
$posts = get_posts('category_name=portada&orderby=date');
foreach($posts as $post) {
	setup_postdata($post);?>
	<div class='white-box column'>
		<?php 
		$images = get_children( 'post_type=attachment&post_mime_type=image&post_parent='.get_the_ID());
		if (!empty($images)){
			foreach($images as $attachment_id => $attachment ){
				echo wp_get_attachment_image($attachment_id,'thumbnail');
				break 1;
			}
		}
		?>
		<h2><?php the_title() ?></h2>
		<hr/>
		<p><?php the_excerpt(); ?> </p>
				<p><a href='<?php the_permalink() ?>' >Leer más</a></p>
	</div>
<?php } ?>
