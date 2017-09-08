<?php

namespace app\commands;

use app\models\Users;
use yii\console\Controller;

class UsersController extends Controller
{
    public function actionCreate()
    {
        $user = new Users();
        $username = $this->prompt('Enter username: ', ['required' => true]);
        $password = $this->prompt('Enter password: ', ['required' => true]);
        $fname = $this->prompt('Enter Fname: ', ['required' => true]);
        $lname = $this->prompt('Enter Lname: ', ['required' => true]);
        $email = $this->prompt('Enter Email: ', ['required' => true]);
        $mobile = $this->prompt('Enter Mobile: ', ['required' => true]);


        $user->setPassword ($password);
        $user->fname = $fname;
        $user->lname = $lname;
        $user->username = $username;
        $user->email = $email;
        $user->mobile = $mobile;
        $user->save(false);
    }
}
