<?php 
function custom_excerpt_length( $length ) {
	return 40;
}
add_theme_support( 'post-thumbnails' );
add_filter( 'excerpt_length','custom_excerpt_length',999);
add_image_size('home-size',260,9999,false);
add_image_size('blog-size',596,9999,false);
function custom_the_content(){
	$attachments = get_children(array('post_parent' => $post->ID,
	'post_status' => 'inherit',
	'post_type' => 'attachment',
	'post_mime_type' => 'image',
	'order' => 'ASC',
	'orderby' => 'menu_order ID'));
	$contentdom = new DOMDocument;
	$contentdom->encoding = 'utf-8';
	$contentdom->loadHTML(utf8_decode(get_the_content()));
	$imgs = $contentdom->getElementsByTagName('img');
	foreach($attachments as $att_id => $attachment) {
		$image=wp_get_attachment_image($attachment->ID, 'blog-size', false);
		$largedom = new DOMDocument;

		$largedom->loadHTML($image);
		$largeimgs = $largedom->getElementsByTagName('img');
		$largeimg = $largeimgs->item(0);
		$full_img=wp_get_attachment_image($attachment->ID, 'full-size', false);
		$fulldom = new DOMDocument;

		$fulldom->loadHTML($full_img);
		$fullimgs = $fulldom->getElementsByTagName('img');
		$fullimg = $fullimgs->item(0);
		foreach ($imgs as $img){
			if( strpos($img->getAttribute('src'),$fullimg->getAttribute('src')) !== false) {
				$img->setAttribute('src', $largeimg->getAttribute('src'));
				$img->setAttribute('width', $largeimg->getAttribute('width'));
				$img->setAttribute('height', $largeimg->getAttribute('height'));
			}
		}
	}
	$html = nl2br($contentdom->saveHTML());
	echo $html;
}

function shorten_url($url){
		//include 'ApiHootSuite.php';
		require_once 'ApiHootSuite.php';
		$hootSuite = new ApiHootSuite('AiJQogmkItjGluMOum9GD');
		$shortUrl = $hootSuite->shorten($url);
		return $shortUrl['results']['shortUrl'];
    
}

function custom_the_time($time){
	$time = get_the_time($time);
	$month = array('January','February','March','April','May','June','July','August','September','October','November','December');
	$mes = array('enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre');
	return str_replace($month,$mes,$time);
}
?>
