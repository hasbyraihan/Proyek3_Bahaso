@extends('master')
@section('konten')
<body>
    <div class="container mt-5">
        <br>
        <h2 class="mb-4">Riwayat Pekerjaan</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                Terdapat beberapa kesalahan input. Silakan periksa dan coba lagi.
            </div>
        @endif
            <form action="{{ route('riwayat-pekerjaan.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="perusahaan">Perusahaan</label>
                <input type="text" class="form-control" id="perusahaan" name="perusahaan" value="{{ old('perusahaan') }}" placeholder="Nama Perusahaan">
                @error('perusahaan')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ old('jurusan') }}" placeholder="Jabatan">
                @error('jabatan')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="tahun_mbekerja">Masuk Kerja</label>
                <div class="row">
                    <div class="col">
                      <input type="text" class="form-control" id="bulan_mbekerja" name="bulan_mbekerja" value="{{ old('bulan_mbekerja') }}" placeholder="Bulan" aria-label="Bulan">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" id="tahun_mbekerja" name="tahun_mbekerja" value="{{ old('tahun_mbekerja') }}" placeholder="Tahun" aria-label="Tahun">
                    </div>
                  </div>
                @error('tahun_mbekerja', 'bulan_mbekerja')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="tahun_sbekerja">Selesai Kerja</label>
                <div class="row">
                    <div class="col">
                      <input type="text" class="form-control" id="bulan_sbekerja" name="bulan_sbekerja" value="{{ old('bulan_sbekerja') }}" placeholder="Bulan" aria-label="Bulan">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" id="tahun_sbekerja" name="tahun_sbekerja" value="{{ old('tahun_sbekerja') }}" placeholder="Tahun" aria-label="Tahun">
                    </div>
                  </div>
                @error('tahun_sbekerja', 'bulan_sbekerja')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-3">Next</button>
        </form>
        <a type="submit" href="{{ route('riwayat-pendidikan') }}" class="btn btn-secondary mt-3">Prev</a>

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