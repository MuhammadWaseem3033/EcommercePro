@extends('admin.layouts.layout')

@section('content')
   <!-- Dashboard Ecommerce Starts -->
   <section id="dashboard-ecommerce">
    <div class="row match-height">
        <!-- Statistics Card -->
        <div class="col-xl-12 col-md-6 col-12">
            <div class="card card-statistics">
                <div class="card-header">
                    <h4 class="card-title">Statistics</h4>
                    <div class="d-flex align-items-center">
                        <p class="card-text font-small-2 me-25 mb-0">Updated 1 month ago</p>
                    </div>
                </div>
                <div class="card-body statistics-body">
                    <div class="row">
                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                            <div class="d-flex flex-row">
                                <div class="avatar bg-light-primary me-2">
                                    <div class="avatar-content">
                                        <i data-feather="trending-up" class="avatar-icon"></i>
                                    </div>
                                </div>
                                <div class="my-auto">
                                    <h4 class="fw-bolder mb-0">{{$total_order}}</h4>
                                    <p class="card-text font-small-3 mb-0">Total Order</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                            <div class="d-flex flex-row">
                                <div class="avatar bg-light-info me-2">
                                    <div class="avatar-content">
                                        <i data-feather="user" class="avatar-icon"></i>
                                    </div>
                                </div>
                                <div class="my-auto">
                                    <h4 class="fw-bolder mb-0">{{$total_user}}</h4>
                                    <p class="card-text font-small-3 mb-0">Customers</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                            <div class="d-flex flex-row">
                                <div class="avatar bg-light-danger me-2">
                                    <div class="avatar-content">
                                        <i data-feather="box" class="avatar-icon"></i>
                                    </div>
                                </div>
                                <div class="my-auto">
                                    <h4 class="fw-bolder mb-0">{{$total_product}}</h4>
                                    <p class="card-text font-small-3 mb-0">Products</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="d-flex flex-row">
                                <div class="avatar bg-light-success me-2">
                                    <div class="avatar-content">
                                        <i data-feather="dollar-sign" class="avatar-icon"></i>
                                    </div>
                                </div>
                                <div class="my-auto">
                                    <h4 class="fw-bolder mb-0">{{$total_revinue}}</h4>
                                    <p class="card-text font-small-3 mb-0">Revenue</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Statistics Card -->
    </div>

    <div class="row match-height">
        <div class="col-lg-4 col-12">
            <div class="row match-height">
                <!-- Bar Chart - Orders -->
                <div class="col-lg-6 col-md-3 col-6">
                    <div class="card">
                        <div class="card-body pb-50">
                            <div class="my-auto">
                                <h4 class="fw-bolder mb-0">{{$order_deliver}}</h4>
                                <p class="card-text font-small-3 mb-0">Order delivared</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Bar Chart - Orders -->

                <!-- Line Chart - Profit -->
                <div class="col-lg-6 col-md-3 col-6">
                    <div class="card card-tiny-line-stats">
                        <div class="card-body pb-50">
                            <div class="my-auto">
                                <h4 class="fw-bolder mb-0">{{$order_processing}}</h4>
                                <p class="card-text font-small-3 mb-0">Order Processing</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Line Chart - Profit -->
            </div>
        </div>

        <!-- Revenue Report Card -->
        <!--/ Revenue Report Card -->
    </div>
</section>
<!-- Dashboard Ecommerce ends -->
@endsection
