<?php
/**
 * Шаблон шапки темы
 * Отображает весь раздел <head> и все, что связано с <div id="wrapper">
 *
 * @package WordPress
 * @subpackage K-Telecom
 * @since K-Telecom 1.0
 */

$ar_wrapper_classnames = [ 'wrapper' ];
if ( is_page() ) $ar_wrapper_classnames[] = 'page';
if ( is_single() ) $ar_wrapper_classnames[] = 'post';
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php wp_title( '|', true, 'right' ); ?> <?= get_bloginfo(); ?></title>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper"
         class="<?= join(' ', $ar_wrapper_classnames) ?> min-width-full min-height-full flex flex-column">
        <?php get_template_part('parts/header'); ?>
