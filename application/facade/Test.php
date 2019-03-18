<?php
/**
 * Created by PhpStorm.
 * User: lfq
 * Date: 2019/3/17
 * Time: 2:01 PM
 */

namespace app\facade;
use think\Facade;

class Test extends Facade
{
    protected static function getFacadeClass(){
        return 'app\common\Test';
    }
}
