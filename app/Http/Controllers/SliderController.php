<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\View;

class SliderController extends Controller
{   private $controllerName='slider';
    private $link = 'slider.';
    
    public function __construct()
    {
        
        view()->share('controllerName', $this->controllerName);
        
        
    }
    public function index()

    {
       
        return view($this->link . 'index',[
            'controllerName'=>$this->controllerName
        ]);
    }
    public function from($id=null)
    {
        return view($this->link . 'from',['id'=>$id,]);
    }
    public function delete($id)
    {
        return view($this->link . 'delete',['id'=>$id]);
    }
    /*public function status (Request $request)

    {
        echo '<h3 style="color:red">'.$request->id.'</h3>';
        echo '<h3 style="color:red">'.$request->status.'</h3>';
        return "helo the gioi";
    }*/
    public function status ($id,$status)
    {
        return view($this->link . 'status',['id'=>$id,'status'=>$status,'controllerName'=>$this->controllerName]);
    }

    
}
