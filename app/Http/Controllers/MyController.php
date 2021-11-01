<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\barang;
use App\Models\pembelian;
use App\Models\pembeli;
use Illuminate\Http\Request;

class MyController extends Controller
{
    //membuat method
public function index()
{
    $data = [
        ['nama' => 'Dadang Konelo','kelas'=>'XII RPL 3'],
        ['nama' => 'Mamat Kelvin','kelas'=>'XII RPL 1'],
        ['nama' => 'Asep Jenang','kelas'=>'XII RPL 2'],
    ];
    return view('latihan', compact('data'));
}

public  function posting()
{
    $posts = Post::all();
    return view('post', compact('posts'));
}

public  function barang()
{
    $barang = barang::all();
    return view('barang', compact('barang'));
}

public  function pembelian()
{
    $pembelian = pembelian::all();
    // dd($pembelian);
    return view('pembelian', compact('pembelian'));
}

public  function pembeli()
{
    $pembeli = pembeli::all();
    return view('pembeli', compact('pembeli'));
}

public  function singlepembelian($id)
{
    $singlepembelian = pembelian::findOrFail($id);
    // dd($pembelian);
    return view('singlepembelian', compact('singlepembelian'));
}
}
