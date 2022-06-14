<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $queryRaw = DB::select(DB::raw("select * from products"));
       
       //2.	Tampilkan seluruh nama medecines, formula dan harga
       //DB Query
       $produk = DB::table('products')->get();

       //cara 1 dengan sintaks compact. berarti variable queryBuilder nanti dikenali pada controller dan view
       return view('product.index', compact('produk'));

       // metode eloquent
    //    $listproduk = Product::all();
    //    dd($listproduk);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view ('product.insert_product',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Product();
        $data->generic_name = $request->get('generic_name');
        $data->medicines_form = $request->get('medicines_form');
        $data->restriction_formula = $request->get('restriction_formula');
        $data->description = $request->get('description');
        $data->price = $request->get('price');

        if($request->get('faskes_tk1') == 1){
            $faskes_tk1 = 1;
        }
        else{
            $faskes_tk1 = 0;
        }
        if($request->get('faskes_tk2') == 1){
            $faskes_tk2 = 1;
        }
        else{
            $faskes_tk2 = 0;
        }
        if($request->get('faskes_tk3') == 1){
            $faskes_tk3 = 1;
        }
        else{
            $faskes_tk3 = 0;
        }
        //dd($faskes_tk1,$faskes_tk2,$faskes_tk3);
        $data->faskes_tk1 = $faskes_tk1;
        $data->faskes_tk2 = $faskes_tk2;
        $data->faskes_tk3 = $faskes_tk3;
        $data->category_id  = $request->get('category');
        $data->image="";
        $data->save();
        return redirect()->route('obat.index')-> with('status','product is added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($product)
    {
        // select * from product where id = $product
        $res = Product::find($product);
        if($res){
            // apabila data ditemukan
            $message = $res;
        }
        else{
            // apabila data tidak ditemukan
            $message = Null;
        }
        // sintaks untuk mengetahui isi dari isi dari variabel yang berparameter
        //dd($product);

        return view('product.show', compact('message'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Product::find($id);
        $categories = Category::get();
        return view ('product.edit_product',compact('data','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Product::find($id);
        $data->generic_name = $request->get('generic_name');
        $data->medicines_form = $request->get('medicines_form');
        $data->restriction_formula = $request->get('restriction_formula');
        $data->description = $request->get('description');
        $data->price = $request->get('price');

        if($request->get('faskes_tk1') == 1){
            $faskes_tk1 = 1;
        }
        else{
            $faskes_tk1 = 0;
        }
        if($request->get('faskes_tk2') == 1){
            $faskes_tk2 = 1;
        }
        else{
            $faskes_tk2 = 0;
        }
        if($request->get('faskes_tk3') == 1){
            $faskes_tk3 = 1;
        }
        else{
            $faskes_tk3 = 0;
        }
        //dd($faskes_tk1,$faskes_tk2,$faskes_tk3);
        $data->faskes_tk1 = $faskes_tk1;
        $data->faskes_tk2 = $faskes_tk2;
        $data->faskes_tk3 = $faskes_tk3;
        $data->category_id  = $request->get('category');
        $data->image="";
        $data->save();
        return redirect()->route('obat.index')-> with('status','product berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Product::find($id);
        try {
            $data->delete();
            return redirect()->route('obat.index')-> with('status','Buyer data berhasil dihapus');
        } catch (\PDOException $e) {
            $msg = "Data Gagal dihapus. Pastikan data child sudah hilang atau tidak berhubungan";
            return redirect()->route('obat.index')-> with('error',$msg);
        }
    }

    // ingin menampilkan daftar obat yang memiliki kategori analgesik non narkotik
    public function showlist($id_category)
    {
        // metode eloquent
        $data = Category::find($id_category);
        $namecategory = $data->categories_name;
        
        $result = $data->products;
        if($result){
            $getTotalData = $result->count();
        }
        else{
            $getTotalData = 0;
        }

        return view('report.list_medicines_by_category',compact('id_category','namecategory','result','getTotalData'));

    }
    public function showallproduct()
    {
        // 3.	Tampilkan seluruh nama medecines, formula dan nama kategori
        // DB raw
        $data = DB::table('products as p') 
        ->join('categories as c', 'p.category_id','=','c.id')
        ->select('p.id as id','p.generic_name as generic_name','p.medicines_form as medicines_form',DB::raw('c.categories_name as categories_name'))
        ->get();

        //dd($data);
        return view('product.show_all_product_and_category_name',compact('data'));

    }
    public function shownulldataproduct()
    {
        // 3.	Tampilkan seluruh nama medecines, formula dan nama kategori
        // DB raw
        $data = DB::table('products as p') 
        ->join('categories as c', 'p.category_id','=','c.id')
        ->select('p.generic_name as generic_name','p.medicines_form as medicines_form',DB::raw('c.categories_name as categories_name'))
        ->get();

        //dd($data);
        return view('product.show_all_product_and_category_name',compact('data'));

    }
    
    public function medicine1form()
    {
        // 8.	Tampilkan obat yang memiliki satu form
        // DB raw
        $data = DB::table('products') 
        ->select('generic_name',' COUNT(medicines_form) as jumlah form')
        ->where('jumlah form',1)
        ->groupBy('generic_name')
        ->get();

        dd($data);

    }

    public function medicinehighprice()
    {
        // 9.	Tampilkan kategori dan nama obat yang memiliki harga termahal
        // DB raw
        $data = DB::table('products as p') 
        ->join('categories as c on p.category_id = c.id')
        ->select('c.categories_name', 'p.generic_name', 'max(p.price) as harga tertinggi')
        ->groupBy('harga tertinggi')
        ->get();

        dd($data);

    }
    public function front_index()
    {
        $products = Product::all();
        return view('frontend.product',compact('products'));
    }
    public function addToCart($id)
    {
        $p = Product::find($id);
        $cart=session()->get('cart');
        if(!isset($cart[$id])){
            $cart[$id] = [
                "name" => $p->generic_name,
                "quantity" => 1,
                "price" => $p->price,
                "photo" => $p->image
            ];
        }
        else{
            $cart[$id]["quantity"]++;
        }
        session()->put("cart",$cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function cart()
    {
        return view('frontend.cart');
    }

    
}
