<?php

namespace app\modules\account;

use Yii;
use app\components\Module;

class AccountModule extends Module
{
    public $controllerNamespace = 'app\modules\account\controllers';

    public $defaultRoute = 'user';

    public function init()
    {
        parent::init();

        // custom initialization code goes here

    }
}
