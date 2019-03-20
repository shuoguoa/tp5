<?php
/**
 * Created by PhpStorm.
 * User: 管理员
 * Date: 2019/3/19
 * Time: 16:26
 */

namespace app\model\admin;
use think\Model;

class AuthRule extends Model
{
    protected $table = 'ke_admin_auth_rule';

    protected $connection = 'db_config';

    public function  getAuthRule(){
        $res = AuthRule::where('type', '=', 1)->paginate(4);
        $count = $res->total();
        return [$res, $count];
    }

    public function addAuthRule(){
        $user           = new User;
        $user->name     = 'thinkphp';
        $user->email    = 'thinkphp@qq.com';
        $user->save();
        // 获取自增ID
        echo $user->id;
    }

}
