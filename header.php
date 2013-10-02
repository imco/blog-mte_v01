<!DOCTYPE html>
 <html lang="es">
 <head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/img/home/favicon.ico" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_directory' ); ?>/css/reset.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_directory' ); ?>/css/stickyFooter.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_directory' ); ?>/css/main.css" />
	<title>Mejora tu Escuela</title>
	<?php $url = 'http://www.mejoratuescuela.org'?>
	<?php 
	$url_logo = '';
	if(is_single()){
		$post = get_post(get_the_ID());
		setup_postdata($post);
		$images = get_children( 'post_type=attachment&post_mime_type=image&post_parent='.get_the_ID());
		if (!empty($images)){
			foreach($images as $attachment_id => $attachment ){
				//$url_logo = wp_get_attachment_image($attachment_id,'home-size');
				$url_logo=wp_get_attachment_image_src($attachment_id,'home-size');
				$url_logo = $url_logo[0];
				break 1;
			}
		}

		$url_c = get_permalink();
		$description = get_the_excerpt();
		$description = str_replace('excerpt','',$description);
	}else{
		$description = 'MejoraTuEscuela.org es una plataforma que busca promover la participación ciudadana para transformar la educación en México';
		$url_c = get_bloginfo('url');
	
	}
	if($url_logo == ''){
		$url_logo = get_bloginfo( 'template_directory' )."/img/logof.png";
		
	}
	$ext  = substr($url_logo,-3);
	echo "<meta property='og:image:type' content='image/{$ext}'>";
	echo "<meta property='og:image' content='{$url_logo}' />";
	echo "<meta property='og:description' content='{$description}' />";
	echo "<link rel='canonical' href='{$url_c}' />";
	?>
	<!--<meta property="og:image:width" content="250">
	<meta property="og:image:height" content="220">-->
	
 </head>
 <body>
 	<div id="wrap"><div id="main" class="clearfix"><div id="topBackRepeat">
		<div id='header'>
			
<div class='menu blog'><div class='container'>
	<a href='<?=$url?>/' class='logo'><img src='<?php bloginfo( 'template_directory' ); ?>/img/home/logo.png' alt='home/logo.png'  /></a>
	<a href='<?=$url?>/compara/'>CONOCE
		<span class='icon sprites'></span>
		<span class='circle'></span>
		<span class='decor'>1</span>
	</a>
	<a href='<?=$url?>/compara/escuelas/'>COMPARA
		<span class='icon sprites'></span>
		<span class='circle'></span>
		<span class='decor'>2</span>
	</a>
	<a href='<?=$url?>/califica-tu-escuela/califica/'>CALIFICA
		<span class='icon sprites'></span>
		<span class='circle'></span>
		<span class='decor'>3</span>
	</a>
	<a href='<?=$url?>/mejora'>MEJORA
		<span class='icon sprites'></span>
		<span class='circle'></span>
		<span class='decor'>4</span>
	</a>
	<!--
	<a href='/resultados-nacionales'>Resultados Nacionales</a>
	<a href='/peticiones'>Peticiones</a>
	-->
	<div class='submenu'>
		<div class='social'>
			<a href='https://twitter.com/mejoratuescuela' class='twitter sprites' target='_blank' >
			</a>
			<a href='https://www.facebook.com/MejoraTuEscuela' class='fb sprites' target='_blank' ></a>
			<div class='clear'></div>
		</div>
		<!--<form method='get' action='/compara/#resultados' accept-charset='utf-8' ><input type='text' name='term' placeholder='Buscar' /><input type='hidden' name='search' value='true' />
			<input type='submit' value='' />
			<div class='clear'></div>
		</form>-->
		<a href='<?=$url?>/quienes-somos'>¿Quiénes somos?</a>
		<a href='<?=$url?>/preguntas-frecuentes'>Preguntas frecuentes</a>

	</div>

	<div class='clear'></div>
</div></div>

<div class="breadcrumb blog_breadcrumb">
	<ul>
		<li>
			<a href="http://www.mejoratuescuela.org">
				<img src='<?php bloginfo( 'template_directory' ); ?>/img/breadcrumb/home.png' alt='breadcrumb/home.png'  />			</a>
		</li>

				<li>
									<a class='current' href="/">Blog</a>
									
			</li>
				
	</ul>
</div>
<div class='perfil container'><form action='<?=$url?>/compara#resultados' method='get' accept-charset='utf-8' class='general-search' id='general-search'>
	<p class='button-frame'>
		<input name='term' id='name-input' type='text' placeholder='Busca tu escuela' value='' />
		<input type='submit' class='integrated' value='' />
		<span class='icon sprites'></span>
		<input type='hidden' name='search' value='true' />
	</p>
	<p class='adv-search'><a href='/compara/' >Búsqueda avanzada
		<span class='icon sprites'></span>
	</a></p>
 </form>
<div class="decorations simple">
	<hr />
	<hr />
	<hr />
	<hr />
	<hr />	
	<img src='<?php bloginfo( 'template_directory' ); ?>/img/home/palomita.png' alt='home/palomita.png'  />	<img src='<?php bloginfo( 'template_directory' ); ?>/img/home/birrete_small.png' alt='home/birrete_small.png'  /></div>

</div>
<div class="decorations perfil">
<hr />
<hr />
<hr />
</div>
		</div>
		<div id='content'>
