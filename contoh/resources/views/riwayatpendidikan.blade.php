@extends('master')
@section('konten')
<body>
    <div class="container mt-5">
        <br>
        <h2 class="mb-4">Riwayat Pendidikan</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                Terdapat beberapa kesalahan input. Silakan periksa dan coba lagi.
            </div>
        @endif
            <form action="{{ route('riwayat-pendidikan.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="sekolah">Nama Sekolah</label>
                <input type="text" class="form-control" id="sekolah" name="sekolah" value="{{ old('sekolah') }}" placeholder="Nama Sekolah">
                @error('sekolah')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{ old('jurusan') }}" placeholder="Jurusan">
                @error('jurusan')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="tahun_lulus">Tahun Lulus</label>
                <input type="text" class="form-control" id="tahun_lulus" name="tahun_lulus" value="{{ old('tahun_lulus') }}" placeholder="Tahun Lulus">
                @error('tahun_lulus')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-3">Next</button>
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