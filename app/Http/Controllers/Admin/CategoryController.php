<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Repositories\Contracts\CategoryRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends BackendController
{

    protected $category;

    public function __construct(CategoryRepository $category)
    {
        parent::__construct();
        $this->category=$category;
    }

    public function add_category(Request $request)
    {
       if ($request->isMethod('get'))
       {
           $category=$this->category->getCategories();
           $table=$this->category->all();


           return view($this->backendcategoryPath.'add_category',compact('category','table'));
       }
       if ($request->isMethod('post'))
       {
           $request->validate([
               'name' => 'required|unique:categories',
           ]);
          $category=Category::create($request->all());
          return back()->with('success','Category added successfully');
       }
    }

    public function delete_category(Request $request)
    {
        $id = $request->id;
        $this->category->delete($id);
        return redirect()->back()->with('success', 'Category successfully deleted!!');

    }

    public function edit_category(Request $request)
    {
        if ($request->isMethod('post')) {
            $id = $request->id;

            $data['name'] = $request->name;
            $data['parent_id'] = $request->parent_id;
            $new = Category::findorfail($id);

            if ($new->update($data)) {
                return redirect()->back()->with('success','Category successfully updated');
            }

        }

    }

}
