@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
    <div class="content">
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header card-header-success card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons"></i>
                                </div>
                                <h4 class="card-title">Global Sales by Top Locations</h4>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card card-stats">
                                            <!-- Card body -->
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <h5 class="card-title text-uppercase text-muted mb-0">Total traffic</h5>
                                                        <span class="h2 font-weight-bold mb-0">350,897</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                                            <i class="ni ni-active-40"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="mt-3 mb-0 text-sm">
                                                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                                    <span class="text-nowrap">Since last month</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card card-stats">
                                            <!-- Card body -->
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <h5 class="card-title text-uppercase text-muted mb-0">New users</h5>
                                                        <span class="h2 font-weight-bold mb-0">2,356</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                                            <i class="ni ni-chart-pie-35"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="mt-3 mb-0 text-sm">
                                                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                                    <span class="text-nowrap">Since last month</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card card-stats">
                                            <!-- Card body -->
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <h5 class="card-title text-uppercase text-muted mb-0">Sales</h5>
                                                        <span class="h2 font-weight-bold mb-0">924</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                                            <i class="ni ni-money-coins"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="mt-3 mb-0 text-sm">
                                                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                                    <span class="text-nowrap">Since last month</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card card-stats">
                                            <!-- Card body -->
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
                                                        <span class="h2 font-weight-bold mb-0">49,65%</span>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                                            <i class="ni ni-chart-bar-32"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="mt-3 mb-0 text-sm">
                                                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                                    <span class="text-nowrap">Since last month</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive table-sales">
                                            <table class="table">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            <img
                                                                src="{{ asset('resources/img/stat/US.png') }}">
                                                        </div>
                                                    </td>
                                                    <td>USA</td>
                                                    <td class="text-right">
                                                        2.920
                                                    </td>
                                                    <td class="text-right">
                                                        53.23%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            <img
                                                                src="{{ asset('resources/img/stat/DE.png') }}">
                                                        </div>
                                                    </td>
                                                    <td>Germany</td>
                                                    <td class="text-right">
                                                        1.300
                                                    </td>
                                                    <td class="text-right">
                                                        20.43%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            <img
                                                                src="{{ asset('resources/img/stat/AU.png') }}">
                                                        </div>
                                                    </td>
                                                    <td>Australia</td>
                                                    <td class="text-right">
                                                        760
                                                    </td>
                                                    <td class="text-right">
                                                        10.35%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            <img
                                                                src="{{ asset('resources/img/stat/GB.png') }}">
                                                        </div>
                                                    </td>
                                                    <td>United Kingdom</td>
                                                    <td class="text-right">
                                                        690
                                                    </td>
                                                    <td class="text-right">
                                                        7.87%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            <img
                                                                src="{{ asset('resources/img/stat/RO.png') }}">
                                                        </div>
                                                    </td>
                                                    <td>Romania</td>
                                                    <td class="text-right">
                                                        600
                                                    </td>
                                                    <td class="text-right">
                                                        5.94%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            <img
                                                                src="{{ asset('resources/img/stat/BR.png') }}">
                                                        </div>
                                                    </td>
                                                    <td>Brasil</td>
                                                    <td class="text-right">
                                                        550
                                                    </td>
                                                    <td class="text-right">
                                                        4.34%
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body pb-0 d-flex justify-content-between">
                                <div>
                                    <h4 class="mb-1">Product Sales</h4>
                                    <p>Total Earnings of the Month</p>
                                    <h3 class="m-0">$ 12,555</h3>
                                </div>
                                <div>
                                    <ul>
                                        <li class="d-inline-block mr-3"><a class="text-dark" href="#">Day</a></li>
                                        <li class="d-inline-block mr-3"><a class="text-dark" href="#">Week</a></li>
                                        <li class="d-inline-block"><a class="text-dark" href="#">Month</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="chart-wrapper"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                <canvas id="chart_widget_2" height="280" style="display: block; width: 1605px; height: 280px;" width="1605" class="chartjs-render-monitor"></canvas>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="w-100 mr-2">
                                        <h6>Pixel 2</h6>
                                        <div class="progress" style="height: 6px">
                                            <div class="progress-bar bg-danger" style="width: 40%"></div>
                                        </div>
                                    </div>
                                    <div class="ml-2 w-100">
                                        <h6>iPhone X</h6>
                                        <div class="progress" style="height: 6px">
                                            <div class="progress-bar bg-primary" style="width: 80%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@push('js')

@endpush
