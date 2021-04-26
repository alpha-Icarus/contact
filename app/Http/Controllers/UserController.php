<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Response\ResponseJson;

class UserController extends Controller
{
    use ResponseJson;
    public function index()
    {
        return view('api/index');
    }
    public function create(Request $request){
        $input=$request->all();
        User::create($input);
        return json_encode(['code'=>0,'msg'=>'success','data'=>$input]);
    }
}
