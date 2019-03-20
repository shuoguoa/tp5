<?php

namespace app\common\validate;

use think\Validate;

class ValidateRule extends Validate
{
    /**
     * 定义验证规则
     * 格式：'字段名'	=>	['规则1','规则2'...]
     *
     * @var array
     */
    protected $rule =   [
        'name'  => 'require|max:25',
        'age'   => 'number|between:1,120',
        'email' => 'email',
        'num'=>'float|boolean|',
        'info' => 'array',
        'accept' => 'accepted',//验证某个字段是否为为 yes, on, 或是 1。这在确认"服务条款"是否同意时很有用
        'date' => 'date',//验证值是否为有效的日期,会对日期值进行strtotime后进行判断
        'name' => 'alpha',//验证某个字段的值是否为纯字母
        'name' => 'alphaNum',//验证某个字段的值是否为字母和数字
        'name' => 'alphaDash',//验证某个字段的值是否为字母和数字，下划线_及破折号-
        'name' => 'chs',//验证某个字段的值只能是汉字
        'name'=>'chsAlpha', //验证某个字段的值只能是汉字、字母
        'name'=>'chsAlphaNum',//验证某个字段的值只能是汉字、字母和数字
        'name'=>'xdigit',//验证某个字段的值只能是十六进制字符串
        'host'=>'activeUrl',//验证某个字段的值是否为有效的域名或者IP
        'ip'=>'ip', //验证某个字段的值是否为有效的IP地址
        'create_time'=>'dateFormat:y-m-d',//验证某个字段的值是否为指定格式的日期
        'mobile'=>'mobile',//验证某个字段的值是否为有效的手机
        'id_card'=>'idCard',//验证某个字段的值是否为有效的身份证格式
        'num'=>'notIn:1,2,3',
        'num'=>'between:1,10',
        'name'=>'length:4,25',
        'name'=>'length:4',
        'name'=>'max:25',
        'name'=>'min:5',
        'begin_time' => 'after:2016-3-18',
        'end_time'   => 'before:2016-10-01',
        'repassword'=>'require|confirm:password',//验证某个字段是否和另外一个字段的值一致
        'password'=>'require|confirm',//支持字段自动匹配验证规则，如password和password_confirm是自动相互验证的
        'name'=>'require|different:account',//验证某个字段是否和另外一个字段的值不一致
        'score'=>'eq:100',
        'num'=>'=:100',
        'num'=>'same:100'
    ];

    /**
     * 定义错误信息
     * 格式：'字段名.规则名'	=>	'错误信息'
     *
     * @var array
     */
    protected $message  =   [
        'name.require' => '名称必须',
        'name.max'     => '名称最多不能超过25个字符',
        'age.number'   => '年龄必须是数字',
        'age.between'  => '年龄只能在1-120之间',
        'email'        => '邮箱格式错误',
    ];

    /*指定验证的场景*/
    protected $scene = [
        'edit'  =>  ['name','age'],
    ];

}
