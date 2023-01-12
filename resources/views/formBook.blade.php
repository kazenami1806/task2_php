<!DOCTYPE html>

<head>
    <title>Form Book</title>
</head>
<body>
    <form action="{{ url('book/submit')}}" method="POST">
        @csrf

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <label> Nama buku </label>
        <input name="nama_buku" value="" />
        <br>
        <label> Deskripsi buku </label>
        <textarea name="deskripsi"></textarea>
        <br>
        <label> Harga buku </label>
        <input name="harga" value="" />
        <br>
        <button type="submit"> Submit </button>
    </form>
</body>

</html>