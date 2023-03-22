<?php
// +----------------------------------------------------------------------
// | 
// +----------------------------------------------------------------------
// | Copyright © 2017 版权 All Rights Reserved.
// +----------------------------------------------------------------------
// | Author: 吴荣超
// +----------------------------------------------------------------------
// | Date  : 2023-03-22 11:14
// +----------------------------------------------------------------------

namespace Qomolang\Helper\crypts\aes;

use Qomolang\Helper\helpers\QString;

/**
 * Class QAesEnCrypt
 *
 * @package Qomolang\Helper\crypts\aes
 * @author 吴荣超
 * @date   2023-03-22 11:14
 */
final class QAesEnCrypt
{
    /**
     * @var QAesResult
     * @author 吴荣超
     * @date   2023-03-22 11:15
     */
    private static QAesResult $result;

    /**
     * QAesEnCrypt constructor.
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
        return base64_encode(
            openssl_encrypt(
                $string,
                QAesResult::METHOD,
                self::$result->getKey(),
                OPENSSL_RAW_DATA,
                self::$result->getIv()
            )
        );
    }

    /**
     * 执行加密
     *
     * @param string $string
     * @return array
     * @author 吴荣超
     * @date   2023-03-22 11:15
     */
    public static function encrypt(string $string): array
    {
        self::$result = new QAesResult();
        // 设置key
        self::$result->setKey(
            QString::getSpecifyLengthString(
                QAesResult::KEY_LENGTH
            )
        );
        // 设置iv
        self::$result->setIv(
            QString::getSpecifyLengthString(
                QAesResult::IV_LENGTH
            )
        );
        // 设置结果
        self::$result->setResult(self::setResult($string));
        // 返回结果
        return self::$result->get();
    }
}