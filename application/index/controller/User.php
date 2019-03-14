<?php
/**
 * Created by PhpStorm.
 * User: lfq
 * Date: 2019/3/14
 * Time: 9:04 PM
 */

namespace app\index\controller;


class User extends
{
    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }

    public function index()
    {
        echo 1111;exit;
    }

    public function read($id)
    {
        echo 2222;exit;
    }

    public function edit($id)
    {
        echo 3333;exit;
    }
}
