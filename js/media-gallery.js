// Popups for the YouTube Channel and Events & News sections (homepage + full pages).
(function ($) {
    "use strict";

    $(function () {
        if (!$.fn.magnificPopup) return;

        $(".js-yt-popup").magnificPopup({
            type: "iframe",
            mainClass: "mfp-fade",
            removalDelay: 160,
            preloader: false,
            fixedContentPos: true,
        });

        $(".js-ev-gallery").each(function () {
            $(this).magnificPopup({
                delegate: "a.ev-item",
                type: "image",
                gallery: { enabled: true, tCounter: "%curr% of %total%" },
                image: { titleSrc: "title" },
                mainClass: "mfp-fade",
            });
        });
    });
})(jQuery);
