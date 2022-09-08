@extends('dashboard.layouts.main')
@section('dashboard')
    active
@endsection
@section('css')

    @endsection


@section('heading')
    Dashbaord
@endsection

@section('title')
   MLM
@endsection

@section('content')

    <main>
        <div class="content-body">
            <!-- Dashboard Ecommerce Starts -->
            <section id="dashboard-ecommerce">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header d-flex flex-column align-items-start pb-0">
                                <div class="avatar bg-rgba-primary p-50 m-0">
                                    <div class="avatar-content">
                                        <i class="feather icon-users text-primary font-medium-5"></i>
                                    </div>
                                </div>
                                <h2 class="text-bold-700 mt-1">{{$user}}</h2>
                                <p class="mb-0">Total users</p>
                            </div>
                            <div class="card-content">
                                <div id="line-area-chart-1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header d-flex flex-column align-items-start pb-0">
                                <div class="avatar bg-rgba-success p-50 m-0">
                                    <div class="avatar-content">
                                        <i class="feather icon-credit-card text-success font-medium-5"></i>
                                    </div>
                                </div>
                                <h2 class="text-bold-700 mt-1">{{$wheel}}</h2>
                                <p class="mb-0">Total wheels</p>
                            </div>
                            <div class="card-content">
                                <div id="line-area-chart-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header d-flex flex-column align-items-start pb-0">
                                <div class="avatar bg-rgba-danger p-50 m-0">
                                    <div class="avatar-content">
                                        <i class="feather icon-shopping-cart text-danger font-medium-5"></i>
                                    </div>
                                </div>
                                <h2 class="text-bold-700 mt-1">{{$total}}</h2>
                                <p class="mb-0">Admin wallet amount</p>
                            </div>
                            <div class="card-content">
                                <div id="line-area-chart-3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header d-flex flex-column align-items-start pb-0">
                                <div class="avatar bg-rgba-warning p-50 m-0">
                                    <div class="avatar-content">
                                        <i class="feather icon-package text-warning font-medium-5"></i>
                                    </div>
                                </div>
                                <h2 class="text-bold-700 mt-1">{{$pending}}</h2>
                                <p class="mb-0">Pending withdraws</p>
                            </div>
                            <div class="card-content">
                                <div id="line-area-chart-4"></div>
                            </div>
                        </div>
                    </div>
                </div>




            </section>
            <!-- Dashboard Ecommerce ends -->

        </div>
    </main>

@endsection

@section('js')

@endsection
