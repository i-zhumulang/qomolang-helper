<?php
// +----------------------------------------------------------------------
// | 
// +----------------------------------------------------------------------
// | Copyright © 2017 版权 All Rights Reserved.
// +----------------------------------------------------------------------
// | Author: 吴荣超
// +----------------------------------------------------------------------
// | Date  : 2023-06-28 22:29
// +----------------------------------------------------------------------
declare(strict_types=1);

namespace Qomolang\Helper\traits\model;

/**
 * Trait QInsertTrait
 *
 * @package Qomolang\Helper\traits\model
 * @author  吴荣超
 * @date    2023-06-28 22:29
 */
trait QInsertTrait
{
    /**
     * buildInsert()
     *
     * @param array $data
     * @return array
     * @author 吴荣超
     * @date   2023-06-28 21:59
     */
    public function buildInsert(array $data): array
    {
        // 获取要插入的字段
        $fields = array_keys($data);
        // 将字段切割成字符串
        $fieldsToStr = '`' . implode('`,`', $fields) . '`';
        // 拼接占位符
        $placeholder = rtrim(str_repeat('?,', count($fields)), ',');
        // 获取数据绑定
        $bindings = [];
        foreach($fields AS $field) {
            $bindings[] = $data[$field];
        }
        // 拼接SQL
        $query = 'INSERT INTO ' . $this->getTable() . '(' . $fieldsToStr . ') VALUES (' . $placeholder .')';
        return [
            'query' => $query,
            'bindings' => $bindings
        ];
    }
}