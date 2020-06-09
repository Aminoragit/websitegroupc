$(function () {

	// 본문 콘텐츠 소셜 공유
	var currentUrl = encodeURIComponent($(location).attr('href'));
	var title = encodeURIComponent($(document).attr('title'));	
	var fb = "http://www.facebook.com/sharer/sharer.php?u="+currentUrl;
	//var twt = "http://twitter.com/share?url="+currentUrl+"&amp;text="+title;
	var twt = "http://twitter.com/intent/tweet?text=" + title + "&url=" + currentUrl;
	var gplus = "https://plus.google.com/share?hl=ko&url="+currentUrl;	
	var m2 = "http://me2day.net/plugins/post/new?new_post[body]=%22"+title+"%22:"+currentUrl;
	var nband = "http://www.band.us/plugin/share?body="+title+"&route="+currentUrl;
	$('.googleplus a').attr('href',gplus);	
	$('.me2day a').attr('href',m2);
	$('.naverband a').attr('href',nband);
	$('.kakaostory a').on('click',function(e){
		e.preventDefault();
		Kakao.init('3a546a4f3d20ea963d2cc4c738c11eea');
		Kakao.Story.share({
			url: $(location).attr('href'),
			text: $(document).attr('title')
		});
	});

	// 게시판 목록 검색창 SELECT 디자인
	if ($('.input-small').length > 0) {
		$('.input-small').ddlist({
			width: 90
		});
	}
	// 통합검색 SELECT 디자인
	if ($('.top_section .search-area-select').length > 0) {
		$('.top_section .search-area-select').ddlist({
			width: 75
		});
	}
	if ($('.mobile-search-area .search-area-select').length > 0) {
		$('.mobile-search-area .search-area-select').ddlist({
			width: 75
		});
	}

	// footer 링크 영역
	$('.footer-link-inner h4 a').on('click',function(){
		if ($(this).parent().hasClass('on')) {
			$('.footer-link-inner ul').hide();
			$('.footer-link-inner h4').removeClass('on');
			$(this).parent().next('ul').hide();
			$(this).parent().removeClass('on');
		} else {
			$('.footer-link-inner ul').hide();
			$('.footer-link-inner h4').removeClass('on');
			$(this).parent().next('ul').show();
			$(this).parent().addClass('on');    
		}
	});

	// iframe 자동 리사이즈 (* security 이슈로 같은 서버에 존재하는 경우에만 리사이즈 적용됨)  
	$('iframe').load(function() {
		$(this).css("height", $(this).contents().find("body").height());
	});

	// Font size 조절
	/*
	var current = 1;
	$('.btn-font-plus').on('click', function() {current += 0.1; zoom();});
	$('.btn-font-minus').on('click', function() {current += -0.1; zoom();});
	
	function zoom()
	{
		if (current > 1.5)
		{
			alert('더이상 화면을 확대 하실 수 없습니다.');
			return false;
		}
		if (current < 1.0)
		{
			alert('더이상 화면을 축소 하실 수 없습니다.');
			return false;
		}
		
		$('body').css({
			zoom: current,
			'-moz-transform': 'scale(' + current + ')'
		});
	}
	*/
	scrollQuick();
	scrollTopBtn();

	// sns push 버튼 액션
	$('#snspush').on('click', function(){
		window.open('/mpm/common/pop_snspush.html', 'SNS-PUSH', 'width=520px,height=520px,scrollbars=no,resizable=no');
	});

	srchResizeHandler();

	$('.tab-list').tabListUI();
    $('.public-tab').publicTabUI();  
});

$(window).on('scroll',function(){
	scrollQuick();
	scrollTopBtn();
});

/* Board Search 영역 반응형 처리 */
$(window).on('resize',function(){
	srchResizeHandler();
});
function srchResizeHandler() {
	var iWidth = $(window).innerWidth();
	var boardSearchWidth = Math.floor($('.board-search').innerWidth()-0.5);
	var selectWidth = 0;
	$('.ddListContainer').each(function(){
		selectWidth = $(this).outerWidth() + selectWidth;
	});
	if (iWidth < 768 && $('.board-search .form-search .btn').is(':hidden')) {
		$('.board-search .search-query').outerWidth(boardSearchWidth - selectWidth - 50);
	}
	else {
		$('.board-search .search-query').css('width','182px');
	}
}

