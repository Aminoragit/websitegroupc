/**
 * 브라우저 확인
 */

var browser = {};
 
//모바일 여부 확인
browser.isMobile = function() {
    var tempUser = navigator.userAgent;
    var isMobile = false;
 
    if (tempUser.indexOf("iPhone") > 0 || tempUser.indexOf("iPad") > 0
            || tempUser.indexOf("iPot") > 0 || tempUser.indexOf("Android") > 0) {
        isMobile = true;
    }
    return isMobile;
};
 
//브라우저의 종류 확인
browser.getBroswerName = function() {
    //userAgent값을 모두 소문자로 변환하여 변수에 대입
    var agt = navigator.userAgent.toLowerCase();
    
    if(agt.indexOf("chrome") != -1) {
        return 'Chrome';
    }
    else if(agt.indexOf("opera") != -1) {
        return 'Opera';
    }
    else if(agt.indexOf("firefox") != -1) {
        return 'Firefox';
    }
    else if(agt.indexOf("safari") != -1) {
        return 'Safari';
    }
    else if(agt.indexOf("skipstone") != -1) {
        return 'Skipstone';
    }
    //msie는 Expolrer 11d이전 버전, trident는 Explorer 11버전
    else if(agt.indexOf("msie") != -1 || agt.indexOf("trident") != -1) {
        return 'Internet Explorer';
    }
    else if(agt.indexOf("netscape") != -1) {
        return 'Netscape';
    }
    else {
        return 'Unknown';
    }
};

$(document).ready(function () {
	if(browser.isMobile()){			
		$("#mMenuOpen").show();
		
		$(".m-menu-d1 li").click(function(){
			$(".m-menu-d2").hide();
			$(".m-menu-d1 li").removeClass("on");
			
			$(this).find(".m-menu-d2").show();
			$(this).addClass("on");
		});
				
		$("#mMenuOpenBtn").click(function() {
			$("#mMenu").addClass("open"); 
		});
		
		$(".btn-close").click(function() { 
			$("#mMenu").removeClass("open"); 
		});
	
	} else {
		$("#mMenuOpen").hide();
	}
});