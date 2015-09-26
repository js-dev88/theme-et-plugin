<?php //get_header(); ?> 

<!-- A vérifier l'utilité : contenu pas affiché sur le site -->

<!--<div id="content"> 

	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?> 

	<div class="post" id="post-<?php the_ID(); ?>"> 

			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2> 

			<p class="postmetadata">   
			<?php the_time('j F Y') ?> par <?php the_author() ?> | Cat&eacute;gorie: <?php the_category(', ') ?> | <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?> 
			<?php edit_post_link('Editer', ' &#124; ', ''); ?>   
			</p>
	
		<div class="post_content"> <?php the_excerpt(); ?>
	
		</div> 
	
	</div> 
	
	<?php endwhile; ?> <?php endif; ?> 

</div>

<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"></a></h2>

<?php get_sidebar(); ?>

<li>   
	<ul> <?php wp_register(); ?> 
		<li><?php wp_loginout(); ?></li> 

		<li>
			<a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">
				<abbr title="eXtensible HyperText Markup Language">XHTML valide</abbr>
			</a>
		</li> 

		<li>
			<a href="http://gmpg.org/xfn/">
				<abbr title="XHTML Friends Network">XFN</abbr>
			</a>
		</li> 

		<li>
			<a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress
			</a>
		</li> 

		<li>
			<a href="http://wordpress-fr.net/" title="Communauté française de WordPress et WPmu.">WordPress Francophone
			</a>
		</li> <?php wp_meta(); ?>  
 
	</ul> 
</li>

<li>
		<h2>Abonnez-vous au site web !</h2>   
	
	<ul>   
		<li>
			<a href="<?php bloginfo('rss2_url'); ?>" title="Flux RSS des articles">Flux RSS des articles
			</a>
		</li> 

		<li>
			<a href="<?php bloginfo('comments_rss2_url'); ?>" title="Flux RSS des commentaires">Flux RSS des commentaires
			</a>
		</li> 
		
	</ul> 
</li>

<li>
		<h2>Categories</h2>   

	<ul> 
			<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?> 
	</ul>
	
</li>




<?php get_footer(); ?>

</body> </html>-->
