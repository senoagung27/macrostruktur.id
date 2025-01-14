@extends('template_backend.home')
@section('sub-judul', 'Tambah Post')
@section('content')

@if (count($errors) > 0)
@foreach ($errors->all() as $error)
    <div class="alert alert-danger alert-dismissible" role="alert">
        {{ $error }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endforeach
@endif

@if (Session::has('success'))
<div class="alert alert-success alert-dismissible" role="alert">
    {{ Session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

    <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Judul</label>
            <input type="text" class="form-control" name="judul">
        </div>
        <div class="form-group">
            <label>Kategori</label>
            <select class="form-control" name="category_id">
                <option value="" holder>Pilih Kategori</option>
                @foreach ($category as $result)
                    <option value="{{ $result->id }}">{{ $result->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Pilih Tags</label>
            <select class="form-control select2" multiple="" name="tags[]">
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Konten</label>
            <textarea class="form-control" name="content" id="content"></textarea>
        </div>
        <div class="form-group">
            <label>Konten Kedua</label>
            <textarea class="form-control" name="content_2" id="content_2"></textarea>
        </div>
        <div class="form-group">
            <label>Gambar Pertama</label>
            <input type="file" name="gambar" class="form-control">
        </div>
        <div class="form-group">
            <label>Gambar Kedua</label>
            <input type="file" name="gambar_2" class="form-control">
        </div>
        <div class="form-group">
            <label>Link Url Pertama</label>
            <input type="text" class="form-control" name="link_url" placeholder="Masukkan URL pertama">
        </div>
        <div class="form-group">
            <label>Link Url Kedua</label>
            <input type="text" class="form-control" name="link_url_2" placeholder="Masukkan URL kedua">
        </div>
        
        <div class="form-group">
            <label>Meta Keyword</label>
            <input type="text" class="form-control" name="meta_keyword">
        </div>
        <div class="form-group">
            <label>Meta Description</label>
            <input type="text" class="form-control" name="meta_description">
        </div>

        <div class="form-group">
            <button class="btn btn-primary btn-block">Simpan Post</button>
        </div>

    </form>

    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');
    </script>
    <script>
        CKEDITOR.replace('content_2');
    </script>
        {{-- <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('vendor/unisharp/laravel-ckeditor/skins/moono-lisa/editor.css') }}">
        <script src="{{ asset('vendor/unisharp/laravel-ckeditor-upload/ckeditor.js') }}"> --}}
@endsection
