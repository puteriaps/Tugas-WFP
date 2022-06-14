<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // 1.	Tampilkan seluruh data kategori obat
       // DB Query
       $categories = DB::table('categories')->get();
       return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('category.insert_category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Category();
        $data->categories_name = $request->get('categories_name');
        $data->description = $request->get('description');
        $data->save();
        return redirect()->route('category.index')-> with('status','Category is added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //dd($category);
        $data = $category;
        return view ('category.edit_category',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category->categories_name = $request->get("categories_name");
        $category->description = $request->get("description");
        $category->save();
        return redirect()->route('category.index')-> with('status','Category data is change');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //dd($category);
        try {
            $category->delete();
            return redirect()->route('category.index')-> with('status','Category data berhasil dihapus');
        } catch (\PDOException $e) {
            $msg = "Data Gagal dihapus. Pastikan data child sudah hilang atau tidak berhubungan";
            return redirect()->route('category.index')-> with('error',$msg);
        }
    }
    public function avgpricecategory()
    {
        // 6.	Tampilkan rata-rata harga setiap kategori obat. Bila tidak ada obat maka berikan 0
        // DB raw
        
        $data = DB::table('categories')
        ->join('products', 'categories.id', '=', 'products.category_id')
        ->select(DB::raw('categories.id'),DB::raw('categories.categories_name'),DB::raw('round(AVG(price),0) as "rata-rata"'))
        ->groupBy('categories.id','categories.categories_name')
        ->get();

        return view('category.index', compact('categories'));


    }
    public function categorywith1product()
    {
        // 7.	Tampilkan kategori obat yang memiliki 1 produk medicine saja
        // DB raw
        $data = DB::table('categories as c') 
        ->join('products as p ', 'p.category_id','=','c.id')
        ->select('c.categories_name as categories_name', DB::raw('COUNT(p.category_id) as rata rata'))
        ->where('rata rata = 1')
        ->groupBy('p.category_id')
        ->get();

        dd($data);
    }
}
