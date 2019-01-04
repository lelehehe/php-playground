<?php

function mergeProductQuanty($items)
{
    $result = array();

    foreach ($items as $item) {
        if (!array_key_exists($item['product_id'], $result)) {
            $result[$item['product_id']] = $item;
        }
        else {
            $result[$item['product_id']]['quantity'] += $item['quantity'];
        }
    }
    return $result;
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

$data = json_decode($dataStr, true);

$result = mergeProductQuanty($data, 'product_id');
print_r($result);


?>