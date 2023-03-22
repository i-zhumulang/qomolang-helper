<?php
// +----------------------------------------------------------------------
// | 
// +----------------------------------------------------------------------
// | Copyright © 2017 版权 All Rights Reserved.
// +----------------------------------------------------------------------
// | Author: 吴荣超
// +----------------------------------------------------------------------
// | Date  : 2023-03-22 11:05
// +----------------------------------------------------------------------

namespace Qomolang\Helper\interfaces;

/**
 * Interface TimeInterface
 * @package Qomolang\Helper\interfaces
 * @author 吴荣超
 * @date   2023-03-22 11:05
 */
interface TimeInterface
{
    /**
     * 获取当前时间-有缓存
     *
     * @return int
     * @author 吴荣超
     * @date   2023-03-22 10:58
     */
    public function time(): int;

    /**
     * 实时获取当前时间
     *
     * @return int
     * @author 吴荣超
     * @date   2023-03-22 10:59
     */
    public function currentTime(): int;

    /**
     * toDateTime
     *
     * @param int $time
     * @param string $format
     * @return string
     * @author 吴荣超
     * @date   2023-03-22 10:59时间戳转格式化
     */
    public function toDateTime(int $time, string $format = ''): string;
}