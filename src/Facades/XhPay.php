<?php

namespace alapi\XhPay\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class XhPay
 * @author alone88
 * @link https://www.alapi.cn
 * @package alapi\XhPay\Facades
 */
class XhPay extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'xhpay';
    }
}