<?php
/**
 * Основной файл шаблона
 * Template name: Главная страница
 *
 * @package WordPress
 * @subpackage K-Telecom
 * @since K-Telecom 1.0
 */

get_header();
?>

    <main id="main" class="flex flex-column">
		<?php get_template_part('patterns/main-screen'); ?>
		<?php get_template_part('patterns/rates-slider'); ?>
		<?php get_template_part('patterns/rates-form'); ?>
    </main>

<?php
get_footer();