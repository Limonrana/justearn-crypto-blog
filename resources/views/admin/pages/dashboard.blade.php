@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
    <!-- .page -->
    <div class="page">
        <!-- .page-inner -->
        <div class="page-inner">
            <!-- .page-title-bar -->
            <header class="page-title-bar">
                <div class="d-flex flex-column flex-md-row">
                    <p class="lead">
                        <span class="font-weight-bold">Hi, {{ Auth::user()->name }}.</span> <span class="d-block text-muted">Here’s what’s happening with your blog site today.</span>
                    </p>
                </div>
            </header><!-- /.page-title-bar -->
            <!-- .page-section -->
            <div class="page-section">
                <!-- .section-block -->
                <div class="section-block">
                    <!-- metric row -->
                    <div class="metric-row">
                        <div class="col-lg-9">
                            <div class="metric-row metric-flush">
                                <!-- metric column -->
                                <div class="col">
                                    <!-- .metric -->
                                    <a href="user-teams.html" class="metric metric-bordered align-items-center">
                                        <h2 class="metric-label"> Teams </h2>
                                        <p class="metric-value h3">
                                            <sub><i class="oi oi-people"></i></sub> <span class="value">8</span>
                                        </p>
                                    </a> <!-- /.metric -->
                                </div>
                                <div class="col">
                                    <!-- .metric -->
                                    <a href="user-projects.html" class="metric metric-bordered align-items-center">
                                        <h2 class="metric-label"> Projects </h2>
                                        <p class="metric-value h3">
                                            <sub><i class="oi oi-fork"></i></sub> <span class="value">12</span>
                                        </p>
                                    </a> <!-- /.metric -->
                                </div>
                                <div class="col">
                                    <!-- .metric -->
                                    <a href="user-tasks.html" class="metric metric-bordered align-items-center">
                                        <h2 class="metric-label"> Active Tasks </h2>
                                        <p class="metric-value h3">
                                            <sub><i class="fa fa-tasks"></i></sub> <span class="value">64</span>
                                        </p>
                                    </a> <!-- /.metric -->
                                </div>
                                <!-- /metric column -->
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <!-- .metric -->
                            <a href="user-tasks.html" class="metric metric-bordered">
                                <div class="metric-badge">
                                    <span class="badge badge-lg badge-success"><span class="oi oi-media-record pulse mr-1"></span> ONGOING TASKS</span>
                                </div>
                                <p class="metric-value h3">
                                    <sub><i class="oi oi-timer"></i></sub> <span class="value">8</span>
                                </p>
                            </a>
                            <!-- /.metric -->
                        </div>
                    </div>
                    <!-- /metric row -->
                </div>
                <!-- /.section-block -->
                <!-- grid row -->
                <div class="row">
                    <!-- grid column -->
                    <div class="col-12 col-lg-12 col-xl-7">
                        <!-- .card -->
                        <div class="card card-fluid">
                            <!-- .card-body -->
                            <div class="card-body">
                                <h3 class="card-title mb-4"> Completion Tasks </h3>
                                <div class="chartjs" style="height: 292px">
                                    <canvas id="completion-tasks"></canvas>
                                </div>
                            </div><!-- /.card-body -->
                        </div><!-- /.card -->
                    </div>
                    <div class="col-12 col-lg-6 col-xl-5">
                        <!-- .card -->
                        <div class="card card-fluid">
                            <!-- .card-body -->
                            <div class="card-body">
                                <h3 class="card-title"> Tasks Performance </h3><!-- easy-pie-chart -->
                                <div class="text-center pt-3">
                                    <div class="chart-inline-group" style="height:214px">
                                        <div class="easypiechart" data-toggle="easypiechart" data-percent="60" data-size="214" data-bar-color="#346CB0" data-track-color="false" data-scale-color="false" data-rotate="225"></div>
                                        <div class="easypiechart" data-toggle="easypiechart" data-percent="50" data-size="174" data-bar-color="#00A28A" data-track-color="false" data-scale-color="false" data-rotate="225"></div>
                                        <div class="easypiechart" data-toggle="easypiechart" data-percent="75" data-size="134" data-bar-color="#5F4B8B" data-track-color="false" data-scale-color="false" data-rotate="225"></div>
                                    </div>
                                </div><!-- /easy-pie-chart -->
                            </div><!-- /.card-body -->
                            <!-- .card-footer -->
                            <div class="card-footer">
                                <div class="card-footer-item">
                                    <i class="fa fa-fw fa-circle text-indigo"></i> 100% <div class="text-muted small"> Assigned </div>
                                </div>
                                <div class="card-footer-item">
                                    <i class="fa fa-fw fa-circle text-purple"></i> 75% <div class="text-muted small"> Completed </div>
                                </div>
                                <div class="card-footer-item">
                                    <i class="fa fa-fw fa-circle text-teal"></i> 60% <div class="text-muted small"> Active </div>
                                </div>
                            </div><!-- /.card-footer -->
                        </div><!-- /.card -->
                    </div>
                    <!-- /grid column -->
                </div>
                <!-- /grid row -->
                <!-- card-deck-xl -->
                <div class="card-deck-xl">
                    <!-- .card -->
                    <div class="card card-fluid pb-3">
                        <div class="card-header">Recent Blog Post</div>
                        <!-- .list-group -->
                        <div class="lits-group list-group-flush">
                            <!-- .lits-group-item -->
                            <div class="list-group-item">
                                <!-- .lits-group-item-figure -->
                                <div class="list-group-item-figure">
                                    <div class="has-badge">
                                        <a href="page-project.html" class="tile tile-md bg-purple">LT</a>
                                        <a href="#team" class="user-avatar user-avatar-xs">
                                            <img src="{{ asset('admin/images/avatars/team4.jpg') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- .lits-group-item-figure -->
                                <!-- .lits-group-item-body -->
                                <div class="list-group-item-body">
                                    <h5 class="card-title">
                                        <a href="page-project.html">Looper Admin Theme</a>
                                    </h5>
                                    <p class="card-subtitle text-muted mb-1"> Progress in 74% - Last update 1d </p><!-- .progress -->
                                    <div class="progress progress-xs bg-transparent">
                                        <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="2181" aria-valuemin="0" aria-valuemax="100" style="width: 74%">
                                            <span class="sr-only">74% Complete</span>
                                        </div>
                                    </div>
                                    <!-- /.progress -->
                                </div>
                                <!-- .lits-group-item-body -->
                            </div>
                            <!-- /.list-group-item -->
                        </div>
                        <!-- /.list-group -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /card-deck-xl -->
            </div>
            <!-- /.page-section -->
        </div>
        <!-- /.page-inner -->
    </div>
    <!-- /.page -->
@endsection

@push('plugin_scripts')
    <script src="{{ asset('admin/vendor/easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/chart.js/Chart.min.js') }}"></script>
@endpush

@push('scripts')
    <script src="{{ asset('admin/javascript/pages/dashboard-demo.js') }}"></script>
@endpush
