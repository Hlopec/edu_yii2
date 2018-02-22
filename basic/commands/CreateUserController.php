<?php

namespace app\commands;

use app\models\User;
use yii\console\Controller;


class CreateUserController extends Controller
{

    public function actionIndex($login, $pass)
    {
        $model = new User();

    }
}
