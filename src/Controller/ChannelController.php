<?php
/**
 * @author: ZhaQiu <34485431@qq.com>
 * @time: 2018/9/11
 */

namespace Controller;

class ChannelController
{

    public function index()
    {
        $response = signaller()->request('service-channel', 'promotions.index');

        return $response;
    }
}