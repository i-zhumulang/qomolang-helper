<?php
// +----------------------------------------------------------------------
// | 
// +----------------------------------------------------------------------
// | Copyright © 2017 版权 All Rights Reserved.
// +----------------------------------------------------------------------
// | Author: 吴荣超
// +----------------------------------------------------------------------
// | Date  : 2023-06-28 22:32
// +----------------------------------------------------------------------
declare(strict_types=1);

namespace Qomolang\Helper\traits\model;

/**
 * Trait QUpdateTrait
 *
 * @package Qomolang\Helper\traits\model
 * @author  吴荣超
 * @date    2023-06-28 22:32
 */
trait QUpdateTrait
{
    /**
     * buildUpdate()
     *
     * @param int $id
     * @param array $data
     * @return array
     * @author 吴荣超
     * @date   2023-06-28 22:35
     */
    public function buildUpdate(int $id, array $data): array
    {
        $field = $this->arrayToKeyString($data);

        $query = 'UPDATE ' . $this->getTable();
        $query .= ' SET ' . $field['field'] . ' WHERE id = ?';

        $field['bindings'][] = $id;

        return [
            'query' => $query,
            'bindings' => $field['bindings'],
        ];
    }

    /**
     * arrayToKeyString()
     *
     * @param array $array
     * @return array
     * @author 吴荣超
     * @date   2023-06-28 22:33
     */
    public function arrayToKeyString(array $array)
    {
        $field = '';
        $bindings = [];
        foreach ($array as $key => $value) {
            $field .= $key . '= ? ,';
            $bindings[] = $value;
        }
        return [
            'field' => rtrim($field, ','),
            'bindings' => $bindings
        ];
    }
}