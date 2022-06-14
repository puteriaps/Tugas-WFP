<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("catalogue",function(){
    return view('catalogue');
});

Route::get("catalogue/medicines",function(){
    return view('medicines');
});

Route::get("catalogue/med_equip",function(){
    return view('med_equip');
});

Route::get("catalogue/medicines/{medicine_id}",function($medicine_id){
    if($medicine_id == "Paracetamol"){
        return "Parasetamol atau asetaminofen adalah obat analgesik dan antipiretik yang populer dan digunakan untuk meredakan sakit kepala dan nyeri ringan, serta demam. Obat digunakan sebagian besar sebagai obat resep untuk analgesik dan flu. Obat memiliki keamanan bagus pada dosis standar, tetapi mudah terjadi overdosis karena obat muncul pada banyak sediaan obat. Hal ini mendorong terjadinya overdosis baik sengaja ataupun tidak sengaja. ";
    }
    else if($medicine_id == "Ampicillin"){
        return "Ampisilin merupakan antibiotik yang digunakan untuk mencegah dan mengobati sejumlah infeksi bakteri. Obat ini digunakan untuk mengobati infeksi saluran pernapasan, infeksi saluran kemih, meningitis, salmonelosis, dan endokarditis. Obat ini juga digunakan untuk mencegah infeksi streptokokus grup B pada bayi yang baru lahir. Ampisilin diberikan secara peroral, dengan injeksi intramuskular, atau intravena. Seperti antibiotik pada umumnya, ampisilin tidak berguna untuk pengobatan infeksi virus.";
    }
    
});

Route::get("catalogue/med_equip/{med_equip_id}",function($med_equip_id){
    if($med_equip_id == "Stetoskop"){
        return "Stetoskop (bahasa Yunani: stethos, dada dan skopeein, memeriksa) adalah sebuah alat medis akustik untuk memeriksa suara dalam tubuh. Dia banyak digunakan untuk mendengar suara jantung dan pernapasan, meskipun dia juga digunakan untuk mendengar intestine dan aliran darah dalam arteri dan 'vein'.";
    }
    else if($med_equip_id == "Termometer"){
        return "Termometer adalah alat yang digunakan untuk mengukur suhu (temperatur), ataupun perubahan suhu. Istilah termometer berasal dari bahasa Latin thermo yang berarti panas dan meter yang berarti untuk mengukur. Prinsip kerja termometer ada bermacam-macam, yang paling umum digunakan adalah termometer air raksa.";
    }
    
});

Auth::routes();

// product
Route::resource('obat','ProductController');
Route::get("/report/listmedicine/{id}",'ProductController@showlist')->name('reportShowMedicine');
Route::get("/product/showallproduct",'ProductController@showallproduct')->name('listmedicineandcategoryname');
Route::get("/product/avgpriceeachcategory",'ProductController@avgpriceeachcategory')->name('avgpriceeachcategory');

// kategori
Route::resource('category','CategoryController');
Route::get("/avgpricecategory",'CategoryController@avgpricecategory')->name('avgpriceeachcategory');

//transaction
Route::resource('transaction','TransactionController');
Route::get("/transaction/showDataAjax",'TransactionController@showAjax')->name('transaction.showAjax');

// Buyer
Route::resource('buyer','BuyerController');
Route::get("/buyer/saveDataField",'BuyerController@saveDataField')->name('buyer.saveDataField');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', 'ProductController@front_index');
Route::get('cart', 'ProductController@cart');
Route::get('add-to-cart/{id}', 'ProductController@addToCart');

Route::middleware(['auth'])->group(function(){
    Route::get('/checkout', 'TransactionController@form_submit_front');
    Route::get('/submit_checkout', 'TransactionController@submit_front')->name('submitcheckout');
});