<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Http\Response\ResponseJson;

class AdminController extends Controller
{
    use ResponseJson;
    public function index()
    {
        return view('api/Supplier');
    }
    public function create(Request $request){
        $insert=$request->all();
        Supplier::create($insert);
        return json_encode(['code'=>0,'msg'=>'success','data'=>$insert]);
    }
    public function get(){
        $Suppliers =Supplier::where('id', 1)
               ->orderBy('id', 'desc')
               ->take(3)
               ->get();
        foreach ($Suppliers as $Supplier)
        {
            echo $Supplier->id;
        }
    }
    public function updata(){
        $Suppliers = Supplier::all();
        $Suppliers = Supplier::where('id',123)->find(2);
        $Suppliers->id = '12';
        $Suppliers->save();     
    }
    public function delete(){
        $Suppliers = Supplier::all();
        $Suppliers = Supplier::find(1);
        $Suppliers->delete();  
    }
}
