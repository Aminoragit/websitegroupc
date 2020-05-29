// alert 창 디자인
function mAlert(msg, h){
	h = h || 30;	
	$('#msgboxDiv').remove();
	$('body').append('<div id="msgboxDiv"></div>');
	var settings = {
			title : "알림",
			messageText : msg, 
			messageType : 'alert',
			height : h, 
			width : 400,
		    OkCallback : function() {
				$('#msgboxDiv').remove();
		    },
    		onClose : function() {
				$('#msgboxDiv').remove();
    		}
	};
	$('#msgboxDiv').messagebox(settings).click();
	$('.msgwrapper').css('top', '15%');
}

// confirm 창 디자인
function mConfirm(msg, yesCallback, noCallback){ 
	$('#confirmboxDiv').remove();
	$('body').append('<div id="confirmboxDiv"></div>');
	var settings = {
			title : "확인",
			messageText : msg, 
			messageType : 'confirm',
			height : 30, 
			width : 400,
		    OkCallback : function() {
				$('#confirmboxDiv').remove();
		    	eval(yesCallback+"();");
				return true;
		    },
    		onClose : function() {
				$('#confirmboxDiv').remove();
				return false;
    		},
    		onCancel : function() {
				$('#confirmboxDiv').remove();
		    	eval(noCallback+"();");
				return false;
    		}
	};
	$('#confirmboxDiv').messagebox(settings).click();
	$('.msgwrapper').css('top', '15%');
}

function showLoading(flag){
	/*
	var sHtml = '';
	sHtml += '<div id="divLoading" style="width:100%;height:100%;background-color:#000000;opacity:0.3;display:none; position:absolute; top:0;">';
	sHtml += '  <p style="position:absolute; top:50%; left: 50%;"><img src="/resources/svc/images/loading.gif" alt="로딩바" style="width:60px;height:60px;"/></p>';
	sHtml += '</div>';

	$('body').append(sHtml);
	$('#divLoading').show();
	*/
	$("#loading-mask").css({ width:$("body").width() + "px", height:$(document).height() + "px" });
	
	$('#mask_loding_image_bar').center();
	$("#loading-mask").show();
    if( String(flag) == "undefined"){
    	$("#loading-mask").focus();
    }else if (flag){
    	$("#loading-mask").focus();
    }
}
function hideLoading(){
	//$('#divLoading').remove();
	$("#loading-mask").fadeOut("slow");
}

function showDownLoading(){
	var sHtml = '';
	sHtml +=     "<div id='divLoading' style='width:100%;height:100%;background-color:#000000;opacity:0;display:none; position:absolute; top:0; z-index: 100;'>";
	sHtml +=     	"<p style='width:200px;height:50px;left:50%;top:50%;position:absolute;margin:-25px 0 0 -100px;text-align:center;'>";
	sHtml +=         	"<span style='display:inline-block;color:#fff;font-weight:bold;margin-bottom:15px;'>자료 생성중입니다.</span>";
	sHtml +=            "<img src='/resources/svc/images/loading2.gif' alt='로딩바' style='width:128px;height:15px;'/>";
	sHtml +=        "</p>";
	sHtml +=     "</div>";

	$('body').append(sHtml);
    
	$('#divLoading').show();
}
function hideDownLoading(){
	$('#divLoading').remove();
}

//sypark 1251012 폰트크기 조절
function changesize(index){
	$("*").each(function(){
		var currentSize = $(this).css("fontSize");
		var num = parseFloat(currentSize, 10);
		var unit = currentSize.slice(-2); 
		var count = 2;
		if(currentSize){
			var value = 0;
			
			switch (index)
			{
			case "+" : 
				value = num+count+unit;
				$(this).css("fontSize", value);	
				break;
			case "-" : 
				value = num-count+unit;
				$(this).css("fontSize",num-count+unit);
				break;
			}
			
			$("#headerForm #gFontSize").val(value);
		}
	});
}

function changeFontSize(){
	//alert(">> " + $("#headerForm #gFontSize").val());
	if(!isEmpty($("#headerForm #gFontSize").val())){
		$("*").each(function(){
			var currentSize = $(this).css("fontSize");
			if(currentSize){
				$(this).css("fontSize",parseFloat($("#headerForm #gFontSize").val(), 10));	
			}
		});
	}
}


