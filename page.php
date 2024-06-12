<?php
/**
 * Шаблон для отображения всех страниц
 * Это шаблон, который отображает все страницы по умолчанию.
 *
 * @package WordPress
 * @subpackage K-Telecom
 * @since K-Telecom 1.0
 */

get_header();

while ( have_posts() ):
	the_post();
	get_template_part( 'template-parts/content', 'page' );
endwhile;

get_footer();