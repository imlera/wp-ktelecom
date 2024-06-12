<header id="header"
        class="padding-top-22 padding-bottom-22 padding-top-m-8 padding-bottom-m-8 padding-left-50 padding-left-l-10 padding-right-50 padding-right-l-10 grid grid-columns-container justify-content-center">
    <div class="flex align-items-center justify-content-between gap-60">
        <a href="<?= get_home_url() ?>" title="<?= get_bloginfo() ?>">
            <img src="<?= ktelecom_get_icon_uri( 'logo.svg' ) ?>" alt="Лого <?= get_bloginfo() ?>" width="147"
                 height="36" loading="lazy">
        </a>

        <button class="display-none display-l-block" title="Меню">
            <img src="<?= ktelecom_get_icon_uri( 'burger.svg' ) ?>" alt="Меню" width="40" height="40" loading="lazy">
        </button>
    </div>
</header>