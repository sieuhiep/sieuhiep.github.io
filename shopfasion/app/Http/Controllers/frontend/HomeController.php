<?php

namespace App\Http\Controllers\frontend;
use App\models\{product,attribute,values,Category,variant};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function GetHome()
    {
        $data['product_fe']=product::where('featured',1)->where('img','<>','no-img.jpg')->take(4)->get();
        $data['product_new']=product::orderby('created_at','DESC')->where('img','<>','no-img.jpg')->take(8)->get();
        return view('frontend.index',$data);
    }
    public function GetContact()
    {
        return view('frontend.contact');
    }
    public function Getabout()
    {
        return view('frontend.about');
    }
}