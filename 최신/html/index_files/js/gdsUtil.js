// Form 유틸.
var FormUtil = {

    /**
     * 휴대전화 앞자리
     */
    arrMobile: new Array('011', '010', '016', '017', '018', '019'),

    /**
     * 전화번호 앞자리
     */
    arrTel: new Array('02', '031', '032', '033', '041', '042', '043', '044',
        '051', '052', '053', '054', '055', '061', '062', '063', '064', '070'),

    /**
     * 도로명 주소의 17개의 지역
     */
    arrRoadAddr: new Array('강원도', '경기도', '경상남도', '경상북도', '광주광역시', '대구광역시', '대전광역시', '부산광역시',
        '서울특별시', '세종특별자치시', '울산광역시', '인천광역시', '전라남도', '전라북도', '제주특별자치도', '충청남도', '충청북도'),

    arrEmail: new Array('chol.com', 'dreamwiz.com', 'empal.com', 'freechal.com', 'hanafos.com', 'hanmir.com', 'hanmail.net', 'hotmail.com',
        'korea.com', 'kornet.net', 'msn.co.kr', 'nate.com', 'netian.com', 'naver.com', 'orgio.net', 'paran.com', 'yahoo.co.kr', 'google.com', 'gmail.com'),

    /**
     * 서비스 약정기간(최소 1개월, 최장 60개월 )
     */
    getServicePeriod: function () {
        var arrPeriod = new Array();
        for (var int = 1; int < 61; int++) {
            arrPeriod.push(int);
        }

        return arrPeriod;

    },
    /**
     * 년도
     */
    setYear: function(obj){
    	for (var i = DateUtil.getYear(); true; i--) {
    		if(i <= 1899 ){
    			break;
    		}
    		obj.append("<option value='"+i+"'>"+i+"</option>");
		}
    },
    
    /**
     * 월
     */
    setMonth: function(obj){
    	var time = "";
    	for (var i = 0; i <= 12; i++) {
    		
    		if( i <= 9){
    			time = "0"+i;
    		}else{
    			time = i;
    		}
    		
    		obj.append("<option value='"+time+"'>"+time+"</option>");
		}
    },      
    
    /**
     * 시간
     */
    setHour: function(obj){
    	var time = "";
    	for (var i = 0; i < 24; i++) {
    		
    		if( i <= 9){
    			time = "0"+i;
    		}else{
    			time = i;
    		}
    		
    		obj.append("<option value='"+time+"'>"+time+"</option>");
		}
    },    


    /**
     * 숫자만 입력.
     */
    checkNum: function (obj) {
        var flag = false;
        if (isNaN(obj.val())) {
            obj.val("");
            obj.focus();
            flag = true;
        }
        return flag;
    },
    /**
     * 전화 번호 형식으로 변경.
     */
    toPhoneFormat: function (str) {
        var returnStr = "";
        if (str.length == 11) {
            returnStr = str.substring(0, 3) + "-" + str.substring(3, 7) + "-"
            + str.substring(7);
        } else if (str.length == 10) {
            returnStr = str.substring(0, 3) + "-" + str.substring(3, 6) + "-"
            + str.substring(6);
        } else {
            returnStr = str;
        }
        return returnStr;
    },

    /**
     * 핸드폰 번호에 '-' 를 넣는다.
     */
    toMobileFormat: function (str) {
        return str.replace(/^(01[016789]{1}|02|0[3-9]{1}[0-9]{1})-?([0-9]{3,4})-?([0-9]{4})$/, "$1-$2-$3");
    },

    /**
     * 일반전화 번호에 '-' 를 넣는다.
     */
    toTelFormat: function (str) {
        return str.replace(/(^02.{0}|^01.{1}|[0-9]{3})([0-9]+)([0-9]{4})/, "$1-$2-$3");
    },
    
    /**
     * val 문자열의 str 존재여부 확인.
     */
    inStr : function(val, str){
    	var check = val.indexOf("?");
    	if(check === -1){
    		return true;
    	}else{
    		return false;
    	}
    },    

    /**
     * 해당 문자열의 Bytes를 리턴한다.
     */
    getByte: function (s) {
        var sum = 0;
        var len = s.length;
        for (var i = 0; i < len; i++) {
            var ch = s.substring(i, i + 1);
            var en = escape(ch);
            if (en.length <= 4) {
                sum++;
            } else {
                sum += 2;
            }
        }
        return sum;
    },

    /**
     * 입력 값이 유효한 이메일 형식인지를 검사한다.
     */
    checkEmail: function (val) {
        if (val.length > 0) {
            var regExp = /[a-z0-9_-]{2,}@[a-z0-9-]{2,}\.[a-z0-9]{2,}/i;

            if (!regExp.test(val)) {
                return true;
            }
        } else if (val == '') {
            return true;
        }

        return false;
    },

    checkMobile: function (val) {
        if (val.length > 0) {
            var regExp = /^01[016789]\d{3,4}\d{4}$/;

            if (!regExp.test(val)) {
                return true;
            }
        } else if (val == '') {
            return true;
        }

        return false;
    },

    checkPhone: function (val) {
        if (val.length > 0) {
            var regExp = /^\d{2,3}\d{3,4}\d{4}$/;

            if (!regExp.test(val)) {
                return true;
            }
        } else if (val == '') {
            return true;
        }

        return false;
    },

    checkImg: function (val) {
        if (val.length > 0) {
            var regExp = /(.jpg|.jpeg|.gif|.png)$/i;

            if (!regExp.test(val)) {
                return true;
            }
        } else if (val == '') {
            return true;
        }

        return false;
    },

    checkJpeg: function (val) {
        if (val.length > 0) {
            var regExp = /(.jpg|.jpeg)$/i;

            if (!regExp.test(val)) {
                return true;
            }
        } else if (val === '') {
            return false;
        }

        return false;
    },

    checkZip: function (val) {
        if (val.length > 0) {
            var regExp = /(.zip)$/i;

            if (!regExp.test(val)) {
                return true;
            }
        } else if (val == '') {
            return true;
        }

        return false;
    },

    checkExcel: function (val) {
        if (val.length > 0) {
            var regExp = /(.xlsx|.xls)$/i;

            if (!regExp.test(val)) {
                return true;
            }
        } else if (val == '') {
            return true;
        }

        return false;
    },


    /**
     * 숫자와 . 만 입력가능. 소수점 두번째 자리까지 체크한다.
     */
    checkPoint: function (val) {
        var flag = false;
        var regExp = /^[0-9.]*$/i;

        if (!regExp.test(val)) {
            alert("입력글자에 숫자와 점 이외에 다른값이 있습니다.");
            flag = true;
        } else if (5 < val.length) {
            alert("입력글자에 길이가 5보다 큽니다.");
            flag = true;
        } else {
            var temps = val.split(".");
            if (2 < temps.length) {
                alert("소수점이 한개 이상 존재 합니다.");
                flag = true;
            } else {
                if (2 < temps[1].length) {
                    alert("소수점이하 둘째 이상 존재 합니다.");
                    flag = true;
                }
            }
        }
        return flag;
    },

    //한글 영문 바이트수
    byteLength: function (val) {
        var cnt = 0;
        for (var i = 0; i < val.length; i++) {
            var c = escape(val.charAt(i));

            if (c.length == 1) {
                cnt++;
            } else if (c.indexOf("%u") != -1) {
                cnt += 2;
            } else if (c.indexOf("%") != -1) {
                cnt += c.length / 3;
            }
        }
        return cnt;
    },

    /**
     * 비밀 번호 연번 체크
     *
     * @param val
     */
    checkPassword: function (val) {
        for (var i = 0; i < val.length; i++) {
            if (val.charAt(i + 1) != "") {
                if (Math.abs(val.charAt(i) - val.charAt(i + 1)) < 2) {
                    return true;
                }
            }
        }
        return false;
    },

    /**
     * 사업자 번호 유효성 체크
     */
    checkBizNum: function (bizID) {
        var checkID = new Array(1, 3, 7, 1, 3, 7, 1, 3, 5, 1);
        var i, Sum = 0, c2, remander;

        bizID = bizID.replace(/-/gi, '');

        for (i = 0; i <= 7; i++) {
            Sum += checkID[i] * bizID.charAt(i);
        }

        c2 = "0" + (checkID[8] * bizID.charAt(8));
        c2 = c2.substring(c2.length - 2, c2.length);

        Sum += Math.floor(c2.charAt(0)) + Math.floor(c2.charAt(1));

        remander = (10 - (Sum % 10)) % 10;

        if (bizID.length != 10) {
            return true;
        } else if (Math.floor(bizID.charAt(9)) != remander) {
            return true;
        } else {
            return false;
        }
    },

    /**
     * 필수값 체크
     */
    checkReqValue: function (obj) {
        if (obj.val().length == 0) {
            obj.focus();
            return true;
        }
        return false;
    },
    
    pageValidCheck : function(obj){
    	var flag = false;
		if($(this).attr("valid") == "Y"){
			var title = $(this).parent().prev().children().html();
			var thisVal = $(this).val();
			if( thisVal == "" || thisVal.length == 0 ){
				alert(title + " 은(는) 필수 값 입니다.");
				$(this).focus();
				flag = true;
				return false;
			}
		}
    	return flag;
    },
    

    /**
     * 전화번호 자리수 체크
     */
    checkPhoneNumLength: function (val) {
        if (val.length == 11 || val.length == 10 || val.length == 9) {
            return false;
        }
        return true;
    },


    deleteLastChar: function (val, ch) {
        return val.substring(0, val.lastIndexOf(ch));
    },

    /**
     * 날짜 형식에 맞게 변경.
     * @param date 현재 날짜(yyyyMMddhhmm형식)
     * @param format (yyyyMMdd, yyyyMMddhhmm, yyyyMMddHHmmss)
     * @param splitStr (ko 또는 split할 문자)
     * @returns {String}
     */
    convertStrToDateFormat: function (date, format, splitStr) {
        var rtnDate = '';
        if ("yyyyMMdd" == format) {
            if (date.length >= 8) {
                if ("" == splitStr) {
                    rtnDate += date.substring(0, 4) + date.substring(4, 6)
                    + date.substring(6, 8);
                } else {
                    if ("ko" == splitStr) {
                        rtnDate += date.substring(0, 4) + "년 ";
                        rtnDate += date.substring(4, 6) + "월 ";
                        rtnDate += date.substring(6, 8) + "일";
                    } else {
                        rtnDate += date.substring(0, 4) + splitStr;
                        rtnDate += date.substring(4, 6) + splitStr;
                        rtnDate += date.substring(6, 8);
                    }
                }
            } else {
                rtnDate = date;
            }
        } else if ("yyyyMMddHHmm" == format) {
            if (date.length >= 12) {
                if ("" == splitStr) {
                    rtnDate += date.substring(0, 4) + date.substring(4, 6)
                    + date.substring(6, 8) + date.substring(8, 10)
                    + date.substring(10, 12);
                } else {
                    if ("ko" == splitStr) {
                        rtnDate += date.substring(0, 4) + "년 ";
                        rtnDate += date.substring(4, 6) + "월 ";
                        rtnDate += date.substring(6, 8) + "일 ";
                        rtnDate += date.substring(8, 10) + "시 ";
                        rtnDate += date.substring(10, 12) + "분 ";
                    } else {
                        alert(date);
                        rtnDate += date.substring(0, 4) + splitStr;
                        rtnDate += date.substring(4, 6) + splitStr;
                        rtnDate += date.substring(6, 8) + " ";
                        rtnDate += date.substring(8, 10) + ":";
                        rtnDate += date.substring(10, 12);
                    }
                }
            } else {
                rtnDate = date;
            }
        } else if ("yyyyMMddHHmmss" == format) {
            if (date.length >= 14) {
                if ("" == splitStr) {
                    rtnDate += date.substring(0, 4) + date.substring(4, 6)
                    + date.substring(6, 8) + date.substring(8, 10)
                    + date.substring(10, 12) + date.substring(12, 14);
                } else {
                    if ("ko" == splitStr) {
                        rtnDate += date.substring(0, 4) + "년 ";
                        rtnDate += date.substring(4, 6) + "월 ";
                        rtnDate += date.substring(6, 8) + "일 ";
                        rtnDate += date.substring(8, 10) + "시 ";
                        rtnDate += date.substring(10, 12) + "분 ";
                        rtnDate += date.substring(12, 14) + "초 ";
                    } else {
                        rtnDate += date.substring(0, 4) + splitStr;
                        rtnDate += date.substring(4, 6) + splitStr;
                        rtnDate += date.substring(6, 8) + " ";
                        rtnDate += date.substring(8, 10) + ":";
                        rtnDate += date.substring(10, 12) + ":";
                        rtnDate += date.substring(12, 14);
                    }
                }
            } else {
                rtnDate = date;
            }
        } else {
        }
        return rtnDate;
    }

};

