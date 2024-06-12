<?php
/**
 * Шаблон для отображения 404 страниц (не найден)
 *
 * @package WordPress
 * @subpackage K-Telecom
 * @since K-Telecom 1.0
 */

get_header();
?>

<main class="error padding-left-50 padding-left-m-10 padding-right-50 padding-right-m-10 grid grid-columns-container justify-content-center">
	<div class="flex flex-column gap-20">
        <h1 class="font-weight-700 font-size-30 line-height-45">
			<?php ktelecom_display_translate_text( 'Ошибка 404' ); ?>
        </h1>
        <p class="font-weight-400 font-size-14 line-height-18">
			<?php ktelecom_display_translate_text( 'Страницы не существует или она временно недоступна' ); ?>
        </p>
    </div>
</main>

<?php
get_footer();