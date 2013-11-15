<?php $share = '';
$share .= '<div class="share-bt bl">
	<div class="social">
		<div class="btns">';
			/*
			$urlFb = $this->shorten_url($url."#facebook");
			$urlTwitter = $this->shorten_url($url."#twitter");
			*/
			
			$urlFb = shorten_url(get_permalink()."#facebook");
			$urlTwitter = shorten_url(get_permalink()."#twitter");
			$urlMail = shorten_url(get_permalink()."#mail");
			$title = str_replace('#','%23',get_the_title());
			$description = get_the_excerpt();
			$description = str_replace('excerpt','',$description);
			$url_logo = '';
			$images = get_children( 'post_type=attachment&post_mime_type=image&post_parent='.get_the_ID());
			if (!empty($images)){
				foreach($images as $attachment_id => $attachment ){
					//$url_logo = wp_get_attachment_image($attachment_id,'home-size');
					$url_logo=wp_get_attachment_url($attachment_id);

					break 1;
				}
			}
			if($url_logo == '')
				$url_logo = get_bloginfo( 'template_directory' )."/img/home/logo.png";
			$share .= "
			<a href='http://www.facebook.com/sharer/sharer.php?u=".$urlFb."' class='share-face' target='_blank' >
				  </a>

				<div class='tweet'>
				<a href='http://twitter.com/home?status=".$title." ".$urlTwitter." por @mejoratuescuela' target='_blank' >
				  <span class='twitter-icon'></span>
				</a>
				</div>
			<a href='mailto:?subject=".$title."&amp;body=".$title."\n".$description.": ".$urlMail."  \nwww.MejoraTuEscuela.org' class='share-face mail'  target='_blank' ></a>
		</div>
	</div>
	<a href='#' class='button-frame'>
		<span class='bt-share button-efect'>
			<img src='".get_bloginfo( 'template_directory' )."/img/compartir/compartir.png' alt='share' />
			Compartir
		</span>
	</a>
</div><div class='clear'></div>";

