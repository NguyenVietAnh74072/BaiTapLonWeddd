<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\View;

class hotelController extends Controller
{   private $controllerName='hotel';
    private $link = 'hotel.';
    
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
}
    