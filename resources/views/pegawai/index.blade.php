<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Data Pegawai</h1>
        <a href="{{ route('pegawai.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>NAMA</th>
                        <th>ALAMAT</th>
                        <th>EMAIL</th>
                        <th>AKSI</th>
                    </thead>
                    @foreach ($pegawai as $p)
                    <tbody>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->alamat }}</td>
                        <td>{{ $p->email }}</td>
                        <td>
                            <form action="{{ route('pegawai.destroy', $p->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <a href="{{ route('pegawai.edit', $p->id) }}" class="btn btn-success btn-sm">Edit</a>
                                <button class="btn btn-danger btn-sm">Hapus</button>   
                                </td>
                            </form>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>