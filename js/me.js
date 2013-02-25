// JavaScript Document
$(function(){
	$(".cls_button").button();
	
	$("#index_search_btn").click(function(){
		if($("#search_start_input").val()=="" || $("#search_dest_input").val()==""){
			return false;
		}else{
			$("#index_search_form").submit();
		}
		
	});
	
	//返回
	$(".cls_goback").click(function(){
		window.history.back();
	});
	
	//关闭页面
	$(".cls_closepage").click(function(){
		window.close();
	});
});
