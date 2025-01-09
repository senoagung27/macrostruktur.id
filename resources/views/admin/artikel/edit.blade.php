@extends('template_backend.home')
@section('sub-judul', 'Edit Post')
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

    <form action="{{ route('artikel.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Judul</label>
            <input type="text" class="form-control" name="judul" value="{{ $post->judul }}">
        </div>
        <div class="form-group">
            <label>Kategori</label>
            <select class="form-control" name="category_id">
                <option value="" holder>Pilih Kategori</option>
                @foreach ($category as $result)
                    <option value="{{ $result->id }}" @if ($result->id == $post->category_id) selected @endif>
                        {{ $result->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Pilih Tags</label>
            <select class="form-control select2" multiple="" name="tags[]">
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}"
                        @foreach ($post->tags as $value)
          	@if ($tag->id == $value->id)
          	selected
          	@endif @endforeach>
                        {{ $tag->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Konten</label>
            <textarea class="form-control" name="content" id="content">{{ $post->content }}</textarea>
        </div>
        <div class="form-group">
            <label>Thumbnail</label>
            <input type="file" name="gambar" class="form-control">
        </div>

        <div class="form-group">
            <label>Meta Keyword</label>
            <input type="text" class="form-control" name="meta_keyword" value="{{ $post->meta_keyword }}">
        </div>
        <div class="form-group">
            <label>Meta Description</label>
            <input type="text" class="form-control" name="meta_description" value="{{ $post->meta_description }}">
        </div>

        <div class="form-group">
            <button class="btn btn-primary btn-block">Update Kategori</button>
        </div>

    </form>

    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection
