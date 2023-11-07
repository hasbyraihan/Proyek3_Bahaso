@extends('master')
@section('konten')
<body>
    <div class="container mt-5">
        <br>
        <h2 class="mb-4">Portofolio</h2>

        <!-- @if ($errors->any())
            <div class="alert alert-danger">
                terdapat bagian yang masih kosong. Silakan periksa dan coba lagi.
            </div>
        @endif -->

        <form action="/portofolio/tambah" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="bidang">Bidang</label>
                <input type="text" class="form-control" id="bidang" name="bidang" value="{{ old('bidang') }}" placeholder="Bidang">
                @error('bidang')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ old('deskripsi') }}</textarea>
                @error('deskripsi')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
             <label for="files">Unggah Dokumen</label>
             <input type="file" class="form-control" id="files" name="file" multiple>

                @error('files.*')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
        <a type="submit" href="{{ route('skill') }}" class="btn btn-secondary mt-3">Prev</a>

    </div>
</body>
@endsection
