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

namespace Qomolang\Helper\crypts\aes;

/**
 * Class QAesResult
 *
 * @package Qomolang\Helper\crypts\aes
 * @author 吴荣超
 * @date   2023-03-22 11:13
 */
final class QAesResult
{
    /**
     * @var string
     * @author 吴荣超
     * @date   2023-03-22 11:14
     */
    private string $key = '';

    /**
     *
     */
    const KEY_LENGTH = 32;

    /**
     * @var string
     * @author 吴荣超
     * @date   2023-03-22 11:14
     */
    private string $iv = '';

    /**
     *
     */
    const IV_LENGTH = 16;

    /**
     * @var string
     * @author 吴荣超
     * @date   2023-03-22 11:14
     */
    private string $result = '';

    /**
     * 加密方式
     */
    const METHOD = 'aes-256-cbc';

    /**
     * setKey
     *
     * @param string $key
     * @author 吴荣超
     * @date   2023-03-22 11:14
     */
    public function setKey(string $key)
    {
        $this->key = $key;
    }

    /**
     * getKey
     *
     * @return string
     * @author 吴荣超
     * @date   2023-03-22 11:14
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * setIv
     *
     * @param string $iv
     * @author 吴荣超
     * @date   2023-03-22 11:14
     */
    public function setIv(string $iv)
    {
        $this->iv = $iv;
    }

    /**
     * getIv
     *
     * @return string
     * @author 吴荣超
     * @date   2023-03-22 11:14
     */
    public function getIv(): string
    {
        return $this->iv;
    }

    /**
     * setResult
     *
     * @param string $result
     * @author 吴荣超
     * @date   2023-03-22 11:14
     */
    public function setResult(string $result)
    {
        $this->result = $result;
    }

    /**
     * getResult
     *
     * @return string
     * @author 吴荣超
     * @date   2023-03-22 11:14
     */
    public function getResult(): string
    {
        return $this->result;
    }

    /**
     * get
     *
     * @return array
     * @author 吴荣超
     * @date   2023-03-22 11:14
     */
    public function get(): array
    {
        return [
            'iv' => $this->getIv(),
            'key' => $this->getKey(),
            'result' => $this->getResult()
        ];
    }
}