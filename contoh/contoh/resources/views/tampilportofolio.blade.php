@extends('master')

@section('konten')
<div class="container mt-5">
    <h2 class="mb-4">Daftar Portofolio</h2>

    <a href="{{ route('portofolio') }}" class="btn btn-primary mb-3">Tambah Portofolio Baru</a>

    {{-- Tabel Portofolio dengan Detail --}}
    <table class="table">
        <thead>
            <tr>
                <th>Bidang</th>
                <th>Deskripsi</th>
                <th>File</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($portofolios as $portofolio)
            <tr>
                <td>{{ $portofolio->bidang }}</td>
                <td>{{ $portofolio->deskripsi }}</td>
                <td><a href="{{ asset($portofolio->file) }}" target="_blank">Lihat File</a></td>
                <td>
                    <a href="{{ route('portofolios.edit', $portofolio->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('portofolios.destroy', $portofolio->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
