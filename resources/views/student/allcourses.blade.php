@extends('student.master')
@section('head')
@endsection 

@section('content')
<div class="col-xl-9">
	@if(Session::has('message'))
	<div class='alert alert-success'>{{ Session::get('message') }}</div>
	@endif
	<div class="card bg-transparent border rounded-3">
		<!-- Card header START -->
		<div class="card-header bg-transparent border-bottom">
			<h3 class="mb-0">All Available Courses</h3>
		</div>
		<!-- Card header END -->

		<!-- Card body START -->
		<div class="card-body p-3 p-md-4">
			<div class="row g-4">
				<!-- Card item START -->
				@foreach($courses as $course)
				<div class="col-sm-6 col-lg-4">
					<div class="card shadow h-100">
						<!-- Image -->
						<img src="https://learn.abovemarts.com/public/courseimage/{{ $course->image}}" class="h-120px card-img-top" alt="course image">
						{{-- <img src="/courseimage/{{ $course->image}}" class="h-120px card-img-top" alt="course image"> --}}
						<div class="card-body pb-0">
							<!-- Badge and favorite -->
							<div class="d-flex justify-content-between mb-2">
								<a href="#" class="badge bg-success bg-opacity-10 text-success">{{ $course->cat->name ?? "" }}</a>
								<a href="#" class="text-danger"><i class="fas fa-heart"></i></a>
							</div>
							<!-- Title -->
							<h5 class="card-title fw-normal"><a href="/preview_course/{{ $course->uid }}">{{ $course->title }}</a></h5>
							<p class="mb-2 text-truncate-2">{!! Str::limit($course->description,50) !!}</p>
							<!-- Rating star -->
							{{-- <ul class="list-inline mb-0">
								<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
								<li class="list-inline-item ms-2 h6 fw-light mb-0">4.5/5.0</li>
							</ul> --}}
						</div>
						<!-- Card footer -->
						<div class="card-footer pt-0 pb-3">
							<hr>
							<div class="d-flex justify-content-between">
								<span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>{{ $course->duration }}Hrs</span>
								@if($course->price == 0)
								<label class="btn btn-sm btn-light btn-primary-soft-check border-0 m-0"
								for="option1">Free</label>@else 
								<label class="btn btn-sm btn-light btn-primary-soft-check border-0 m-0"
								for="option1">	${{ number_format($course->price) }} <s>${{ number_format($course->slashed_price) }}</s>
							</label>
								@endif
							</div><br>
							<a href='/preview_course/{{ $course->uid }}' class='btn btn-secondary btn-sm'>Preview Course</a>
						
							@if($user->package == "Basic" )
							<a href='https://abovemarts.com/userpackages' class='btn btn-success btn-sm'>Upgrade For Scholarship</a>
							@else 
							<a href='/enroll/{{ $course->uid }}' class='btn btn-success btn-sm'>Enrol Now</a>
							@endif
						</div>
					</div>
				</div>
				@endforeach
				<!-- Card item END -->


			</div>
		</div>
		<!-- Card body EMD -->
	</div>  
</div>
@endsection
@section('script')
@endsection