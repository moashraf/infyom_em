//slider of home
$(document).ready( function() {
    var mainWindow = $(window),
        mainNav = $('.navbar');
    //main slider of home
    $('#myCarousel').carousel({
        interval:   3000
    });

    var clickEvent = false;
    $('#myCarousel').on('click', '.nav a', function() {
            clickEvent = true;
            $('.nav li').removeClass('active');
            $(this).parent().addClass('active');		
    }).on('slid.bs.carousel', function(e) {
        if(!clickEvent) {
            var count = $('.nav').children().length -1;
            var current = $('.nav li.active');
            current.removeClass('active').next().addClass('active');
            var id = parseInt(current.data('slide-to'));
            if(count == id) {
                $('.nav li').first().addClass('active');	
            }
        }
        clickEvent = false;
    });
    
    //animation wow liberary
    new WOW().init();
    
    //niceScroll Trigger
    $('html, body').niceScroll({
        cursorborder:"1px solid #d9232e",
        cursorcolor: '#d9232e'
    });
    
    //up 
    mainWindow.scroll(function(){
        if( $(this).scrollTop() >= 500 ){
            $('.up').fadeIn();
        } else{
            $('.up').fadeOut();
        }
    });
    
    $('.up').click(function(){
        $('html, body').animate({
            scrollTop: 0
        }, 500);
    });
    
    //Dynamic links
    $('.navbar .navbar-nav li a').click(function(){
        $('html, body').animate({
            scrollTop: $('#' + $(this).data('value')).offset().top
        },1000);
    });
    
    //nav bar
    mainWindow.scroll(function(){
        if( $(this).scrollTop() >= 10 ){
            mainNav.addClass('white_shadow');
            mainNav.css('margin-top', '0');
            $('.navbar a').css('color', '#333');
        } else{
            mainNav.removeClass('white_shadow');
            mainNav.css('margin-top', '40px');
            $('.navbar a').css('color', '#d9232e');
        }
    });
    
    mainWindow.resize(function() {
        if( $(this).width() <= 995 ){
            mainNav.css('margin-top', '70px');
        } else{
            mainNav.css('margin-top', '40px');
        }
    });
    
    
    $('.navbar .navbar-nav li').click(function(){
        $(this).addClass('active_link').siblings('.navbar .navbar-nav li').removeClass('active_link');
    });
      
});