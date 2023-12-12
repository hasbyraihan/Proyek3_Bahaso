@extends('master')

@section('konten')
<div class="container mt-5">
    <h2 class="mb-4">Tambah Portofolio</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            Terdapat bagian yang masih kosong. Silakan periksa dan coba lagi.
        </div>
    @endif

    <form action="{{ route('portofolios.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        {{-- Field Bidang --}}
        <div class="form-group">
            <label for="bidang">Bidang</label>
            <input type="text" class="form-control" id="bidang" name="bidang" value="{{ old('bidang') }}" placeholder="Bidang">
            @error('bidang')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- Field Deskripsi --}}
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ old('deskripsi') }}</textarea>
            @error('deskripsi')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- Field File --}}
        <div class="form-group">
            <label for="file">Unggah File</label>
            <input type="file" class="form-control" id="file" name="file">
            @error('file')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary mt-3">Submit</button>
        <a href="{{ route('tampilportofolio') }}" class="btn btn-secondary mt-3">Kembali</a>
    </form>
</div>
@endsection