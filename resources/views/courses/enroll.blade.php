@extends('admin.master')
@section('header')
@endsection

@section('content')
<div class="page-content-wrapper border">

    <!-- Title -->
    <div class="row">
        <div class="col-12">
            <h1 class="h3 mb-2 mb-sm-0">Confirm Enrollment For {{ $course->title }} </h1>

        </div>

        <div class="card bg-transparent border">

            <!-- Card header START -->
            <div class="card-header bg-light border-bottom">
                <!-- Search and select START -->
                <div class="row g-3 align-items-center justify-content-between">
                    <!-- Search bar -->
                    <div class="col-md-8">
                        <h4 class='text-danger'>Total Course Price : NGN{{number_format($course->price,2)}}</h4><br>
                        @if( $course->install($course->uid) )
                        <div class="alert alert-primary">
                            Installment Payment Allowed For This Course.
                            <ul>
                                <li>First Payment : <b>NGN{{number_format($plan->first)}}</b></li>
                                <li>Second Payment : <b>NGN{{number_format($plan->secon)d}}</b></li>
                                <li>Third Payment : <b>NGN{{number_format($plan->third)}}</b></li>
                                <a  href='/enroll/{{ $course->uid }}' class='btn btn-primary'>Make First Payment (NGN{{number_format($course->installdetails($course->uid)->first) ?? ''}})</a>
                                <a  href='/enroll/{{ $course->uid }}' class='btn btn-success'>Make Full Payment (NGN{{ number_format($course->price) }})</a>
                            </ul>
                        </div>
                        @else 
                        <div class="alert alert-primary">
                            Installment Payment Not Allowed For This Course.
                            <ul>
                                 <a  href='/enroll/{{ $course->uid }}' class='btn btn-success'>Make Full Payment (NGN{{ number_format($course->price) }})</a>
                            </ul>
                        </div>

                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
    @endsection

    @section('script')
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    @endsection