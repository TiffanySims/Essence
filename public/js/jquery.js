$('.js-scroll').click(function(){
    $('html,body').animate({scrollTop:$('.js-cards').offset().top},1000);
    $(".navigation__checkbox").prop('checked',false);

   


});

$('.js-scroll-about').click(function(){
    $('html,body').animate({scrollTop:$('.js-about').offset().top},1000);

    $(".navigation__checkbox").prop('checked',false);


   

});

$('.js-scroll-benefits').click(function(){
    $('html,body').animate({scrollTop:$('.js-benefits').offset().top},1000);
    $(".navigation__checkbox").prop('checked',false);

});

$('.js-scroll-test').click(function(){
    $('html,body').animate({scrollTop:$('.js-test').offset().top},1000);
    $(".navigation__checkbox").prop('checked',false);

});

$('.js-scroll-book').click(function(){
    $('html,body').animate({scrollTop:$('.js-book').offset().top},1000);
    $(".navigation__checkbox").prop('checked',false);

});


