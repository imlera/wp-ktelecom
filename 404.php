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

<main class="main post-main flex flex-column gap-30">
    <div class="padding-left-50 padding-left-l-10 padding-right-50 padding-right-l-10 grid grid-columns-container justify-content-center align-items-center background-color-cultured">>
        <h1 class="font-weight-700 font-size-30 font-size-m-20 line-height-45 line-height-m-30">
		    <?php ktelecom_display_translate_text( 'Ошибка 404' ); ?>
        </h1>

        <p class="font-weight-400 font-size-12 line-height-18">
		    <?php ktelecom_display_translate_text( 'Страницы не существует или она временно недоступна' ); ?>
        </p>
    </div>
</main>

<?php
get_footer();