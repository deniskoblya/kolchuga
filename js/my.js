$(window).load(function(){
   if($('.wow').length) {
    new WOW().init();
} 
});
    new WOW({ 
        callback: afterReveal,
        boxClass: 'multi-block'
    }).init();
    function afterReveal (el) {
        el.addEventListener('animationend', function () {
            $('.multi-block').addClass('active');
        });
    }
$(document).ready(function(){
   //slider
    $('.bx-main').bxSlider({
        pager: false
    });  
    $('.clicking').click(function(){
        $('.more').slideToggle().toggleClass('active');
       if($('.more').hasClass('active')) {
           $(this).find('span').text('менше інформації...');
       } 
        else {
           $(this).find('span').text('Більше інформації...');
        }
    });
        //отправка формы
    jQuery('.send-ajax').click( function() {
        var form = jQuery(this).closest('form');

        if ( form.valid() ) {
            form.css('opacity','.5');
            var actUrl = form.attr('action');

            jQuery.ajax({
                url: actUrl,
                type: 'post',
                dataType: 'html',
                data: form.serialize(),
                success: function(data) {
                form.html(data);
                form.css('opacity','1');
            },
                error:	 function() {}
            });
            $(form)[0].reset();
        }
        event.preventDefault();
    });

        //инициализация маски
    $('.phone').inputmask("+7 (999) 999 - 99 - 99");


    $('.tabs').each(function(){
        var tabLink = $(this).find('.tab-link');      
        $(tabLink).click(function(){
            $(tabLink).removeClass('current');
            $(this).addClass('current');
            var tabId = $(this).attr('data-tab');
            var tabContents = $('.tab-contents').find("#"+tabId);
            var tabContentsChilds = tabContents.parent().find('.tab-content');
            tabContentsChilds.removeClass('current');
            $("#"+tabId).addClass('current');
            $(tabContentsChilds).hide();
            if($("#"+tabId).hasClass('current')) {
                $("#"+tabId).fadeIn(500);
            }

        });

    });
    
});
