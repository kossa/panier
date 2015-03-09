$.noConflict();
jQuery(document).ready(function($) {

    'use strict'

    var devis = $('#demande-devis');

    /*
    |------------------------------------------------------------------------------------
    | Click on active/disable button
    |------------------------------------------------------------------------------------
    */
    devis.find("span.btn").click(
        function(){
            var _this = $(this),
                ulParent = _this.closest("ul");

            if (_this.hasClass('active')) {
                return;
            };

            // Remove the current active class
            ulParent.find('.active').removeClass('active');

            // Add active class
            _this.addClass("active");
            return;
        }
    );

/*
|------------------------------------------------------------------------------------
| Functions
|------------------------------------------------------------------------------------
*/

});