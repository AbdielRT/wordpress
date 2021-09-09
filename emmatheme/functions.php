<?php 

// ajoute ce que le theme peut supporter, ici le nom du site
function montheme_supports()
{
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('menus');
	register_nav_menu('navigation', 'En tête du menu');
	register_nav_menu('footer', 'Bas de page');

}

// ajoute le css bootstrap au theme
function montheme_register_assets()
{
	//enregistre le style et le script
	wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css');
	wp_register_style('style-css', get_stylesheet_uri());
	wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', [], false, true); //[] =pas de dependance, false = pas de numero de version et true = script chargé dans le footer
	//permet d'utiliser le style et le script
	wp_enqueue_style('bootstrap');
	wp_enqueue_style('style-css');
	wp_enqueue_script('bootstrap');
}

// changer le separateur du titre de la page
function montheme_title_separator()
{
	return '|';
}

// filter les elements qui composent le titre: retire la tagline, ici 'Just an another WordPress site', et ajoute le 'Emma site'
function montheme_document_title_parts($title)
{
	unset($title['tagline']);
	$title['demo'] = 'Emma site';
	return $title;
}

// fonction qui change les classes de la bar nav
function montheme_li_class($classes)
{
    $classes = [];
    $classes[] = 'nav-item';

    return $classes;
}

// fonction qui change les attributs de la bar nav
function montheme_link_class($attr)
{
    $attr['class'] = 'nav-link';

    return $attr;
}

// set la taille de l'image 
add_image_size('banner', 1200, 300, true);

add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'montheme_register_assets');
add_filter('document_title_separator', 'montheme_title_separator');
add_filter('document_title_parts', 'montheme_document_title_parts');
// application d'un filtre pour les classes li de la navbar
add_filter('nav_menu_css_class', 'montheme_li_class');
// application d'un filtre pour les classes a de la navbar
add_filter('nav_menu_link_attributes', 'montheme_link_class');












