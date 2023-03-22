<?php
// +----------------------------------------------------------------------
// | 
// +----------------------------------------------------------------------
// | Copyright © 2017 版权 All Rights Reserved.
// +----------------------------------------------------------------------
// | Author: 吴荣超
// +----------------------------------------------------------------------
// | Date  : 2023-03-22 11:25
// +----------------------------------------------------------------------

namespace Qomolang\Helper\traits;

/**
 * Trait QParamsTrait
 * @package Qomolang\Helper\traits
 * @author 吴荣超
 * @date   2023-03-22 11:25
 */
trait QParamsTrait
{
    /**
     * @var array
     * @author 吴荣超
     * @date   2023-03-22 11:25
     */
    protected array $params;

    /**
     * setParams
     *
     * @param array $params
     * @author 吴荣超
     * @date   2023-03-22 11:25
     */
    public function setParams(array $params): void
    {
        $this->params = $params;
    }

    /**
     * getParams
     *
     * @param string|null $key
     * @return array|mixed|null
     * @author 吴荣超
     * @date   2023-03-22 11:25
     */
    public function getParams(string $key = null)
    {
        if (null === $key)
            return $this->params;

        $keyArr = explode('.', $key);

        if (count($keyArr) === 2) {
            if (isset($this->params[$keyArr[0]][$keyArr[1]]))
                return $this->params[$keyArr[0]][$keyArr[1]];
            return null;
        }

        if (isset($this->params[$keyArr[0]]))
            return $this->params[$keyArr[0]];

        return null;
    }
}