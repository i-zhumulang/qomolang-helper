<?php
// +----------------------------------------------------------------------
// | 
// +----------------------------------------------------------------------
// | Copyright © 2017 版权 All Rights Reserved.
// +----------------------------------------------------------------------
// | Author: 吴荣超
// +----------------------------------------------------------------------
// | Date  : 2023-03-22 11:13
// +----------------------------------------------------------------------

namespace Qomolang\Helper\crypts\rsa;

use Qomolang\Helper\exceptions\QException;

/**
 * Class QRsaDeCrypt
 *
 * @package Qomolang\Helper\crypts\rsa
 * @author 吴荣超
 * @date   2023-03-22 11:13
 */
final class QRsaDeCrypt
{
    /**
     * decrypt
     *
     * @param string $encrypt
     * @return string
     * @throws
     * @author 吴荣超
     * @date   2023-02-03 20:16
     */
    public static function decrypt(string $encrypt): string
    {
        $privateKey = openssl_pkey_get_private(QRsaKey::PRIVATE_KEY);
        $result = openssl_private_decrypt(base64_decode($encrypt), $decrypt, $privateKey);
        if (false === $result)
            throw new QException('解密失败:' . $encrypt);
        return $decrypt;
    }
}