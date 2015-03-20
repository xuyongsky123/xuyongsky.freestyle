var loaded=false;
$(function(){
	
    $(".item_click").removeClass("active");
    if (!loaded) {
        
        $(".item_click").bind("click",function(){
            $(this).addClass("active");
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