<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class SliderController extends Controller
{
    private $link = 'slider.';
    public function index($id)

    {
        echo '<pre style="color:red">';
        print_r($id);
        echo '</pre>';
        return view($this->link . 'index', ['id' => $id]);
    }
    public function from()
    {
        return view($this->link . 'from');
    }
    public function delete()
    {
        return view($this->link . 'delete');
    }
}
