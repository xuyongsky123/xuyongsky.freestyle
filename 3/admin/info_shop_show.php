<?php 
	$arr3 = array('code', 'name', 'add', 'cole4');

    $arr4 = array(" ", " ", " ", "");
    
    //下面用个循环把那些类似下面的数据进行处理，我就不写了
    $arr4[0] = "001";
    $arr4[1] = "Name 1";
    $arr4[2] = "Address 11";
    $arr4[3] = "col4 data";
    $arrtmp = array_combine($arr3, $arr4);
    $arr5 = array();
    array_push($arr5, $arrtmp);搜索
    
    //上面是循环结束，$arr5里的是那些code, name, addr, col4的数据
    $arr2 = array('total'=>"239", 'rows'=>$arr5);
     echo json_encode($arr2);
?>


