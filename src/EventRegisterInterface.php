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
 * Interface EventRegisterInterface
 * @package Raylin666\Contract
 */
interface EventRegisterInterface
{
    /**
     * EventRegisterInterface constructor.
     * @param string $event
     * @param        $listener
     * @param int    $priority
     */
    public function __construct(string $event, $listener, int $priority);

    /**
     * @return string
     */
    public function getEvent(): string;

    /**
     * @return mixed
     */
    public function getListener();

    /**
     * @return int
     */
    public function getPriority(): int;
}