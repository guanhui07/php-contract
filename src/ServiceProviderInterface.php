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

use Psr\Container\ContainerInterface;

/**
 * Interface ServiceProviderInterface
 * @package Raylin666\Contract
 */
interface ServiceProviderInterface
{
    /**
     * @param ContainerInterface $container
     * @return mixed
     */
    public function register(ContainerInterface $container);
}