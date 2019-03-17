<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
//
//Route::get('new/:id','News/read'); // 定义GET请求路由规则
//Route::post('new/:id','News/update'); // 定义POST请求路由规则
//Route::put('new/:id','News/update'); // 定义PUT请求路由规则
//Route::delete('new/:id','News/delete'); // 定义DELETE请求路由规则
//Route::any('new/:id','News/read'); // 所有请求都支持的路由规则


Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});

Route::resource('test/:id', 'index/user');

Route::get('hello/:name', 'index/hello');

Route::get('hello', 'admin/user/hello');

Route::get('city', 'admin/user/city');

Route::get('test', 'admin/');
