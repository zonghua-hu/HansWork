<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/16 0016
 * Time: 16:35
 */

namespace App\Http\Controllers;


use App\Http\Model\Login;
use Illuminate\Support\Facades\Input;
use Illuminate\View\View;

class TestController extends Controller
{
    /**
     * 获取当前类
     * @param array $params
     * @param array $primitives
     * @return array
     */
    protected function getDepenenices(array $params,array $primitives = [])
    {
        $dependencies = [];
        foreach ($params as $param) {
            $dependencies = $param->getClass();
            if (array_key_exists($param->names,$primitives)) {
                $dependencies [] = $primitives[$param->name];
            } elseif (is_null($dependencies)) {
                $dependencies [] = $this->resolveNonClass($param);
            } else {
                $dependencies [] = $this->resolveClass($param);
            }
        }
    return (array) $dependencies;
    }
    /**
     * 解决无法获得类名的依赖
     */
    protected function resolveNonClass(ReflectionParamter $paramter)
    {
        if ($paramter->isDefaultValueAvailable()) {
            return $paramter->getDefaultValue();
        }
    }

    /**
     * 通过服务器解决一个具有类名的依赖
     * @param ReflectionParamter $paramter
     * @return mixed
     */
    protected  function resolveClass(ReflectionParamter $paramter)
    {
        try {
            return $this->make($paramter->getClass()->name);
         } finally {
            echo 'FAILD~';
        }
    }
}
class  A {
    public  static function call() {
        echo "Class A";
    }

    public static function test()
    {
        self::call();
        static::call();
    }
}
class  B extends A {
    public static function call ()
    {
        echo "class B~";
    }
}
$str = B::call();
echo $str;
class C
{
    public static function create()
    {
        $self = new self();
        $static = new static();
        return array($self,$static);
    }

}
class D extends  C{}
$arr = D::create();
foreach ($arr as $value) {
    var_dump($value);
}