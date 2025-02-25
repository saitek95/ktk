var stocksSwiper = new Swiper(".stocks .items", {
    slidesPerView: 5,
    spaceBetween: 40,
    navigation: {
        nextEl: ".stocks .swiper_next",
        prevEl: ".stocks .swiper_prev",
    },
});

var fullSwiper = new Swiper(".full_swiper_products .swiper", {
    spaceBetween: 40,
    slidesPerView: "auto",
    navigation: {
        nextEl: ".full_swiper_products .swiper_next",
        prevEl: ".full_swiper_products .swiper_prev",
    },
    breakpoints: {
        0: {
            slidesPerView: 1.8,
            spaceBetween: 20,
        },
        525: {
            slidesPerView: 2.8,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 3.8,
            spaceBetween: 40,
        },
        1400: {
            slidesPerView: 3.6,
            spaceBetween: 40,
        },
    },
});

var productImgThumbSwiper = new Swiper(".product_thumb_images", {
    spaceBetween: 20,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
});

var productImgFullSwiper = new Swiper(".product_full_images", {
    spaceBetween: 10,
    loopedSlides: 5,
    thumbs: {
        swiper: productImgThumbSwiper,
    },
});

Fancybox.bind('[data-fancybox="gallery"]', {
    //
});

$(document).on('click', '.tabs_product>ul li', function () {
    var dataId = $(this).data('id');
    var _this = $(this);
    $('.tabs_product_content>div').each(function () {
        if ($(this).data('tab-content') == dataId) {
            $(this).addClass('active');
            _this.addClass('active');
            $(this).siblings().removeClass('active');
            _this.siblings().removeClass('active');
        }
    })
})

window.addEventListener("DOMContentLoaded", function() {
    [].forEach.call( document.querySelectorAll('.phone'), function(input) {
        var keyCode;
        function mask(event) {
            event.keyCode && (keyCode = event.keyCode);
            var pos = this.selectionStart;
            if (pos < 3) event.preventDefault();
            var matrix = "+7 (___)-___-__-__",
                i = 0,
                def = matrix.replace(/\D/g, ""),
                val = this.value.replace(/\D/g, ""),
                new_value = matrix.replace(/[_\d]/g, function(a) {
                    return i < val.length ? val.charAt(i++) || def.charAt(i) : a
                });
            i = new_value.indexOf("_");
            if (i != -1) {
                i < 5 && (i = 3);
                new_value = new_value.slice(0, i)
            }
            var reg = matrix.substr(0, this.value.length).replace(/_+/g,
                function(a) {
                    return "\\d{1," + a.length + "}"
                }).replace(/[+()]/g, "\\$&");
            reg = new RegExp("^" + reg + "$");
            if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = new_value;
            if (event.type == "blur" && this.value.length < 5)  this.value = ""
        }

        input.addEventListener("input", mask, false);
        input.addEventListener("focus", mask, false);
        input.addEventListener("blur", mask, false);
        input.addEventListener("keydown", mask, false)

    });

});

$('.svg').each(function(){
    const $img = $(this);
    const imgClass = $img.attr('class');
    const imgURL = $img.attr('src');
    $.get(imgURL, function(data) {
        let $svg = $(data).find('svg');
        if(typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', imgClass+' replaced-svg');
        }
        $svg = $svg.removeAttr('xmlns:a');
        if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
            $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
        }
        $img.replaceWith($svg);
    }, 'xml');
});