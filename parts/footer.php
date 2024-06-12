<?php
$ar_socials = [
	[ 'href' => 'https://www.instagram.com/', 'title' => 'Instagram', 'icon' => 'inst.svg' ],
	[ 'href' => 'https://www.youtube.com/', 'title' => 'Youtube', 'icon' => 'youtube.svg' ],
	[ 'href' => 'https://vk.com/', 'title' => 'VK', 'icon' => 'vk.svg' ],
];
?>
<footer id="footer"
        class="padding-bottom-20 padding-bottom-m-28 padding-left-50 padding-left-m-10 padding-right-50 padding-right-m-10 margin-top-auto grid grid-columns-container justify-content-center">
    <div class="margin-top-40 margin-top-m-20 padding-top-20 padding-top-m-10 padding-bottom-20 flex align-items-center align-items-m-start justify-content-between gap-28 border-0 border-solid border-silver border-top-1 border-bottom-1 border-bottom-m-0">
        <div class="flex flex-s-column align-items-center align-items-m-start gap-60 gap-m-5">
            <a href="<?= get_home_url() ?>" title="<?= get_bloginfo() ?>">
                <img src="<?= ktelecom_get_icon_uri( 'logo.svg' ) ?>" alt="Лого <?= get_bloginfo() ?> (подвал)"
                     width="147" height="36" loading="lazy">
            </a>

            <p class="font-size-14 line-height-21 color-silver">
                © 2018–2022 ООО «К-Телеком»
            </p>
        </div>

		<?php if ( $ar_socials ): ?>
            <div class="flex align-items-center gap-10 gap-m-5">
				<?php foreach ( $ar_socials as $ar_social ): ?>
                    <a href="<?= $ar_social['href'] ?>" title="<?= $ar_social['title'] ?>" rel="nofollow"
                       target="_blank">
                        <img src="<?= ktelecom_get_icon_uri( "socials/$ar_social[icon]" ) ?>"
                             alt="<?= $ar_social['href'] ?>" width="40" height="40" loading="lazy">
                    </a>
				<?php endforeach; ?>
            </div>
		<?php endif; ?>
    </div>
</footer>