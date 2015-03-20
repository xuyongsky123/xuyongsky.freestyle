<?php session_start(); ?>
<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <style>
            .group_content{
                display:none;
            }
            .show{
                display:block;
            }
        </style>
        
    </head>
    <body>
    	<div id="group_item">
            <ul class="item_ul">
                <li><a href="#tabs-a" class="item_click select_item" rel="select_item">查询商店信息</a></li>
                <li><a href="#tabs-b" class="item_click modify_item" rel="modify_item">修改商店信息</a></li>
                <li><a href="#tabs-c" class="item_click add_item" rel="add_item">增加商店信息</a></li>
                <li><a href="#tabs-d" class="item_click delete_item" rel="delete_item">删除商店信息</a></li>
            </ul>
            <div id="action_content" class="action_content">
            	<div id="select_item" class="group_content">
                    <form id="search_form" action="./info_shop_show.php" method="post">
                        
                        <input name="shop_identify" type="hidden" value="shop_select_item" />
                        
                    	<div class="search_container">
                            <input name="shop_name" type="text" placeholder="商店名称"/>
                        </div>
                        <div class="search_container">
                            <input name="shop_keeper" type="text" placeholder="店主名称"/>
                        </div>
                        <div class="search_container">
                            <input name="shop_type" type="text" placeholder="商店类型名称"/>
                        </div>
                        <div class="search_container">
                            <input name="submit" type="submit" value="商店查询"/>
                            <input name="submit" type="submit" value="全部商店查询"/>
                        </div>
                    </form>
            	</div>
                <div id="modify_item" class="group_content">
                	开发中...
                </div>
                <div id="add_item" class="group_content">
                	<form id="search_form" action="./info_shop_show.php" method="post">
                        
                        <input name="shop_identify" type="hidden" value="shop_add_item" />
                        
                    	<div class="search_container">
                            <input name="shop_name" type="text" placeholder="商店名称"/>
                        </div>
                        <div class="search_container">
                            <input name="shop_keeper" type="text" placeholder="店主名称"/>
                        </div>
                        <div class="search_container">
                            <input name="shop_type" type="text" placeholder="商店类型名称"/>
                        </div>
                        <div class="search_container">
                            <input name="submit" type="submit" value="添加商店"/>
                        </div>
                    </form>
                </div>
                <div id="delete_item" class="group_content">Nam dui era t, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.....</div>
            </div>
        </div> 
        
        <script src="../js/jquery-1.9.1.min.js"></script>
        <script src="./js/action.js"></script>
        
    </body>
</html>
        


       
    
    