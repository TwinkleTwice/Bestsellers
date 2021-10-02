import $ from "jquery";
import 'slick-carousel';

window.$ = $;
window.jQuery = $;

$(document).ready(() => {
    sliders();
})

let sliders = () => {
    $('.materials-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        centerPadding: '100px',
    });

    $('.new-products-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        centerPadding: '100px',
    });

    $('.partners-slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        centerPadding: '100px',
    });
}
