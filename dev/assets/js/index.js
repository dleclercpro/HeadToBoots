import jQuery from 'jquery';
import {Shop} from '../../modules/shop/shop';
import {Banner} from '../../modules/banner/banner';

// jQuery
window.$ = window.jQuery = jQuery;

// Main
$(document).ready(() => {

    // Initialize shop
    new Shop($('.mod-shop'));

    // Initialize banner
    new Banner($('.mod-banner'));

});