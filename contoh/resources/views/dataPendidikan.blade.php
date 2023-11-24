@extends('master')

@section('konten')
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Anda bisa menambahkan item navigasi di sini -->
    </nav>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Riwayat Pendidikan</h1>
        <a href="/riwayat-pendidikan" class="btn btn-success mb-3">Tambah</a>
        <a href="/dashboard" class="btn btn-danger mb-3">Kembali</a>
        <table class="table" id="dataTable">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID User</th>
                    <th scope="col">Nama Sekolah</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Tahun Lulus</th>
                    <th scope="col">Dibuat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $row)
                <tr>
                    <td>{{ ++$i}}</td>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->sekolah }}</td>
                    <td>{{ $row->jurusan }}</td>
                    <td>{{ $row->tahun_lulus }}</td>
                    <td>{{ $row->created_at->format("D M Y") }}</td>
                    <td style="display: flex; justify-content: space-between;">
                        <a href="/tampilpendidikan/{{ $row->id }}" class="btn btn-primary">Edit</a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" style="margin-left:10px;" data-target="#Delete{{$row->id}}">
                            Delete
                        </button>
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
