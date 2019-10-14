;(function ($) {
    var anshUp = function () {
        var options = {};
        var button = {};

        var reDraw = function () {
            if ($(window).width() > options.display.min_screen_width) {
                if ($(window).scrollTop() > 0) {
                    this.button.fadeIn(500);
                }
                else {
                    this.button.fadeOut(500);
                }
            } else {
                this.button.fadeOut(500);
            }
        };

        var initButton = function () {
            if (this.button) {
                this.button.remove();
            }

            this.button = $("<div>");
            this.button.on('click', function () {
                $("body:not(:animated)").animate({scrollTop: 0}, 1000);
                $("html").animate({scrollTop: 0}, 1000);
            });

            this.button.prop('id', 'ansh_up_page_button');
            this.button.css('display', 'none');

            if (options.display.position == 'tr') {
                this.button.css('top', options.display.offset + "px");
                this.button.css('right', options.display.offset + "px");
            }
            else if (options.display.position == 'bl') {
                this.button.css('bottom', options.display.offset + "px");
                this.button.css('left', options.display.offset + "px");
            }
            else if (options.display.position == 'br') {
                this.button.css('bottom', options.display.offset + "px");
                this.button.css('right', options.display.offset + "px");
            }
            else if (options.display.position == 'bc') {
                this.button.css('bottom', options.display.offset + "px");
                this.button.css('left', "50%");
            }
            else if (options.display.position == 'tl') {
                this.button.css('top', options.display.offset + "px");
                this.button.css('left', options.display.offset + "px");
            }

            this.button.css(options.button);
            $('body').append(this.button);
            reDraw();

            $(window).bind('scroll resize', function (e) {
                reDraw();
            });
        }

        this.init = function () {
            $.ajax({
                'type': 'POST',
                'url': '/andreishilov/up/config/',
                'data': {
                    'url': window.location.pathname
                },
                'success': function (oOptions) {
                    options = oOptions;
                    initButton();
                }
            });
        }
    }

    $(function () {
        anshUpObj = new anshUp();
        anshUpObj.init();
    });
})(jQuery);