$('.main-title.-featured').waypoint(function(direction) {

    if(direction == "down"){
        $('#featured-title-wrapper #title-icon-left').addClass('animate__animated animate__fadeInLeft');
        $('#featured-title-wrapper h2').addClass('animate__animated animate__fadeIn')
        $('#featured-title-wrapper #title-icon-right').addClass('animate__animated animate__fadeInRight');
    }

    if(direction == "up"){
        $('#featured-title-wrapper #title-icon-left').removeClass('animate__animated animate__fadeInLeft'); 
        $('#featured-title-wrapper h2').removeClass('animate__animated animate__fadeIn')
        $('#featured-title-wrapper  #title-icon-right').removeClass('animate__animated animate__fadeInRight');
    }

}, {
    offset: '99%'
})

$('.main-title.-recents').waypoint(function(direction) {

    if(direction == "down"){
        $('#recents-title-wrapper #title-icon-left').addClass('animate__animated animate__fadeInLeft'); 
        $('#recents-title-wrapper h2').addClass('animate__animated animate__fadeIn')
        $('#recents-title-wrapper #title-icon-right').addClass('animate__animated animate__fadeInRight');
    }

    if(direction == "up"){
        $('#recents-title-wrapper #title-icon-left').removeClass('animate__animated animate__fadeInLeft');  
        $('#recents-title-wrapper h2').removeClass('animate__animated animate__fadeIn')
        $('#recents-title-wrapper  #title-icon-right').removeClass('animate__animated animate__fadeInRight');
    }

}, {
    offset: '100%'
})

$('.main-about').waypoint(function(direction) {

    if(direction == "down"){
        $('.main-about h2').addClass('animate__animated animate__fadeInUp');
        $('.main-about p').addClass('animate__animated animate__fadeInUp');
    }

    if(direction == "up"){
        $('.main-about h2').removeClass('animate__animated animate__fadeInUp');
        $('.main-about p').removeClass('animate__animated animate__fadeInUp');
    }

}, {
    offset: '85%'
})

$('.main-footer h2').css('opacity',0);

$('.main-footer').waypoint(function(direction) {

    if(direction == "down"){
        $('.main-footer h2').addClass('animate__animated animate__bounceIn');
        $('.main-footer .icons-wrapper').addClass('animate__animated animate__bounceIn');
    }

}, {
    offset: '100%'
})

$('.main-footer').waypoint(function(direction) {

    if(direction == "up"){
        $('.main-footer h2').removeClass('animate__animated animate__bounceIn');
        $('.main-footer .icons-wrapper').removeClass('animate__animated animate__bounceIn');
    }

}, {
    offset: '105%'
})