<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Http\Response\ResponseJson;

class AdminController extends Controller
{
    use ResponseJson;
    public function index()
    {
        return view('api/Inventory');
    }
    public function create(Request $request){
        $insert=$request->all();
        Inventory::create($insert);
        return json_encode(['code'=>0,'msg'=>'success','data'=>$insert]);
    }
    public function get(){
        $Inventorys =Inventory::where('id', 1)
               ->orderBy('id', 'desc')
               ->take(3)
               ->get();
        foreach ($Inventorys as $Inventory)
        {
            echo $Inventory->id;
        }
    }
    public function updata(){
        $Inventorys = Inventory::all();
        $Inventorys = Inventory::where('id',123)->find(2);
        $Inventorys->id = '12';
        $Inventorys->save();     
    }
    public function delete(){
        $Inventorys = Inventory::all();
        $Inventorys = Inventory::find(1);
        $Inventorys->delete();  
    }
}