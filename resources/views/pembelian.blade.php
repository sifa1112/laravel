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
        <legend>Data Pembelian</legend>
        <br>
        @foreach($pembelian as $pem)
            <strong>{{$pem->nama_barang}}</strong><hr>
            {{$pem->nama_suplier}} <br>
            {{$pem->qty}} <br>
            {{$pem->tgl}} <hr>
            @endforeach
</fieldset>
</body>
</html>