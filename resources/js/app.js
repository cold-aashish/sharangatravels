import './bootstrap';
import Alpine from 'alpinejs';

// =============================
// jQuery (GLOBAL)
// =============================
import $ from 'jquery';
window.$ = window.jQuery = $;

// =============================
// Swiper (MODERN MODULE STYLE)
// =============================
import Swiper from 'swiper';
import {
    Navigation,
    Pagination,
    Autoplay,
    EffectFade,
    Controller,
    Mousewheel
} from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/effect-fade';

// enable modules
Swiper.use([
    Navigation,
    Pagination,
    Autoplay,
    EffectFade,
    Controller,
    Mousewheel
]);

// expose globally (IMPORTANT for main.js legacy usage)
window.Swiper = Swiper;

// =============================
// WOW JS
// =============================
import WOW from 'wow.js';
window.addEventListener('DOMContentLoaded', () => {
    new WOW().init();
});

// =============================
// Magnific Popup (jQuery plugin)
// =============================
import 'magnific-popup';

$(document).ready(function () {
    $('.popup-youtube, .popup-video').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
    });
});

// =============================
// Isotope
// =============================
import Isotope from 'isotope-layout';
window.Isotope = Isotope;

// =============================
// OPTIONAL: safe polyfills / utilities
// =============================
import MetisMenu from "metismenujs";
try {
    import('metismenujs').then(() => {
        $('#mobile-menu-active').metisMenu?.();
    });
} catch (e) {
    console.warn('MetisMenu failed', e);
}

try {
    import('jquery-ui');
} catch (e) {
    console.warn('jQuery UI failed');
}

try {
    import('waypoints/lib/jquery.waypoints');
} catch (e) {
    console.warn('Waypoints failed');
}

import smoothscroll from 'smoothscroll-polyfill';
smoothscroll.polyfill();

import Odometer from 'odometer';
import 'odometer/themes/odometer-theme-default.css';
window.Odometer = Odometer;

// =============================
// YOUR MAIN SCRIPT
// =============================
//import './main.js';

// =============================
// SCSS
// =============================
import '../scss/app.scss';

// =============================
// Alpine
// =============================
window.Alpine = Alpine;
Alpine.start();
