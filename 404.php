<?php get_header(); ?>
	<h1><?php _e("Page non trouvée","rapid"); ?></h1>
	<p><?php _e("La page demandée","rapid"); ?>
		<?php 
		    $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
			echo $url;
		?><?php _e(", n'existe pas.","rapid"); ?></p>
	<h5><?php _e("Ce que vous pouvez faire:","rapid"); ?></h5>
	<ol>
		<li><?php _e("Revenir à la page d'accueil ","rapid"); ?><a href="<?php echo home_url(); ?>"><?php echo home_url(); ?></a></li>
		<li><?php _e("Utiliser le moteur de recherche","rapid"); ?></li>
	</ol>
	<h5><?php _e("Il se peut que:","rapid"); ?></h5>
	<ol>
		<li><?php _e("Votre bookmark/favori est périmé","rapid"); ?></li>
		<li><?php _e("Vous avez utilisé un moteur de recherche qui a un lien périmé pour ce site","rapid"); ?></li>
		<li><?php _e("Vous avez introduit une adresse incorrecte","rapid"); ?></li>
		<li><?php _e("Vous n'avez pas accès à cette page","rapid"); ?></li>
		<li><?php _e("Une erreur est survenue pendant l'exécution de la requête.","rapid"); ?></li>
	</ol>
<?php get_footer(); ?>