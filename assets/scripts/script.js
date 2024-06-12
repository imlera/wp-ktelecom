(function ($) {
    $(document).ready(function () {
        /*region Слайдер тарифов*/
        const domSliderRates = $('#rates .items');
        domSliderRates.owlCarousel({
            margin: 20,
            responsive: {
                0: {
                    margin: 10,
                    items: 1
                },
                600: {
                    margin: 10,
                    items: 2
                },
                1024: {
                    items: 2
                }
            }
        });
        /*endregion*/

        /*region Переключение тарифов*/
        $('#rates .item__btn input').on('change', function () {
            if (!this.checked) return;
            const index = $(this).data('rate-index');
            $(`#rates-form .form__types input[data-rate-index=${index}]`).prop('checked', true);
        });

        $('#rates-form .form__types input').on('change', function () {
            if (!this.checked) return;
            const index = $(this).data('rate-index');
            $(`#rates .item__btn input[data-rate-index=${index}]`).prop('checked', true);
        });
        /*endregion*/

        /*region Плавный scroll*/
        const domHtml = $('html');
        const domAdminPanel = $('#wpadminbar');
        const domSmoothLinks = $('a[href^="#"]');

        let diffSize = 0;
        if (domAdminPanel.length)
            diffSize = domAdminPanel.outerHeight();

        $.each(domSmoothLinks, (key, value) => {
            $(value).on('click', function (e) {
                e.preventDefault();
                const id = $(e.target).attr('href');
                domHtml.animate({
                    scrollTop: $(id).offset().top - diffSize
                }, 500);
            })
        });
        /*endregion*/
    });
}(jQuery));