// JavaScript Document

/*****Menuボタン*****/
$(function(){
  $('.menu_trigger').on('click', function() {
    $(this).toggleClass('active');
    $(".header_nav").fadeToggle(200);
    return false;
  });
});

/*ボタン閉じる*/
/* .header_nav_list内のリンクをクリックすると.menu_triggerをクリックするのと同じことにする*/
  $('.header_nav_list a[href]').on('click', function(event) {
          $('.menu_trigger').trigger('click');
      });



/*****ふわっと表示（2種類）*****/
$(function(){
    $(window).scroll(function (){
        $('.fadein').each(function(){
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > targetElement - windowHeight + 200){
                $(this).css('opacity','1');
                $(this).css('transform','translateY(0)');
            }
        });
    });
});

$(function(){
    $(window).scroll(function (){
        $('.fadein_x').each(function(){
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > targetElement - windowHeight + 200){
                $(this).css('opacity','1');
                $(this).css('transform','translateX(0)');
            }
        });
    });
});




