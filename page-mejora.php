<?php
/*
	Template Name: mejora
*/
$posts = get_posts('category_name=mejora&orderby=date');
$column = array('left','center','right');
?>
<?php 
$control = 0;
foreach($posts as $post) {
	setup_postdata($post); ?>
	<div class='column <?=$column[$control%3]?>'>
		<div class='mejorar'>
			<h1>
		<?php 
		$images = get_children( 'post_type=attachment&post_mime_type=image&post_parent='.get_the_ID());
		if (!empty($images)){
			foreach($images as $attachment_id => $attachment ){
				echo wp_get_attachment_image($attachment_id,'full-size');
				echo "<a href='".wp_get_attachment_url($attachment_id)."'>
					<span>Descargar</span>
					</a>
			</h1>";
				break 1;
			}
		}
		?>
			<h2><?=get_the_title();?></h2>
			<hr />
			<p></p>
		</div>
	</div>
<?php $control++;	
} ?>
