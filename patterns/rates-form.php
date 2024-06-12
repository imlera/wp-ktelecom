<?php
/**
 * Блок формы
 *
 * @package WordPress
 * @subpackage K-Telecom
 * @since K-Telecom 1.0
 */

$ar_data = [
	'title'  => 'Подключиться просто!',
	'types'  => [
		'Интернет',
		'Интернет + ТВ',
		'Телефония',
		'Видеонаблюдение',
	],
	'fields' => [
		[ 'type' => 'text', 'name' => 'name', 'placeholder' => 'Имя' ],
		[ 'type' => 'tel', 'name' => 'phone', 'placeholder' => 'Номер телефона' ]
	],
];
?>

<div id="rates-form"
     class="margin-top-50 padding-left-50 padding-left-m-0 padding-right-50 padding-right-m-0 grid grid-columns-container justify-content-center align-items-center">
    <div class="padding-50 padding-bottom-86 padding-top-m-20 padding-bottom-m-20 padding-left-m-10 padding-right-m-10 flex flex-column gap-20 gap-m-10 border-radius-20 background-color-cultured">
		<?php if ( $ar_data['title'] ): ?>
            <h2 class="font-weight-500 font-size-28 font-size-m-18 line-height-42 line-height-m-26">
				<?= $ar_data['title'] ?>
            </h2>
		<?php endif; ?>

        <form action="#" class="form flex flex-column gap-20 gap-m-6">
            <div class="flex flex-column gap-20 gap-m-10">
				<?php if ( $ar_data['types'] ): ?>
                    <div class="form__types flex flex-wrap align-items-center gap-10 gap-m-5">
						<?php foreach ( $ar_data['types'] as $key => $type ): ?>
                            <label class="margin-right-m-5 flex align-items-center justify-content-center padding-top-6 padding-bottom-6 padding-left-40 padding-left-m-10 padding-right-40 padding-right-m-10 border-radius-10 border-1 border-solid border-silver cursor-pointer font-weight-400 font-size-12 line-height-18 line-height-m-16">
								<?= $type ?>
                                <input data-rate-index="<?= $key ?>" name="rate-type" type="radio" class="display-none">
                            </label>
						<?php endforeach; ?>
                    </div>
				<?php endif; ?>

                <div class="flex flex-m-column align-items-center justify-content-between gap-32 gap-m-14">
					<?php if ( $ar_data['fields'] ): ?>
                        <div class="form__fields width-full flex flex-m-column align-items-center gap-30 gap-m-10">
							<?php foreach ( $ar_data['fields'] as $ar_field ): ?>
                                <label class="width-full background-color-white border-radius-2 overflow-hidden">
                                    <input type="text" name="<?= $ar_field['name'] ?>"
                                           placeholder="<?= $ar_field['placeholder'] ?>"
                                           class="width-full display-block padding-top-12 padding-bottom-12 padding-left-24 padding-right-24 border-0">
                                </label>
							<?php endforeach; ?>
                        </div>
					<?php endif; ?>

                    <button type="submit"
                            class="form__submit width-full max-width-200 max-width-m-full padding-12 flex align-items-center justify-content-center background-color-pink border-radius-5 color-white font-weight-500 font-size-14 line-height-21">
						<?php ktelecom_display_translate_text( 'Отправить' ); ?>
                    </button>
                </div>
            </div>

            <div class="form__legally flex align-items-center gap-20 display-m-none">
                <input type="checkbox" id="legally" name="legally" class="display-none">

                <div class="width-full max-width-23 min-width-23 height-full max-height-23 min-height-23 flex align-items-center justify-content-center border-1 border-solid border-silver border-radius-2"></div>

                <label for="legally"
                       class="color-spanish-gray font-weight-400 font-size-14 line-height-21 cursor-pointer">
                    Я соглашаюсь на условия
                    <a href="#" title="Условия обработки персональных данных"
                       class="color-spanish-gray font-weight-400 font-size-14 line-height-21 text-decoration-underline">
                        обработки данных
                    </a>
                </label>
            </div>

            <p class="display-none display-m-block font-weight-400 font-size-12 line-height-18 color-spanish-gray">
				<?php ktelecom_display_translate_text( 'Нажимая кнопку “Отправить” вы соглашаетесь <br>на условия обработки данных' ); ?>
            </p>
        </form>
    </div>
</div>