<?php
// +----------------------------------------------------------------------
// | 
// +----------------------------------------------------------------------
// | Copyright © 2017 版权 All Rights Reserved.
// +----------------------------------------------------------------------
// | Author: 吴荣超
// +----------------------------------------------------------------------
// | Date  : 2023-03-22 11:18
// +----------------------------------------------------------------------

namespace Qomolang\Helper\constants\user\cliqueapplication;

/**
 * Class CliqueApplicationStateConstant
 *
 * @package Qomolang\Helper\constants\user\cliqueapplication
 * @author 吴荣超
 * @date   2023-03-22 11:18
 */
final class CliqueApplicationStateConstant
{
    const WAIT_AUDIT = 0;
    const WAIT_AUDIT_EN = 'WAIT_AUDIT';
    const WAIT_AUDIT_ZH = '待审核';

    const ACCEPT = 1;
    const ACCEPT_EN = 'ACCEPT';
    const ACCEPT_ZH = '通过';

    const REJECT = 2;
    const REJECT_EN = 'REJECT';
    const REJECT_ZH = '驳回';

    /**
     * 全部状态
     *
     * @return array
     * @author 吴荣超
     * @date   2023-03-22 11:19
     */
    public static function get()
    {
        return [
            [
                'id' => self::WAIT_AUDIT,
                'en' => self::WAIT_AUDIT_EN,
                'zh' => self::WAIT_AUDIT_ZH
            ],
            [
                'id' => self::ACCEPT,
                'en' => self::ACCEPT_EN,
                'zh' => self::ACCEPT_ZH
            ],
            [
                'id' => self::REJECT,
                'en' => self::REJECT_EN,
                'zh' => self::REJECT_ZH
            ],
        ];
    }

    /**
     * 全部状态 - 英文转数字
     *
     * @return array
     * @author 吴荣超
     * @date   2023-03-22 11:19
     */
    public static function enToId(): array
    {
        return array_column(self::get(), 'id', 'en');
    }

    /**
     * 全部状态 - 数字转英文
     *
     * @return array
     * @author 吴荣超
     * @date   2023-03-22 11:19
     */
    public static function idToEn(): array
    {
        return array_column(self::get(), 'en', 'id');
    }

    /**
     * 全部状态 - 数字转中文
     *
     * @return array
     * @author 吴荣超
     * @date   2023-03-22 11:19
     */
    public static function idToZh(): array
    {
        return array_column(self::get(), 'zh', 'id');
    }

    /**
     * 只获取审核、待审核
     *
     * @return array
     * @author 吴荣超
     * @date   2023-03-22 11:19
     */
    public static function auditCreate()
    {
        return [
            [
                'en' => self::ACCEPT_EN,
                'zh' => self::ACCEPT_ZH
            ],
            [
                'en' => self::REJECT_EN,
                'zh' => self::REJECT_ZH
            ],
        ];
    }

    /**
     * 只获取审核、待审核 - 英文转数字
     *
     * @return array
     * @author 吴荣超
     * @date   2023-03-22 11:19
     */
    public static function auditCreateEnToId(): array
    {
        return array_column(self::auditCreate(), 'id', 'en');
    }

    /**
     * 只获取审核、待审核 - 数字转英文
     *
     * @return array
     * @author 吴荣超
     * @date   2023-03-22 11:19
     */
    public static function auditCreateIdToEn(): array
    {
        return array_column(self::auditCreate(), 'en', 'id');
    }
}