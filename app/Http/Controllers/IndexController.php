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

class IndexController extends Controller
{
    public function Login()
    {
        return view('Login');
    }

    /**
     * 登录方法
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     */
    public function Manager()
    {
        if ($input = Input::all()) {
        $username = $input['username'];
        $password = $input['pwd'];
         }
        $loginresult  =  Login::LoginCheck($username,$password);
        if ($loginresult)
        {
            return view('Manager');
        }
        else
        {
           echo '用户名或密码错误！';
           return view('Login');
        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 用户注册界面
     */
    public function Register()
    {
        return view('Register');
    }
    //注册
    public function RegisterSubmit()
    {
        if ($input = Input::all()) {
            $username = $input['username'];
            $password = $input['pwd'];
        }
        if (empty($password)||empty($username))
        {
            echo '用户名或者密码不能为空！';
        }
        $loginresult  =  Login::RegisterUser($username,$password);
        if ($loginresult)
        {
            return view('Login');
        }
        else
        {
            echo '注册失败';
            return view('Register');
        }


    }
    /**
     * @return mixed
     *  查看学生信息
     */
    public function info()
    {
        $data = Login::SearchStudentInfo();
        $data1 = (array)$data;
        $id = $data1['id'];
        $Name = $data1['name'];
        $Age = $data1['age'];
        $City = $data1['city'];
        $Job = $data1['job'];
        $Gender = $data1['gender'];
        //return View('Info',['Id' => $id,'Name'=>$Name,'Age'=>$Age,'City'=>$City,'Job'=>$Job,'Gender'=>$Gender]);
       return View('Info')
            ->with('Id',$id)
            ->with('Name',$Name)
            ->with('Age',$Age)
            ->with('City',$City)
            ->with('Job',$Job)
            ->with('Gender',$Gender);
    }

    public function InsertStudent()
    {
        $data = Login::SearchStudentInfo();
        $data1 = (array)$data;
        $id = $data1['id'];
        $Name = $data1['name'];
        $Age = $data1['age'];
        $City = $data1['city'];
        $Job = $data1['job'];
        $Gender = $data1['gender'];
        //return View('Info',['Id' => $id,'Name'=>$Name,'Age'=>$Age,'City'=>$City,'Job'=>$Job,'Gender'=>$Gender]);
        return View('Insertstudent')
            ->with('Id',$id)
            ->with('Name',$Name)
            ->with('Age',$Age)
            ->with('City',$City)
            ->with('Job',$Job)
            ->with('Gender',$Gender);
    }

    public function AlterInfo()
    {
        return view ('Alterinfo');
    }

    /**
     * 插入数据的方法
     */
    public function InsertStudentInfoByHand()
    {
        if ($input = Input::all()) {
            $Name = $input['Name'];
            $Age = $input['Age'];
            $City = $input['City'];
            $Job = $input['Job'];
            $Gender = $input['Gender'];
        }
        $result = Login::InsertStudentInfoByHand($Name,$Age,$City,$Job,$Gender);
        if ($result)
        {
            echo '插入成功！';
        }
    }

    public function arrayToObject($e)
    {
        return true;
    }

}