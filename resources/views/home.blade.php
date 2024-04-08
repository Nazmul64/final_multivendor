@extends('layouts.app')
@section('content')
    <div class="row">

        <div class="col-xl-3 col-sm-6">
            <div class="card-box widget-box-two widget-two-custom">
                <div class="media">
                    <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                        <i class="mdi mdi-currency-usd avatar-title font-30 text-white"></i>
                    </div>

                    <div class="wigdet-two-content media-body">
                        <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">Total Revenue</p>
                        <h3 class="font-weight-medium my-2">$ <span data-plugin="counterup">65,841</span></h3>
                        <p class="m-0">Jan - Apr 2019</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->

        <div class="col-xl-3 col-sm-6">
            <div class="card-box widget-box-two widget-two-custom ">
                <div class="media">
                    <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                        <i class="mdi mdi-account-multiple avatar-title font-30 text-white"></i>
                    </div>

                    <div class="wigdet-two-content media-body">
                        <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">Total Unique
                            Visitors</p>
                        <h3 class="font-weight-medium my-2"> <span data-plugin="counterup">26,521</span></h3>
                        <p class="m-0">Jan - Apr 2019</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->

        <div class="col-xl-3 col-sm-6">
            <div class="card-box widget-box-two widget-two-custom ">
                <div class="media">
                    <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                        <i class="mdi mdi-crown avatar-title font-30 text-white"></i>
                    </div>

                    <div class="wigdet-two-content media-body">
                        <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">Number of
                            Transactions</p>
                        <h3 class="font-weight-medium my-2"><span data-plugin="counterup">7,842</span></h3>
                        <p class="m-0">Jan - Apr 2019</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->

        <div class="col-xl-3 col-sm-6">
            <div class="card-box widget-box-two widget-two-custom ">
                <div class="media">
                    <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                        <i class="mdi mdi-auto-fix  avatar-title font-30 text-white"></i>
                    </div>

                    <div class="wigdet-two-content media-body">
                        <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">Conversation Rate
                        </p>
                        <h3 class="font-weight-medium my-2"><span data-plugin="counterup">2.07</span>%</h3>
                        <p class="m-0">Jan - Apr 2019</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- end row -->

    <div class="row">

        <!-- end col -->

        <div class="col-xl-3 col-lg-6">
            <div class="card-box">
                <h4 class="header-title mb-4">Total Unique Visitors</h4>

                <div class="widget-chart text-center" dir="ltr">

                    <div id="donut-chart" style="height: 280px;"></div>

                    <div class="row text-center mt-4">
                        <div class="col-6">
                            <h3 data-plugin="counterup">1,507</h3>
                            <p class="text-muted mb-0">Visitors Male</p>
                        </div>
                        <div class="col-6">
                            <h3 data-plugin="counterup">854</h3>
                            <p class="text-muted mb-1">Visitors Female</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-xl-3 col-lg-6">
            <div class="card-box">
                <h4 class="header-title mb-4">Number of Transactions</h4>

                <div class="widget-chart text-center" dir="ltr">

                    <div id="pie-chart" style="height: 280px;"></div>

                    <div class="row text-center mt-4">
                        <div class="col-6">
                            <h3 data-plugin="counterup">2,854</h3>
                            <p class="text-muted mb-0">Payment Done</p>
                        </div>
                        <div class="col-6">
                            <h3 data-plugin="counterup">22</h3>
                            <p class="text-muted mb-1">Payment Due</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!--- end row -->
@endsection
