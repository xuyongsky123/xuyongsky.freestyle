var loaded=false;
$(function(){
	
    if (!loaded) {
        $(".item_click").bind("click",function(){
            $(".group_content").removeClass("show");
            var action=$(this).attr("rel");
            //alert(action);
            //alert("#"+action);
            $("#"+action).addClass("show");
            //var a=$("#"+action).attr("class");
            //alert(a);
        });
        loaded = true;
    } 
});