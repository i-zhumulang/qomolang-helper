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
 * @package Os\Helper\helper
 * @author 吴荣超
 * @date   2023-06-26 17:35
 */
final class QResult
{
    const FLAG = 'flag';
    const CODE = 'code';
    const MSG = 'message';
    const DATA = 'data';
    const SUCCESS = 'Success';
    const FAILURE = 'Failure';

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
            self::FLAG => self::$flag,
            self::CODE => self::$code,
            self::MSG => self::$msg,
            self::DATA => self::$data
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
            self::FLAG => self::SUCCESS,
            self::CODE => self::$code,
            self::MSG => $value,
            self::DATA => $data
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
            self::FLAG => self::FAILURE,
            self::CODE => self::$code,
            self::MSG => $value,
            self::DATA => $data
        ];
    }
}