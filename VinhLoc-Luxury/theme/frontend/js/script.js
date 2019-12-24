

$(document).ready(function(){
  $('.list').select2();
  var placeholder1 = "Chọn danh mục sản phẩm";

      $( ".select2-single-1" ).select2( {
        placeholder: placeholder1,
        width: null,
        containerCssClass: ':all:'
      } );
  var placeholder2 = "Chọn khoảng giá";

      $( ".select2-single-2" ).select2( {
        placeholder: placeholder2,
        width: null,
        containerCssClass: ':all:'
      } );
  var placeholder3 = "Sắp xếp theo";

      $( ".select2-single-3" ).select2( {
        placeholder: placeholder3,
        width: null,
        containerCssClass: ':all:'
      } );
  
  $('.home_slider').slick({
  dots:false,
  slidesToShow: 1,
  arrows: false
});
$('.line-product').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: false,
  autoplaySpeed: 2000,
  prevArrow:'<button type="button" class="slick-prev"><img src="theme/frontend/images/prev_large.png"></img></button>',
  nextArrow:'<button type="button" class="slick-next"><img src="theme/frontend/images/next_large.png"></img></button>',
  responsive: [
    {
      breakpoint: 1126,
      settings:{
        slidesToShow:4,
      }
    },
    {
      breakpoint: 900,
      settings:{
        slidesToShow:3,
      }
    },
    {
      breakpoint: 690,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 470,
      settings: {
        slidesToShow: 1,
      }
    }
  ]
});
$('.build_slider').slick({
  dots: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll:3,
  nextArrow:'<button type="button" class="slick-next"><img src="theme/frontend/images/prev_large.png"></img></button>',
  responsive: [
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 657,
      settings: {
        slidesToShow: 1,
      }
    }
  ]
});
$('.pro_slider').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: false,
  autoplaySpeed: 2000,
  prevArrow:'<button type="button" class="slick-prev"><img src="theme/frontend/images/prev_large.png"></img></button>',
  nextArrow:'<button type="button" class="slick-next"><img src="theme/frontend/images/next_large.png"></img></button>',
  responsive: [
    {
      breakpoint: 800,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
      }
    }
  ]
});
$('.customer_slider').slick({
  dots: true,
  slidesToShow: 6,
  arrows: false,
  responsive: [
    {
      breakpoint: 1024,
      settings:{
        slidesToShow:4,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
      }
    }
  ]
});
});