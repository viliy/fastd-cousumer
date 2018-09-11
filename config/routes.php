<?php


route()->get('/channel', 'ChannelController@index');
route()->get('/switch', 'SwitchController@index');
route()->get('/switch_select', 'SwitchController@indexSelect');
