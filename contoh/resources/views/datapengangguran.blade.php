@extends('master')

@section('konten')
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Anda bisa menambahkan item navigasi di sini -->
    </nav>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Data Pengangguran</h1>
        <a href="/tambahpengangguran" class="btn btn-outline-success mb-3">Tambah</a>
        <a href="/dashboard" class="btn btn-outline-danger mb-3 ml-2">Kembali</a>
        <a href="/exportpdf" class="btn btn-outline-warning mb-3 ml-2">PDF</a>
        <table class="table" id="dataTable">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">foto</th>
                    <th scope="col">Name</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Nomor Telepon</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Kota</th>
                    <th scope="col">Kode Pos</th>
                    <th scope="col">Dibuat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $row)
                <tr>
                    <td>{{ ++$i}}</td>
                    <td><img src="{{ asset('uploads/foto/' . $row->foto) }}" width="100" alt=""></td>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->jenkel }}</td>
                    <td>{{ $row->notelp }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->alamat }}</td>
                    <td>{{ $row->kodepos }}</td>
                    <td>{{ $row->kota }}</td>
                    <td>{{ $row->created_at->format("D M Y") }}</td>
                    <td style="display: flex; justify-content: space-between;">
                        <a href="/tampildata/{{ $row->id }}" class="btn btn-outline-info mr-2">Edit</a>
                        <!-- <a href="/delete/{{ $row->id }}" class="btn btn-danger" style="margin-left:10px;">Delete</a> -->
                        <a href="/delete/{{ $row->id }}" class="btn btn-outline-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
@foreach ($data as $row)
    <div class="modal fade" id="Delete{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Delete</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            Apakah anda yakin ingin menghapus data ini?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
            <a href="/delete/{{$row->id}}" class="btn btn-primary">Ya</a>>
        </div>
        </div>
    </div>
    </div>
@endforeach

@include('sweetalert::alert')
</body>
@endsection
