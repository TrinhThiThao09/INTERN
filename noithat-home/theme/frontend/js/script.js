var win=$(window)
$('.home_slider').slick({
  dots: true,
  slidesToShow: 1,
  arrows: false
});
$('.project_slider').slick({
  slidesToShow: 2,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  prevArrow:'<button type="button" class="slick-prev"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
  nextArrow:'<button type="button" class="slick-next"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1
      }
    }
  ]
});
$('.news_slider').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  prevArrow:'<button type="button" class="slick-prev"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
  nextArrow:'<button type="button" class="slick-next"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
  responsive: [
    {
      breakpoint: 965,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint:480,
      settings:{
        slidesToShow: 1
      }
    }
      
  ]
});
$('.partner_slider').slick({
  dots: true,
  slidesToShow: 3,
  arrows: false,
});
$('.customer_slider').slick();
  win.scroll(function(){
    if(win.scrollTop()> 100 && win.width()>965){
      document.getElementById("header").style.position = "fixed";
      document.getElementById("header").style.width = "100%";
      document.getElementById("header").style.transition = "0.3s";
    }
    else{
      document.getElementById("header").style.position = "relative";
    }
  });

$( document ).ready(function() {
  var html=$('html');
  var body=$('body');
    var m_nav=$('.menu-mb');
    var m_nav_btn=$('.menu-btn .btn-bar');
    var nav=m_nav.children('ul');
    m_nav.find("ul li").each(function(){
      if($(this).find("ul li").length > 0){
        $(this).prepend('<i></i>');
      }
    });
    m_nav_btn.click(function(e){
       e.stopPropagation();
      if(m_nav.is(':hidden')){
        $(this).addClass('active');
        m_nav.slideDown(200);
      }
      else{
        m_nav.slideUp(200);
        $(this).removeClass('active');
        m_nav.slideUp();
        m_nav.find('li ul').slideUp();
        m_nav.find('li>i').removeClass('active');
      }
    });
    m_nav.find("li i").click(function(e){
       e.stopPropagation();
      var ul=$(this).nextAll("ul");
      if(ul.is(':hidden')===true){
        $(this).addClass('active');
        ul.slideDown(200);
      }
      else{
        ul.slideUp(200);
        $(this).removeClass('active');
      }
    });
    win.click(function(e){
    m_nav.slideUp();
    m_nav.find('li ul').slideUp();
    m_nav.find('li>i').removeClass('active');
    });
}); 