// Data 유틸.
var DateUtil = {
    /**
     * 현재 날짜를 가져온다.
     */
    getTimeStamp: function () {
        var d = new Date();
        var s = DateUtil.leadingZeros(d.getFullYear(), 4) + '-'
            + DateUtil.leadingZeros(d.getMonth() + 1, 2) + '-'
            + DateUtil.leadingZeros(d.getDate(), 2) + ' ' +

            DateUtil.leadingZeros(d.getHours(), 2) + ':'
            + DateUtil.leadingZeros(d.getMinutes(), 2) + ':'
            + DateUtil.leadingZeros(d.getSeconds(), 2);

        return s;
    },
    /**
     * 현재 년도를 가져온다.
     */
    getYear : function(){
    	var d = new Date();
    	return DateUtil.leadingZeros(d.getFullYear(), 4);
    },    
    /**
     * 날짜 타입으로 변경.
     */
    leadingZeros: function (n, digits) {
        var zero = '';
        n = n.toString();

        if (n.length < digits) {
            for (i = 0; i < digits - n.length; i++)
                zero += '0';
        }
        return zero + n;
    },
    /**
     * 1주일, 15일, 1달 날짜 표기
     */
    getCalculatedDate: function (iYear, iMonth, iDay, seperator) {
        //현재 날짜 객체를 얻어옴.
        var gdCurDate = new Date();
        //현재 날짜에 날짜 게산.
        gdCurDate.setYear(gdCurDate.getFullYear() + iYear);
        gdCurDate.setMonth(gdCurDate.getMonth() + iMonth);
        gdCurDate.setDate(gdCurDate.getDate() + iDay);

        //실제 사용할 연, 월, 일 변수 받기.
        var giYear = gdCurDate.getFullYear();
        var giMonth = gdCurDate.getMonth() + 1;
        var giDay = gdCurDate.getDate();
        //월, 일의 자릿수를 2자리로 맞춘다.
        giMonth = "0" + giMonth;
        giMonth = giMonth.substring(giMonth.length - 2, giMonth.length);
        giDay = "0" + giDay;
        giDay = giDay.substring(giDay.length - 2, giDay.length);
        //display 형태 맞추기.
        return giYear + seperator + giMonth + seperator + giDay;
    }
    ,getToday : function(){
		var now = new Date();
		return this.getYMDDate(now);
	}
	/**
	 * 날짜를 지정된 값만큼 더한후 가져온다.
	 * @date 날짜 
	 * @differenceVal 더하는 수 -는 빼는 수
	 * @flag 년,월,일 플래그 값 1 : 년, 2: 월 그외 일
	 */
	,getAddDate : function(date, differenceVal, flag){
		var d = date; 
		if(differenceVal != null){
			if(flag == 1){
				d.setFullYear(date.getFullYear() + differenceVal);
			}else if(flag == 2){
				d.setMonth(d.getMonth() + differenceVal);
			}else{
				d.setDate(d.getDate() + differenceVal);
			}
		}
		return d;
	}
	,getYMDDate : function(date){
		var year = date.getFullYear();
		var mon = (date.getMonth() + 1) > 9 ? '' + (date.getMonth() + 1) : '0' + (date.getMonth() + 1);
		var day = date.getDate() > 9 ? '' + date.getDate() : '0' + date.getDate();
		return year + "" +  mon + "" + day;
	}

};

