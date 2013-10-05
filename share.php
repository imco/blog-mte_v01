<div class="share-bt bl">
	<div class="social">
		<div class="btns">	
			<?php 			
			/*
			$urlFb = $this->shorten_url($url."#facebook");
			$urlTwitter = $this->shorten_url($url."#twitter");
			*/
			
			$urlFb = shorten_url(get_permalink()."#facebook");
			$urlTwitter = shorten_url(get_permalink()."#twitter");
			$urlMail = shorten_url(get_permalink()."#mail");
			$title = get_the_title();
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
			?>
<!--			<a href="http://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?=$urlFb?>&p[images][0]=<?=$url_logo?>&p[title]=<?=$title?>&p[summary]=<?=$description?>" class='share-face' target='_blank' >-->
			<a href="http://www.facebook.com/sharer/sharer.php?u=<?=$urlFb?>" class='share-face' target='_blank' >
				  </a>

				<div class="tweet">
				<a href="http://twitter.com/home?status=<?=$title." ".$urlTwitter," por @mejoratuescuela"?> " target='_blank' >
				  <span class="twitter-icon"></span>
				</a>
				</div>
			<a href="mailto:?subject=<?=$title?>&amp;body=<?=$description.": ".$urlMail?>" class='share-face mail'  target='_blank' ></a>
		</div>
	</div>
	<a href="#" class="button-frame">
		<span class="bt-share button-efect">
			<?php //$this->print_img_tag('compartir/compartir.png');?>
			<img src="<?php bloginfo( 'template_directory' ); ?>/img/compartir/compartir.png" alt="share" />
			Compartir
		</span>
	</a>
</div>
