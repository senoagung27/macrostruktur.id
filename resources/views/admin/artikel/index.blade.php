@extends('template_backend.home')
@section('sub-judul', 'Post')
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

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>List Post</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-sm table-bordered" id="table-2">
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
                                @foreach ($data as $hasil)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $hasil->judul }}</td>
                                        <td>{{ $hasil->category->name }}</td>
                                        <td>
                                            @foreach ($hasil->tags as $tag)
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
                                        <td>
                                            <img src="data:image/jpeg;base64,{{ $hasil->gambar ? $hasil->gambar : '' }}"
                                                class="img-fluid" style="width:100px">
                                        </td>
                                        <td>
                                            <img src="data:image/jpeg;base64,{{ $hasil->gambar_2 ? $hasil->gambar_2 : '' }}"
                                                class="img-fluid" style="width:100px">
                                        </td>


                                        <td>{{ $hasil->meta_description }}</td>
                                        <td>{{ $hasil->meta_keyword }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{ route('artikel.edit', $hasil->id) }}"
                                                    class="btn btn-primary btn-sm me-2 d-flex align-items-center">
                                                    <i class="fas fa-edit me-1"></i>Edit
                                                </a>
                                                <form action="{{ route('artikel.destroy', $hasil->id) }}" method="POST"
                                                    style="display: inline;">
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
                    </div>
                </div>
            </div>
        </div>
    </div>

        {{-- <table class="table table-striped table-hover table-sm table-bordered">
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
                    <!--<td>{{ $result + $data->firstitem() }}</td>-->
                   <td>{{ ($loop->index + 1) + (($currentPage - 1) * $itemsPerPage) }}</td>
                    <td>{{ $hasil->judul }}</td>
                    <td>{{ $hasil->category->name }}</td>
                    <td>
                        @foreach ($hasil->tags as $tag)
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
                    <td>
                        <img src="data:image/jpeg;base64,{{ $hasil->gambar ? $hasil->gambar : '' }}" class="img-fluid"
                            style="width:100px">
                    </td>
                    <td>
                        <img src="data:image/jpeg;base64,{{ $hasil->gambar_2 ? $hasil->gambar_2 : '' }}" class="img-fluid"
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
                            <form action="{{ route('artikel.destroy', $hasil->id) }}" method="POST"
                                style="display: inline;">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm d-flex align-items-center"
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
    <div class="blog-pagination">
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-end align-items-center">
                <li class="page-item">
                    <span class="page-link">
                        <i class="fa fa-info-circle"></i>
                        Halaman {{ $data->currentPage() }} dari {{ $data->lastPage() }}
                    </span>
                </li>
                <li class="page-item">
                    <span class="page-link">
                        Kolom per Halaman: {{ $data->perPage() }}
                    </span>
                </li>
                @if ($data->onFirstPage())
                    <li class="page-item disabled">
                        <a class="page-link"><i class="fa fa-angle-left"></i></a>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $data->previousPageUrl() }}" aria-label="Previous">
                            <i class="fa fa-angle-left"></i>
                        </a>
                    </li>
                @endif
                @foreach ($data->getUrlRange(1, $data->lastPage()) as $page => $url)
                    <li class="page-item {{ $data->currentPage() == $page ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endforeach

                @if ($data->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $data->nextPageUrl() }}" aria-label="Next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <a class="page-link"><i class="fa fa-angle-right"></i></a>
                    </li>
                @endif
            </ul>
        </nav>
    </div> --}}
    @endsection
