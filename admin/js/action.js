$(function(){
	$(".item_click").bind("click",function(){
    	var action=$(this).attr("rel");
        var actionto=$(".group_content").attr("id");
        if(action==actionto){
        	actionto.addClass("show");
        }
    });
});