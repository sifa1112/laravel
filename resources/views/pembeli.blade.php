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
        @foreach($pembeli as $beli)
            <strong>{{$beli->nama}}</strong><hr>
            {{$beli->jk}} <br>
            {{$beli->alamat}} <br>
            {{$beli->kode_pos}} <br>
            {{$beli->kota}} <br>
            {{$beli->ttl}} <hr>
            @endforeach
</fieldset>
</body>
</html>