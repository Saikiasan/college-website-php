    $(document).ready(function () {
        "use strict";
        
        $(window).on('load',function(){
            $('.animated-row').each(function () {
                var $this = $(this);
                $this.find('.animate').each(function (i) {
                    var $item = $(this);
                    var animation = $item.data('animate');
                    $item.on('inview', function (event, isInView) {
                        if (isInView) {
                            setTimeout(function () {
                                $item.addClass('animated ' + animation).removeClass('animate');
                            }, i * 50);
                        } 
                        else {
                            $item.removeClass('animated ' + animation).addClass('animate');
                        }
                    });
                });
            });
        })
    })