<?php
/**
 * @author: ZhaQiu <34485431@qq.com>
 * @time: 2018/9/11
 */

namespace Controller;


class SwitchController
{

    public function index()
    {
        $response =  signaller()->request('service-language-switch', '/v1/switch', ['以后'], [
            'headers' => [
                'x_consumer_custom_id' => 1,
                'accept_language' => 'zh-TW'
            ],
            'body' => '以后'
        ]);

        return $response;
    }
}