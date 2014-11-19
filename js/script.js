
(function ($) {

    $(document).ready(function(){

        if(!Modernizr.input.placeholder){

            $('[placeholder]').focus(function() {
                var input = $(this);
                if (input.val() == input.attr('placeholder')) {
                    input.val('');
                    input.removeClass('placeholder');
                }
            }).blur(function() {
                var input = $(this);
                if (input.val() === '' || input.val() === input.attr('placeholder')) {
                    input.addClass('placeholder');
                    input.val(input.attr('placeholder'));
                }
            }).blur();
            $('[placeholder]').parents('form').submit(function() {
                $(this).find('[placeholder]').each(function() {
                    var input = $(this);
                    if (input.val() == input.attr('placeholder')) {
                        input.val('');
                    }
                });
            });

        }
    });

    // When user hovers over Practice Area links, pop up a tooltip
    var linkTitle = null,
        practiceAreaMenu = document.querySelector('.block-menu-menu-practice-areas');

    if (practiceAreaMenu) {
        // Create the element with the appropriate classes
        $('body').append('<div class="tooltip js-is-hidden"><div class="tooltip__arrow"></div><p class="tooltip__title"></p><p class="tooltip__readmore">CLICK TO LEARN MORE</p>');

        $('.block-menu-menu-practice-areas a').hover(
            function() {
                var elementPos = $(this).offset();

                linkTitle = $(this).attr('title');
                $(this).removeAttr('title');
                $('.tooltip__title').html(linkTitle);
                $('.tooltip').css({
                    'top' : elementPos.top + 'px',
                    'left' : elementPos.left + $(this).width() + 40 + 'px'
                });

                $('.tooltip').fadeIn().removeClass('js-is-hidden');

            },
            function() {
                $('.tooltip').addClass('js-is-hidden');
                $(this).attr('title', linkTitle);
            }
        );
    }

})(jQuery);
