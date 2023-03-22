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

namespace Qomolang\Helper\constants\system\operate;

/**
 * Class OperateLocationConstant
 *
 * @package Qomolang\Helper\constants\system\operate
 * @author 吴荣超
 * @date   2023-03-22 11:18
 */
final class OperateLocationConstant
{
    const LOCATION_TABLE_SINGLE = 0;
    const LOCATION_TABLE_SINGLE_EN = 'TABLE_SINGLE';
    const LOCATION_TABLE_SINGLE_ZH = '表中单个操作';

    const LOCATION_TABLE_BATCH = 2;
    const LOCATION_TABLE_BATCH_EN = 'TABLE_BATCH';
    const LOCATION_TABLE_BATCH_ZH = '表中批量操作';

    const LOCATION_HEAD_SINGLE = 1;
    const LOCATION_HEAD_SINGLE_EN = 'HEAD_SINGLE';
    const LOCATION_HEAD_SINGLE_ZH = '表头单个操作';

    const LOCATION_HEAD_BATCH = 3;
    const LOCATION_HEAD_BATCH_EN = 'HEAD_BATCH';
    const LOCATION_HEAD_BATCH_ZH = '表头批量操作';

    const LOCATION_CONTENT_SINGLE = 4;
    const LOCATION_CONTENT_SINGLE_EN = 'CONTENT_SINGLE';
    const LOCATION_CONTENT_SINGLE_ZH = '页面单个操作';

    /**
     * 获取全部位置
     *
     * @return array
     * @author 吴荣超
     * @date   2023-03-22 11:18
     */
    public static function get(): array
    {
        return [
            [
                'id' => self::LOCATION_TABLE_SINGLE,
                'en' => self::LOCATION_TABLE_SINGLE_EN,
                'zh' => self::LOCATION_TABLE_SINGLE_ZH,
            ],
            [
                'id' => self::LOCATION_TABLE_BATCH,
                'en' => self::LOCATION_TABLE_BATCH_EN,
                'zh' => self::LOCATION_TABLE_BATCH_ZH,
            ],
            [
                'id' => self::LOCATION_HEAD_SINGLE,
                'en' => self::LOCATION_HEAD_SINGLE_EN,
                'zh' => self::LOCATION_HEAD_SINGLE_ZH,
            ],
            [
                'id' => self::LOCATION_HEAD_BATCH,
                'en' => self::LOCATION_HEAD_BATCH_EN,
                'zh' => self::LOCATION_HEAD_BATCH_ZH,
            ],
            [
                'id' => self::LOCATION_CONTENT_SINGLE,
                'en' => self::LOCATION_CONTENT_SINGLE_EN,
                'zh' => self::LOCATION_CONTENT_SINGLE_ZH,
            ],
        ];
    }

    /**
     * enToId
     *
     * @return array
     * @author 吴荣超
     * @date   2023-03-22 11:18
     */
    public static function enToId(): array
    {
        return array_column(self::get(), 'id', 'en');
    }

    /**
     * idToEn
     *
     * @return array
     * @author 吴荣超
     * @date   2023-03-22 11:18
     */
    public static function idToEn(): array
    {
        return array_column(self::get(), 'en', 'id');
    }
}