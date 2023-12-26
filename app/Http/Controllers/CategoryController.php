<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request){
        if($request -> method() == "POST"){
            echo "POST Data";
        }else{
            echo "View data";
        }
    }
}
