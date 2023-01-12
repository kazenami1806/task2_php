<!DOCTYPE html>

<head>
    <title>Page Book</title>
</head>
<body>
    <table border="1">
    @foreach($book as $bk)
        <tr>
            <td>{{ $bk['nama_buku'] }}</td>
            <td>{{ $bk['deskripsi'] }}</td>
            <td>{{ $bk['harga'] }}</td>
        </tr>  
    @endforeach
</body>

</html>