<?php
// +----------------------------------------------------------------------
// | 
// +----------------------------------------------------------------------
// | Copyright © 2017 版权 All Rights Reserved.
// +----------------------------------------------------------------------
// | Author: 吴荣超
// +----------------------------------------------------------------------
// | Date  : 2023-03-22 11:15
// +----------------------------------------------------------------------

namespace Qomolang\Helper\crypts\aes;

/**
 * Class QAesDeCrypt
 *
 * @package Qomolang\Helper\crypts\aes
 * @author 吴荣超
 * @date   2023-03-22 11:15
 */
final class QAesDeCrypt
{
    /**
     * @var QAesResult
     * @author 吴荣超
     * @date   2023-03-22 11:15
     */
    private static QAesResult $result;

    /**
     * QAesDeCrypt constructor.
     *
     * @author 吴荣超
     * @date   2023-03-22 11:15
     */
    private function __construct()
    {

    }

    /**
     * __clone
     *
     * @author 吴荣超
     * @date   2023-03-22 11:15
     */
    private function __clone()
    {

    }

    /**
     * setResult
     *
     * @param string $string
     * @return string
     * @author 吴荣超
     * @date   2023-03-22 11:15
     */
    private static function setResult(string $string): string
    {
        return openssl_decrypt(
            base64_decode($string),
            QAesResult::METHOD,
            self::$result->getKey(),
            true,
            self::$result->getIv()
        );
    }

    /**
     * 执行解密
     *
     * @param string $iv
     * @param string $key
     * @param string $string
     * @return array
     * @author 吴荣超
     * @date   2023-03-22 11:15
     */
    public static function decrypt(string $iv = '', string $key = '', string $string = ''): array
    {
        self::$result = new QAesResult();
        self::$result->setIv($iv);
        self::$result->setKey($key);
        self::$result->setResult(self::setResult($string));
        return self::$result->get();
    }
}