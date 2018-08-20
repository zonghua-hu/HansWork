<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/28 0028
 * Time: 16:00
 */

namespace App\Http\Model;
use Faker\Provider\Base;
use Illuminate\Support\Facades\DB;


class Login extends Base
{
    //用户登录验证
    public static function LoginCheck($username,$password)
    {
        if(empty($username)||empty($password)){
            return false;
        }
          $num = DB::table('T_user')
                ->where('Login_user',$username)
                ->where('Login_pwd',$password)
                ->first();
        return $num;
    }
    //用户注册插入数据
    public static function RegisterUser($username,$password)
    {
        return  $bool = DB::table('T_user')->insert(['Login_user'=>$username,'Login_pwd'=>$password]);
    }
    //查询学生信息
    public static function SearchStudentInfo($id=1)
    {
        $num = DB::table('T_Info')
            ->where('id',$id)
            ->first();
        return $num;
    }

    public static function getStudentInfoAll()
    {
        $num = $student=DB::select("select * from T_Info");
        return $num;
    }
    //插入学生信息
    public static function InsertStudentInfoByHand($Name,$Age,$City,$Job,$Gender)
    {
        return $bool=DB::table("T_Info")->insert(['name'=>$Name,'age'=>$Age,'city'=>$City,'job'=>$Job,'gender'=>$Gender]);
    }

}