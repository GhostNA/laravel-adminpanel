var mb_v = 0,
    mob_menu_init = false,
    toggle = false;

$(document).ready(function() {
    d.MinimizeSidebar();
});

$(window).resize(function() {
    d.SidebarsCheck();
});

$(document).on('click', '.navbar-toggler', function() {
    $toggle = $(this);

    if (mb_v === 1) {
        $('html').removeClass('nav-open');

        $('.close-layer').remove();
        setTimeout(function() {
            $toggle.removeClass('toggled');
        }, 400);

        mb_v = 0;
    } else {
        setTimeout(function() {
            $toggle.addClass('toggled');
        }, 430);

        var $layer = $('<div class="close-layer"></div>');

        if ($('body').find('.main-panel').length != 0) {
            $layer.appendTo(".main-panel");

        } else if (($('body').hasClass('off-canvas-sidebar'))) {
            $layer.appendTo(".wrapper-full-page");
        }

        setTimeout(function() {
            $layer.addClass('visible');
        }, 100);

        $layer.click(function() {
            $('html').removeClass('nav-open');
            mb_v = 0;

            $layer.removeClass('visible');

            setTimeout(function() {
                $layer.remove();
                $toggle.removeClass('toggled');

            }, 400);
        });

        $('html').addClass('nav-open');
        mb_v = 1;
    }
});

d = {

    misc: {
        collapse: true,
    },

    MinimizeSidebar: function() {
        $('#minimizeSidebar').click(function() {
            var $btn = $(this);

            if (d.misc.sidebar_mini_active == true) {
                $('body').removeClass('sidebar-mini');
                d.misc.sidebar_mini_active = false;
            } else {
                $('body').addClass('sidebar-mini');
                d.misc.sidebar_mini_active = true;
            }
        });
    },

    SidebarsCheck: function() {
        if ($(window).width() <= 991) {
            if ($sidebar.length != 0) {
                rollback_time(function() {
                    $sidebar_wrapper = $('.sidebar-wrapper');

                    if (!mob_menu_init) {
                        $navbar = $('nav').find('.navbar-collapse').children('.navbar-nav');

                        mobile_menu_content = '';

                        nav_content = $navbar.html();

                        nav_content = '<ul class="nav navbar-nav nav-mobile-menu">' + nav_content + '</ul>';

                        navbar_form = $('nav').find('.navbar-form').get(0).outerHTML;

                        $sidebar_nav = $sidebar_wrapper.find(' > .nav');

                        // insert the navbar form before the sidebar list
                        $nav_content = $(nav_content);
                        $navbar_form = $(navbar_form);
                        $nav_content.insertBefore($sidebar_nav);
                        $navbar_form.insertBefore($nav_content);

                        $(".sidebar-wrapper .dropdown .dropdown-menu > li > a").click(function(event) {
                            event.stopPropagation();

                        });

                        mob_menu_init = true;
                    } else {
                        if ($(window).width() > 991) {
                            // reset all the additions that we made for the sidebar wrapper only if the screen is bigger than 991px
                            $sidebar_wrapper.find('.navbar-form').remove();
                            $sidebar_wrapper.find('.nav-mobile-menu').remove();

                            mob_menu_init = false;
                        }
                    }
                }, 200)
            }
        }
    },
}

function rollback_time(func, wait, immediate) {
    var timeout;
    return function() {
        var context = this,
            args = arguments;
        clearTimeout(timeout);
        timeout = setTimeout(function() {
            timeout = null;
            if (!immediate) func.apply(context, args);
        }, wait);
        if (immediate && !timeout) func.apply(context, args);
    };
};
