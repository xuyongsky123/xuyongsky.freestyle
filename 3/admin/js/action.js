
$(function(){
	
        $(".item_click").bind("click",function(){
            $(".item_click").removeClass("active");
            $(this).addClass("active");
            $(".group_content").removeClass("show");
            var action=$(this).attr("rel");
            alert(action);
            //alert("#"+action);
            $("#"+action).addClass("show");
            //var a=$("#"+action).attr("class");
            //alert(a);
        });
});