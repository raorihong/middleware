<?php
/**
 * Created by PhpStorm.
 * User: raorihong
 * Date: 2019/5/8
 * Time: 上午11:37
 */

namespace Mw;


use Curl\Curl;

class Http extends Curl
{
    public function __construct($base_url = null)
    {
        parent::__construct($base_url);
        $logicAuthBearerCode = getenv('LOGIC_AUTH_BEARER_CODE');
        $logicHost = getenv('LOGIC_HOST');
        $logicApiVersion = getenv('LOGIC_API_VERSION');
        if($logicAuthBearerCode) $this->setHeader('Authorization', 'Bearer '.$logicAuthBearerCode);
        if($logicHost) $this->url = $logicHost;
        if($logicApiVersion && $logicHost) $this->url .= $logicApiVersion;
    }
}