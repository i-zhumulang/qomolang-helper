<?php
// +----------------------------------------------------------------------
// | 
// +----------------------------------------------------------------------
// | Copyright © 2017 版权 All Rights Reserved.
// +----------------------------------------------------------------------
// | Author: 吴荣超
// +----------------------------------------------------------------------
// | Date  : 2023-03-22 10:42
// +----------------------------------------------------------------------

namespace Qomolang\Helper\helpers;

use Qomolang\Helper\helpers\timer\MicroTime;
use Qomolang\Helper\helpers\timer\Time;
use Qomolang\Helper\interfaces\TimeInterface;

/**
 * Class QTimer
 *
 * @package Qomolang\Helper\helpers
 * @author 吴荣超
 * @date   2023-03-22 10:42
 */
final class QTimer
{
    /**
     * time
     *
     * @return TimeInterface
     * @author 吴荣超
     * @date   2023-03-22 10:49
     */
    public static function time(): TimeInterface
    {
        return Time::instance();
    }

    /**
     * microTime
     *
     * @return TimeInterface
     * @author 吴荣超
     * @date   2023-03-22 10:50
     */
    public static function microTime(): TimeInterface
    {
        return MicroTime::instance();
    }
}