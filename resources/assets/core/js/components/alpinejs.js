"use strict";
import Alpine from 'Alpinejs';

// Class definition
let KTAlpine = function() {
    return {
        init: function(name) {
            Alpine.start();
        }
    }
}();

// Webpack support
if (typeof module !== 'undefined' && typeof module.exports !== 'undefined') {
    module.exports = KTAlpine;
}

// On document ready
KTUtil.onDOMContentLoaded(function() {
    KTAlpine.init();
});
