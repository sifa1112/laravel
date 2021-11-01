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
        <legend>Data Pembeli</legend>
        <br> 

        <strong>{{$singlepembelian->id}}</strong><hr>
        {{$singlepembelian->nama_barang}}</strong><br>
            {{$singlepembelian->nama_suplier}} <br>
            {{$singlepembelian->qty}} <br>
            {{$singlepembelian->tgl}} <br>
            
</fieldset>
</body>
</html>