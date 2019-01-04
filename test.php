<?php


function unique_multidim_array($array, $key) { 
    $temp_array = array(); 
    $i = 0; 
    $key_array = array(); 
    
    foreach($array as $val) { 
        if (!in_array($val[$key], $key_array)) { 
            $key_array[$i] = $val[$key]; 
            $temp_array[$i] = $val; 
        } 
        $i++; 
    } 
    return $temp_array; 
} 



    $dataStr = 
   ' [
{
"pick_ticket": "ZL4B422D77",
"product_id": "29500076",
"product_name": "Black David Oxford - Boys",
"quantity": 1,
"reason_code": "150122",
"brand_name": "Josmo",
"size": "Toddler 9",
"image_url": "https://cfcdn.zulily.com/images/cache/product/46x1000/121132/zu23400551_main_tm1422302669.jpg",
"order_number": "1017046203"
},
{
"pick_ticket": "ZL4AA2DAAD",
"product_id": "29500074",
"product_name": "Black David Oxford - Boys",
"quantity": 1,
"reason_code": "150122",
"brand_name": "Josmo",
"size": "Toddler 7",
"image_url": "https://cfcdn.zulily.com/images/cache/product/46x1000/121132/zu23400551_main_tm1422302669.jpg",
"order_number": "1017046203"
},
{
"pick_ticket": "ZL4AA2DAAD",
"product_id": "29500074",
"product_name": "Black David Oxford - Boys",
"quantity": 1,
"reason_code": "150122",
"brand_name": "Josmo",
"size": "Toddler 7",
"image_url": "https://cfcdn.zulily.com/images/cache/product/46x1000/121132/zu23400551_main_tm1422302669.jpg",
"order_number": "1017046203"
},
{
"pick_ticket": "ZL4AA2DAAD",
"product_id": "60151674",
"product_name": "Champ Ankle-Strap Sabina Flat - Girls",
"quantity": 1,
"reason_code": "150122",
"brand_name": "Link",
"size": "Little Kid 13",
"image_url": "https://cfcdn.zulily.com/images/cache/product/46x1000/308207/zu60151653_main_tm1535485191.jpg",
"order_number": "1017046203"
}]';

$data = json_decode($dataStr, TRUE);

echo print_r($data);



?>