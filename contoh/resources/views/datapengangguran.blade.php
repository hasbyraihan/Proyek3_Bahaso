<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Data Pengangguran</title>
  </head>
  <body>
    <h1 class="text-center mb-5">Data Pengangguran</h1>
    <div class="container">
    <a href="/tambahpengangguran" class="btn btn-success">Tambah</a>
      <div class="row">
        @if ($message = Session::get('success'))
        @endif
        <div class="alert alert-success" role="alert">
            {{ $message }}
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Nomor Telepon</th>
              <th scope="col">E-mail</th>
              <th scope="col">Alamat</th>
              <th scope="col">Kota</th>
              <th scope="col">Kode Pos</th>
              <th scope="col">Dibuat</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $row)
            <tr>
              <th scope="row">{{$row->id}}</th>
              <td>{{$row->nama}}</td>
              <td>{{$row->jenkel}}</td>
              <td>{{$row->notelp}}</td>
              <td>{{$row->email}}</td>
              <td>{{$row->alamat}}</td>
              <td>{{$row->kodepos}}</td>
              <td>{{$row->kota}}</td>
              <td>{{$row->created_at->format("D M Y") }}</td>
              <td>
                <a href="/tampildata/{{$row->id}}" class="btn btn-primary">Edit</a>
                <a href="/delete/{{$row->id}}" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      </div>
    </div>
  </body>
</html>