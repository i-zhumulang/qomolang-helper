<?php
// +----------------------------------------------------------------------
// | 
// +----------------------------------------------------------------------
// | Copyright © 2017 版权 All Rights Reserved.
// +----------------------------------------------------------------------
// | Author: 吴荣超
// +----------------------------------------------------------------------
// | Date  : 2023-06-26 20:44
// +----------------------------------------------------------------------
declare(strict_types=1);

namespace Qomolang\Helper\interfaces;

/**
 * Interface QRedisInterface
 *
 * @package Qomolang\Helper\interfaces
 * @author 吴荣超
 * @date   2023-06-26 20:44
 */
interface QRedisInterface
{
    /**
     * 从redis获取
     *
     * @param array $params
     * @return array
     * @author 吴荣超
     * @date   2023-06-26 20:44
     */
    public function get(array $params = []): array;

    /**
     * 从数据库获取
     *
     * @param array $params
     * @return array
     * @author 吴荣超
     * @date   2023-06-26 20:44
     */
    public function getFromDb(array $params = []): array;
}