//Chart 유틸.
var ChartUtil = {

    getChart: function (dataList, id) {
        var opt = {
            background: {opacity: 0}
            ,
            chartArea: {top: 20, right: 20, bottom: 20, left: 20}
            ,
            title: ''
            ,
            tooltip: true
            ,
            legend: {position: 'bottom'}
            ,
            legendTextStyle: {color: '#000000', fontName: 'Gulim', fontSize: 12}
            ,
            legendBackground: {margin: 2}
            ,
            tooltipBackground: {opacity: 0.7}
            ,
            tooltipText: 'all'
            ,
            colors: ['#2a89be', '#aba823', '#cd504a', '#5a8492', '#b5552e', '#3e5986', '#7a5f46', '#5d71a7', '#368178', '#804f92']
            ,
            xAxis: {
                showTextEvery: 'auto'
                , textStyle: {color: '#828282', fontName: 'Gulim', fontSize: 12}
                , name: ' '
                , nameTextStyle: {color: '#828282'}
            }
            ,
            yAxis: {
                name: ''
                , nameTextStyle: {color: '#828282', fontName: 'Gulim', fontSize: 12}
                , textStyle: {color: '#828282', fontName: 'Gulim', fontSize: 12}
            }

        };
        var chart1 = new GLChart.Line(id);
        chart1.setDataJson(dataList);
        chart1.render(opt);
    },

    getMultiChart: function (dataList, id) {
        var opt = {
            background: {opacity: 0}
            , chartArea: {top: 20, right: 20, bottom: 20, left: 20}
            , title: ''
            , tooltip: true
            , legend: {position: 'bottom'}
            , legendTextStyle: {color: '#000000', fontName: 'Gulim', fontSize: 12}
            , legendBackground: {margin: 2}
            , tooltipBackground: {opacity: 0.7}
            , tooltipText: 'all'
            , colors: ['#2a89be', '#aba823']
            , xAxis: {
                showTextEvery: 'auto'
                , textStyle: {color: '#828282', fontName: 'Gulim', fontSize: 12}
                , name: ' '
                , nameTextStyle: {color: '#828282'}
            }
            , yAxis: {
                name: ''
                , nameTextStyle: {color: '#828282', fontName: 'Gulim', fontSize: 12}
                , textStyle: {color: '#828282', fontName: 'Gulim', fontSize: 12}
            }
            , theme: {
                seriesGradientStyle: 2
            }
            , columnShadow: true
            , series: {
                0: {type: 'column', lineType: 'normal'}
                ,
                1: {
                    type: 'line',
                    pointSize: 2,
                    pointType: 'downTriangle',
                    lineType: 'normal',
                    lineWidth: 2,
                    areaOpacity: 0.5
                }
            }
        };
        var chart1 = new GLChart.SingleYCombination(id);
        chart1.setDataJson(dataList);
        chart1.render(opt);
    }
};

