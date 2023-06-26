<?php
// +----------------------------------------------------------------------
// | 注册树
// +----------------------------------------------------------------------
// | Copyright © 2017 版权 All Rights Reserved.
// +----------------------------------------------------------------------
// | Author: 吴荣超
// +----------------------------------------------------------------------
// | Date  : 2023-06-26 17:37
// +----------------------------------------------------------------------
declare(strict_types=1);

namespace Qomolang\Helper\helpers;

/**
 * Class QRegister
 *
 * @package Qomolang\Helper\helpers
 * @author 吴荣超
 * @date   2023-06-26 17:37
 */
final class QRegister
{
    /**
     * @var array 对象池
     * @author 吴荣超
     * @date   2023-06-26 17:38
     */
    private static array $objPool = [];

    /**
     * 获取对象池中指定对象
     *
     * @param string $class
     * @param array $vars
     * @return mixed
     * @author 吴荣超
     * @date   2023-06-26 17:38
     */
    public static function get(string $class, $vars = [])
    {
        $key = md5(serialize(['class' => $class, 'args' => $vars]));

        if (!isset(self::$objPool[$key])) {
            self::$objPool[$key] = new $class($vars);
        } else {
            if (false === (self::$objPool[$key] instanceof $class))
                self::$objPool[$key] = new $class($vars);
        }
        return self::$objPool[$key];
    }
}