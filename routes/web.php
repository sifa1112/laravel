<?php

use App\Http\Controllers\MyController;
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

Route::get('tentang', function () {
    return "<h1>Hello</h1>"
    . "selamat datang di webapp saya<br>"
    . "Laravel emang keren";
});

Route::get('saya', function (){
    //mereturn view ke file yang bernama "profile"
    //difolder 'resource/views'
    $mamat ="Mamat Abdullah";
    return view('profile', compact('mamat'));
});

Route::get('indy', function (){
    $nama ="Indy Ratna Pratiwi";
    $ttl ="Bandung 23 Februari ";
    $usia ="20";
    $agama ="Islam";
    $ig ="@indyratnap";
    return view('jurnalrisa', compact('nama','ttl','usia','agama','ig'));
});

Route::get('risa', function (){
    $nama ="Risa Saraswati";
    $ttl ="Bandung 24 Februari ";
    $usia ="36";
    $agama ="Islam";
    $ig ="@risa_saraswati";
    return view('jurnalrisa', compact('nama','ttl','usia','agama','ig'));
});
 
Route::get('riri', function (){
    $nama ="Riana Rizki";
    $ttl ="Bandung Maret ";
    $usia ="30";
    $agama ="Islam";
    $ig ="@rianarizki";
    return view('jurnalrisa', compact('nama','ttl','usia','agama','ig'));
});

Route::get('dimas', function (){
    $nama ="Dimasta";
    $ttl ="16 Oktober ";
    $usia ="33";
    $agama ="Islam";
    $ig ="@dimasta";
    return view('jurnalrisa', compact('nama','ttl','usia','agama','ig'));
});

Route::get('iko', function (){
    $nama ="Nicko";
    $ttl ="15 Desember";
    $usia ="33";
    $agama ="Islam";
    $ig ="@nickoirham_";
    return view('jurnalrisa', compact('nama','ttl','usia','agama','ig'));
});

//Route Parameter

Route::get('posting/{id}', function ($a) {
    return "Halaman Posting ke - <b>$a</b>";
});

Route::get('bio/{nama}/{alamat}/{jk}/{tb}/{bb}', function ($nama,$alamat,$jk,$tb,$bb) {

    return view('bio', compact('nama','alamat','jk','tb','bb'));
});

//Route Optional Parameter
Route::get('post/{id?}', function ($a = 1) {
    return "Halaman Posting ke - <b>$a</b>";
});

Route::get('biodata/{nama?}/{alamat?}/{jk?}/{tb?}/{bb?}', function ($nama =null,$alamat=null,$jk=null,$tb=null,$bb=null) {
    return view('biodata', compact('nama','alamat','jk','tb','bb'));

});

//mengakses data melalui model

Route::get('testmodel', function () {
    $query = App\Models\Post::all();
    return $query;
});

//mencari data berdasarkan parameter 'id'
Route::get('testmodel/{id}', function ($id) {
    $query = App\Models\Post::find($id);
    return $query;
});

//mencari data berdasarkan field 'title' yang sama dengan parameter 's'
Route::get('testmodel-cari/{search}', function ($s) {
    $query = App\Models\Post::where('title','like',"%s%")->get();
    return $query;
});

//mengubah judul dari data ke2 berdasarkan 'id'
Route::get('testmodel-update', function () {
    $query = App\Models\Post::find(2);
    $query->title = "Bane Si Bajak Laut";
    $query->save();
    return $query;
});

//menambah data baru
Route::get('testmodel-add', function () {
    $query = new App\Models\Post();
    $query->title = "Sholawat penghapus maksiat";
    $query->content = "lorem ipsum sit amet dolor";
    $query->save();
    return $query;
});

//menghapus data
Route::get('testmodel-delete/{id}', function ($id) {
    $query = App\Models\Post::find($id);
    $query->delete();
    return redirect('/testmodel');
});

//table barang
Route::get('barang', function () {
    $query = App\Models\barang::all();
    return $query;
});

//table pesanan
Route::get('pesanan', function () {
    $query = App\Models\pesanan::all();
    return $query;
});

//table pembeli
Route::get('pembeli', function () {
    $query = App\Models\pembeli::all();
    return $query;
});

//table pembelian
// Route::get('pembelian', function () {
//     $query = App\Models\pembelian::all();
//     return $query;
// });

//table suplier
Route::get('suplier', function () {
    $query = App\Models\suplier::all();
    return $query;
});

//route dengan controller
Route::get ('data-siswa', [MyController::class, 'index']);
Route::get ('posts', [MyController::class, 'posting']);
Route::get ('barang', [MyController::class, 'barang']);
Route::get ('pembelian', [MyController::class, 'pembelian']);
Route::get ('pembeli', [MyController::class, 'pembeli']);
Route::get('pembelian/{id}', [MyController::class, 'singlepembelian']);