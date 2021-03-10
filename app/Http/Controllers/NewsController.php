<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\Category;
class NewsController extends Controller
{
    public function index()
    {
        return view('front.home.home',[
            'details' => Detail::orderBy('id','desc')->where('status',1)->get(),
            'categories' => Category::where('status',1)->get(),
            
        ]);
    }

    /* $id = Category id */
    public function singlePage($id)
    {
        return view('front.category.single',[
            'categories' => Category::where('status',1)->get(),
            'details'   => Detail::where ('category_id', $id)->where('status',1)->orderBy('id','desc')->get()
        ]);   
    }
/* $id = Product id */
    public function newDetail($id)
    {
        $detail = Detail ::find($id);
        return view('front.category.news-detail',[
            'categories' => Category::where('status',1)->get(),
            'detail'     => $detail,
            'related_details' => Detail::where ('category_id', $detail->category_id)->where('status',1)->orderBy('id','desc')->get(),
            

            ]); 
    }
}
