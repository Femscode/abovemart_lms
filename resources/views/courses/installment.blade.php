@extends('admin.master')
@section('header')
@endsection

@section('content')
<div class="page-content-wrapper border">

    <!-- Title -->
    <div class="row">
        <div class="col-12">
            <h1 class="h3 mb-2 mb-sm-0">{{ $course->title }} (Installmental Payment Plan) </h1>
           
        </div>

        <div class="card bg-transparent border">

            <!-- Card header START -->
            <div class="card-header bg-light border-bottom">
                <!-- Search and select START -->
                <div class="row g-3 align-items-center justify-content-between">
                    <!-- Search bar -->
                    <div class="col-md-8">
                    <h4 class='text-danger'>Total Course Price : NGN{{number_format($course->price,2)}}</h4><br>
                        <form method='post' action='/updateInstallment' class="rounded position-relative">@csrf
                            <div class='alert alert-danger'>
                                Kindly note that the first, second and third payment must sum up to the total course amount!
                            </div>
                                <h6> First Payment (NGN)</h6>
                                <input name='course_id' value='{{$course->uid}}' type='hidden'>
                                <input value='{{$plan->first ?? ""}}' required type='number' class="form-control bg-body" name='first' placeholder='First Installment in NGN'>
                              
                                <h6> Second Payment (NGN)</h6>
                                <input value='{{$plan->second ?? ""}}' required type='number' class="form-control bg-body" name='second' placeholder='First Installment in NGN'>
                              
                                <h6> Third Payment (NGN)</h6>
                                <input value='{{$plan->third ?? ""}}' required type='number' class="form-control bg-body" name='third' placeholder='First Installment in NGN'>

                                <button type='submit' value='Update' class='btn btn-success'>Update</button>
                              
                           
                            </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @endsection

    @section('script')
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    @endsection