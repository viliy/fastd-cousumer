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
        $response =  signaller()->request('demo', '/demo', ['以后'], [
            'headers' => [
                'x_consumer_custom_id' => 1,
                'accept_language' => 'zh-TW'
            ],
            'body' => '以后'
        ]);

        return $response;
    }

    public function indexSelect()
    {
        $sdk =  signaller()->asyncRequest('demo', 'demo', ['以后'], [
            'headers' => [
                'x_consumer_custom_id' => 1,
                'accept_language' => 'zh-TW'
            ],
            'body' => '以后'
        ]);

        $sdk->asyncRequest('demo', 'demo', ['我们以后'], [
            'headers' => [
                'x_consumer_custom_id' => 1,
                'accept_language' => 'zh-TW'
            ],
        ]);

        $responses = $sdk->select();

        foreach ($responses as $response) {
            $info[] = $response->toArray();
        }

        return json($info ?? []);
    }
}