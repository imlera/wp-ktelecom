<?php
/**
 * Функции и определения
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package K-Telecom
 */

use JetBrains\PhpStorm\NoReturn;

if ( ! function_exists( 'ktelecom_setup' ) ):
	/**
	 * Устанавливает настройки темы по умолчанию и регистрирует поддержку различных функций WordPress
	 * @return void
	 */
	#[NoReturn] function ktelecom_setup(): void {
		$theme_domain = wp_get_theme()->get( 'TextDomain' );

		/* Ссылки на RSS-каналы сообщений и комментариев по умолчанию в заголовок */
		add_theme_support( 'automatic-feed-links' );

		/* Поддержка миниатюр */
		add_theme_support( 'post-thumbnails' );

		/* Базовая HTML5 разметка по умолчанию для форм поиска и комментариев */
		add_theme_support( 'html5', [
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		] );

		/* Текстовые домены перевода */
		load_theme_textdomain( $theme_domain, get_template_directory() . '/languages' );

		/* Пользовательские меню */
		register_nav_menus( [
			'header' => __( 'Меню шапки', $theme_domain ),
			'footer' => __( 'Меню подвала', $theme_domain )
		] );
	}
endif;

add_action( 'after_setup_theme', 'ktelecom_setup' );

#region Include scripts and styles
if ( ! function_exists( 'ktelecom_scripts' ) ):
	#[NoReturn] function ktelecom_scripts(): void {
		$theme         = wp_get_theme();
		$theme_domain  = $theme->get( 'TextDomain' );
		$theme_version = $theme->get( 'Version' );

		wp_enqueue_script( 'owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', ['jquery'], '2.3.4', true );
		wp_enqueue_script( "$theme_domain-script", ktelecom_get_script_uri('script.js'), ['jquery'], $theme_version, true );
	}
endif;

add_action( 'wp_enqueue_scripts', 'ktelecom_scripts' );

if ( ! function_exists( 'ktelecom_styles' ) ):
	#[NoReturn] function ktelecom_styles(): void {
		$theme         = wp_get_theme();
		$theme_domain  = $theme->get( 'TextDomain' );
		$theme_version = $theme->get( 'Version' );

		wp_enqueue_style("$theme_version-style", get_stylesheet_uri(), [], $theme_version);
		wp_style_add_data("$theme_version-style", 'rtl', 'replace');

		if ( is_singular() && comments_open() && get_option('thread_comments') )
			wp_enqueue_script('comment-reply');

		wp_enqueue_style('owl-carousel', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css", [], 'all');
		wp_enqueue_style("$theme_domain-blocks", ktelecom_get_style_uri('styles.css'), [], 'all');
		wp_enqueue_style("$theme_domain-structure", ktelecom_get_style_uri('structure/structure.css'), [], 'all');
		wp_enqueue_style("$theme_domain-blocks", ktelecom_get_style_uri('blocks.css'), [], 'all');
	}
endif;

add_action( 'wp_enqueue_scripts', 'ktelecom_styles' );
#endregin

#region Getter assets URI
if ( ! function_exists( 'ktelecom_get_assets_uri' ) ):
	function ktelecom_get_assets_uri( ?string $pathname = null ): string {
		return get_template_directory_uri() . "/assets/$pathname";
	}
endif;

if ( ! function_exists( 'ktelecom_get_script_uri' ) ):
	function ktelecom_get_script_uri( string $pathname ): string {
		return ktelecom_get_assets_uri( "scripts/$pathname" );
	}
endif;

if ( ! function_exists( 'ktelecom_get_style_uri' ) ):
	function ktelecom_get_style_uri( string $pathname ): string {
		return ktelecom_get_assets_uri( "styles/$pathname" );
	}
endif;

if ( ! function_exists( 'ktelecom_get_image_uri' ) ):
	function ktelecom_get_image_uri( string $pathname ): string {
		return ktelecom_get_assets_uri( "images/$pathname" );
	}
endif;

if ( ! function_exists( 'ktelecom_get_icon_uri' ) ):
	function ktelecom_get_icon_uri( string $pathname ): string {
		return ktelecom_get_image_uri( "icons/$pathname" );
	}
endif;

if ( ! function_exists( 'ktelecom_get_picture_uri' ) ):
	function ktelecom_get_picture_uri( string $pathname ): string {
		return ktelecom_get_image_uri( "pictures/$pathname" );
	}
endif;
#endregion