var loaded=false;
$(function(){
    
    if (!loaded) {
        
        $(".item_click").bind("click",function(){
            $(".item_click").removeClass("active");
            
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
function getData(){
                if(!loaded){
                	alert("running");
                    $("#search_form").submit();
                    $.get("./info_shop_show.php",$("#search_form").serialize(),
                        function(data){
                        alert(data);
                    	}
                    ); 
                }
                
            };