var TableUtil = {
    // 아래 함수는 몇 가지 제약이 있다. 이 프로젝트 전용이다.
    sortingTable: function (tableId, dir, tdPrefix) {
        var table = $("#" + tableId);
        var rowCount = table.find("tr").length;

        if (rowCount <= 1) {
            return;
        }

        var ds = {
            compValue: "",
            tr: null
        };

        var dsArr = [];
        var trId, tdId, newDs;
        var i, j;
        var dsArrayLength;
        var beforeTr;
        var currentTr;
        for (i = 1; i < rowCount; i++) {
            trId = "tr_" + i;
            tdId = tdPrefix + i;
            newDs = Object.create(ds);
            newDs.compValue = document.getElementById(tdId).textContent;
            newDs.tr = $("#" + trId);
            dsArr.push(newDs);
        }

        if (dir === "ASC") {
            dsArr.sort(function (a, b) {
                return (a.compValue.localeCompare(b.compValue));
            });
        } else {
            dsArr.sort(function (a, b) {
                return (b.compValue.localeCompare(a.compValue));
            });
        }

        dsArrayLength = dsArr.length;
        beforeTr = dsArr[0].tr;

        for (j = 1; j < dsArrayLength; j++) {
            currentTr = dsArr[j].tr;
            currentTr.insertAfter(beforeTr);
            beforeTr = currentTr;
        }
    }
};

