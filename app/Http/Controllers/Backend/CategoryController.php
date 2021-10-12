<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function CategoryView(){
        $category = Category::latest()->get();
        return view('backend.cagegory.category_view', compact('category'));
    }

    public function CategoryStore(Request $request){


        $request->validate([
            'category_name_en' => 'required',
            'category_name_bn' => 'required',
            'category_icon' => 'required',
        ],
        [
            'category_name_en.required' => 'Input Category English Name',
            'category_name_bn.required' => 'Input English Bangla Name',

        ]

    );

        

        Category::insert([
            'category_name_en' => $request->category_name_en,
            'category_name_bn' => $request->category_name_bn,
            'category_slug_en' => strtolower(str_replace(' ', '-',$request->category_name_en)),
            'category_slug_bn' => str_replace(' ', '-',$request->category_name_bn),
            'category_icon' => $request->category_icon,

        ]);

         $notification = array(
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // Insert Data function end


    public function CategoryEdit($id){
        $category = Category::findOrFail($id);
        return view('backend.cagegory.category_edit', compact('category'));
    } // Edit Data function end


    public function CategoryUpdate(Request $request){
        $category_id = $request->id;

            Category::findOrFail($category_id)->update([
                'category_name_en' => $request->category_name_en,
                'category_name_bn' => $request->category_name_bn,
                'category_slug_en' => strtolower(str_replace(' ', '-',$request->category_name_en)),
                'category_slug_bn' => str_replace(' ', '-',$request->category_name_bn),
                'category_icon' => $request->category_icon,

            ]);

             $notification = array(
                'message' => 'Category Updated Successfully',
                'alert-type' => 'info'
            );

            return redirect()->route('all.category')->with($notification);
        
    } // Data Update function end

    public function CategoryDelete($id){

        Category::findOrFail($id)->delete();

        $notification = array(
                'message' => 'Category Deleted Successfully',
                'alert-type' => 'info'
            );

            return redirect()->back()->with($notification);
    } // end method delete
    
}
