<?php
/**
 * Created by PhpStorm.
 * User: raorihong
 * Date: 2019/5/8
 * Time: 上午11:37
 */

namespace mw;


use Curl\Curl;

class Http extends Curl
{
    public function Say(){
        return 'Say Hello !';
    }
}