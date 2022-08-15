<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mining2022
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="<?=get_stylesheet_uri()?>?v=<?=filemtime(get_template_directory() . '/style.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/responsive.css?v=<?=filemtime(get_template_directory() . '/css/responsive.css')?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header>
        <div class="wrapper">
            <div class="header-logo"><a href="/">Mining Org <br> Team</a></div>
            <?php wp_nav_menu( array(
                'menu' => 'Menu1',
                'container' => 'ul',
                'menu_class' => 'nav-bar',
            )); ?>

            <div class="menu-burger">
                <svg width="36" height="18" viewBox="0 0 36 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="36" height="2" rx="1" fill="#FFD550"/>
                    <rect y="8" width="36" height="2" rx="1" fill="#FFD550"/>
                    <rect y="16" width="36" height="2" rx="1" fill="#FFD550"/>
                </svg>
            </div>
        </div>
        <div class="nav-window">
            <div class="nav-list">
                <?php wp_nav_menu( array(
                    'menu' => 'Menu1',
                    'container' => 'ul',
                    'menu_class' => 'nav-list',
                )); ?>
            </div>

            <div class="nav-close">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.57635 1.2014L12.0003 9.6254L20.3897 1.23607C20.5367 1.07958 20.7138 0.954389 20.9104 0.868013C21.107 0.781637 21.319 0.73585 21.5337 0.733398C21.9934 0.733398 22.4343 0.916017 22.7593 1.24108C23.0844 1.56614 23.267 2.00702 23.267 2.46673C23.2711 2.67924 23.2316 2.89034 23.1511 3.08706C23.0707 3.28378 22.9508 3.46199 22.799 3.61073L14.323 12.0001L22.799 20.4761C23.0847 20.7556 23.2522 21.134 23.267 21.5334C23.267 21.9931 23.0844 22.434 22.7593 22.7591C22.4343 23.0841 21.9934 23.2667 21.5337 23.2667C21.3128 23.2759 21.0924 23.239 20.8865 23.1585C20.6806 23.0779 20.4937 22.9554 20.3377 22.7987L12.0003 14.3747L3.59368 22.7814C3.44722 22.9327 3.27226 23.0534 3.07888 23.1367C2.88551 23.22 2.67755 23.2642 2.46701 23.2667C2.00731 23.2667 1.56642 23.0841 1.24136 22.7591C0.916299 22.434 0.73368 21.9931 0.73368 21.5334C0.729639 21.3209 0.769067 21.1098 0.849545 20.9131C0.930023 20.7163 1.04985 20.5381 1.20168 20.3894L9.67768 12.0001L1.20168 3.52407C0.916001 3.24458 0.748482 2.86611 0.73368 2.46673C0.73368 2.00702 0.916299 1.56614 1.24136 1.24108C1.56642 0.916017 2.00731 0.733398 2.46701 0.733398C2.88301 0.738598 3.28168 0.906732 3.57635 1.2014Z" fill="#FFD550"/>
                </svg>
            </div>
        </div>
    </header>