<?php

namespace App\Http\Controllers\backend;
use  App\Http\Requests\AddCategoryRequest;
use  App\Http\Requests\EditCategoryRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Category;
class CategoryController extends Controller
{
    public function GetCategory()
    {
        $data['category']=Category::all();
        return view('backend.category.category',$data);
    }
    public function PostCategory(AddCategoryRequest $request)
    {
       $cate = new Category();
       $cate->name = $request->name;
       $cate->parent = $request->parent;
       $cate->save();
       return redirect()->back()->with('thongbao','them thanh cong');
    }
    public function EditCategory($id)
    {
        $data['cate']=Category::find($id);
        $data['category']=Category::all();
       return view('backend.category.editcategory',$data);
    }
    public function PostEditCategory(EditCategoryRequest $request,$id)
    {
        $cate =Category::find($id);
        $cate->name = $request->name;
        $cate->parent = $request->parent;
        $cate->save();
        return redirect()->back()->with('thongbao','sua thanh cong');

    }
    public function DeleteCategory($id)
    {
        Category::destroy($id);
        return redirect()->back()->with('thongbao','Xoa thanh cong');
    }
}
