<?php session_start(); ?>
<!DOCTYPE html>
<html lang="zh-CN">
    <head>
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
                    <a href="http://www.baidu.com" id="select_shop">按钮<?php echo $_SESSION['username_adminuserfixpassword__']; ?></a>
                    <div id="select_content"></div>
            	</div>
                <div id="modify_item" class="group_content">Phasellus mattis tincidunt nibh. Cras orci urna, blandit id, pretium vel, aliquet ornare, felis. Maecenas scelerisque sem non nisl. Fusce sed lorem in enim dictum bibendum.....</div>
                <div id="add_item" class="group_content">Nam dui era t, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.....</div>
                <div id="delete_item" class="group_content">Nam dui era t, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.....</div>
            </div>
        </div> 
        
        <script src="../js/jquery-1.9.1.min.js"></script>
        <script src="./js/action.js"></script>
    </body>
</html>
        


       
    
    