<?php
/**
 * Created by PhpStorm.
 * User: lfq
 * Date: 2019/3/17
 * Time: 9:39 AM
 */

namespace app\admin;

use think\Request;

class Error
{
    //根据当前控制器名来判断要执行那个城市的操作
    public function index(Request $request){
        $cityName = $request->controller();
        return $this->city($cityName);
    }

    //注意city方法，本身是protected 方法
    protected function city($name){
        //和$name 这个城市相关的处理
        return '当前城市'.$name;
    }
}
