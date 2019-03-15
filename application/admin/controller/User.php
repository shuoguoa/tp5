<?php
/**
 * Created by PhpStorm.
 * User: lfq
 * Date: 2019/3/14
 * Time: 9:19 PM
 */

namespace app\admin\controller;


class User
{
    public function hello()
    {
        return 'hello,hhahaha';
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
