<?php get_header(); ?>

<main role="main" id="main-content">


	<?php
	if (have_posts()) : while (have_posts()) : the_post();
	?>

			<article>
				<header>
					<h2><a href="<?php the_permalink(); // affiche un lien vers l'article (en détail / la page de l'article) 
									?>"><?php the_title(); // affiche le titre
										?></a></h2>
					<figure>
						<?php the_post_thumbnail(); // affiche l'image mise en avant 
						?>
						<figcaption class="visually-hidden">Random image 1</figcaption>
					</figure>
				</header>
				<main>
					<?php the_excerpt(); // affiche l'extrait 
					?>
				</main>
				<footer>
					<span>Par <a href=""><?php the_author(); // affiche le nom de l'auteur 
											?></a> le <?php echo get_the_date(); // affiche la date de publication 
														?> dans <?php the_category(); // affiche une liste des catégories 
																												?></span>
					<a href="<?php the_permalink(); // affiche un lien vers l'article (en détail / la page de l'article) 
								?>">Lire la suite</a>
				</footer>
			</article>

		<?php
		// endwhile = on referme le "tant que l'on a des articles à afficher" (la boucle)
		endwhile;

	else :
		?>
		<p>Pas d'articles à afficher</p>
	<?php
	endif;
	?>

	<!-- <nav class="pagination" role="navigation" aria-label="Navigation des articles">
      <h2 class="visually-hidden">Navigation des articles</h2>
      <ul class="page-numbers">
        <li><a class="" href=""><span class="visually-hidden">Articles </span>précédents</a></li>
        <li><span aria-current="page" class="page-numbers" href=""><span class="visually-hidden">Page </span>1</span></li>
        <li><a href=""><span class="visually-hidden">Page </span>2</a></li>
        <li><a href=""><span class="visually-hidden">Page </span>3</a></li>
        <li><a href=""><span class="visually-hidden">Articles </span>suivants</a></li>
      </ul>
    </nav> -->


	<?php
	the_posts_pagination([
		'aria_label' => 'Navigation des articles', // gestion de l'attribut aria-label
		'type' => 'list', // gestion de la structure HTML
		'prev_text' => '<span class="visually-hidden">Articles </span>Précédents', // gestion du texte "Précédent"
		'next_text' => '<span class="visually-hidden">Articles </span>Suivants', // gestion du texte "Suivant"
		'before_page_number' => '<span class="visually-hidden">Page </span>' // gestion de l'intitulé des liens des pages
	]);

	?>

</main>

<?php get_footer(); ?>