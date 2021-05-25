<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Response\ResponseJson;

class UserController extends Controller
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

    public function add(){

    }

    public function list(){

    }

    public function update(){

    } 

    public function delete(){

    }

    public function check(){

    }

    // public  function contact(Request $request){
    //     $c = new contact;
    //     $c->addr = $request->input('address');
    //     $c->save();     
    // }

    // public function get(){
    //     $Contacts =Contact::where('id', 1)
    //            ->orderBy('id', 'desc')
    //            ->take(3)
    //            ->get();
    //     foreach ($Contacts as $Contact)
    //     {
    //         echo $Contact->id;
    //     }
    //     echo "123";
    // }

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

    // public function updata(){
    //     // $Contacts = Contact::all();
    //     $Contacts = Contact::where('id',1)->find(1);
    //     $Contacts->id = '1';
    //     $Contacts->save();     
    // }
    // public function delete(Request $request){
    //     // $contact = Contact::all();
    //     $contact = Contact::find($request->input('id'));
    //     if ($contact) {
    //         $contact->delete();  
    //         echo "删除成功";
    //     } else {
    //         echo "删除失败";
    //     }
        
    // }
}