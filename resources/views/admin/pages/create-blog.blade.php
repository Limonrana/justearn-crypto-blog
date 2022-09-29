@extends('admin.layouts.app')

@section('title', 'Create New Post')

@section('content')
    <!-- .page -->
    <div class="page">
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
                    <h1 class="page-title mr-sm-auto"> Create New Post </h1>
                    <!-- .btn-toolbar -->
                </div>
                <!-- /title and toolbar -->
            </header>
            <!-- /.page-title-bar -->
            <!-- .page-section -->
            <div class="page-section">
                <form id="blog-form" method="POST" action="{{ route('admin.blogs.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-9 col-md-8">
                            <div class="card card-fluid">
                                <div class="card-header">
                                    <h6 class="card-header-title mb-0">Post information</h6>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="col-form-label" for="title">Title</label>
                                        <input class="form-control" id="title" name="title" type="text" placeholder="Post title">
                                        <div id="edit-slug-box" class="mt-2">
                                            <strong>Permalink:</strong>
                                            <span id="sample-permalink">
                                                <a href="{{ $app_url }}">{{ $app_url }}/<span id="editable-post-name">blog</span>/</a>
                                            </span>
                                            <span id="edit-slug-buttons">
                                                <button type="button" class="btn btn-secondary btn-xs" aria-label="Edit permalink">Edit</button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label" for="editor">Content</label>
                                        <textarea id="editor" rows="10" name="description"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="card card-fluid mb-4">
                                <div class="card-header">
                                    <h6 class="card-heading mb-0">SEO Meta Details</h6>
                                </div>
                                <div class="card-body text-gray-700">
                                    <div class="form-group">
                                        <label class="d-flex justify-content-between" for="meta_title">
                                            <span>SEO Title</span>
                                            <span class="text-muted">Max 60 characters used</span>
                                        </label>
                                        <input type="text" class="form-control" id="meta_title" name="meta_description" placeholder="SEO Title" />
                                    </div>
                                    <div class="form-group">
                                        <label class="d-flex justify-content-between" for="meta_description">
                                            <span>Meta Description</span>
                                            <span class="text-muted">Max 160 characters used</span>
                                        </label>
                                        <textarea class="form-control" id="meta_description" name="meta_description" rows="3" placeholder="Meta Description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="select2-tagging">Meta Keywords</label>
                                        <select id="select2-tagging" class="form-control" name="meta_keywords[]" multiple></select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="card card-fluid mb-4">
                                <div class="card-header">
                                    <h6 class="card-heading mb-0">Publish</h6>
                                </div>
                                <div class="card-body text-gray-700">
                                    <div class="d-flex mb-4 justify-content-between">
                                        <button type="button" class="btn btn-sm btn-outline-secondary" onclick="handlePublish('2')">Save Draft</button>
                                        <button class="btn btn-sm btn-outline-secondary">Preview</button>
                                    </div>
                                    <hr class="bg-gray-500">
                                    <div class="mb-3">
                                        Status: <strong id="status-text">Draft </strong><a class="ms-2 text-sm collapsed" data-toggle="collapse" href="#collapseStatus" role="button" aria-expanded="false" aria-controls="collapseStatus">Edit</a>
                                        <div class="collapse" id="collapseStatus">
                                            <div class="form-group py-2">
                                                <select id="select-status" class="custom-select" name="status" aria-label="Default select example" onchange="changeStatus(this)">
                                                    <option value="1">Published</option>
                                                    <option value="2" selected>Draft</option>
                                                    <option value="3">Pending Review</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        Visibility: <strong id="visibility-text">Public </strong><a class="ms-2 text-sm collapsed" data-toggle="collapse" href="#collapseVisibility" role="button" aria-expanded="false" aria-controls="collapseVisibility">Edit</a>
                                        <div class="collapse" id="collapseVisibility">
                                            <div class="form-group py-2">
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio" name="visibility" id="visibility1" onchange="changeVisibility(1)" value="1" checked>
                                                    <label class="custom-control-label" for="visibility1">Public</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio" name="visibility" id="visibility2" onchange="changeVisibility(2)" value="2">
                                                    <label class="custom-control-label" for="visibility2">Private</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer justify-content-end px-3 py-2">
                                    <button type="button" class="btn btn-primary" onclick="handlePublish('1')">Publish</button>
                                </div>
                            </div>

                            <div class="card card-fluid mb-4">
                                <div class="card-header">
                                    <h6 class="card-heading mb-0">Categories</h6>
                                </div>
                                <div class="card-body px-4">
                                    <div class="form-group mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" name="categories[]" id="category-0" value="0">
                                            <label class="custom-control-label" for="category-0">Uncategorized</label>
                                        </div>
                                        @foreach($categories as $category)
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" name="categories[]" id="category-{{ $category->id }}" value="{{ $category->id }}">
                                                <label class="custom-control-label" for="category-{{ $category->id }}">{{ $category->name }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                    <a class="btn-link" href="{{ route('admin.categories.index') }}">+ Add New Category</a>
                                </div>
                            </div>

                            <div class="card card-fluid mb-4">
                                <div class="card-header">
                                    <h6 class="card-heading mb-0">Tags</h6>
                                </div>
                                <div class="card-body">
                                    <div class="form-group mb-3">
                                        <select id="select-tag" class="form-control" name="tags[]" multiple="multiple">
                                            @foreach($tags as $tag)
                                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <a class="btn-link" href="{{ route('admin.tags.index') }}">+ Add New Tag</a>
                                </div>
                            </div>

                            <div class="card card-fluid mb-4">
                                <div class="card-header">
                                    <h6 class="card-heading mb-0">Featured image</h6>
                                </div>
                                <div class="card-body">
                                    <div class="form-group mb-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="fileupload-customInput">
                                            <label class="custom-file-label" for="fileupload-customInput">Choose files</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.page-section -->
        </div>
        <!-- /.page-inner -->
    </div>
    <!-- /.page -->
@endsection

@push('head-styles')
    <link rel="stylesheet" href="{{ asset('admin/vendor/select2/css/select2.min.css') }}">
    <style>
        .select2-container {
            width: 100% !important;
        }
        .select2-search__field {
            width: 100% !important;
        }
    </style>
@endpush

@push('styles')

@endpush

@push('plugin_scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/9c8eaxi8zutqzgs3cdz7hjzv8f6j1eo0htyi5ijyfm8i95r4/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
@endpush

@push('scripts')
    <script>
        tinymce.init({
            selector: '#editor',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            height: 450,
            file_picker_callback (callback, value, meta) {
                let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth
                let y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight
                tinymce.activeEditor.windowManager.openUrl({
                    url : '/file-manager/tinymce5',
                    title : 'Media Manager',
                    width : x * 0.8,
                    height : y * 0.8,
                    onMessage: (api, message) => {
                        callback(message.content, { text: message.text })
                    }
                })
            }
        });

        $("#select-tag").select2({
            tokenSeparators: [',', ' ']
        });

        $("#select2-tagging").select2({
            tags: true,
            tokenSeparators: [',', ' ']
        })

        function changeStatus(event) {
            setStatusText(event.value);
        }

        function setStatusText (value) {
            const statusText = document.getElementById('status-text');
            if (value === '1') {
                statusText.innerText = 'Published ';
            } else if (value === '2') {
                statusText.innerText = 'Draft ';
            } else {
                statusText.innerText = 'Pending Review ';
            }
        }

        function changeVisibility(id) {
            const visibilityText = document.getElementById('visibility-text');
            if (id === 1) {
                visibilityText.innerText = 'Public '
            } else if (id === 2) {
                visibilityText.innerText = 'Private '
            }
        }

        function handlePublish (status) {
            const selectStatus = document.getElementById('select-status');
            selectStatus.value = status;
            setStatusText(status);
            if (selectStatus.value === status) {
                document.getElementById('blog-form').submit();
            }
        }
    </script>
@endpush
