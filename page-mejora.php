<?php
/*
	Template Name: mejora
*/
$posts = get_posts('category_name=mejora&posts_per_page=100&orderby=date');
$column = array('left','center','right');
?>
<?php 
$control = 0;
$content = array(0=>'',1=>'',2=>'');
foreach($posts as $post) {
	setup_postdata($post);
	$content .= "<div class='mejorar'>";
	$images = get_children( 'post_type=attachment&post_mime_type=image&post_parent='.get_the_ID());
	if (!empty($images)){
		foreach($images as $attachment_id => $attachment ){
			$content .= '<h1>'.($attachment_id,'home-size');
			$content .= "<a href='".wp_get_attachment_url($attachment_id)."'><span>Descargar</span></a></h1>";
			break 1;
		}
	}
	$content .= '<a href='.get_permalink().'><h2>'.get_the_title().'</h2></a><hr/><p></p></div>';
}
?>
<?=$content?>