$( document ).ready(function() {
    

	var win=$(window);
	var html=$('html');
	var body=$('body');
		var m_nav=$('.main-bar-p1');
		var m_nav1=$('.main-bar-p1 .main-nav1');
		var m_nav_btn=$('.menu-btn .btn');
		var nav=m_nav1.children('ul');
		m_nav1.find("ul li").each(function(){
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
				m_nav1.find('li>i').removeClass('active');
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
		m_nav1.find('li>i').removeClass('active');
		});
});	