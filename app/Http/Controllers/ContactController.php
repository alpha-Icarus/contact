<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Response\ResponseJson;

/**
 * 联系我们控制器
 * 对用户留信息的增删改查
 */
class ContactController extends Controller
{
    use ResponseJson;
    public function index()
    {
        return view('api/index');
    }
    public function create(Request $request){
        $insert=$request->all();
        Contact::create($insert);
        return json_encode(['code'=>0,'msg'=>'success','data'=>$insert]);
    }

    // /**
    //  * 用户留联系方式
    //  * 
    //  * Param: $username 用户名 11位手机号
    //  * Param: $password 密码 至少6位，大小写字母加数字加特殊字符
    //  */
    // public  function contact(Request $request, $username){
    //     $c = new contact;
    //     $c->addr = $request->input('address');
    //     $c->save();     
    // }

    public function get(){
        $Contacts =Contact::where('id')
               ->get();
        foreach ($Contacts as $Contact)
        {
            echo $Contact->id;
        }
    }

    // public function check(Request $request){
    //     // 查询用户信息
    //     // 如果存在
    //     echo $request->input('username');
    // }

    // public function search(){
    //     // 获取查询的条件
    //     // 处理条件
    //     // 根据条件查询数据库
    //     // 处理数据
    //     // 返回数据
    // }

    public function update( Request $request,$id){
        // $contacts = Contact::all();
        $input = $request->all();
        Contact::where('id',$id)->update($input);     
    }
    public function delete( Request $request,$id){
        // $contact = Contact::all();
        // $contact = Contact::find($request->input('id'));
        // if ($contact) {
        //     $contact->delete();  
        //     echo "删除成功";
        // } else {
        //     echo "删除失败";
        // }
        $contact=contact::destroy($id);
    }
}