//페이징 유틸
var PaginUtil = {
		/**
		 * 행번호를 반환한다.
		 * 
		 * @param count {Number} 검색 카운트
		 * @param page {Number} 페이지 번호
		 * @param rows {Number} 페이지 크기
		 * @returns {Number} 행번호
		 */
		getRowNumber : function(count, page, rows){
			var pages =  Math.floor(count / rows) + (count % rows > 0 ? 1 : 0);
		    var index = (page > pages ? pages : page) - 1;
		    return count - (index * rows);
		}
		/**
		 * 페이징을 처리한다.
		 * 
		 * @param count {Number} 검색 카운트
		 * @param page {Number} 페이지 번호
		 * @param rows {Number} 페이지 크기
		 */
		,paging : function(count, page, rows){
			
			var list = $(".paging");
		    
		    list.find("li").each(function(index, element) {
		        $(this).remove();
		    });
		    
		    var item;
		    
		    if (count > 0) {
		        var pages = Math.floor(count / rows) + (count % rows > 0 ? 1 : 0);
		        
		        var index = (page > pages ? pages : page) - 1;
		        
		        var first = Math.floor(index / 10) * 10 + 1;
		        
		        item = $("<li class=\"first_page\"><a href=\"#none\" title=\"처음페이지\">«</a></li>");
		        
		        if (index > 0) {
		            // 처음으로 버튼에 클릭 이벤트를 바인딩한다.
		            item.find("a").bind("click", function(event) {
		                // 페이지를 변경한다.
		                changePage(1);
		            });
		        }
		        list.append(item);
		        
		        item = $("<li class=\"prev_page\"><a href=\"#none\" title=\"이전페이지\">‹</a></li>");
		        		        
		        if (index > 0) {
		            // 이전페이지 버튼에 클릭 이벤트를 바인딩한다.
		            item.find("a").bind("click", function(event) {
		                // 페이지를 변경한다.
		            	var n = parseInt($(".pagination ul > .active > a").text()) -1;
		            	if(n < 0) n = 1; 
		                changePage(n);
		            });
		        }
		        
		        list.append(item);
		        
		        for (var i = 0, n = first; i < 10; i++, n++) {            
		            if (n == index + 1) {
		            	list.append("<li class=\"active\"><a href=\"#none\" style=\"cursor:text;\" title=\"" + n + "페이지\">" + n + "</a></li>");
		            }else {
		                item = $("<li><a href=\"#none\" style=\"cursor:pointer;\" title=\"" + n + "페이지\">" + n + "</a></li>");
		                item.bind("click", function(event) {
		                    // 페이지를 변경한다.
		                    changePage(parseInt($(this).text()));
		                });
		                list.append(item);
		            }
		            
		            if (n == pages) {
		                break;
		            }
		        }
		        
		        item = $("<li class=\"next_page\"><a href=\"#none\" title=\"다음페이지\">›</a></li>");
		        if (index < pages - 1) {
		            // 다음페이지 버튼에 클릭 이벤트를 바인딩한다.
		            item.find("a").bind("click", function(event) {
		                // 페이지를 변경한다.
		            	var n = parseInt($(".pagination ul > .active > a").text()) +1;
		            	if(n > pages) n = pages; 
		                changePage(n);
		            });
		        }
		        list.append(item);
		        
		        item = $("<li class=\"last_page\"><a href=\"#none\" title=\"마지막페이지\">»</a></li>");
		        if (index < pages - 1) {
		            // 끝으로 버튼에 클릭 이벤트를 바인딩한다.
		            item.find("a").bind("click", function(event) {
		                // 페이지를 변경한다.
		                changePage(pages);
		            });
		        }
		        
		        list.append(item);
		    }
		    else {
		        var html = "";
		        html += "<li class=\"first_page\"><a href=\"#none\" title=\"처음페이지\">«</a></li>";
		        html += "<li class=\"prev_page\"><a href=\"#none\" title=\"이전페이지\">‹</a></li>";
		        html += "<li><a href=\"#none\" title=\"\"></a></li>";
		        html += "<li class=\"next_page\"><a href=\"#none\" title=\"다음페이지\">›</a></li>";
		        html += "<li class=\"last_page\"><a href=\"#none\" title=\"마지막페이지\">«</a></li>";
		        list.html(html);
		    }
		}
};
//$(window).height() : 브라우저 뷰포트(viewport - 현재 보여지는 화면 영역)의 높이 값을 리턴합니다.
//$(this).outerHeight() : 객체의 border와 padding 영역을 포함한 높이 값을 리턴합니다. 참고로 outerHeight() 함수에는 boolean 타입의 인자를 파라메터로 넘겨줄 수 있는데, true값을 넘겨주는 경우, border + padding + margin 영역을 포함한 객체의 높이 값을 리턴합니다.
//$(window).scrollTop() : 브라우저에서 현재 페이지의 스크롤된 높이 값을 리턴합니다. (즉 현재 보여지는 화면 위쪽으로 보여지지 않는 영역의 길이라고 보면 됩니다.)
//Math.max(0, x) : 두 수 중 큰 값을 반환합니다. 즉 top 위치가 0보다는 작아질 수 없게하는 처리입니다.
jQuery.fn.center = function () {
	 this.css("position","absolute");
	 this.css("top", ((jQuery(window).height() - this.outerHeight()) / 2) + jQuery(window).scrollTop() + "px");
	 this.css("left", ((jQuery(window).width() - this.outerWidth()) / 2) + jQuery(window).scrollLeft() + "px");
    return this;
}

