@extends("cms.layout.main")

@section('title',"Dashboard") 

@section('content')
<div class="row">
        <div class="col-lg-3 col-sm-6 col-12">
        <div class="dash-widget">
        <div class="dash-widgetimg">
                <span><img src="{{ asset('/') }}assets/img/icons/dash1.svg" alt="img"></span>
        </div>
        <div class="dash-widgetcontent">
                <h5><span class="counters" data-count="00.00">00.00</span></h5>
                <h6>Total Product</h6>
        </div>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
        <div class="dash-widget dash1">
        <div class="dash-widgetimg">
                <span><img src="{{ asset('/') }}assets/img/icons/dash2.svg" alt="img"></span>
        </div>
        <div class="dash-widgetcontent">
                <h5><span class="counters" data-count="00.00">00.00</span></h5>
                <h6>Total Category</h6>
        </div>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
        <div class="dash-widget dash2">
        <div class="dash-widgetimg">
                <span><img src="{{ asset('/') }}assets/img/icons/dash3.svg" alt="img"></span>
        </div>
        <div class="dash-widgetcontent">
                <h5><span class="counters" data-count="00.00">00.00</span></h5>
                <h6>Total Brand</h6>
        </div>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
        <div class="dash-widget dash3">
        <div class="dash-widgetimg">
                <span><img src="{{ asset('/') }}assets/img/icons/dash4.svg" alt="img"></span>
        </div>
        <div class="dash-widgetcontent">
                <h5><span class="counters" data-count="00.00">00.00</span></h5>
                <h6>Total </h6>
        </div>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12 d-flex">
        <div class="dash-count">
        <div class="dash-counts">
                <h4>00.00</h4>
                <h5>Customers</h5>
        </div>
        <div class="dash-imgs">
                <i data-feather="user"></i>
        </div>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12 d-flex">
        <div class="dash-count das1">
        <div class="dash-counts">
                <h4>00.00</h4>
                <h5>Suppliers</h5>
        </div>
        <div class="dash-imgs">
                <i data-feather="user-check"></i>
        </div>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12 d-flex">
        <div class="dash-count das2">
        <div class="dash-counts">
                <h4>00.00</h4>
                <h5>Purchase Invoice</h5>
        </div>
        <div class="dash-imgs">
                <i data-feather="file-text"></i>
        </div>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12 d-flex">
        <div class="dash-count das3">
        <div class="dash-counts">
                <h4>00.00</h4>
                <h5>Sales Invoice</h5>
        </div>
        <div class="dash-imgs">
                <i data-feather="file"></i>
        </div>
        </div>
        </div>
</div>
@endsection