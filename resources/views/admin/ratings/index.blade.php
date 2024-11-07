@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="mb-2 page-title">comments Table</h2>
                <div class="row">
                    <div class="col-md-6">
                        <p class="card-text">
                            comments / stories 
                        </p>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('comments.create')}}" type="button" class=" float-right btn mb-2 btn-outline-primary">Add comment</a>
                    </div>
                </div>
                <p class="card-text">
                </p>

                @if (Session('success'))
                    <div class="text-success text-center">
                        <strong>{{ Session('success') }}</strong>
                    </div>
                @endif
                <div class="row my-4">
                    <!-- Small table -->
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <!-- table -->
                                <table class="table datatables" id="dataTable-1">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>#</th>
                                            <th>Product</th>
                                            <th>User</th>
                                            <th>Rating</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($comments as $comment)
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <label class="custom-control-label"></label>
                                                    </div>
                                                </td>
                                                <td>{{ $comment->id }}</td>
                                                <td>{{ $comment->user->first_name }}</td>
                                                <td>{{ $comment->blog->title }}</td>
                                                <td>{{ $comment->content }}</td>
                                                <td>{{ $comment->created_at }}</td>
                                                <td><button class="btn btn-sm dropdown-toggle more-horizontal"
                                                        type="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="text-muted sr-only">Action</span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        {{-- <a class="dropdown-item"
                                                            href="{{ route('comments.show', $comment->id) }}">view</a> --}}
                                                        <a class="dropdown-item"
                                                            href="{{ route('comments.edit', $comment->id) }}">Edit</a>

                                                        <a class="dropdown-item" href="{{ route('comments.destroy', $comment->id) }}"
                                                            onclick="event.preventDefault();
                                                            document.getElementById('destroy-comment-{{ $comment->id }}').submit();">
                                                            {{ __('Remove') }}
                                                        </a>

                                                        <form id="destroy-comment-{{ $comment->id }}" action="{{ route('comments.destroy', $comment->id) }}"
                                                            method="post" class="d-none">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- simple table -->
                </div> <!-- end section -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
