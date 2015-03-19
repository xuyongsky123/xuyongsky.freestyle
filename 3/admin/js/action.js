var loaded=false;
$(function(){
	$(".item_click").bind("click",function(){
    	var action=$(this).attr("rel");
        alert(action);
        alert("#"+action);
        $("#"+action).addClass("show");
        var a=$("#"+action).attr("class");
        alert(a);
    });
});