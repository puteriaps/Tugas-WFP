<?php

namespace App\Http\Controllers;

use App\Buyer;
use Illuminate\Http\Request;
use DB;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buyer = DB::table('buyers')->get();
        return view('buyer.index', compact('buyer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('buyer.insert_buyer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Buyer();
        $file = $request->file('logo');
        $imgFolder = 'images';
        $imgFile = time()."_".$file.getClientOriginalName();
        $file->move($imgFolder,$imgFile);
        $data->logo=$imgFile;

        $data->name = $request->get('name');
        $data->address = $request->get('address');
        $data->save();
        return redirect()->route('buyer.index')-> with('status','supplier baru berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function show(Buyer $buyer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function edit(Buyer $buyer)
    {
        $data = $buyer;
        return view ('buyer.edit_buyer',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buyer $buyer)
    {
        $buyer->name = $request->get("name");
        $buyer->address = $request->get("address");
        $buyer->save();
        return redirect()->route('buyer.index')-> with('status','Buyer data is change');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buyer $buyer)
    {
        try {
            $buyer->delete();
            return redirect()->route('buyer.index')-> with('status','Buyer data berhasil dihapus');
        } catch (\PDOException $e) {
            $msg = "Data Gagal dihapus. Pastikan data child sudah hilang atau tidak berhubungan";
            return redirect()->route('buyer.index')-> with('error',$msg);
        }
    }
    public function saveDataField(Request $request)
    {
        $id = $request->get('id');
        $fname = $request->get('fname');
        $value = $request->get('value');

        $Buyer = $Buyer::find($id);
        $Buyer->$fname=$value;
        $Buyer->save();

        return response()->json(array(
            'status'=>'ok',
            'msg'=>'buyer data updated'
        ),200);
    }
    public function changeLogo(Request $request)
    {
        $id = $request->get('id');
        $file = $request->file('logo');
        $imgFolder = 'images';
        $imgFile = time()."_".$file.getClientOriginalName();
        $file->move($imgFolder,$imgFile);
        $Buyer=Buyer::find($id);
        $Buyer->logo=$imgFile;
        $data->save();
        return redirect()->route('buyer.index')-> with('status','Buyer logo is changed');
    }
}
