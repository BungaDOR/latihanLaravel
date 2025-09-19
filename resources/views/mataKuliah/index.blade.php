<!DOCTYPE html>
<html>
<head>
    <title>Data Mata Kuliah</title>
</head>
<body>
    <h1>Tambah Mata Kuliah</h1>
    <form method="POST" action="/mataKuliah">
        @csrf
        <input type="text" name="matkul" placeholder="Mata Kuliah"><br>
        <input type="text" name="deskripsi" placeholder="Deskripsi"><br>
        <button type="submit">Simpan</button>
    </form>

    <h2>List Mata Kuliah</h2>
    <ul>
        @foreach($data as $matkul)
            <li>{{ $matkul->matkul }} - {{ $matkul->deskripsi }}</li>
        @endforeach
    </ul>
</body>
</html>