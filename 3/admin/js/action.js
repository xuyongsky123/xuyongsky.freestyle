$(function(){
	$(".item_click").bind("click",function(){
    	var action=$(this).attr("rel");
        $("#"+action).addClass("show");
    });
});