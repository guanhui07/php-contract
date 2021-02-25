<?php
// +----------------------------------------------------------------------
// | Created by linshan. 版权所有 @
// +----------------------------------------------------------------------
// | Copyright (c) 2019 All rights reserved.
// +----------------------------------------------------------------------
// | Technology changes the world . Accumulation makes people grow .
// +----------------------------------------------------------------------
// | Author: kaka梦很美 <1099013371@qq.com>
// +----------------------------------------------------------------------

namespace Raylin666\Contract;

use Closure;
use Psr\Container\ContainerInterface as PsrContainerInterface;

/**
 * Interface ContainerInterface
 * @package Raylin666\Contract
 */
interface ContainerInterface extends PsrContainerInterface
{
    /**
     * 绑定到容器
     * @param string $abstract
     * @param Closure|string|null $concrete
     * @param bool $singleton
     * @return mixed
     */
    public function bind($abstract, $concrete = null, $singleton = false);

    /**
     * 类静态(将已实例的类保存到容器)
     * @param string $abstract
     * @param Closure|string|null $concrete
     * @return mixed
     */
    public function singleton($abstract, $concrete = null);

    /**
     * 实例化/解析容器内容
     * @param string|callable $abstract
     * @param array $parameters
     * @return mixed
     */
    public function make($abstract, array $parameters = []);
}