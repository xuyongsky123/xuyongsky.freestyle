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
                <li><a href="#tabs-a" class="item_click select_item" rel="select_item">查询商品信息</a></li>
                <li><a href="#tabs-b" class="item_click modify_item" rel="modify_item">修改商品信息</a></li>
                <li><a href="#tabs-c" class="item_click add_item" rel="add_item">增加商品信息</a></li>
                <li><a href="#tabs-d" class="item_click delete_item" rel="delete_item">删除商品信息</a></li>
            </ul>
            <div id="action_content" class="action_content">
            	<div id="select_item" class="group_content">
                    开发中...
            	</div>
                <div id="modify_item" class="group_content">
                	开发中...
                </div>
                <div id="add_item" class="group_content">
                    开发中...
                </div>
                <div id="delete_item" class="group_content">
                    开发中...
                </div>
            </div>
        </div> 
        
        <script src="../js/jquery-1.9.1.min.js"></script>
        <script src="./js/action.js"></script>
    </body>
</html>
        


       
    
    