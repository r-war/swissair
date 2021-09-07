@extends('admin.layouts.master')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pages</h1>
        <a href="#" data-bs-toggle="modal" data-bs-target="#modalCreate" class="btn btn-success">NEW</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Slug</th>
                <th scope="col">Picture</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($pages as $page)
                    <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{!! $page->name !!}</td>
                    <td>{!! $page->slug !!}</td>
                    <td>{!! $page->picture !!}</td>
                    <td>
                        <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modalCreate" data-page="{{ $page }}" title="edit">
                            <span data-feather="edit"></span>
                        </button>
                        <button class="btn btn-danger btn-sm" title="delete">
                            <span data-feather="x"></span>
                        </button>
                    </td>
                    </tr>
                @endforeach
              
            </tbody>
          </table>
    </div>

    @include('admin.modal.page')
@endsection