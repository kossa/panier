$.noConflict();
jQuery(document).ready(function($) {

    'use strict'

    var devis = $('#demande-devis');

   devis.find("a").click(
        function(){
            var _this = $(this),
                ulParent = _this.closest("ul");

            if (_this.hasClass('active')) {
                _this.removeClass('active');
                return false;
            };

            // Remove the current active class
            ulParent.find('.active').removeClass('active');

            // Add active class
            _this.addClass("active");
            return false;
        }
    );
});