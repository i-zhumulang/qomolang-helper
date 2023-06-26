<?php
// +----------------------------------------------------------------------
// | 
// +----------------------------------------------------------------------
// | Copyright © 2017 版权 All Rights Reserved.
// +----------------------------------------------------------------------
// | Author: 吴荣超
// +----------------------------------------------------------------------
// | Date  : 2023-06-26 17:47
// +----------------------------------------------------------------------
declare(strict_types=1);

namespace Qomolang\Helper\helpers;

/**
 * Class QString
 *
 * @package Qomolang\Helper\helpers
 * @author 吴荣超
 * @date   2023-06-26 17:47
 */
final class QString
{
    /**
     * QString constructor.
     *
     * @author 吴荣超
     * @date   2023-06-26 17:48
     */
    private function __construct()
    {

    }

    /**
     * __clone
     *
     * @author 吴荣超
     * @date   2023-06-26 17:48
     */
    private function __clone()
    {

    }

    /**
     * 生成指定长度字符串
     *
     * @param int $length
     * @return string
     * @author 吴荣超
     * @date   2023-06-26 17:48
     */
    public static function getSpecifyLengthString(int $length = 128): string
    {
        $number = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
        $lower = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
        $upper = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
        $tmp = array_merge($number, $lower, $upper);
        // 打乱数组顺序
        shuffle($tmp);
        $tmpMaxIndex = count($tmp) - 1;
        $str = '';
        for ($i = 0; $i < $length; $i++) {
            $str .= $tmp[rand(0, $tmpMaxIndex)];
        }
        return $str;
    }
}