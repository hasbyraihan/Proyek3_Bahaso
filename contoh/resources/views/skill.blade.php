@extends('master')
@section('konten')
<body>
    <div class="container mt-5">
        <br>
        {{-- <h2 class="mb-4">Keahlian</h2> --}}
        @if(isset($data))
          <h2 class="mb-4">Edit Skill</h2>
          <form action="{{ route('updateskill', $data->id) }}" method="post" enctype="multipart/form-data">
          @method('POST') {{-- Use PUT method for updating data --}}
        @else
          <h2 class="mb-4">Tambah Skill</h2>
          <form action="{{ route('skill.store') }}" method="post" enctype="multipart/form-data">
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                Terdapat beberapa kesalahan input. Silakan periksa dan coba lagi.
            </div>
        @endif
            {{-- <form action="{{ route('skill.store') }}" method="post"> --}}
            @csrf
            <div class="form-row">
                <div class="col">
                  <div class="form-group">
                    <label for="namaskill">Nama Skill</label>
                    <textarea class="form-control" id="namaskill" name="namaskill">{{ $data->namaskill ?? old('namaskill') }}</textarea>
                    {{-- <input type="text" class="form-control" id="namaskill" name="namaskill">{{ $data->alamat ?? old('alamat') }}</textarea placeholder="Nama Skill"> --}}
                    @error('namaskill')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label for="tingkat">Level Skill</label>
                    <select class="form-select" id="level" name="level" aria-label="Level Skill">
                      <option selected>Tingakatan</option>
                      <option value="Pemula">Pemula</option>
                      <option value="Menengah">Menengah</option>
                      <option value="Terampil">Terampil</option>
                      <option value="Berpengalaman">Berpengalaman</option>
                      <option value="Ahli">Ahli</option>
                    </select>
                    @error('level')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>
                </div>
              </div>
              
            <button type="submit" class="btn btn-primary mt-3">Next</button>
        </form>
        <a type="submit" href="{{ route('riwayat-pekerjaan') }}" class="btn btn-secondary mt-3">Prev</a>

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