<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class CategoryController extends Controller
{
	public function index(){
    	$categories=Category::all();
    	return view('categoryList',compact('categories'));
    }
    
    public function create(){
    	return view('categoryNew');
    }
    
    public function store(Request $request){
    
    $this->validate($request,[
    	'title' => 'required|min:5'
    ]);

    $category=new Category();
    $category->title=$request['title'];
    $category->save();
    return redirect('categories');
	}

	public function show($id)
    {
    	$category=Category::find($id);
        return view('categoryShow',compact('category'));
    }

	public function edit($id){
		$category=Category::find($id);
		return view('categoryEdit',compact('category'));
	}

	public function update(Request $request){
		$category=Category::find($request['id']);
		$category->title=$request['title'];
		$category->save();
		return redirect('categories');
	}

	public function destroy($id){
		$category=Category::find($id);
		$category->delete();
		return redirect('categories');
	}
}
