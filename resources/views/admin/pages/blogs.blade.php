@extends('admin.layouts.app')

@section('title', 'Blog Overview')

@section('content')
    <!-- .page -->
    <div class="page">
        @if (count($blogs) > 0)
            <!-- .page-inner -->
            <div class="page-inner">
                <!-- .page-title-bar -->
                <header class="page-title-bar">
                    <!-- .breadcrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">
                                <a href="{{ route('admin.dashboard') }}"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
                            </li>
                        </ol>
                    </nav><!-- /.breadcrumb -->
                    <!-- floating action -->
                    <a href="{{ route('admin.blogs.create') }}" class="btn btn-success btn-floated">
                        <span class="fa fa-plus"></span>
                    </a>
                    <!-- /floating action -->
                    <!-- title and toolbar -->
                    <div class="d-md-flex align-items-md-start">
                        <h1 class="page-title mr-sm-auto"> Blog Overview </h1>
                        <!-- .btn-toolbar -->
                    </div>
                    <!-- /title and toolbar -->
                </header>
                <!-- /.page-title-bar -->
                <!-- .page-section -->
                <div class="page-section">
                    <!-- .card -->
                    <div class="card card-fluid">
                        <!-- .card-body -->
                        <div class="card-body" style="padding-top: 2.5rem !important;">
                            <!-- .form-group -->
                            <div class="form-group">
                                <!-- .input-group -->
                                <form class="input-group input-group-alt" method="GET" action="{{ route('admin.blogs.index') }}">
                                    <!-- .input-group -->
                                    <div class="input-group has-clearable">
                                        <button type="button" class="close" aria-label="Close" onclick="removeQueryString()">
                                            <span aria-hidden="true"><i class="fa fa-times-circle"></i></span>
                                        </button>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span class="oi oi-magnifying-glass"></span>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="q" placeholder="Search record" value="{{ $q }}" />
                                    </div>
                                    <!-- /.input-group -->
                                    <!-- .input-group-prepend -->
                                    <div class="input-group-prepend">
                                        <button type="submit" class="btn btn-secondary">Search</button>
                                    </div>
                                    <!-- /.input-group-prepend -->
                                </form>
                                <!-- /.input-group -->
                            </div>
                            <!-- /.form-group -->
                            <!-- .table-responsive -->
                            <div class="text-muted"> Showing {{ $blogs->currentPage() === $blogs->lastPage() ? $blogs->total() : $blogs->currentPage() * $blogs->perPage() }} of {{ $blogs->total() }} entries </div>
                            <div class="table-responsive">
                                <!-- .table -->
                                <table class="table">
                                    <!-- thead -->
                                    <thead>
                                        <tr>
                                            <th colspan="2" style="min-width:120px">SL</th>
                                            <th> Slug </th>
                                            <th> Created By </th>
                                            <th> Updated By </th>
                                            <th> Created At </th>
                                            <th> Last Updated </th>
                                            <th style="width:100px; min-width:100px;"> &nbsp; </th>
                                        </tr>
                                    </thead>
                                    <!-- /thead -->
                                    <!-- tbody -->
                                    <tbody>
                                        @foreach($blogs as $key => $blog)
                                            <!-- tr -->
                                            <tr>
                                                <td class="align-middle col-checker">
                                                    {{ $key += 1 }}.
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.blog.edit', $blog->id) }}" class="tile tile-img mr-1">
                                                        <img class="img-fluid" src="{{ asset('admin/images/dummy/img-1.jpg') }}" alt="{{ $blog->name }}">
                                                    </a>
                                                    <a href="{{ route('admin.blog.edit', $blog->id) }}">{{ $blog->name }}</a>
                                                </td>
                                                <td class="align-middle"> {{ $blog->slug }} </td>
                                                <td class="align-middle"> {{ $blog->created_by ? $blog->createdBy->name : '-' }} </td>
                                                <td class="align-middle"> {{ $blog->updated_by ? $blog->updatedBy->name : '-' }} </td>
                                                <td class="align-middle"> {{ $blog->created_at->diffForHumans() }} </td>
                                                <td class="align-middle"> {{ $blog->updated_at->diffForHumans() }} </td>
                                                <td class="d-flex justify-content-end align-middle" style="gap: 10px;">
                                                    <a href="{{ route('admin.blog.edit', $blog->id) }}" class="btn btn-sm btn-icon btn-secondary">
                                                        <i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span>
                                                    </a>
                                                    <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-icon btn-secondary" id="delete">
                                                            <i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <!-- /tr -->
                                        @endforeach
                                    </tbody>
                                    <!-- /tbody -->
                                </table>
                                <!-- /.table -->
                            </div>
                            <!-- /.table-responsive -->
                            <!-- .pagination -->
                            <div class="d-flex justify-content-center mt-4">
                                {!! $blogs->links() !!}
                            </div>
                            <!-- /.pagination -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.page-section -->
            </div>
            <!-- /.page-inner -->
        @else
            <div id="notfound-state" class="empty-state" style="height: 85vh;">
                <!-- .empty-state-container -->
                <div class="empty-state-container">
                    <div class="state-figure">
                        <img class="img-fluid" src="{{ asset('admin/images/illustration/img-6.svg') }}" alt="empty-state" style="max-width: 300px">
                    </div>
                    <h3 class="state-header">No Content, Yet.</h3>
                    <p class="state-description lead text-muted">
                        Use the button below to add your first content.
                    </p>
                    <div class="state-action">
                        <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">Create New</a>
                    </div>
                </div>
                <!-- /.empty-state-container -->
            </div>
        @endif
    </div>
    <!-- /.page -->
@endsection
@push('scripts')
    <script src="{{ asset('admin/javascript/pages/table-demo.js') }}"></script>
    <script>
        function removeQueryString() {
            location.replace('/admin/blogs');
        }
    </script>
@endpush
