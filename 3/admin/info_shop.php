<!DOCTYPE html>
<html lang="zh-CN">
    <head>
    	
    </head>
    <body>
    	<div id="group_item">
            <ul>
                <li><a href="#tabs-a" rel="select_item">查询商店信息</a></li>
                <li><a href="#tabs-b" rel="modify_item">修改商店信息</a></li>
                <li><a href="#tabs-c" rel="add_item">增加商店信息</a></li>
                <li><a href="#tabs-d" rel="delete_item">删除商店信息</a></li>
            </ul>
            <div id="tabs-a">
                <a href="http://www.baidu.com" id="select_shop">按钮<?php echo $_SESSION['username_adminuserfixpassword__']; ?></a>
                <div id="select_content"></div>
            </div>
            <div id="tabs-b">Phasellus mattis tincidunt nibh. Cras orci urna, blandit id, pretium vel, aliquet ornare, felis. Maecenas scelerisque sem non nisl. Fusce sed lorem in enim dictum bibendum.....</div>
            <div id="tabs-c">Nam dui era t, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.....</div>
            <div id="tabs-d">Nam dui era t, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.....</div>
        </div> 
        <div id="test" style="background:red;height:100px;width:100px;"></div>
        
        <script src="../js/jquery-1.9.1.min.js"></script>
        <script src="./js/action.js"></script>
    </body>
</html>
        


       
    
    