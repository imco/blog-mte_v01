<form action='<?php echo home_url( '/' ); ?>' method='GET' accept-charset='utf-8' class='general-search' id='general-search'>
	<p class='button-frame'>
	<input name='s' id='name-input' type='text' value='<?php the_search_query() ?>' placeholder="<?php echo get_search_query() == "" ? "Busca una nota o tema" : get_search_query(); ?>" />
	<input type='submit' class='integrated' value='' />
	<span class='icon sprites'></span>
	</p>
</form>