/* 모든 formName  submit 시 gFontSize 파라미터 추가. */
function addFontSizeToFormOnsubmit(formName){
	var form = document.getElementById(formName);
	
	if(!isEmpty(form) && formName != "headerForm"){
		form.onsubmit = function(e)
		{
			$("#"+formName+" #gFontSize").remove();

			$('<input />').attr('type', 'hidden')
						  .attr('id', "gFontSize")
						  .attr('name', "gFontSize")
						  .attr('value', $("#headerForm #gFontSize").val())
						  .appendTo('#' + formName);
			//alert(">>> " + $("#"+formName+" #gFontSize").val());
		    return true;
		};
	}
}

//empty check
function isEmpty(val){
	
	if( val == null || val == "" || val.length == 0 || val == undefined || val == "undefined"){
		return true;
	}
	
	return false;
}


//설명서 다운로드
function downloadManual() {
	$("#downloadForm #menuNo").remove();
	
	// 카탈로그에 메뉴 설정을 하지 않았다면, 현재의 메뉴코드로 조회..
	$('<input />').attr('type', 'hidden')
				  .attr('id', "menuNo")
				  .attr('name', "menuNo")
				  .attr('value', $("#menuNo").val())
				  .appendTo('#downloadForm');
	
	$("#downloadForm").attr("target", "hiddenFrame");
	$("#downloadForm").attr("action", "/download/downloadManual.do").submit();
}

/*사용법
var map = new Map();
map.put("user_id", "atspeed");
-----------------------
map.get("user_id");
*/
Map = function() {
	this.map = new Object();
};

Map.prototype = {
	put : function(key, value) {
		this.map[key] = value;
	},
	get : function(key) {
		return this.map[key];
	},
	containsKey : function(key) {
		return key in this.map;
	},
	containsValue : function(value) {
		for ( var prop in this.map) {
			if (this.map[prop] == value)
				return true;
		}
		return false;
	},
	isEmpty : function(key) {
		return (this.size() == 0);
	},
	clear : function() {
		for ( var prop in this.map) {
			delete this.map[prop];
		}
	},
	remove : function(key) {
		delete this.map[key];
	},
	keys : function() {
		var keys = new Array();
		for ( var prop in this.map) {
			keys.push(prop);
		}
		return keys;
	},
	values : function() {
		var values = new Array();
		for ( var prop in this.map) {
			values.push(this.map[prop]);
		}
		return values;
	},
	size : function() {
		var count = 0;
		for ( var prop in this.map) {
			count++;
		}
		return count;
	}
};


/**
 * 윈도우를 띄운다.
 * 
 * @param url {String} 주소
 * @param target {String} 대상
 * @param options {Object} 특성
 * @param params {Array} 파라메터
 * @returns {Object} 윈도우
 */
function popupWindow(url, target, options, params) {
    var feature = "";
    
    if (options) {
        feature += "top="        + (options.top        != null ? options.top        : "10px" ) + ",";
        feature += "left="       + (options.left       != null ? options.left       : "10px" ) + ",";
        feature += "width="      + (options.width      != null ? options.width      : "400px") + ",";
        feature += "height="     + (options.height     != null ? options.height     : "300px") + ",";
        feature += "resizable="  + (options.resizable  != null ? options.resizable  : "0"    ) + ",";
        feature += "menubar="    + (options.menubar    != null ? options.menubar    : "0"    ) + ",";
        feature += "status="     + (options.status     != null ? options.status     : "0"    ) + ",";
        feature += "scrollbars=" + (options.scrollbars != null ? options.scrollbars : "0"    );
    }
    
    var query = "";
    
    if (params) {
        for (var i = 0; i < params.length; i++) {
            if (i == 0) {
                query += "?";
            }
            else {
                query += "&";
            }
            
            query += params[i].name + "=" + params[i].value;
        }
    }
    
    return window.open(url + query, target ? target : "", feature);
}


//로그인 여부를 가져온다.
function isMemberLogin(){
	var isLogin = false;
	$.ajax({
	     type: 'post',
	     url: "/cmmn/loginStatusCheckAjax.do",
	     async : false,
	     cache : false,
	     dataType : "json",  
	     success: function(data) {
	    	 if(data){
	 			if(data.isLogin == "Y"){
	 				isLogin = true;
	 			}else{
	 				isLogin = false;
	 			}
	 		}else{
	 			isLogin = false;
	 		}
	     },
	     error: function(){
	    	 isLogin = false;
	     }
	     });
	return isLogin;
}


