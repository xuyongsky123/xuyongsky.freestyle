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
                            <label>商店类型</label>
                            <select name="shop_type">
                                <option name="shipin" value="食品类">食品类</option>
                                <option name="fuzhuang" value="服装类">服装类</option>
                                <option name="dianzishebei" value="电子设备类">电子设备类</option>
                            </select>
                        </div>
                        <div class="search_container">
                            <input name="sub" type="submit" value="商店查询"/>
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
                            <label>商店类型</label>
                            <select name="shop_type">
                                <option name="shipin" value="食品类">食品类</option>
                                <option name="fuzhuang" value="服装类">服装类</option>
                                <option name="dianzishebei" value="电子设备类">电子设备类</option>
                            </select>
                        </div>
                        <div class="search_container">
                            <label>商店展示上半部分背景</label>
                            <select name="up_color">
                                <option name="palette-turquoise" value="palette-turquoise">palette-turquoise</option>
                                <option name="palette-emerald" value="palette-emerald">palette-emerald</option>
                                <option name="palette-peter-river" value="palette-peter-river">palette-peter-river</option>
                                <option name="palette-amethyst" value="palette-amethyst">palette-amethyst</option>
                                <option name="palette-wet-asphalt" value="palette-wet-asphalt">palette-wet-asphalt</option>
                                <option name="palette-sun-flower" value="palette-sun-flower">palette-sun-flower</option>
                                <option name="palette-carrot" value="palette-carrot">palette-carrot</option>
                                <option name="palette-alizarin" value="palette-alizarin">palette-alizarin</option>
                                <option name="palette-clouds" value="palette-clouds">palette-clouds</option>
                                <option name="palette-concrete" value="palette-concrete">palette-concrete</option>
                            </select>
                        </div>
                        <div class="search_container">
                            <label>商店展示下半部分背景</label>
                            <select name="down_color">
                                <option name="palette-green-sea" value="palette-green-sea">palette-green-sea</option>
                                <option name="palette-nephritis" value="palette-nephritis">palette-nephritis</option>
                                <option name="palette-belize-hole" value="palette-belize-hole">palette-belize-hole</option>
                                <option name="palette-wisteria" value="palette-wisteria">palette-wisteria</option>
                                <option name="palette-midnight-blue" value="palette-midnight-blue">palette-midnight-blue</option>
                                <option name="palette-orange" value="palette-orange">palette-orange</option>
                                <option name="palette-pumpkin" value="palette-pumpkin">palette-pumpkin</option>
                                <option name="palette-pomegranate" value="palette-pomegranate">palette-pomegranate</option>
                                <option name="palette-silver" value="palette-silver">palette-silver</option>
                                <option name="palette-asbestos" value="palette-asbestos">palette-asbestos</option>
                            </select>
                        </div>
                        <div class="search_container">
                            <input name="submit" type="submit" value="添加商店"/>
                        </div>
                    </form>
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
        


       
    
    