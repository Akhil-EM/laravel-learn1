<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        $data = ["students"=>[["name"=>"akhil","age"=>15],
                              ["name"=>"amal","age"=>25],
                              ["name"=>"arun","age"=>30]]];
        
        return view("test-controller",$data);
    }
}
