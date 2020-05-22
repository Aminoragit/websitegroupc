$(function(){
	var gnb = $('.gnbs > li');
	var gnba = $('.gnbs > li > a');
	var gnb2DepMenu = gnb.find('.gnbs-div');

	function gnbOn(gnb){
		gnb.addClass('__open');
	}
	function gnbOut(){
		gnb.removeClass('__open');
	}
	function gnbSiblingsOut(gnb){
		gnb.siblings().removeClass('__open');
	}
	gnb.on({
		mouseover:function(){
			gnbOn($(this));
		},
		mouseleave:function(){
			gnbOut();
		}
	});
	gnba.on({
		focus:function(){
			gnbOn($(this).parent('li'));
			gnbSiblingsOut($(this).parent('li'));
		}
	});

	$('.gnbs li').last().focusout(function(){
		gnb2DepMenu.hide();
	});

	$('.samenu1').on('click',function(){
		if ($(this).hasClass('on')) {
			$('.samenu1 .mgnbs-div3').hide();
			$('.samenu1').removeClass('on');
		} else {
			$('.samenu1 .mgnbs-div3').show();
			$('.samenu1').addClass('on');
		}
	});
	
});

$(function(){
	var gnb = $('.mgnbs > li');
	var gnba = $('.mgnbs > li > a');
	var gnb2DepMenu = gnb.find('.mgnbs-div');

	function gnbOn(gnb){
		gnb.addClass('__open');
	}
	function gnbOut(){
		gnb.removeClass('__open');
	}
	function gnbSiblingsOut(gnb){
		gnb.siblings().removeClass('__open');
	}
	gnb.on({
		mouseover:function(){
			gnbOn($(this));
		},
		mouseleave:function(){
			gnbOut();
		}
	});
	gnba.on({
		focus:function(){
			gnbOn($(this).parent('li'));
			gnbSiblingsOut($(this).parent('li'));
		}
	});

	$('.mgnbs li').last().focusout(function(){
		gnb2DepMenu.hide();
	});

});



$(function(){
	var lnb = $('.lnbs > li');
	var lnba = $('.lnbs > li > a');
	var lnb2DepMenu = lnb.find('.lnbs-div');
	
	function lnbOn(lnb){
		lnb.addClass('__open');
	}
	function lnbOut(){
		lnb.removeClass('__open');
	}
	function lnbSiblingsOut(lnb){
		lnb.siblings().removeClass('__open');
	}
	lnb.on({
		mouseover:function(){
			lnbOn($(this));
		},
		mouseleave:function(){
			lnbOut();
		}
	});
	lnba.on({
		focus:function(){
			lnbOn($(this).parent('li'));
			lnbSiblingsOut($(this).parent('li'));
		}
	});

	$('.lnbs li').last().focusout(function(){
		gnb2DepMenu.hide();
	});

});

