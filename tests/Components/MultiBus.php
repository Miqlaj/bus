<?php

namespace Tests\Components;

use Mrluke\Bus\Contracts\HasAsyncProcesses;
use Mrluke\Bus\Extensions\UsesDefaultQueue;
use Mrluke\Bus\MultipleHandlerBus;

/**
 * Class SyncBus
 *
 * @author  Łukasz Sitnicki <lukasz.sitnicki@movecloser.pl>
 * @version 1.0.0
 * @licence MIT
 * @package Tests\Components
 * @codeCoverageIgnore
 */
class MultiBus extends MultipleHandlerBus implements HasAsyncProcesses
{
    use UsesDefaultQueue;

    /**
     * @inheritDoc
     */
    protected function getBusName(): string
    {
        return 'multi-bus';
    }
}
