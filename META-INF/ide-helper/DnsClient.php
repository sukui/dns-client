<?php

namespace Zan\Framework\Network\Common;

use Zan\Framework\Foundation\Contract\Async;

class DnsClient implements Async
{
    const maxRetryCount = 3;

    /**
     * @return DnsClient
     */
    public static function lookup($host, $callback = null, $timeoutFn = null, $timeout = 100)
    {

    }

    public static function lookupWithoutTimeout($host, $callback)
    {

    }

    public function resolve()
    {

    }


    public function onTimeout($duration)
    {

    }

    public function execute(callable $callback, $task)
    {

    }

    /**
     * 协程调度专用接口
     * @return DnsClient
     */
    public function query($host, $timeout = 100)
    {

    }
}