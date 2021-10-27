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