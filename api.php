<?php
/**
 * Created by PhpStorm.
 * User: nomantufail
 * Date: 10/28/2016
 * Time: 11:27 AM
 */
print_r(json_encode((object)[
    'items'=>[
        (object)[
            'id' => 1,
            'text' => 'hell oevery one'
        ],(object)[
            'id' => 2,
            'text' => 'hell oevery one'
        ],(object)[
            'id' => 3,
            'text' => 'hell oevery one'
        ]
    ],
    'total_count'=>3,
    'incomplete_results'=>false
]));
?>