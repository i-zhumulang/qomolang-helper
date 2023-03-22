<?php
// +----------------------------------------------------------------------
// | 
// +----------------------------------------------------------------------
// | Copyright © 2017 版权 All Rights Reserved.
// +----------------------------------------------------------------------
// | Author: 吴荣超
// +----------------------------------------------------------------------
// | Date  : 2023-03-22 10:47
// +----------------------------------------------------------------------

namespace Qomolang\Helper\helpers\timer;

use Qomolang\Helper\abstracts\TimeAbstract;
use Qomolang\Helper\interfaces\TimeInterface;
use Qomolang\Helper\traits\QInstanceTrait;

/**
 * Class Time
 *
 * @package Qomolang\Helper\helpers\timer
 * @author 吴荣超
 * @date   2023-03-22 10:47
 */
final class Time extends TimeAbstract implements TimeInterface
{
    use QInstanceTrait;

    /**
     * @inheritDoc
     */
    public function time(): int
    {
        if (!$this->time) {
            $this->time = time();
        }
        return $this->time;
    }

    /**
     * @inheritDoc
     */
    public function currentTime(): int
    {
        return time();
    }

    /**
     * @inheritDoc
     */
    public function toDateTime(int $time, string $format = ''): string
    {
        if (!$format)
            $format = 'Y-m-d H:i:s';
        return date($format, $time);
    }
}