<?php
// +----------------------------------------------------------------------
// | Created by linshan. 版权所有 @
// +----------------------------------------------------------------------
// | Copyright (c) 2020 All rights reserved.
// +----------------------------------------------------------------------
// | Technology changes the world . Accumulation makes people grow .
// +----------------------------------------------------------------------
// | Author: kaka梦很美 <1099013371@qq.com>
// +----------------------------------------------------------------------

namespace Raylin666\Contract;

/**
 * Interface ConfigInterface
 * @package Raylin666\Contract
 */
interface ConfigInterface
{
    /**
     * @param string $key
     * @param null   $default
     * @return mixed
     */
    public function get(string $key, $default = null);

    /**
     * @param string $key
     * @return mixed
     */
    public function has(string $key);

    /**
     * @param string $key
     * @param        $value
     * @return mixed
     */
    public function set(string $key, $value);
}