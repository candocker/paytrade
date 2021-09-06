<?php

declare(strict_types = 1);

namespace ModulePaytrade\Models;

use Framework\Baseapp\Models\AbstractModel as AbstractModelBase;

class AbstractModel extends AbstractModelBase
{
    protected $connection = 'paytrade';
}
