<?php
// +----------------------------------------------------------------------
// | 雪花算法,生成分布式ID
// +----------------------------------------------------------------------
// | Copyright © 2017 版权 All Rights Reserved.
// +----------------------------------------------------------------------
// | Author: 吴荣超
// +----------------------------------------------------------------------
// | Date  : 2023-06-26 17:39
// +----------------------------------------------------------------------
declare(strict_types=1);

namespace Qomolang\Helper\helpers;

/**
 * Class QSnow
 *
 * @package Qomolang\Helper\helpers
 * @author 吴荣超
 * @date   2023-06-26 17:39
 */
final class QSnow
{
    // 2023-02-02 20:10:04
    const EPOCH = 1675339804000;
    const max12bit = 4095;
    const max41bit = 1000000000000;
    public static int $machineId = 1;

    /**
     * QSnow constructor.
     *
     * @author 吴荣超
     * @date   2023-06-26 17:39
     */
    private function __construct()
    {

    }

    /**
     * __clone
     *
     * @author 吴荣超
     * @date   2023-06-26 17:39
     */
    private function __clone()
    {

    }

    /**
     * machineId
     *
     * @param $mId
     * @author 吴荣超
     * @date   2023-06-26 17:39
     */
    public static function machineId($mId)
    {
        self::$machineId = $mId;
    }

    /**
     * generate
     *
     * @return float|int
     * @author 吴荣超
     * @date   2023-06-26 17:40
     */
    public static function generate()
    {
        /*
         * Time - 42 bits
         */
        $time = floor(microtime(true) * 1000);
        /*
         * substract custom epoch from current time
         */
        $time -= self::EPOCH;
        /*
         * Create a base and add time to it
         */
        $base = decbin(self::max41bit + $time);
        /*
         * Configured machine id - 10 bits - up to 1024 machines
         */
        $machineId = str_pad(decbin(self::$machineId), 10, "0", STR_PAD_LEFT);
        /*
         * sequence number - 12 bits - up to 4096 random numbers per machine
         */
        $random = str_pad(decbin(mt_rand(0, self::max12bit)), 12, "0", STR_PAD_LEFT);
        /*
         * Pack
         */
        $base = $base . $machineId . $random;
        /*
         * Return unique time id no
         */
        return bindec($base);
    }

    /**
     * timeFromParticle
     *
     * @param $particle
     * @return float|int
     * @author 吴荣超
     * @date   2023-06-26 17:40
     */
    public static function timeFromParticle($particle)
    {
        /*
         * Return time
         */
        return bindec(substr(decbin($particle), 0, 41)) - self::max41bit - self::max41bit + self::EPOCH;
    }
}