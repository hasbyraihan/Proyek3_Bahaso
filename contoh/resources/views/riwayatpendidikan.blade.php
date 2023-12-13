@extends('master')
@section('konten')
<body>
    <div class="container mt-5">
        <br>
        @if(isset($data))
            <h2 class="mb-4">Edit Riwayat Pendidikan</h2>
            <form action="{{ route('updatependidikan', $data->id) }}" method="post" enctype="multipart/form-data">
            @method('POST') {{-- Use PUT method for updating data --}}
        @else
            <h2 class="mb-4">Tambah Riwayat Pendidikan</h2>
            <form action="{{ route('riwayatpendidikan.store') }}" method="post" enctype="multipart/form-data">
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                Terdapat beberapa kesalahan input. Silakan periksa dan coba lagi.
            </div>
        @endif
            <form action="{{ route('riwayatpendidikan.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="sekolah">Nama Sekolah</label>
                <input type="text" class="form-control" id="sekolah" name="sekolah" value="{{ $data->sekolah ?? old('sekolah') }}" placeholder="Nama Sekolah">
                @error('sekolah')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{ $data->jurusan ?? old('jurusan') }}" placeholder="Jurusan">
                @error('jurusan')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="tahun_lulus">Tahun Lulus</label>
                <input type="text" class="form-control" id="tahun_lulus" name="tahun_lulus" value="{{ $data->tahun_lulus ?? old('tahun_lulus') }}" placeholder="Tahun Lulus">
                @error('tahun_lulus')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
        <a type="submit" href="{{ route('tambahpengangguran') }}" class="btn btn-secondary mt-3">Prev</a>

    </div>

    <!-- Bootstrap JS, jQuery, Popper.js, etc. scripts -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('#formTambahPengangguran');
        if (form) {
            // Simpan data form saat halaman dimuat
            const formData = new FormData(form);
            formData.forEach((value, key) => {
                sessionStorage.setItem(key, value);
            });
        }
    });
</script>


</body>
@endsection