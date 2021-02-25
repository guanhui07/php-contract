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
 * Interface ConnectionPoolInterface
 * @package Raylin666\Contract
 */
interface ConnectionPoolInterface
{
    /**
     * 从连接池中获取真正的连接对象
     */
    public function getConnection();

    /**
     * 实现连接
     * @return mixed
     */
    public function connect();

    /**
     * 重新连接
     */
    public function reconnect();

    /**
     * 检查连接是否有效
     */
    public function check(): bool;

    /**
     * 关闭连接
     */
    public function close(): bool;

    /**
     * 重新发布到连接池
     */
    public function release(): void;
}