<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Data Barang</legend>
        <br>
        @foreach($barang as $brg)
            <strong>{{$brg->nama}}</strong><br>
            {{$brg->varian}} <hr>
            {{$brg->harga_beli}} <hr>
            {{$brg->harga_jual}} <hr>
            @endforeach
</fieldset>
</body>
</html>