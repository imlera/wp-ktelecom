<?php
/**
 * Блок начального экрана
 *
 * @package WordPress
 * @subpackage K-Telecom
 * @since K-Telecom 1.0
 */

$ar_data = [
	'title' => 'Экономия нервов и денег — интернет К-Телеком',
	'image' => [
		'desk' => [
			'name'   => 'main-screen.png',
			'width'  => 872,
			'height' => 629,
		],
		'mob'  => [
			'name'   => 'mob-main-screen.png',
			'width'  => 453,
			'height' => 346,
		],
	],
	'list'  => [
		'5 тарифов для многоквартирных и 4 для частных домов',
		'безлимит подключенных устройств',
		'комфортная поддержка 24/7',
	],
	'link'  => [
		'href'  => '#rates',
		'title' => 'Подробнее',
	]
];
?>

<div id="main-screen"
     class="padding-left-50 padding-left-m-10 padding-right-50 padding-right-m-10 grid grid-columns-container justify-content-center align-items-center background-color-cultured">
    <div class="content padding-top-84 padding-top-m-12 padding-bottom-88 padding-bottom-m-12">
        <div class="position-relative flex flex-m-column gap-10">
            <div class="width-full max-width-500 flex flex-column gap-30 gap-m-20 position-relative z-index-1">
                <div class="flex flex-column gap-10">
					<?php if ( $ar_data['title'] ): ?>
                        <h1 class="max-width-400 display-block font-weight-700 font-size-30 font-size-m-20 line-height-45 line-height-m-30">
							<?= $ar_data['title'] ?>
                        </h1>
					<?php endif; ?>

					<?php if ( $ar_data['list'] ): ?>
                        <div class="padding-left-10 padding-left-m-8 flex flex-column gap-4">
							<?php foreach ( $ar_data['list'] as $datum ): ?>
                                <p class="flex gap-10 gap-m-8 font-family-open-sans font-size-16 font-size-m-12 line-height-32 line-height-m-24 color-gray">
                                    <span>&#x2022;</span>
                                    <span><?= $datum ?></span>
                                </p>
							<?php endforeach; ?>
                        </div>
					<?php endif; ?>
                </div>

				<?php if ( $ar_data['link'] ): ?>
                    <a href="<?= $ar_data['link']['href'] ?>" title="<?= $ar_data['link']['title'] ?>"
                       class="width-full max-width-200 max-width-m-full padding-12 flex align-items-center justify-content-center color-white font-size-14 font-size-m-12 line-height-21 line-height-m-18 background-color-pink border-radius-5">
						<?= $ar_data['link']['title'] ?>
                    </a>
				<?php endif; ?>
            </div>

			<?php if ( $ar_data['image'] ): ?>
                <div class="content__image width-full height-full align-self-center padding-left-m-20 padding-right-m-20 position-absolute position-m-relative z-index-0">
					<?php if ( $ar_data['image']['desk'] ): ?>
                        <img src="<?= ktelecom_get_picture_uri( $ar_data['image']['desk']['name'] ) ?>"
                             alt="Фоновое изображение" width="<?= $ar_data['image']['desk']['width'] ?>"
                             height="<?= $ar_data['image']['desk']['height'] ?>" loading="lazy"
                             class="width-full height-full object-fit-contain display-m-none">
					<?php endif; ?>

					<?php if ( $ar_data['image']['mob'] ): ?>
                        <img src="<?= ktelecom_get_picture_uri( $ar_data['image']['mob']['name'] ) ?>"
                             alt="Фоновое изображение дя мобильной версии"
                             width="<?= $ar_data['image']['mob']['width'] ?>"
                             height="<?= $ar_data['image']['mob']['height'] ?>" loading="lazy"
                             class="width-full height-full object-fit-contain display-none display-m-block">
					<?php endif; ?>
                </div>
			<?php endif; ?>
        </div>
    </div>
</div>