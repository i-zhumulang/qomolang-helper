<?php
// +----------------------------------------------------------------------
// | 
// +----------------------------------------------------------------------
// | Copyright © 2017 版权 All Rights Reserved.
// +----------------------------------------------------------------------
// | Author: 吴荣超
// +----------------------------------------------------------------------
// | Date  : 2023-06-28 22:38
// +----------------------------------------------------------------------
declare(strict_types=1);

namespace Qomolang\Helper\traits\model;

/**
 * Trait QBuildJoinTrait
 *
 * @package Qomolang\Helper\traits\model
 * @author  吴荣超
 * @date    2023-06-28 22:38
 */
trait QBuildJoinTrait
{
    /**
     * buildJoin()
     *
     * @param string $mainTableAlias 主表别名
     * @param string $foreignKey 当前表与主表关联的字段
     * @param string $primaryKey 主表与当前表关联的字段
     * @return string
     * @author 吴荣超
     * @date   2023-06-28 22:40
     */
    public function buildJoin(string $mainTableAlias, string $foreignKey, string $primaryKey = 'id'): string
    {
        $join = ' LEFT JOIN ' . $this->getCompleteTable();
        $join .= ' ON ' . $this->getTable() . '.' . $primaryKey . ' = ' ;
        $join .= $mainTableAlias . '.' . $foreignKey;

        return $join;
    }
}