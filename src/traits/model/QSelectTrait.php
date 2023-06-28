<?php
// +----------------------------------------------------------------------
// | 
// +----------------------------------------------------------------------
// | Copyright © 2017 版权 All Rights Reserved.
// +----------------------------------------------------------------------
// | Author: 吴荣超
// +----------------------------------------------------------------------
// | Date  : 2023-06-28 22:28
// +----------------------------------------------------------------------
declare(strict_types=1);

namespace Qomolang\Helper\traits\model;

/**
 * Trait QSelectTrait
 *
 * @package Qomolang\Helper\traits\model
 * @author  吴荣超
 * @date    2023-06-28 22:28
 */
trait QSelectTrait
{
    /**
     * buildQuery()
     *
     * @param array $field
     * @return string
     * @author 吴荣超
     * @date   2023-06-28 21:48
     */
    public function buildQuery(array $field): string
    {
        $strField = implode(',', $field);
        return 'SELECT ' . $strField . ' FROM ' . $this->getCompleteTable();
    }

    /**
     * buildJoin()
     *
     * @param string $alias
     * @param string $foreignKey
     * @param string $primaryKey
     * @return string
     * @author 吴荣超
     * @date   2023-06-28 21:51
     */
    public function buildJoin(string $alias, string $foreignKey, string $primaryKey = 'id'): string
    {
        $join = ' LEFT JOIN ' . $this->getCompleteTable();
        $join .= ' ON ' . $this->getTable() . '.' . $primaryKey . ' = ' ;
        $join .= $alias . '.' . $foreignKey;

        return $join;
    }

    /**
     * buildWhere()
     *
     * @param string $where
     * @return string
     * @author 吴荣超
     * @date   2023-06-28 21:48
     */
    public function buildWhere(string $where = ''): string
    {
        if (!$where) {
            return '';
        }
        return ' WHERE ' . $where;
    }

    /**
     * buildOrderBy()
     *
     * @param string $orderBy
     * @return string
     * @author 吴荣超
     * @date   2023-06-28 21:49
     */
    public function buildOrderBy(string $orderBy): string
    {
        return ' ORDER BY ' . $orderBy;
    }

    /**
     * buildGroupBy()
     *
     * @param string $groupBy
     * @return string
     * @author 吴荣超
     * @date   2023-06-28 21:49
     */
    public function buildGroupBy(string $groupBy): string
    {
        return ' GROUP BY ' . $groupBy;
    }

    /**
     * buildLimit()
     *
     * @return string
     * @author 吴荣超
     * @date   2023-06-28 21:50
     */
    private function buildLimit(): string
    {
        return ' LIMIT ?, ?';
    }
}