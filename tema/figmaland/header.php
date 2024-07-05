<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Figmaland
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<main>
  <header class="header">
        <div class="container">
            <!--Mobile menu-->
            <div class="navigation mobile-menu">
                <div class="navigation__nav">
                    <div class="navigation__logo">
                        <?php the_custom_logo();?>
                    </div>
                    <div class="navigation__control">
                        <button class="navigation__button" aria-label="menu" aria-expanded="false" aria-controls="menu-list">
                            <span class="navigation__icon" aria-hidden="true">&nbsp;</span>
                        </button>
                    </div>
                </div>
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'menu-1',
                        'container' => 'nav',
                        'container_class' => 'navigation__menu',
                        'container_id' => 'menu-list',
                        'items_wrap' => '<ul class="navigation__list">%3$s</ul>',
                        'link_before' => '<li class="navigation__list-item"><a href="#" class="navigation__link">',
                        'link_after' => '</a></li>'
                    ) );
                ?>
                
            </div>
            <!--END Mobile menu -->


            <div class="flex desk-menu">
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'menu-1',
                        'container' => 'nav',
                        'container_class' => 'header__nav',
                        'items_wrap' => '<ul class="header__nav--list">%3$s</ul>'
                    ) );
                    ?>

                <div class="header__logo">
                   <?php the_custom_logo();?>
                </div>
                  <?php
                    wp_nav_menu( array(
                        'theme_location' => 'menu-2',
                        'container' => 'nav',
                        'items_wrap' => '<ul class="header__social">%3$s</ul>',
                        'link_before' => '<li>',
                        'link_after' => '</li>'
                    ) );
                    ?>

                                         
          </div>
    </header>
