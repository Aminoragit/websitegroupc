/*
// 날짜 보이기/
function datePickerShow(id){
	$('#'+id).datepicker('show');
}
var thisDate = new Date();
	var today = thisDate.getFullYear() + "" + fn_putZero(thisDate.getMonth()+1, 2) + "" + fn_putZero(thisDate.getDate(), 2); 

	$("#startYear").val(today);
	$("#endYear").val(today);
	
	*/
// 대분류 선택시 중분류 조회			
$(document).on("change", "#lrgClssCd", function(){
	$("select[name='dataFormCd'] option").remove();  // 옵션 제거	
	$("select[name='dataFormCd']").append('<option value="">선택</option>');
	
	var lrgClssCd = $("select[name='lrgClssCd'] > option:selected").val();
	$("#elementCd").val(lrgClssCd);
	$("#upperCmmnCode").val("");
	
    $.ajax({
	     url:"/adm/cmmn/selectMddlClssClCdAjax.do",	     
	     type:"post",
	     dataType:"json",
	     data:{lrgClssCd: $("select[name='lrgClssCd'] > option:selected").val()},
	     success: function(data) {				      
	    	  $("select[name='mddlClssCd'] option").remove();  // 옵션 제거
	    	  $("select[name='mddlClssCd']").append('<option value="" >선택</option>');		    	  
		      $(data).each(function(index, item) {				       					       	
		    	  $("select[name='mddlClssCd']").append('<option value="' + item.mddlClssCd + '" >' + item.mddlClssNm + '</option>');
		      });
	     },
		 error: function(data){
			 	alert("관리자에게 문의하세요.");
	 			return;
    	 }
	});
});

$(document).on("change", "#mddlClssCd", function(){
	var mddlClssCd = $("select[name='mddlClssCd'] > option:selected").val();
	$("#upperCmmnCode").val("F005");
	
	if(mddlClssCd == "SFC01"){	//지상관서
		$("#cmmnCode").val("F00501,F00502");
	//} 
	//else if(mddlClssCd == "SFC020" || mddlClssCd == "CCI010" || mddlClssCd == "CCI020" 
	//	   || mddlClssCd == "CCI030" || mddlClssCd == "CCI040" || mddlClssCd == "CCI050"
	//	   || mddlClssCd == "OGD030" || mddlClssCd == "WRN010" ){	// 방재
	//	$("#cmmnCode").val("F00501,F00502,F00503");
	} else if(mddlClssCd == "HR01"  || mddlClssCd == "SEA01"  || mddlClssCd == "SEA02"){	// 라디오존데
		$("#cmmnCode").val("F00502");
	} else if(mddlClssCd == "HR02"){	// 윈드프로파일러
		$("#cmmnCode").val("F00503");
	} else if(mddlClssCd == "OGD03"){	// 북한
		$("#cmmnCode").val("F00501,F00502");
	}  else {
		$("#cmmnCode").val("F00501,F00502,F00503");
	}
	
	// 자료형태 공통 조회
	$.ajax({
	     url:"/cmmn/selectCmmnCode.do",
	     type:"post",
	     dataType:"json",	   			  
	     data:{upperCmmnCode:$("#upperCmmnCode").val(),cmmnCode:$("#cmmnCode").val()},
	     success: function(data) {			    	 		     
	    	  $("select[name='dataFormCd'] option").remove();  // 옵션 제거
	    	  $("select[name='dataFormCd']").append('<option value="">선택</option>');
		      $(data).each(function(index, item) {	   				    	  
		    	  	$("select[name='dataFormCd']").append('<option value="' + item.cmmnCode + '">' + item.codeNm + '</option>');
		      });
	     },
		 error: function(data){
			 	alert("관리자에게 문의하시기 바랍니다.");
     			return;
    	 }
	});
});



function stnGrpPopup(formNm){
	    var aform = document.getElementById(formNm);
		if($("select[name='lrgClssCd'] > option:selected").val() == "" ){
			alert("대분류 선택하세요.");
			return;
		}
		
		if( $("select[name='mddlClssCd'] > option:selected").val() == ""){
			alert("중분류를 선택하세요.");
			return;
		}
		$("#txtStnNm").val("");
		
		window.open("","stnGrpPopup","width=440,height=640, toolbar=no,menubar=no,location=no,scrollbars=yes,status=no");
		
		aform.action = "/svc/cmmn/stnGroupPopup.do";
		aform.target = "stnGrpPopup";
		aform.method = "post";
		aform.submit();
}

/*
*	요소 그룹 팝업
*/
function elementGrpPopup(formNm){
	var aform = document.getElementById(formNm);
	if($("select[name='lrgClssCd'] > option:selected").val() == "" ){
		alert("대분류 선택하세요.");
		return;
	}
	
	if( $("select[name='mddlClssCd'] > option:selected").val() == ""){
		alert("중분류를 선택하세요.");
		return;
	}

	window.open("","elementGrpPopup","width=440,height=640, toolbar=no,menubar=no,location=no,scrollbars=yes,status=no");
	
	aform.action = "/svc/cmmn/elementGroupPopup.do";
	aform.target = "elementGrpPopup";
	aform.method = "post";
	aform.submit();
}

//지점 트리 값 셋팅
function stnList(_stnIds, formNm){
	
	var aform = document.getElementById(formNm); 
	
	    aform.stnIds.value = "";
	var stnNms = "";
	var stnIds = "";
	
	
	var stnGroupsArr = new Array();
	var stnIdsArr = new Array();
	stnGroupsArr = _stnIds.split(',');
	for(var i=0; i<stnGroupsArr.length;i++){ 
		
		stnIdsArr = stnGroupsArr[i].split('_');
        stnIds += "," + stnIdsArr[1]+"_"+stnIdsArr[2];
        stnNms += "," + stnIdsArr[3];
	}
	aform.txtStnNm.value = stnNms.substring(1);
	aform.stnIds.value = stnIds.substring(1);
	
}

// 요소 트리 값 셋팅
function elementList(_elements, formNm){
	var aform = document.getElementById(formNm); 
    aform.elementGroupSns.value = "";
	var elementNms = ""; 
	var elementCds = "";
	
	var elementGroupArr = new Array();
	var elementArr = new Array();
	var elementGroupSnArr = new Array();
	var elementGroupNmArr = new Array();
	elementGroupArr = _elements.split(',');
	
	for(var i=0; i<elementGroupArr.length;i++){ 
		elementArr = elementGroupArr[i].split('|');
		elementCds += "," + elementArr[3];
		
	    elementNms += "," + elementArr[1];
	   // elementGroupNms += "," + "\""+elementArr[4]+"\"";
	    elementGroupNmArr[i]=elementArr[4];
	    elementGroupSnArr[i] = elementArr[3];
	}
	
	var uniqueNames = [];
	$.each(elementGroupNmArr, function(i, el){
	        if($.inArray(el, uniqueNames) === -1) uniqueNames.push(el);
	});
	var uniqueGroupSn = [];
	$.each(elementGroupSnArr, function(i, el){
	        if($.inArray(el, uniqueGroupSn) === -1) uniqueGroupSn.push(el);
	});
	
	
	aform.txtElementNm.value = uniqueNames;
	aform.elementGroupSns.value = uniqueGroupSn;
}





