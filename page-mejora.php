<?php
/*
	Template Name: mejora
*/
$posts = get_posts('category_name=mejora&posts_per_page=-1&orderby=date');
$column = array('left','center','right');
$content = array(0=>'',1=>'',2=>'');
?>
<?php 
$control = 0;
$content = '';
foreach($posts as $post) {
	setup_postdata($post);
	$content[$content%3] .= "<div class='mejorar'>";
	$images = get_children( 'post_type=attachment&post_mime_type=image&post_parent='.get_the_ID());
	if (!empty($images)){
		foreach($images as $attachment_id => $attachment ){
			$content[$content%3] .= '<h1>'.wp_get_attachment_image($attachment_id,'home-size');
			$content[$content%3] .= "<a href='".wp_get_attachment_url($attachment_id)."'><span>Descargar</span></a></h1>";
			break 1;

		}
	}
	$content[$control++%3] .= '<a href='.get_permalink().'><h1>'.get_the_title().'</h2></a><hr/><p></p></div>';
}
?>
<div class='column left'><?=$content[0]?></div>
<div class='column center'><?=$content[1]?></div>
<div class='column right'><?=$content[2]?></div>

