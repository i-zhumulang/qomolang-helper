<?php
// +----------------------------------------------------------------------
// | 
// +----------------------------------------------------------------------
// | Copyright © 2017 版权 All Rights Reserved.
// +----------------------------------------------------------------------
// | Author: 吴荣超
// +----------------------------------------------------------------------
// | Date  : 2023-03-22 10:41
// +----------------------------------------------------------------------

namespace Qomolang\Helper\helpers;

use Qomolang\Helper\exceptions\QException;

/**
 * Class QHttpCode
 *
 * @package Qomolang\Helper\helpers
 * @author 吴荣超
 * @date   2023-03-22 10:41
 */
final class QHttpCode
{
    const OK = 200;
    const NO_CONTENT = 204;
    const BAD_REQUEST = 400;
    const UNAUTHORIZED = 401;
    const FORBIDDEN = 403;
    const NOT_FOUND = 404;
    const METHOD_NOT_ALLOWED = 405;

    const MSG = [
        QHttpCode::OK => '请求成功',
        QHttpCode::NO_CONTENT => 'No Content',
        QHttpCode::BAD_REQUEST => 'Bad Request',
        QHttpCode::UNAUTHORIZED => 'Unauthorized',
        QHttpCode::FORBIDDEN => 'Forbidden',
        QHttpCode::NOT_FOUND => 'Not Found',
        QHttpCode::METHOD_NOT_ALLOWED => 'Method Not Allowed',
    ];

    /**
     * msg
     *
     * @param int $httpCode
     * @return array
     * @throws QException
     * @author 吴荣超
     * @date   2023-03-22 10:42
     */
    public static function msg(int $httpCode): array
    {
        if (!isset(self::MSG[$httpCode]))
            throw new QException('未知http代码:' . $httpCode);

        QResult::setCode($httpCode);

        if ($httpCode === self::OK)
            return QResult::success(self::MSG[$httpCode]);

        return QResult::failure(self::MSG[$httpCode]);
    }
}