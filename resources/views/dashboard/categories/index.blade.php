@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Categories</h1>
    {{-- <h1 class="h2">Welcome, {{ auth()->user()->name }}</h1> --}}
</div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-10" role="start">
    {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-10">
    <a href="/dashboard/categories/create" class="btn btn-primary">Create Category</a>
    <table class="table table-striped table-sm mt-3 mb-5">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Category Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <a href="/dashboard/categories/{{ $category->id }}/edit" class="badge bg-warning"><span data-feather="edit"></a>
                    <form action="/dashboard/categories/{{ $category->id }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" ><span data-feather="trash" onclick="return confirm('Are you sure to delete?')"></span></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection


