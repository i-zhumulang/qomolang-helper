<?php
// +----------------------------------------------------------------------
// | 
// +----------------------------------------------------------------------
// | Copyright © 2017 版权 All Rights Reserved.
// +----------------------------------------------------------------------
// | Author: 吴荣超
// +----------------------------------------------------------------------
// | Date  : 2023-03-22 10:39
// +----------------------------------------------------------------------

namespace Qomolang\Helper\helpers;

/**
 * Class QArray
 *
 * @package Qomolang\Helper\helpers
 * @author 吴荣超
 * @date   2023-03-22 10:39
 */
final class QArray
{
    /**
     * 数组转树形结构
     *
     * @param array $list
     * @param int $root
     * @param string $pk
     * @param string $pid
     * @param string $child
     * @return array
     * @author 吴荣超
     * @date   2023-03-22 10:39
     */
    public static function arrayToTree(array $list, $root = 0, $pk = 'id', $pid = 'parent_id', $child = 'children'): array
    {
        // 创建Tree
        $tree = [];
        $parentId = 0;
        // 创建基于主键的数组引用
        $refer = [];
        foreach ($list as $key => $data) {
            $refer[$data[$pk]] = &$list[$key];
        }
        foreach ($list as $key => $data) {
            // 判断是否存在parent
            if (isset($data[$pid])) {
                $parentId = $data[$pid];
            }
            if ($root == $parentId) {
                $tree[] = &$list[$key];
            } else {
                if (isset($refer[$parentId])) {
                    $parent = &$refer[$parentId];
                    $parent[$child][] = &$list[$key];
                }
            }
        }
        return $tree;
    }

    /**
     * 树形结构转数组
     *
     * @param array $tree
     * @param int $level
     * @param string $childKey
     * @return array
     * @author 吴荣超
     * @date   2023-03-22 10:39
     */
    public static function treeToArray(array $tree, $level = 0, $childKey = 'children')
    {
        $list = [];
        foreach ($tree as $val) {
            $val['level'] = $level;
            if (isset($val[$childKey])) {
                $child = $val[$childKey];
                if (is_array($child)) {
                    unset($val[$childKey]);
                    $val['last'] = 0;
                    $list[] = $val;
                    $list = array_merge($list, self::treeToArray($child, $level + 1));
                }
            } else {
                $val['last'] = 1;
                $list[] = $val;
            }
        }
        return $list;
    }
}