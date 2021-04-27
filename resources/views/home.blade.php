@extends('layouts.master_layout')
@section('content')
<!-- ROW-1 -->
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-6">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-body text-center statistics-info">
                        <div class="counter-icon bg-primary mb-0 box-primary-shadow">
                            <i class="fe fe-trending-up text-white"></i>
                        </div>
                        <h6 class="mt-4 mb-1">Total Sales</h6>
                        <h2 class="mb-2 number-font">34,516</h2>
                        <p class="text-muted">Sed ut perspiciatis unde omnis accusantium doloremque</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-body text-center statistics-info">
                        <div class="counter-icon bg-secondary mb-0 box-secondary-shadow">
                            <i class="fe fe-codepen text-white"></i>
                        </div>
                        <h6 class="mt-4 mb-1">Total Leads</h6>
                        <h2 class="mb-2 number-font">56,992</h2>
                        <p class="text-muted">Sed ut perspiciatis unde omnis accusantium doloremque</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-body text-center statistics-info">
                        <div class="counter-icon bg-success mb-0 box-success-shadow">
                            <i class="fe fe-dollar-sign text-white"></i>
                        </div>
                        <h6 class="mt-4 mb-1">Total Profit</h6>
                        <h2 class="mb-2  number-font">$42,567</h2>
                        <p class="text-muted">Sed ut perspiciatis unde omnis accusantium doloremque</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-body text-center statistics-info">
                        <div class="counter-icon bg-info mb-0 box-info-shadow">
                            <i class="fe fe-briefcase text-white"></i>
                        </div>
                        <h6 class="mt-4 mb-1">Total Cost</h6>
                        <h2 class="mb-2  number-font">$34,789</h2>
                        <p class="text-muted">Sed ut perspiciatis unde omnis accusantium doloremque</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ROW-1 END -->

<!-- ROW-3 -->
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Browsing Status</h3>
            </div>
            <div class="card-body p-4">
                <div class="mb-5">
                    <p class="mb-2">Chrome<span class="float-right text-muted">80%</span></p>
                    <div class="progress h-2">
                        <div class="progress-bar bg-primary w-80 " role="progressbar"></div>
                    </div>
                </div>
                <div class="mb-5">
                    <p class="mb-2">Firefox<span class="float-right text-muted">70%</span></p>
                    <div class="progress h-2">
                        <div class="progress-bar bg-pink w-70" role="progressbar"></div>
                    </div>
                </div>
                <div class="mb-5">
                    <p class="mb-2">Safari<span class="float-right text-muted">80%</span></p>
                    <div class="progress h-2">
                        <div class="progress-bar bg-warning w-65" role="progressbar"></div>
                    </div>
                </div>
                <div class="mb-5">
                    <p class="mb-2">Opera<span class="float-right text-muted">80%</span></p>
                    <div class="progress h-2">
                        <div class="progress-bar bg-danger w-80" role="progressbar"></div>
                    </div>
                </div>
                <div class="mb-5">
                    <p class="mb-2">UC Browser<span class="float-right text-muted">70%</span></p>
                    <div class="progress h-2">
                        <div class="progress-bar bg-success w-60" role="progressbar"></div>
                    </div>
                </div>
                <div class="mb-0">
                    <p class="mb-2">Internet Explore<span class="float-right text-muted">50%</span></p>
                    <div class="progress h-2">
                        <div class="progress-bar bg-info w-50" role="progressbar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- COL END -->
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Production Status</h3>
            </div>
            <div class="p-4 border-bottom">
                <p class="mb-2 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                <div class="row">
                    <div class="col">
                        <p class="mb-1">Production Volume</p>
                        <h3 class="mb-0 number-font">57,865</h3>
                    </div>
                    <div class="col mb-0">
                        <div id="spark1" class="chart-dropshadow-info"></div>
                    </div>
                </div>
            </div>
            <div class="p-4 border-bottom">
                <div class="row">
                    <div class="col">
                        <p class="mb-1">Sales Revenue</p>
                        <h3 class="mb-0 number-font">22,345</h3>
                    </div>
                    <div class="col mb-0">
                        <div class="chart-wrapper">
                            <div id="spark2" class="chart-dropshadow-secondary"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-4 border-bottom">
                <div class="row">
                    <div class="col">
                        <p class="mb-1">Total Orders</p>
                        <h3 class="mb-0 number-font">52,156</h3>
                    </div>
                    <div class="col mb-0">
                        <div id="spark3" class="chart-dropshadow-success"></div>
                    </div>
                </div>
            </div>
            <div class="p-4">
                <div class="row">
                    <div class="col">
                        <p class="mb-1">Total profit</p>
                        <h3 class="mb-0 number-font">34,673</h3>
                    </div>
                    <div class="col mb-0">
                        <div id="spark4" class="chart-dropshadow-danger"></div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- COL END -->
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Total Sales By Org Unit</h3>
            </div>
            <div class="card-body">
                <small class="text-muted">Total Sales</small>
                <h2 class="number-font">69,453</h2>
                <div class="progress grouped h-3">
                    <div class="progress-bar w-25 bg-primary " role="progressbar"></div>
                    <div class="progress-bar w-30 bg-danger" role="progressbar"></div>
                    <div class="progress-bar w-20 bg-warning" role="progressbar"></div>
                </div>
                <div class="row mt-3 pt-3">
                    <div class="col border-right">
                        <p class=" number-font1 mb-0"><span class="dot-label bg-primary"></span>Sales</p>
                        <h5 class="mt-2 font-weight-semibold mb-0">25%</h5>
                    </div>
                    <div class="col  border-right">
                        <p class=" number-font mb-0"><span class="dot-label bg-danger"></span>Marketing</p>
                        <h5 class="mt-2 font-weight-semibold mb-0">30%</h5>
                    </div>
                    <div class="col">
                        <p class="number-font1 mb-0"><span class="dot-label bg-warning"></span>Finance</p>
                        <h5 class="mt-2 font-weight-semibold mb-0">20%</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="align-items-center">
                    <h4 class="">Total Expenses</h4>
                </div>
                <div class="row d-flex align-items-center mt-3">
                    <div class="col">
                        <h6 class="text-muted mb-2">Monthly</h6>
                        <h2 class="d-flex mb-0 number-font">$35487<small><i class="fe fe-arrow-up text-success"></i></small></h2>
                    </div>
                    <div class="col text-right">
                        <div class="">
                            <span class="sparkline_bar1 chart-dropshadow-secondary"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- COL END -->
</div>
<!-- ROW-3 END -->
</div>
</div>
<!-- CONTAINER END -->
</div>
@endsection