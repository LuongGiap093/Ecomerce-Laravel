<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;    
use App\Models\Product;
use Illuminate\Http\Request;
use Session;
use DB;
use App\Classes\Helper;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('CheckAdminLogin');
        $this->viewprefix='admin.category.';
        $this->viewnamespace='panel/category';
    }
    public function index()
    {
     
        $categorys = Category::all();
        return view($this->viewprefix.'index')->with('cate', $categorys);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view($this->viewprefix.'create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        
        $Category = new Category();
        $this->validate($request, [
            'category_name' => 'required',
            'category_desc' => 'required',
            'category_status' => 'required',
        ]);
        // $request->image = $this->imageUpload($request);
        $Category->category_name = $request->category_name;
       // $Category->image = $this->imageUpload($request);
        $Category->image = Helper::imageUpload($request);
        $Category->category_desc = $request->category_desc;
        $Category->category_status = $request->category_status;
        if($Category->save())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('category.index');  
        
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {

    }
    public function edit(Category $category)
    {
        return view($this->viewprefix.'edit')->with('category', $category);
        // return view($this->viewprefix.'edit',compact('product'));
    }
    public function update(Request $request, Category $Category)
    {  
        $data=$request->validate([
            'category_name' => 'required',
            'category_desc' => 'required',
            'category_status' => 'required',
        ]);
        $data['image'] = Helper::imageUpload($request);
        if($Category->update($data))
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('category.index');   
    }



    public function destroy(Category $Category)
    {
        if($Category->delete())
        Session::flash('message', 'successfully!');
         else
        Session::flash('message', 'Failure!');
        return redirect()->route('category.index');  
    }
    public function unactive_category_product($category_id){
        
        DB::table('category')->where('category_id',$category_id)->update(['category_status'=>1]);
        Session::put('message','Không kích hoạt danh mục sản phẩm thành công');
        return Redirect::to('category.index');

    }
    public function active_category_product($category_id){
       
        DB::table('category')->where('category_id',$category_id)->update(['category_status'=>0]);
        Session::put('message','Kích hoạt danh mục sản phẩm thành công');
        return Redirect::to('category.index');
    }



    public function productlist($id){
        $products = Category::find($id)->product;
        return view('admin.category.productlist', compact('products'));
    }
}
