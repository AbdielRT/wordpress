<!-- transforme en page les posts pour un affichage entier -->
<?php get_header(); ?>

	<?php if (have_posts()) { ?>
			<?php while(have_posts()){
				the_post(); ?>

				<h1><?php the_title(); ?></h1>
<!-- 				affiche l'image avec son url,plus facile pour definir le style de l'image -->
				<p>
					<img src="<?php the_post_thumbnail_url(); ?>" alt="" style="width: 100%; height: auto;">
				</p>
				<?php 	the_content(); 

			}
		} 
		?>

<?php get_footer(); ?>