@extends('admin.layouts.app')

@section('title', 'Customize Home')

@section('content')
    <!-- .page -->
    <div class="page">
        <!-- .page-inner -->
        <div class="page-inner">
            <header class="page-title-bar">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="breadcrumb-icon fa fa-angle-left mr-2"></i> Dashboard
                            </a>
                        </li>
                    </ol>
                </nav>
            </header>
            <div class="page-section">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card card-fluid">
                            <h6 class="card-header"> Customize </h6><!-- .nav -->
                            <nav class="nav nav-tabs flex-column border-0">
                                <a href="{{ route('admin.customize.index', 'header') }}" class="nav-link">Header Section</a>
                                <a href="{{ route('admin.customize.index', 'home') }}" class="nav-link active">Home Page</a>
                                <a href="{{ route('admin.customize.index', 'post') }}" class="nav-link">Post Page</a>
                                <a href="{{ route('admin.customize.index', 'taxonomy') }}" class="nav-link">Taxonomy Page</a>
                                <a href="{{ route('admin.customize.index', 'footer') }}" class="nav-link">Footer Section</a>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card card-fluid">
                            <h6 class="card-header">Home Page Ads</h6>
                            <!-- form -->
                            <form method="POST" action="{{ route('admin.customize.update', 'home') }}">
                                @csrf
                                @method('put')
                                <div class="card-body">
                                    <fieldset>
                                        <legend>Banner Ads</legend>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="banner_ads_url_1">Ads 1 URL</label>
                                                        <input class="form-control" id="banner_ads_url_1" name="banner_ads_url_1" type="text" placeholder="Ads URL" value="{{ $option ? $option['banner_ads_url_1'] : null }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="banner_ads_image_1">Ads 1 Image URL</label>
                                                        <input class="form-control" id="banner_ads_image_1" name="banner_ads_image_1" type="text" placeholder="Ads Image URL" value="{{ $option ? $option['banner_ads_image_1'] : null }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="banner_ads_url_2">Ads 2 URL</label>
                                                        <input class="form-control" id="banner_ads_url_2" name="banner_ads_url_2" type="text" placeholder="Ads URL" value="{{ $option ? $option['banner_ads_url_2'] : null }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="banner_ads_image_2">Ads 2 Image URL</label>
                                                        <input class="form-control" id="banner_ads_image_2" name="banner_ads_image_2" type="text" placeholder="Ads Image URL" value="{{ $option ? $option['banner_ads_image_2'] : null }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="banner_ads_url_3">Ads 3 URL</label>
                                                        <input class="form-control" id="banner_ads_url_3" name="banner_ads_url_3" type="text" placeholder="Ads URL" value="{{ $option ? $option['banner_ads_url_3'] : null }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="banner_ads_image_3">Ads 3 Image URL</label>
                                                        <input class="form-control" id="banner_ads_image_3" name="banner_ads_image_3" type="text" placeholder="Ads Image URL" value="{{ $option ? $option['banner_ads_image_3'] : null }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="card-body">
                                    <fieldset>
                                        <legend>Right Sidebar Ads</legend>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="sidebar_ads_url_1">Ads 1 URL</label>
                                                        <input class="form-control" id="sidebar_ads_url_1" name="sidebar_ads_url_1" type="text" placeholder="Ads URL" value="{{ $option ? $option['sidebar_ads_url_1'] : null }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="sidebar_ads_image_1">Ads 1 Image URL</label>
                                                        <input class="form-control" id="sidebar_ads_image_1" name="sidebar_ads_image_1" type="text" placeholder="Ads Image URL" value="{{ $option ? $option['sidebar_ads_image_1'] : null }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="sidebar_ads_url_2">Ads 2 URL</label>
                                                        <input class="form-control" id="sidebar_ads_url_2" name="sidebar_ads_url_2" type="text" placeholder="Ads URL" value="{{ $option ? $option['sidebar_ads_url_2'] : null }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="sidebar_ads_image_2">Ads 2 Image URL</label>
                                                        <input class="form-control" id="sidebar_ads_image_2" name="sidebar_ads_image_2" type="text" placeholder="Ads Image URL" value="{{ $option ? $option['sidebar_ads_image_2'] : null }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="sidebar_ads_url_3">Ads 3 URL</label>
                                                        <input class="form-control" id="sidebar_ads_url_3" name="sidebar_ads_url_3" type="text" placeholder="Ads URL" value="{{ $option ? $option['sidebar_ads_url_3'] : null }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="sidebar_ads_image_3">Ads 3 Image URL</label>
                                                        <input class="form-control" id="sidebar_ads_image_3" name="sidebar_ads_image_3" type="text" placeholder="Ads Image URL" value="{{ $option ? $option['sidebar_ads_image_3'] : null }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="sidebar_ads_url_4">Ads 4 URL</label>
                                                        <input class="form-control" id="sidebar_ads_url_4" name="sidebar_ads_url_4" type="text" placeholder="Ads URL" value="{{ $option ? $option['sidebar_ads_url_4'] : null }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="sidebar_ads_image_4">Ads 4 Image URL</label>
                                                        <input class="form-control" id="sidebar_ads_image_4" name="sidebar_ads_image_4" type="text" placeholder="Ads Image URL" value="{{ $option ? $option['sidebar_ads_image_4'] : null }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <hr>
                                <div class="form-actions p-3">
                                    <button type="submit" class="btn btn-primary text-nowrap ml-auto">Update</button>
                                </div>
                            </form>
                            <!-- /form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.page-inner -->
    </div>
    <!-- /.page -->
@endsection

@push('scripts')
    <script></script>
@endpush