jQuery.fn.center2 = function () {
	 this.css("position","absolute");
	 this.css("top", ((jQuery(window).height() - this.outerHeight()) / 2) + jQuery(window).scrollTop()+100 + "px");
	 this.css("left", ((jQuery(window).width() - this.outerWidth()) / 2) + jQuery(window).scrollLeft()+100 + "px");
   return this;
}

/**
 * 레이어 유틸
 */
var LayerUtil = {
		show : function(html, drag){
			  $('#divPopupTemp').remove();
	      	  var pop = $('<div id="divPopupTemp">'+html+'</div>');
	      	  $('body').append($(pop).clone());
	      	  $('#divPopupTemp').center();
	      	  if(!drag) {
	      		  $('#divPopupTemp').draggable({
		      		  scroll: false,
		      		  handle : '.datapop-header'
	      		  });
	      	  }
	      	  pop = null;
		},
		hide : function(){
			$('#divPopupTemp').remove();
		},
		openStaticLayer : function(page){
			$.ajax({
			      type: 'post',
			      url: "/cmmn/static/staticLayer.do",
			      data: {page: page},
			      dataType : "html",  
			      success: function(data) {
			    	  LayerUtil.show(data);
			      },
			      error: function(){
			    	  LayerUtil.hide();
			      }
			    }); 
		}
}

