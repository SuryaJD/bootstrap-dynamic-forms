<?php

namespace Worthcoding\BootstrapDynamicForms\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Worthcoding\BootstrapDynamicForms\BootstrapDynamicForms
 */
class BootstrapDynamicForms extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Worthcoding\BootstrapDynamicForms\BootstrapDynamicForms::class;
    }
}
