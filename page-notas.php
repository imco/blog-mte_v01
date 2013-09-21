<?php
/*
	Template Name: notas
*/
$posts = get_posts('category_name=portada&posts_per_page=-1&orderby=date');
$i = 0;
foreach($posts as $post) {
	setup_postdata($post);?>
	<div class='white-box column'>
		<?php 
		$images = get_children( 'post_type=attachment&post_mime_type=image&post_parent='.get_the_ID());
		if (!empty($images)){
			foreach($images as $attachment_id => $attachment ){
				echo "<a href='".get_permalink()."' >".wp_get_attachment_image($attachment_id,'home-size').'</a>';
				break 1;
			}
		}
		?>
		<h2><a href='<?php the_permalink() ?>' ><?php the_title() ?></a></h2>
		<hr/>
		<p><?php the_excerpt(); ?> </p>
				<p><a href='<?php the_permalink() ?>' >Leer más</a></p>
	</div>
<?php } ?>
