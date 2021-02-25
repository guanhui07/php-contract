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

/**
 * Interface FactoryInterface
 * @package Raylin666\Contract
 */
interface FactoryInterface
{
    /**
     * FactoryInterface constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container);
}