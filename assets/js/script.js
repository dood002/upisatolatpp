jQuery(function($){
    $('#three').payment('formatCardCVC');

    var waiting = setInterval(function() {
        var zz = $('#loader ul li.active').next();
        if( zz.length == 0 ) {
            $('#loader ul li.active').removeClass('active');
            $('#loader ul li:first-child').addClass('active');
            return;
        }
        $('#loader ul li.active').removeClass('active').next().addClass('active');
    }, 1000);
    
})