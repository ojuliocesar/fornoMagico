$('.main-title.-featured').waypoint(function(direction) {

    if(direction == "down"){
        $('#featured-title-wrapper #title-icon-left').addClass('animate__animated animate__fadeInLeft');
        $('#featured-title-wrapper #title-icon-right').addClass('animate__animated animate__fadeInRight');
    }

    if(direction == "up"){
        $('#featured-title-wrapper #title-icon-left').removeClass('animate__animated animate__fadeInLeft'); 
        $('#featured-title-wrapper  #title-icon-right').removeClass('animate__animated animate__fadeInRight');
    }

}, {
    offset: '99%'
})

$('.main-featured .main-section-wrapper').waypoint(function(direction) {

    if(direction == "down"){
        $('.main-featured .featured-recipes-wrapper').addClass('animate__animated animate__fadeInUp');
    }

    if(direction == "up"){
        $('.main-featured .featured-recipes-wrapper').removeClass('animate__animated animate__fadeInUp');
    }

}, {
    offset: '700px'
})

$('.main-title.-recents').waypoint(function(direction) {

    if(direction == "down"){
        $('#recents-title-wrapper #title-icon-left').addClass('animate__animated animate__fadeInLeft'); 
        $('#recents-title-wrapper #title-icon-right').addClass('animate__animated animate__fadeInRight');
    }

    if(direction == "up"){
        $('#recents-title-wrapper #title-icon-left').removeClass('animate__animated animate__fadeInLeft');  
        $('#recents-title-wrapper  #title-icon-right').removeClass('animate__animated animate__fadeInRight');
    }

}, {
    offset: '760px'
})

$('.main-recents .recents-item').css('opacity',0);

$('.main-recents .main-section-wrapper').waypoint(function(direction) {

    if(direction == "down"){
        $('.main-recents .recents-item').addClass('animate__animated animate__fadeInUp');
    }

    if(direction == "up"){
        $('.main-recents .recents-item').removeClass('animate__animated animate__fadeInUp');
    }

}, {
    offset: '700px'
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
    offset: '550px'
})

$('.main-footer h2').css('opacity',0);

$('.main-footer').waypoint(function(direction) {

    console.log(direction);

    if(direction == "down"){
        $('.main-footer h2').addClass('animate__animated animate__bounceIn');
        $('.main-footer .icons-wrapper').addClass('animate__animated animate__bounceIn');
    }

    if(direction == "up"){
        $('.main-footer h2').removeClass('animate__animated animate__bounceIn');
        $('.main-footer .icons-wrapper').removeClass('animate__animated animate__bounceIn');
    }

}, {
    offset: '670px'
})