$('.slider').slick({
  infinite: true,//スライドをループさせるかどうか。初期値はtrue。
  slidesToShow: 3,//スライドを画面に3枚見せる
  slidesToScroll: 3,//1回のスクロールで3枚の写真を移動して見せる
  // dots: true,//下部ドットナビゲーションの表示
  autoplay: true,
  speed: 2000,
  responsive: [
    {
      breakpoint: 769,//モニターの横幅が769px以下の見せ方
      settings: {
        slidesToShow: 2,//スライドを画面に2枚見せる
        slidesToScroll: 2,//1回のスクロールで2枚の写真を移動して見せる
      }
    },
    {
      breakpoint: 480,//モニターの横幅が480px以下の見せ方
      settings: {
        slidesToShow: 1,//スライドを画面に1枚見せる
        slidesToScroll: 1,//1回のスクロールで1枚の写真を移動して見せる
      }
    }
  ]
});


// スクロールのフェードイン
$(function () {
  $(window).scroll(function () {
    $('.js_fade').each(function () {
      var pos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > pos - windowHeight + 200) {
        $(this).addClass('scroll');
      }
    });
  });
});

//読み込み後のフェードイン
$(window).on('load', function () {
  $('.js_lp').addClass('open')
});