@extends('admin.layouts.master')

@section('content')

    <section class="section">
        <div class="section-header">
            <h1>All Authors</h1>
        </div>

        <div class="row">
            <div class="col-12 ">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <a href="{{ route('admin.authors.create') }}" class="btn btn-primary">Create New</a>
                        <form class="form-inline">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tbody>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Created At</th>
                                        <th>Updates At</th>
                                        <th>Bio</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach ($authors as $author)
                                        <tr>
                                            <td>{{ $author->authorId }}</td>
                                            <td><img src="{{ asset($author->image) }}" alt="" width="80"></td>
                                            <td>{{ $author->name }}</td>
                                            <td>{{ $author->surname }}</td>
                                            <td>{!! nl2br(e($author->bio)) !!}</td>
                                            <td>{{ $author->created_at->format('Y-m-d H:i:s') }}</td>
                                            <td>{{ $author->updated_at->format('Y-m-d H:i:s') }}</td>
                                            <td>
                                                <a href="{{ route('admin.authors.show', $author->authorId) }}"
                                                    class="btn btn-info">Show</a>
                                                <a href="{{ route('admin.authors.edit', $author->authorId) }}"
                                                    class="btn btn-primary">Edit</a>
                                                <form action="{{ route('admin.authors.destroy', $author->authorId) }}"
                                                    method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Are you sure?')">Delete</button>
                                                </form>
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
    </section>

@endsection
