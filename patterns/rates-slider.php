<?php
/**
 * Блок слайдера тарифов
 *
 * @package WordPress
 * @subpackage K-Telecom
 * @since K-Telecom 1.0
 */

$ar_data = [
	'title' => 'Тарифные планы',
	'rates' => [
		[
			'title' => 'Мой клик',
			'limit' => 'до 40 Мбит/с',
			'desc'  => 'Отличный вариант для пенсионеров, выполнения определенных задач и работе с файлами различных размеров.',
			'price' => 339,
		],
		[
			'title' => 'Резвый клик',
			'limit' => '80-100 Мбит/с',
			'desc'  => 'Отличный вариант для всей семьи. Общайтесь в соцсетях и смотрите любимые фильмы и сериалы!',
			'price' => 449,
		],
		[
			'title' => 'Мой клик',
			'limit' => 'до 40 Мбит/с',
			'desc'  => 'Отличный вариант для пенсионеров, выполнения определенных задач и работе с файлами различных размеров.',
			'price' => 339,
		],
		[
			'title' => 'Мой клик',
			'limit' => 'до 40 Мбит/с',
			'desc'  => 'Отличный вариант для пенсионеров, выполнения определенных задач и работе с файлами различных размеров.',
			'price' => 339,
		]
	],
];
?>

<div id="rates"
     class="margin-top-52 margin-top-m-34 padding-left-50 padding-left-m-10 padding-right-50 padding-right-m-10 grid grid-columns-container justify-content-center align-items-center">
    <div class="flex flex-column gap-32 gap-m-20">
		<?php if ( $ar_data['title'] ): ?>
            <h2 class="font-weight-500 font-size-28 font-size-m-18 line-height-42 line-height-m-26">
				<?= $ar_data['title'] ?>
            </h2>
		<?php endif; ?>

		<?php if ( $ar_data['rates'] ): ?>
            <div class="items owl-carousel owl-theme">
				<?php foreach ( $ar_data['rates'] as $key => $ar_rate ): ?>
                    <div class="item padding-30 padding-m-20 flex flex-column gap-20 background-color-white border-radius-10">
                        <div class="flex flex-column gap-12">
                            <h3 class="font-weight-500 font-size-20 font-size-m-16 line-height-30 line-height-m-24">
								<?= $ar_rate['title'] ?>
                            </h3>

                            <div class="flex flex-column gap-5">
                                <p class="font-family-open-sans font-weight-400 font-size-14 font-size-m-10 line-height-21 line-height-m-14 color-tag-silver">
                                    Скорость интернета
                                </p>

                                <p class="font-weight-500 font-size-24 font-size-m-18 line-height-36 line-height-m-26 color-pink">
									<?= $ar_rate['limit'] ?>
                                </p>

                                <p class="font-family-open-sans font-weight-400 font-size-12 line-height-20 line-height-m-18 color-gray">
									<?= $ar_rate['desc'] ?>
                                </p>
                            </div>
                        </div>

                        <div class="item__extra margin-top-auto flex align-items-start gap-10">
                            <input type="checkbox" id="extra-service-<?= $key ?>" name="extra-service-<?= $key ?>"
                                   class="display-none">

                            <div class="width-full min-width-23 max-width-23 height-full min-height-23 max-height-23 flex align-items-center justify-content-center border-1 border-solid border-silver border-radius-2"></div>

                            <label for="extra-service-<?= $key ?>"
                                   class="font-weight-400 font-size-14 line-height-21 line-height-m-18 cursor-pointer">
                                ТВ + 100 ₽<br>
                                (пакет “Базовый”)
                            </label>
                        </div>

                        <div class="item__price flex flex-column">
                            <div class="flex align-items-center gap-10">
                                <p class="font-weight-700 font-size-40 font-size-m-24 line-height-60 line-height-m-36">
									<?= $ar_rate['price'] ?> ₽
                                </p>

                                <p class="font-family-open-sans font-weight-400 font-size-16 font-size-m-14 line-height-24 line-height-m-21 item__price__opacity">
                                    в месяц
                                </p>
                            </div>

                            <p class="font-family-open-sans font-weight-400 font-size-12 font-size-m-10 line-height-18 line-height-m-14 color-gray item__price__opacity">
                                *итоговая цена зависит от варианта оплаты и пакета ТВ при необходимости
                            </p>
                        </div>

                        <label class="item__btn width-full margin-right-m-10 color-white font-weight-500 font-size-14 font-size-m-12 line-height-21 line-height-m-18 cursor-pointer border-radius-5 overflow-hidden">
                            <input type="radio" data-rate-index="<?= $key ?>" name="slider-rate" class="display-none">

                            <span class="padding-12 padding-m-10 flex align-items-center justify-content-center background-color-pink">
                                <span class="text-transform-capitalize">выбрать</span>
                                <span class="display-m-none">тариф</span>
                            </span>

                            <span class="padding-12 padding-m-10 flex align-items-center justify-content-center background-color-blue">
                                <span class="text-transform-capitalize display-none">тариф</span>
                                <span class="text-transform-m-capitalize">выбран</span>
                            </span>
                        </label>
                    </div>
				<?php endforeach; ?>
            </div>
		<?php endif; ?>
    </div>
</div>