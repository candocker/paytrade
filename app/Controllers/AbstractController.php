<?php

declare(strict_types = 1);

namespace ModulePaytrade\Controllers;

use Framework\Baseapp\Controllers\AbstractController as AbstractControllerBase;

abstract class AbstractController extends AbstractControllerBase
{
    protected function getAppcode()
    {
        return 'paytrade';
    }
}
