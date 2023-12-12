@extends('master')
@section('konten')
<body>

<div class="container mt-5">
    <br>
    {{-- <h2 class="mb-4">Tambah Pengangguran</h2> --}}

    @if(isset($data))
        <h2 class="mb-4">Edit Pengangguran</h2>
        <form action="{{ route('editdata', $data->id) }}" method="post" enctype="multipart/form-data">
        @method('POST') {{-- Use PUT method for updating data --}}
    @else
        <h2 class="mb-4">Tambah Pengangguran</h2>
        <form action="{{ route('insertdata') }}" method="post" enctype="multipart/form-data">
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            Terdapat beberapa kesalahan input. Silakan periksa dan coba lagi.
        </div>
    @endif

    {{-- <form action="{{ route('insertdata') }}" method="post" enctype="multipart/form-data"> --}}
        @csrf

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama ?? old('nama') }}" placeholder="Nama Lengkap">
                    @error('nama')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="jenkel">Jenis Kelamin</label>
                    <select class="form-control" id="jenkel" name="jenkel">
                        <option value="Pria" {{ ($data->jenkel ?? old('jenkel')) == 'Pria' ? 'selected' : '' }}>Pria</option>
                        <option value="Wanita" {{ ($data->jenkel ?? old('jenkel')) == 'Wanita' ? 'selected' : '' }}>Wanita</option>
                    </select>
                    @error('jenkel')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $data->tanggal_lahir ?? old('tanggal_lahir') }}">
                    @error('tanggal_lahir')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat">{{ $data->alamat ?? old('alamat') }}</textarea>
                    @error('alamat')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="kota">Kota</label>
                    <input type="text" class="form-control" id="kota" name="kota" value="{{ $data->kota ?? old('kota') }}" placeholder="Kota">
                    @error('kota')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="kodepos">Kode Pos</label>
                    <input type="text" class="form-control" id="kodepos" name="kodepos" value="{{ $data->kodepos ?? old('kodepos') }}" placeholder="Kode Pos">
                    @error('kodepos')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="notelp">Nomor Telepon</label>
                    <input type="text" class="form-control" id="notelp" name="notelp" value="{{ $data->notelp ?? old('notelp') }}" placeholder="Nomor Telepon">
                    @error('notelp')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $data->email ?? old('email') }}" placeholder="Email">
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group text-center">
                    <label for="foto" style="width: 100%;">
                        <div style="border: 2px dashed #ccc; padding: 10px;">
                            <img src="#" id="preview" style="max-width: 100%; max-height: 300px; margin-bottom: 10px;" />
                            Tambahkan Foto
                        </div>
                    </label>
                    <input type="file" class="form-control" id="foto" name="foto" style="display: none;">
                    @error('foto')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Next</button>
    </form>

    <a type="submit" href="/pengangguran" class="btn btn-secondary mt-3" style="margin-bottom:10px">Prev</a>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    // Jika form berhasil disubmit
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('#formTambahPengangguran'); // Menggunakan ID "formTambahPengangguran"
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Menghentikan form dari pengiriman otomatis

            // Ambil data dari form
            const formData = new FormData(form);

            // Kirim data ke server menggunakan AJAX
            $.ajax({
                url: "{{ route('insertdata') }}", // Ganti sesuai dengan rute Anda
                method: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    // Handle respons dari server, jika diperlukan
                    // Misalnya, Anda dapat menampilkan pesan sukses atau pengalihkan pengguna
                    window.location.href = "{{ route('riwayat-pendidikan') }}";
                },
                error: function(xhr, textStatus, errorThrown) {
                    // Handle error jika terjadi kesalahan
                    console.error(xhr.responseText);
                    alert('Terjadi kesalahan saat menyimpan data.');
                }
            });
        });

        // Tampilkan preview gambar saat dipilih
        document.querySelector('#foto').addEventListener('change', function() {
            const preview = document.querySelector('#preview');
            const file = this.files[0];
            const reader = new FileReader();

            reader.onload = function() {
                preview.src = reader.result;
            }

            if (file) {
                reader.readAsDataURL(file);
            }
        });
    });
</script>

</body>
@endsection
