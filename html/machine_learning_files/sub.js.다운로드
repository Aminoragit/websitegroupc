$(document).ajaxStart(function(){
	//$('body').show();
	showLoading();

}).ajaxStop(function(){
	hideLoading();
	//$('#loading-mask').hide();

});
$( document ).ajaxError(function( event, request, settings ) {
  alert('요청 처리중 문제가 발생했습니다. 잠시 후 다시 이용해주세요.');
  hideLoading();
});