@extends('master')
@section('konten')
<body>

    <div class="container mt-5">
        <br>
        {{-- <h2 class="mb-4">Tambah Pengangguran</h2> --}}
    
        @if(isset($data))
            <h2 class="mb-4">Edit Riwayat Pekerjaan</h2>
            <form action="{{ route('editkerja', $data->id) }}" method="post" enctype="multipart/form-data">
            @method('POST') {{-- Use PUT method for updating data --}}
        @else
            <h2 class="mb-4">Tambah Riwayat Pekerjaan</h2>
            <form action="{{ route('riwayat-pekerjaan.store') }}" method="post" enctype="multipart/form-data">
        @endif
    
        @if ($errors->any())
            <div class="alert alert-danger">
                Terdapat beberapa kesalahan input. Silakan periksa dan coba lagi.
            </div>
        @endif

            @csrf
            <div class="form-group">
                <label for="perusahaan">Perusahaan</label>
                <input type="text" class="form-control" id="perusahaan" name="perusahaan" value="{{ $data->perusahaan ?? old('perusahaan') }}" placeholder="Nama Perusahaan">
                @error('perusahaan')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{$data->jabatan ?? old('jabatan') }}" placeholder="Jabatan">
                @error('jabatan')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="tahun_mbekerja">Masuk Kerja</label>
                <div class="row">
                    <select class="form-select" id="bulan_mbekerja" name="bulan_mbekerja" aria-label="Default select example" value="{{$data->bulan_mbekerja ?? old('bulan_mbekerja') }}">
                        <option selected>Bulan Mulai Bekerja</option>
                        <option value="Januari">Januari</option>
                        <option value="Februari">Februari</option>
                        <option value="Maret">Maret</option>
                        <option value="April">April</option>
                        <option value="Mei">Mei</option>
                        <option value="Juni">Juni</option>
                        <option value="Juli">Juli</option>
                        <option value="Agustus">Agustus</option>
                        <option value="Sepetember">Sepetember</option>
                        <option value="Oktober">Oktober</option>
                        <option value="November">November</option>
                        <option value="Desember">Desember</option>
                    </select>
                    <div class="form">
                      <input type="text" class="form-control" id="tahun_mbekerja" name="tahun_mbekerja" value="{{$data ->tahun_mbekerja ?? old('tahun_mbekerja') }}" placeholder="Tahun" aria-label="Tahun">
                    </div>
                  </div>
                @error('tahun_mbekerja', 'bulan_mbekerja')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="tahun_sbekerja">Selesai Kerja</label>
                <div class="row">
                    <select class="form-select" id="bulan_sbekerja" name="bulan_sbekerja" aria-label="Default select example" value="{{$data ->bulan_sbekerja ?? old('bulan_sbekerja') }}">
                        <option selected>Bulan Mulai Bekerja</option>
                        <option value="Januari">Januari</option>
                        <option value="Februari">Februari</option>
                        <option value="Maret">Maret</option>
                        <option value="April">April</option>
                        <option value="Mei">Mei</option>
                        <option value="Juni">Juni</option>
                        <option value="Juli">Juli</option>
                        <option value="Agustus">Agustus</option>
                        <option value="Sepetember">Sepetember</option>
                        <option value="Oktober">Oktober</option>
                        <option value="November">November</option>
                        <option value="Desember">Desember</option>
                    </select>
                    <div class="form">
                      <input type="text" class="form-control" id="tahun_sbekerja" name="tahun_sbekerja" value="{{$data ->tahun_sbekerja ?? old('tahun_sbekerja') }}" placeholder="Tahun" aria-label="Tahun">
                    </div>
                  </div>
                @error('tahun_sbekerja', 'bulan_sbekerja')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-3">Submit</button>
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