var LayerUtil2 = {
		show : function(html, drag){
			  $('#divPopupTemp2').remove();
	      	  var pop = $('<div id="divPopupTemp2">'+html+'</div>');
	      	  $('body').append($(pop).clone());
	      	  $('#divPopupTemp2').center2();
	      	  if(!drag) {
	      		  $('#divPopupTemp2').draggable({
		      		  scroll: false,
		      		  handle : '.datapop-header'
	      		  });
	      	  }
	      	  pop = null;
		},
		hide : function(){
			$('#divPopupTemp2').remove();
		},
		openStaticLayer : function(page){
			$.ajax({
			      type: 'post',
			      url: "/cmmn/static/staticLayer.do",
			      data: {page: page},
			      dataType : "html",  
			      success: function(data) {
			    	  LayerUtil2.show(data);
			      },
			      error: function(){
			    	  LayerUtil2.hide();
			      }
			    }); 
		}
}

var Message = {
		
		alert : function(msg, h){
			h = h || 30;	
			$('#msgboxDiv').remove();
			$('body').append('<div id="msgboxDiv"></div>');
			var settings = {
					title : "알림",
					messageText : msg, 
					messageType : 'alert',
					height : h, 
					width : 400,
					okLabel : '확인',
				    OkCallback : function() {
						$('#msgboxDiv').remove();
				    },
		    		onClose : function() {
						$('#msgboxDiv').remove();
		    		}
			};
			$('#msgboxDiv').messagebox(settings).click();
			$('.msgwrapper').css('top', '35%');
		},

		// confirm 창 디자인
		confirm : function (msg, yesCallback, noCallback, width, height){ 
			$('#confirmboxDiv').remove();
			$('body').append('<div id="confirmboxDiv"></div>');
			
			var w = 400;
			var h = 30;
			
			if(width != null) w = width; 
			if(height != null ) h = height; 
			
			var settings = {
					title : "확인",
					messageText : msg, 
					messageType : 'confirm',
					height : h, 
					width : w,
					okLabel : '확인',
					cancelLabel : '취소',
					closeLabel : '닫기',
				    OkCallback : function() {
						$('#confirmboxDiv').remove();
				    	if(yesCallback != null){
				    		eval(yesCallback+"();");
				    	}
						return true;
				    },
		    		onClose : function() {
						$('#confirmboxDiv').remove();
						return false;
		    		},
		    		onCancel : function() {
						$('#confirmboxDiv').remove();
				    	if(noCallback != null){
				    		eval(noCallback+"();");
				    	}
						return false;
		    		}
			};
			$('#confirmboxDiv').messagebox(settings).click();
			$('.msgwrapper').css('top', '35%');
		},
		getMesssage : function(code, args){
			var message = eval(code);
		    
		    if (args) {
		        for (var i = 0; i < args.length; i++) {
		            message = message.replace("\\{" + i + "\\}", args[i]);
		        }
		    }
		    
		    return message;
		}
}

CookieUtil = {
		//쿠키 저장
		setCookie: function(name, value, expiredays){
			var todayDate = new Date();
		    todayDate.setDate( todayDate.getDate() + expiredays );
		    document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";";
		},
		//쿠키를 가져온다.
		getCookie: function(name){
			var nameOfCookie = name + "=";
			var x = 0;
			while(x <= document.cookie.length){
				var y = (x+nameOfCookie.length);
				if(document.cookie.substring(x,y) == nameOfCookie) {
					if((endOfCookie=document.cookie.indexOf(";", y)) == -1)
						endOfCookie = document.cookie.length;
					return unescape( document.cookie.substring(y, endOfCookie));
				}
				x = document.cookie.indexOf(" ", x) + 1;
				if(x == 0)
					break;
			}
			return "";
		}

		
}
