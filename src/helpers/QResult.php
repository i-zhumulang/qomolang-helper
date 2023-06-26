<?php
// +----------------------------------------------------------------------
// | 统一返回结果处理
// +----------------------------------------------------------------------
// | Copyright © 2017 版权 All Rights Reserved.
// +----------------------------------------------------------------------
// | Author: 吴荣超
// +----------------------------------------------------------------------
// | Date  : 2023-06-26 17:35
// +----------------------------------------------------------------------
declare(strict_types=1);

namespace Qomolang\Helper\helpers;

/**
 * Class QResult
 *
 * @package Qomolang\Helper\helper
 * @author 吴荣超
 * @date   2023-06-26 17:35
 */
final class QResult
{
    const KEY_FLAG = 'flag';
    const KEY_CODE = 'code';
    const KEY_MESSAGE = 'message';
    const KEY_DATA = 'data';
    const VAL_CODE_SUCCESS = 'Success';
    const VAL_CODE_FAILURE = 'Failure';

    /**
     * @var string
     * @author 吴荣超
     * @date   2023-06-26 17:36
     */
    private static string $flag = 'Success';

    /**
     * @var int
     * @author 吴荣超
     * @date   2023-06-26 17:36
     */
    private static int $code = 200;

    /**
     * @var string
     * @author 吴荣超
     * @date   2023-06-26 17:36
     */
    private static string $msg = '';

    /**
     * @var array
     * @author 吴荣超
     * @date   2023-06-26 17:36
     */
    private static array $data = [];

    /**
     * setFlag
     *
     * @param string $flag
     * @author 吴荣超
     * @date   2023-06-26 17:36
     */
    public static function setFlag(string $flag): void
    {
        self::$flag = $flag;
    }

    /**
     * getFlag
     *
     * @return string
     * @author 吴荣超
     * @date   2023-06-26 17:36
     */
    public static function getFlag(): string
    {
        return self::$flag;
    }

    /**
     * setCode
     *
     * @param int $code
     * @author 吴荣超
     * @date   2023-06-26 17:36
     */
    public static function setCode(int $code): void
    {
        self::$code = $code;
    }

    /**
     * getCode
     *
     * @return int
     * @author 吴荣超
     * @date   2023-06-26 17:36
     */
    public static function getCode(): int
    {
        return self::$code;
    }

    /**
     * setMsg
     *
     * @param string $msg
     * @author 吴荣超
     * @date   2023-06-26 17:36
     */
    public static function setMsg(string $msg = ''): void
    {
        self::$msg = $msg;
    }

    /**
     * getMsg
     *
     * @return string
     * @author 吴荣超
     * @date   2023-06-26 17:36
     */
    public static function getMsg(): string
    {
        return self::$msg;
    }

    /**
     * setData
     *
     * @param array $data
     * @author 吴荣超
     * @date   2023-06-26 17:36
     */
    public static function setData(array $data): void
    {
        self::$data = $data;
    }

    /**
     * getData
     *
     * @return array
     * @author 吴荣超
     * @date   2023-06-26 17:36
     */
    public static function getData(): array
    {
        return self::$data;
    }

    /**
     * send
     *
     * @return array
     * @author 吴荣超
     * @date   2023-06-26 17:36
     */
    public static function send(): array
    {
        return [
            self::KEY_FLAG => self::$flag,
            self::KEY_CODE => self::$code,
            self::KEY_MESSAGE => self::$msg,
            self::KEY_DATA => self::$data
        ];
    }

    /**
     * success
     *
     * @param mixed $value
     * @param array $data
     * @return array
     * @author 吴荣超
     * @date   2023-06-26 17:36
     */
    public static function success($value = null, array $data = [])
    {
        if (is_array($value) || is_object($value)) {
            $data = $value;
            $value = '';
        }

        return [
            self::KEY_FLAG => self::VAL_CODE_SUCCESS,
            self::KEY_CODE => self::$code,
            self::KEY_MESSAGE => $value,
            self::KEY_DATA => $data
        ];
    }

    /**
     * failure
     *
     * @param mixed $value
     * @param array $data
     * @return array
     * @author 吴荣超
     * @date   2023-06-26 17:37
     */
    public static function failure($value = null, array $data = [])
    {
        if (is_array($value) || is_object($value)) {
            $data = $value;
            $value = '';
        }
        return [
            self::KEY_FLAG => self::VAL_CODE_FAILURE,
            self::KEY_CODE => self::$code,
            self::KEY_MESSAGE => $value,
            self::KEY_DATA => $data
        ];
    }
}