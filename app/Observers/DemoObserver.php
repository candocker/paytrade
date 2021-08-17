<?php

declare(strict_types = 1);

namespace ModulePaytrade\Observers;

use ModulePaytrade\Models\Demo;

class DemoObserver
{
    public function deleting(Demo $model)
    {
        //return $model->canDelete();
    }
}
