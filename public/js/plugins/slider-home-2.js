$(document).ready(function () {
    "use strict";
    var tpj = jQuery;

    var revapi8;
    tpj(document).ready(function () {
        if (tpj("#slider_2").revolution == undefined) {
            revslider_showDoubleJqueryError("#slider_2");
        } else {
            revapi8 = tpj("#slider_2").show().revolution({
                sliderType: "standard",
                jsFileLocation: "../../revolution/js/",
                sliderLayout: "fullscreen",
                fullScreenOffsetContainer: "",
                delay: 9000,
                navigation: {
                    arrows: { enable: false },
                    bullets: {
                        style: "custom",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: false,
                        delay: 1500,
                        delay_mobile: 1500,
                        direction: "vertical",
                        h_align: "right",
                        v_align: "center",
                        space: 0,
                        v_offset: 50,
                        h_offset: 200,
                    },

                },
                responsiveLevels: [1920, 991, 767, 481],
                gridwidth: [1170, 768, 481, 480],
                gridheight: [745, 745, 745, 745]

            });
        }
    }); /*ready*/
});

