<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Http\Response\ResponseJson;

class AdminController extends Controller
{
    use ResponseJson;
    public function index()
    {
        return view('api/login');
    }
    public function create(Request $request){
        $insert=$request->all();
        Admin::create($insert);
        return json_encode(['code'=>0,'msg'=>'success','data'=>$insert]);
    }
    public function get(){
        $admins =Admin::where('id', 1)
               ->orderBy('id', 'desc')
               ->take(3)
               ->get();
        foreach ($admins as $admin)
        {
            echo $admin->id;
        }
    }
    public function updata(){
        $admins = Admin::all();
        $admins = Admin::where('id',123)->find(2);
        $admins->id = '12';
        $admins->save();     
    }
    public function delete(){
        $admins = Admin::all();
        $admins = Admin::find(1);
        $admins->delete();  
    }
}