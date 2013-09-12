<div class="share-bt bl">
	<div class="social">
		<div class="btns">	
			<?php 			
			/*
			$urlFb = $this->shorten_url($url."#facebook");
			$urlTwitter = $this->shorten_url($url."#twitter");
			*/
			$urlFb = '';
			$urlTwitter = '';
			$title = '';
			$description = '';
			?>
			<a href="http://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?=$urlFb?>&p[images][0]=<?=$url_logo?>&p[title]=<?=$title?>&p[summary]=<?=$description?>" class='share-face' target='_blank' >
				  </a>

				<div class="tweet">
				<a href="http://twitter.com/home?status=<?=$title." ".$urlTwitter," por @mejoratuescuela"?> " target='_blank' >
				  <span class="twitter-icon"></span>
				</a>
				</div>
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
