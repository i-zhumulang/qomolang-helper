<?php
// +----------------------------------------------------------------------
// | 
// +----------------------------------------------------------------------
// | Copyright © 2017 版权 All Rights Reserved.
// +----------------------------------------------------------------------
// | Author: 吴荣超
// +----------------------------------------------------------------------
// | Date  : 2023-03-22 11:12
// +----------------------------------------------------------------------

namespace Qomolang\Helper\crypts\rsa;

/**
 * Class QRsaEnCrypt
 *
 * @package Qomolang\Helper\crypts\rsa
 * @author 吴荣超
 * @date   2023-03-22 11:12
 */
final class QRsaEnCrypt
{
    /**
     * encrypt
     *
     * @param string $string
     * @return string
     * @author 吴荣超
     * @date   2023-02-03 20:19
     */
    public static function encrypt(string $string): string
    {
        $publicKey = openssl_pkey_get_public(QRsaKey::PUBLIC_KEY);
        openssl_public_encrypt($string, $encrypt, $publicKey);
        return base64_encode($encrypt);
    }
}