@extends('template_backend.home')
@section('sub-judul','Post')
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

	<a href="{{ route('artikel.create') }}" class="btn btn-info btn-sm">Tambah Post</a>
	<br><br>

	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Post</th>
				<th>Kategori</th>
				<th>Daftar Tags</th>
				<th>Creator</th>
				<th>Thumbnail</th>
				<th>Gambar Kedua</th>
				<th>Meta Description</th>
				<th>Meta Keyword</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($data as $result => $hasil)
			<tr>
				<td>{{ $result + $data->firstitem() }}</td>
				<td>{{ $hasil->judul }}</td>
				<td>{{ $hasil->category->name }}</td>
				<td>
					@foreach($hasil->tags as $tag)
					<ul>
						<h6>
							<span class="badge badge-info">
								<i class="fas fa-tag me-1"></i>{{ $tag->name }}
							</span>
						</h6>
					</ul>
					@endforeach
				</td>				
				<td>{{ $hasil->users->name }}</td>
				{{-- <td><img src="{{ asset($hasil->gambar) }}" class="img-fluid" style="width:100px"></td> --}}
                <td>
                    <img src="{{ $hasil->gambar ? asset($hasil->gambar) : asset('assets/img/example-image-50.jpg') }}" 
                         class="img-fluid" 
                         style="width:100px">
                </td>
				<td>
                    <img src="{{ $hasil->gambar_2 ? asset($hasil->gambar_2) : asset('assets/img/example-image-50.jpg') }}" 
                         class="img-fluid" 
                         style="width:100px">
                </td>
                
                <td>{{ $hasil->meta_description }}</td>
                <td>{{ $hasil->meta_keyword }}</td>
				<td>
					<div class="d-flex align-items-center">
						<a href="{{ route('artikel.edit', $hasil->id) }}" 
						   class="btn btn-primary btn-sm me-2 d-flex align-items-center">
							<i class="fas fa-edit me-1"></i>Edit
						</a>
						<form action="{{ route('artikel.destroy', $hasil->id) }}" method="POST" style="display: inline;">
							@csrf
							@method('delete')
							<button type="submit" 
									class="btn btn-danger btn-sm d-flex align-items-center" 
									onclick="return confirm('Are you sure you want to delete this article?')">
								<i class="fas fa-trash-alt me-1"></i>Delete
							</button>
						</form>
					</div>
				</td>
				
			</tr>
			@endforeach

		</tbody>
	</table>
	{{ $data->links() }}

@endsection
