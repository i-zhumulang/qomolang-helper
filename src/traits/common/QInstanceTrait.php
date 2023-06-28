<?php
// +----------------------------------------------------------------------
// | 
// +----------------------------------------------------------------------
// | Copyright © 2017 版权 All Rights Reserved.
// +----------------------------------------------------------------------
// | Author: 吴荣超
// +----------------------------------------------------------------------
// | Date  : 2023-06-26 17:50
// +----------------------------------------------------------------------
declare(strict_types=1);

namespace Qomolang\Helper\traits\common;

use Exception;

/**
 * Trait QInstanceTrait
 * @package Qomolang\Helper\traits\common
 * @author 吴荣超
 * @date   2023-06-26 17:50
 */
trait QInstanceTrait
{
    /**
     * @var null
     * @author 吴荣超
     * @date   2023-06-26 17:50
     */
    protected static $instance = null;

    /**
     * 获取示例
     *
     * @param array $options 实例配置
     * @return QInstanceTrait|null
     * @author 吴荣超
     * @date   2023-06-26 17:51
     */
    public static function instance($options = [])
    {
        if (is_null(self::$instance)) self::$instance = new self($options);

        return self::$instance;
    }

    /**
     *
     * @param string $method
     * @param array  $params
     * @return mixed
     * @throws Exception
     */
    /**
     * 静态调用
     *
     * @param string $method 调用方法
     * @param array $params 调用参数
     * @return mixed
     * @throws Exception
     * @author 吴荣超
     * @date   2023-06-26 17:51
     */
    public static function __callStatic($method, array $params)
    {
        if (is_null(self::$instance)) self::$instance = new self();

        $call = substr($method, 1);

        if (0 !== strpos($method, '_') || !is_callable([self::$instance, $call])) {
            throw new Exception("method not exists:" . $method);
        }

        return call_user_func_array([self::$instance, $call], $params);
    }
}