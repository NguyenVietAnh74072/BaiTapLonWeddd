<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\View;

class SliderController extends Controller
{   private $controllerName='slider';
    private $link = 'slider.';
    
    public function __construct()
    {
        
        view()->share('controllerName', $this->controllerName);
        
        
    }
    public function index()

    {
       
        return view($this->link . 'index');
    }
    public function from($id=null)
    {
        return view($this->link . 'from',['id'=>$id]);
    }
    public function delete($id)
    {
        return view($this->link . 'delete',['id'=>$id]);
    }
    public function status (Request $request)

    {
        echo '<h3 style="color:red">'.$request->id.'</h3>';
        echo '<h3 style="color:red">'.$request->status.'</h3>';
        return "helo the gioi";
    }
}
