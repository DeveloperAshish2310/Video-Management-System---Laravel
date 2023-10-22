(function ($) {
    'use strict';
    $(function () {
        $('#profilepic').on('keyup',function(){
            var url = $(this).val();
            $("#proimg").attr('src',url);
        })
    });
})(jQuery);