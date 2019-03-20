<?php
/**
 * Created by PhpStorm.
 * User: lfq
 * Date: 2019/3/14
 * Time: 9:19 PM
 */

namespace app\admin\controller;
use think\Controller;
use app\common\Error;
use think\facade\Cache;
use app\facade\Test;
use think\Facade;
use think\facade\Log;
use think\facade\Config;
use think\facade\Debug; //用于性能测试，调试某段代码的运行时间和内存占用开销
use app\model\admin\AuthRule;
use app\common\validate\ValidateRule as ValidateRule;
use think\facade\Session;

class User extends Controller
{
//    protected $beforeActionList = [
//        'first',
//        'second' =>  ['except'=>'hello'],
//        'three'  =>  ['only'=>'hello,data'],
//    ];

    /**
     * 我是控制器初始化方法，执行此控制器的任何操作之前必须先执行我
     */
    protected  function initialize()
    {
        // 抛出自定义异常, 运用助手函数helper.php 中定义的
        //exception('测试一下异常，哈哈哈', 88899);
        //var_dump(Config::get()['template']);exit;
        //echo 123456;
        //Log::write(time().'访问'.$_SERVER['PHP_SELF']);
        //Log::record('测试日志信息');
        Debug::remark('begin'); //于此对应的系统给出了debug('begin')助手函数
        $rr = Log::write('测试日志信息，错误日志提示','error');
        //Debug::remark('end');
        //echo Debug::getRangeTime('begin', 'end').'s'.'<br/>'; //运行时间
        //echo Debug::getRangeMem('begin','end'); //占用的内存开销
        //exit;
    }

    public function hello()
    {
        $model = new AuthRule();
        $res = $model->getAuthRule();
//        var_dump($res);exit;
        // 把分页数据赋值给模板变量list
        //$this->assign('list', $list);
        //// 渲染模板输出
        //return $this->fetch();



         return $this->fetch('admin/user');
        //echo 8888;exit;
        //这里的../template/public目录是相对于当前项目入口文件位置
        //这里的fetch() 需要引用 think\Controller
        echo 3445;
        return $this->fetch('public/menu');exit;
        $this->fetch('../template/public/menu.html');
        exit;
         //$this->error('错误跳转的函数测试');
        //相同模块下其他控制器方法的调用
        $city = controller('City');
        echo $city->showCity('夏天，海边，不穿鞋').'<br/>';

        //不同模块下控制器方法的调用，首先：'use app\common\Error'
        // 然后在 new Error;
        $error_obj = new Error;
        echo $error_obj->test('吼哈吼哈').'<br/>';

        //无需进行实例化就可以方便的进行方法调用
        //Facade功能可以让类无需实例化而直接进行静态方式调用。


        Cache::set('test_1', 'hello ,how are you');
        echo Cache::get('test_1').'<br/>';
        //自定义Facade类
        echo \app\facade\Test::hehe('hehe,thinkphp').'<br/>';


        //也可以通过此方法进行静态类的绑定
        Facade::bind('app\facade\Test', 'app\common\Test');
        echo Test::hehe('thinkphp').'<br/>';

        return 'hello,hhahaha';
    }

    public function verify(){

        $config =    [
            // 验证码字体大小
            'fontSize'    =>    30,
            // 验证码位数
            'length'      =>    3,
            // 关闭验证码杂点
            'useNoise'    =>    false,
        ];
        $captcha = new Captcha($config);
        var_dump($captcha->entry());exit;
    }
    public function index()
    {
        $data = [
            'name'  => 'think',
            'email' => 't1111qq@ww.com',
            'age'   => 80,
        ];
        $result = $this->validate($data,'ValidateRule');
//        if (true !== $result) {
//            // 验证失败 输出错误信息
//            dump($result);
//        }

        $validate = new ValidateRule;

        if (!$validate->scene('edit')->check($data)) {
            dump($validate->getError());
        }

//        Session::set('name','thinkphp');
//        $e = Session::get('name');
//        dump($e);exit;
        session('name', 'j=hahha ');
        echo session('name');
    }

    public function _empty($name){
        $this->showCity($name);
    }

    public function showCity($name){
        echo 666;exit;

        return '当前城市'.$name;
    }

    public function first(){
        echo 'first<br/>';
    }

    public function second(){
        echo 'second<br/>';
    }

    public function three(){
        echo 'three<br/>';
    }

    public function data(){
        echo 'data<br/>';
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