function scrollQuick() {
	var scrollTop = $(document).scrollTop();
	var cssTop;
	if (scrollTop < 150) {cssTop = 0;}
	if (scrollTop > 150) {cssTop = scrollTop - 150;}
	$(".quickmenu").stop().animate( { "top" : cssTop });	
}

function scrollTopBtn() {
	var scrollTop = $(window).scrollTop();
	var windowHeight = $(window).height();
	var documentHeight = $(document).height();
	var cssTop;
	if (scrollTop < 250) {
		cssTop = documentHeight - 280;
	} else {
		cssTop = windowHeight - 280 + scrollTop;
	}
	if (windowHeight < 450) {
		cssTop = documentHeight - 280;
	}
	if (documentHeight > (280 + cssTop)) {
		$(".btn-to-topmenu").stop().animate( { "top" : cssTop });
	}
	else {
		$(".btn-to-topmenu").css("top", cssTop);
	}
}


$.fn.tabListUI = function() {
    // 브라우저 해상도에 따라 너비 설정
    tablistResizeHandler();
    $(window).on('resize',function(){
        tablistResizeHandler();
    });
    function tablistResizeHandler() {
        var iWidth = $(window).innerWidth();
        if (iWidth < 768) {
            $('.tab-list').each(function(){
                $(this).find('> ul > li').width(($(this).innerWidth()));
            });
        }
        else {
            $('.tab-list ul').removeClass('tab-mobile-open');
            $('.tab-list ul').css({'display':'block !important'})
            $('.tab-list ul').each(function(){
                var length = $(this).find('>li').size();
                var gutter = 5; //탭리스트 사이의 간격. css로 설정해 주어야 함     
                $(this).find('>li').width(($(this).innerWidth()-(length-1)*gutter) / length);
            });
        }
    }
    $(this).each(function() {
        var $tabmenu = $(this);
        var $tabmenu_ul = $tabmenu.find('>ul:eq(0)');
        var $tabmenu_li = $tabmenu_ul.find('>li');
        var $tabmenu_link = $tabmenu_li.find('>a');
        var $tabmenu_cont = $tabmenu.next().find('.tab-content');
        
        $tabmenu_cont.hide().eq(0).show();
        $tabmenu_link.eq(0).parent('li').addClass('active');
        
        $tabmenu.each(function() {
            var tabmenu_li = $(this).find('>li');
            var tabmenu_li_txt = $(this).find('a:eq(0)').text();
            var tabmenu_li_href = $(this).find('a:eq(0)').attr('href');
            if ( $tabmenu_li.hasClass('active') ) {
                $tabmenu_ul.before('<div class="tab-mobile"><a href="'+tabmenu_li_href+'">'+tabmenu_li_txt+'</a></div>');
            }
        });
    });
    $(this).find('>ul:eq(0) > li > a').on('click', function(e) {
        e.preventDefault();
        $(this).parent().parent().children('li').removeClass("active");
        $(this).parent().parent().parent().next().children('div').hide();
        $($(this).attr('href')).show();
        $(this).parent('li').addClass("active");
        
        $(this).parent('li').parent('ul').parent('div').children('div.tab-mobile').children('a').attr('href', $(this).attr('href'));
        $(this).parent('li').parent('ul').parent('div').children('div.tab-mobile').children('a').text($(this).text());

        if ($(this).parent().parent('ul').hasClass('tab-mobile-open')) {
            $(this).parent().parent('ul').removeClass('tab-mobile-open').hide();
            $(this).parent('li').parent('ul').parent('div').children('div.tab-mobile').children('a').removeClass('caret-up');
        }
    });
    $(this).children('.tab-mobile').children('a').on('click', function(e){
        e.preventDefault();
        if ($(this).parent().next('ul').hasClass('tab-mobile-open')) {
            $(this).removeClass('caret-up');
            $(this).parent().next('ul').removeClass('tab-mobile-open').hide();
        }
        else {
            $(this).addClass('caret-up');
            $(this).parent().next('ul').addClass('tab-mobile-open').show();
        }
    });
}
$.fn.tabMenuUI = function() {
    tabMenuResizeHandler();
    $(window).on('resize',function(){
        tabMenuResizeHandler();
    });
    function tabMenuResizeHandler() {
        var iWidth = $(window).innerWidth();
        if (iWidth < 768) {
            $('.tab-menu').each(function(){
                $(this).find('> ul > li').width(($(this).innerWidth()));
            });
        }
        else {
            $('.tab-menu ul').removeClass('tab-mobile-open');
            
            $('.tab-menu ul').css({'display':'block !important'})
            $('.tab-menu ul').each(function(){
                var length = $(this).find('>li').size();
                var gutter = 9; //탭메뉴 사이의 간격. css로 설정해 주어야 함     
                $(this).find('>li').width(($(this).innerWidth()-(length-1)*gutter) / length);
            });
            
        }
    }
    $(this).each(function() {
        var $tabmenu = $(this);
        var $tabmenu_ul = $tabmenu.find('>ul:eq(0)');
        var $tabmenu_li = $tabmenu_ul.find('>li');
        
        $tabmenu_li.each(function() {
            var tabmenu_li_txt = $(this).find('a:eq(0)').text();
            var tabmenu_li_href = $(this).find('a:eq(0)').attr('href');
            if ($(this).hasClass('active') ) {
                $tabmenu_ul.before('<div class="tab-mobile"><a href="'+tabmenu_li_href+'">'+tabmenu_li_txt+'</a></div>');
            }
        });
    });
    $(this).children('.tab-mobile').children('a').on('click', function(e){
        e.preventDefault();
        if ($(this).parent().next('ul').hasClass('tab-mobile-open')) {
            $(this).removeClass('caret-up');
            $(this).parent().next('ul').removeClass('tab-mobile-open').hide();
        }
        else {
            $(this).addClass('caret-up');
            $(this).parent().next('ul').addClass('tab-mobile-open').show();
        }
    });
}
$.fn.publicTabUI = function() {
    publicTaResizeHandler();
    $(window).on('resize',function(){
        publicTaResizeHandler();
    });
    function publicTaResizeHandler() {
        var iWidth = $(window).innerWidth();
        if (iWidth < 900) {
            $('.public-tab').each(function(){
                $(this).find(' > li').width(($(this).innerWidth()));
            });
        }
        else {
            $('.public-tab').removeClass('tab-mobile-open');
            
            $('.public-tab').css({'display':'block !important'})
            $('.public-tab').each(function(){
                var length = $(this).find('>li').size();
                var gutter = 1; //탭메뉴 사이의 간격. css로 설정해 주어야 함     
                $(this).find('>li').width(($(this).innerWidth()-(length-1)*gutter) / length);
            });
            
        }
    }
    $(this).each(function() {
        var $tabmenu = $(this);
        var $tabmenu_ul = $tabmenu;
        var $tabmenu_li = $tabmenu_ul.find('>li');
        
        $tabmenu_li.each(function() {
            var tabmenu_li_txt = $(this).find('a:eq(0)').text();
            var tabmenu_li_href = $(this).find('a:eq(0)').attr('href');
            if ($(this).hasClass('active') ) {
                $tabmenu_ul.before('<div class="tab-mobile"><a href="'+tabmenu_li_href+'">'+tabmenu_li_txt+'</a></div>');
            }
        });
    });
    $(this).children('.tab-mobile').children('a').on('click', function(e){
        e.preventDefault();
        if ($(this).parent().next('ul').hasClass('tab-mobile-open')) {
            $(this).removeClass('caret-up');
            $(this).parent().next('ul').removeClass('tab-mobile-open').hide();
        }
        else {
            $(this).addClass('caret-up');
            $(this).parent().next('ul').addClass('tab-mobile-open').show();
        }
    });
}



