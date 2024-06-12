<?php
/**
 * Шаблон для отображения всех отдельных записей
 *
 * @package WordPress
 * @subpackage K-Telecom
 * @since K-Telecom 1.0
 */

get_header();

while ( have_posts() ):
	the_post();
	get_template_part( 'template-parts/content', get_post_type() );
endwhile;

get_footer();