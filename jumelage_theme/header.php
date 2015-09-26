<!DOCTYPE html>
<html>
<head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <?php wp_head(); ?>
</head>
<body>
    <div class="global"><!-- a fermer dans le footer-->   

		<header class="bird-box"><!-- Images pour le parallax -->
			<div class="logo"></div>
			<div class="fore-bird"></div>
			<div class="back-bird"></div>
		</header>

	<div id="menupara"></div>
	<div id="siteweb_band">
		<header>
		<!-- Affiche le menu -->
			<div id="page">
				<div id="header"></div>
				<div id="menu"  role="navigation">
					<?php //nav_menu=> affiche menu
					wp_nav_menu(array('theme_location' => 'header'));
					?>
					<!-- Boutons Contact s'inscrire et se connecter -->
					<noscript><a href="index.php/contact"></noscript>
					<input class="lightbox button-success florian-button"   id="lbx-contact" type="button" value="Contact" name="contact" />
					<noscript> </a> </noscript>	

					<noscript><a href="index.php/connexion"></noscript>
					<input class="button-success florian-button"   type="button" value="Se connecter" name="connexion" />
					<noscript> </a> </noscript>	

					<noscript><a href="index.php/inscription"></noscript>
					<input class="lightbox button-success florian-button"  id="lbx-inscription" type="button" value="S'inscrire" name="inscription" />
					<noscript> </a> </noscript>	
				</div>
			</div>
			<div class="backdrop"></div>	
			<div class="box">
			<div class="close">x</div>
				<div id="inscriptionform">
				 <?php echo do_shortcode('[cjm_inscription_form]'); ?>
		    	</div>
		    	<div id="contactform">
				 <?php echo do_shortcode('[cjm_contact_form]'); ?>
		    	</div>
		    </div>

		</header>
	</div>



