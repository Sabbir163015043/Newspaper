<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Detail;

class DetailsController extends Controller
{
    public function index()
    {
        return view('admin.detail.add',[
            'categories' => Category::all(),
        ]);
    }
    
        public function create(Request $request)
    {
        $image   = $request->file('image');
        $imgName = $image->getClientOriginalName();
        $directory ='news-images/';
        $image ->move($directory, $imgName);
        $imgUrl = $directory.$imgName;

      

        $detail = new Detail();
        $detail -> category_id	 = $request -> category_id	;
        $detail -> tittle_name	 = $request -> tittle_name	;
        $detail -> image = $imgUrl;
        $detail -> full_description = $request -> full_description;
        $detail -> status = $request -> status;
        $detail ->save();

        return redirect()->back()->with('message','News Post Succesfully');
    }

    public function manage()
    {
        return view('admin.detail.manage',['details' => Detail::all()]);
    } 

    public function detail($id)
    {
        return view('admin.detail.detail',['detail' => Detail::find($id)]);
    }
    
    public function edit($id)
    {
        return view('admin.detail.edit',[
            'detail'     => Detail::find($id),
            'categories' => Category::all(),
        ]);
    }
    public function update(Request $request)
    {
        $detail = Detail::find($request->id);
        if($image = $request->file('image'))
        {
        if(file_exists($detail->image))
        {
            unlink($detail->image);
        }
        $imgName = $image->getClientOriginalName();
        $directory ='news-images/';
        $image ->move($directory, $imgName);
        $imgUrl = $directory.$imgName;
        }
        else
        {
            $imgUrl = $detail->image;
        }
        $detail -> category_id	 = $request -> category_id	;
        $detail -> tittle_name	 = $request -> tittle_name	;
        $detail -> image = $imgUrl;
        $detail -> full_description = $request -> full_description;
        $detail -> status = $request -> status;
        $detail ->save();

        return redirect('/manage-news')->with('message','News Update Successfully');
    }    
    public function delete($id)
    {
        $detail = Detail :: find($id);
        $detail -> delete();

        return redirect('/manage-news')->with('message','News Update Successfully');
    }
}







