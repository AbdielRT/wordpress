<?php get_header(); ?>

<?php
if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>

        <h1><?php the_title(); ?></h1>

        <?php the_post_thumbnail('banner'); ?>

        <?php the_content(); ?> 

<!--         Lien pour amener vers des articles -->
        <!-- <a href="<?php echo get_post_type_archive_link('post'); ?>">Voir les dernieres actualités</a> -->


<?php
    }
}
?>

<?php get_footer(); ?>