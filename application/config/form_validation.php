<?php
$config = array(
    'save_mileage' => array(
        array(
            'field' => 'mileage',
            'label' => 'mileage',
            'rules' => 'required|numeric',
            'errors' => array(
                'required' => '마일리지를 입력해주세요.',
                'numeric' => '마일리지를 숫자로 입력해주세요.'
            ),
        ),
        array(
            'field' => 'type',
            'label' => 'type',
            'rules' => 'required|in_list[SNS,BBS,ORDER,EVENT,ADMIN,LOGIN,COMMENT,INFO,JOIN,LESSON,COUPON,RECOVERY,USE]',
            'errors' => array(
                'required' => '적립 타입을 입력해주세요.',
                'in_list' => '유효한 적립 타입이 아닙니다.'
            )
        )
    )
);
?>