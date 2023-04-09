<?php
  
namespace App\Http\Controllers;
   
use App\Models\Category;
use Illuminate\Http\Request;
  
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
    
        return view('category.index',compact('category'));

            
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        $category = Category::all();
       
        return view('category.create',compact('category'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
    
        Category::create($request->all());
     
        return redirect()->route('categories.index')
                        ->with('success','Category created successfully.');
    }
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {  
        $category_list = Category::all();
        // dd($category);
        return view('category.edit',compact('category','category_list'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
        ]);
    
        $category->update($request->all());
    
        return redirect()->route('categories.index')
                        ->with('success','Category updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
    
        return redirect()->route('categories.index')
                        ->with('success','Category deleted successfully');
    }
}