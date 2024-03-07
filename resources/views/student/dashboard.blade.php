@extends('student.master')
@section('head')
@endsection 

@section('content')
<div class="col-xl-9">

	<!-- Counter boxes START -->
	<div class="row mb-4">
		<!-- Counter item -->
		<div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
			<div
				class="d-flex justify-content-center align-items-center p-4 bg-orange bg-opacity-15 rounded-3">
				<span class="display-6 lh-1 text-orange mb-0"><i class="fas fa-tv fa-fw"></i></span>
				<div class="ms-4">
					<div class="d-flex">
						<h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
							data-purecounter-end="{{ count($course_enrolled) }}"
							data-purecounter-delay="200">{{ count($course_enrolled) }}</h5>
					</div>
					<p class="mb-0 h6 fw-light">Total Enrolled Courses</p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
			<div
				class="d-flex justify-content-center align-items-center p-4 bg-primary bg-opacity-15 rounded-3">
				<span class="display-6 lh-1 text-primary mb-0"><i class="fas fa-tv fa-fw"></i></span>
				<div class="ms-4">
					<h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
							data-purecounter-end="{{ count($allcourses) }}"
							data-purecounter-delay="200">{{ count($allcourses) }}</h5>
					<a class="mb-0 h6 fw-light" href='/allcourses'>E-Courses</a>
					<a class='btn btn-primary btn-sm' href='/allcourses'>Visit E-Courses</a>
				</div>
			</div>
		</div>
		<!-- Counter item -->
	
		<div class="col-sm-6 col-lg-4 mb-3 mb-lg-0 mt-2">
			<div
				class="d-flex justify-content-center align-items-center p-4 bg-purple bg-opacity-15 rounded-3">
				<span class="display-6 lh-1 text-purple mb-0"><i
						class="fas fa-book fa-fw"></i></span>
				<div class="ms-4">
					<h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
							data-purecounter-end="{{ count($allebooks) }}"
							data-purecounter-delay="200">{{ count($allebooks) }}</h5>
					
					<p class="mb-0 h6 fw-light">E-Library</p>
					<a class='btn btn-purple btn-sm' href='/allebooks'>Visit E-Library</a>
				</div>
			</div>
		</div>

		@if($user->package !== "Basic")

		<div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
			<div
				class="d-flex justify-content-center align-items-center p-4 bg-success bg-opacity-10 rounded-3">
				<span class="display-6 lh-1 text-success mb-0"><i
						class="fas fa-medal fa-fw"></i></span>
				<div class="ms-4">
					<div class="d-flex">
						<h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
							data-purecounter-end="0" data-purecounter-delay="300">0</h5>
					</div>
					<p class="mb-0 h6 fw-light">Achieved Certificates</p>
				</div>
			</div>
		</div>
		<!-- Counter item -->
		

		<div class="col-sm-6 col-lg-4 mb-3 mb-lg-0 mt-2">
			<div
				class="d-flex justify-content-center align-items-center p-4 bg-danger bg-opacity-15 rounded-3">
				<span class="display-6 lh-1 text-secondary mb-0"><i
						class="fas fa-home fa-fw"></i></span>
				<div class="ms-4">
					
					<p class="mb-0 h6 fw-light">Backoffice</p>
					<a class='btn btn-danger btn-sm' href='https://abovemarts.com'>Visit Backoffice</a>
				</div>
			</div>
		</div>

		<div class="col-sm-6 col-lg-4 mb-3 mb-lg-0 mt-2">
			<div
				class="d-flex justify-content-center align-items-center p-4 bg-info bg-opacity-15 rounded-3">
				<span class="display-6 lh-1 text-info mb-0"><i
						class="fas fa-wallet fa-fw"></i></span>
				<div class="ms-4">
					{{-- <div class="d-flex">
						<h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
							data-purecounter-end="0" data-purecounter-delay="200">0</h5>
					</div> --}}
					<p class="mb-0 h6 fw-light">Wallet Balance : NGN{{ number_format($balance) }}</p>
					<a class='btn btn-info btn-sm' href='https://abovemarts.com/fund'>Fund Wallet</a>
				</div>
			</div>
		</div>

		@endif

	</div>
	<!-- Counter boxes END -->

	<div class="card bg-transparent border rounded-3">
		<!-- Card header START -->
		<div class="card-header bg-transparent border-bottom">
			<h3 class="mb-0">My Enrolled Courses</h3>
		</div>
		<!-- Card header END -->

		<!-- Card body START -->
		<div class="card-body">

			<!-- Search and select START -->
			{{-- <div class="row g-3 align-items-center justify-content-between mb-4">
				<!-- Content -->
				<div class="col-md-8">
					<form class="rounded position-relative">
						<input class="form-control pe-5 bg-transparent" type="search"
							placeholder="Search" aria-label="Search">
						<button
							class="btn bg-transparent px-2 py-0 position-absolute top-70 end-0 translate-middle-y"
							type="submit"><i class="fas fa-search fs-6 "></i></button>
					</form>
				</div>

				<!-- Select option -->
				<div class="col-md-3">
					<!-- Short by filter -->
					<form>
						<select class="form-select js-choice border-0 z-index-9 bg-transparent"
							aria-label=".form-select-sm">
							<option value="">Sort by</option>
							<option>Free</option>
							<option>Newest</option>
							<option>Most popular</option>
							<option>Most Viewed</option>
						</select>
					</form>
				</div>
			</div> --}}
			<!-- Search and select END -->

			<!-- Course list table START -->
			<div class="table-responsive border-0">
				<table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
					<!-- Table head -->
					<thead>
						<tr>
							<th scope="col" class="border-0 rounded-start">Course Title</th>
							<th scope="col" class="border-0">Progress</th>
							<th scope="col" class="border-0">Total Lectures</th>
							<th scope="col" class="border-0 rounded-end">Action</th>
						</tr>
					</thead>

					<!-- Table body START -->
					<tbody>
						<!-- Table item -->
						@foreach($enrolled_courses as $course)
						<tr>
							<!-- Table data -->
							<td>
								<div class="d-flex align-items-center">
									<!-- Image -->
									<div class="w-100px">
										<a href="/lesson/{{ $course->uid }}">
										<img src="https://learn.abovemarts.com/public/courseimage/{{ $course->image}}" class="rounded"
											alt=""></a>
										{{-- <img src="/courseimage/{{ $course->image}}" class="rounded"
											alt=""> --}}
									</div>
									<div class="mb-0 ms-2">
										<!-- Title -->
										<h6><a href="/lesson/{{ $course->uid }}">{{ $course->title }}</a></h6>
										<!-- Info -->

									</div>
								</div>
							</td>

							<!-- Table data -->
							<td>
								<div class="overflow-hidden">
									<h6 class="mb-0 text-end">{{ $status[$course->id][$course->id]
										}}%</h6>
									<div class="progress progress-sm bg-primary bg-opacity-10">
										<div class="progress-bar bg-primary aos" role="progressbar"
											data-aos="slide-right" data-aos-delay="100"
											data-aos-duration="100" data-aos-easing="ease-in-out"
											style="width:{{ $status[$course->id][$course->id] }}%"
											aria-valuenow="{{ $status[$course->id][$course->id] }}"
											aria-valuemin="0" aria-valuemax="100">
										</div>
									</div>
								</div>
								{{-- {{ $status[$course->id][$course->id] }} --}}
							</td>

							<!-- Table data -->
							<td>
								{{
								count(App\Models\SectionVideo::where('course_id',$course->id)->get())
								}}
							</td>

							<!-- Table data -->
							<td>

								@if($status[$course->id][$course->id] == 0)
								<a href="/lesson/{{ $course->uid }}"
									class="btn btn-sm btn-success-soft me-1 mb-1 mb-md-0"><i
										class="bi bi-play-circle me-1"></i>Start</a>
								@else
								<a href="/lesson/{{ $course->uid }}"
									class="btn btn-sm btn-primary-soft me-1 mb-1 mb-md-0"><i
										class="bi bi-play-circle me-1"></i>Continue</a>
								@endif
							</td>
						</tr>
						@endforeach

					</tbody>
					<!-- Table body END -->
				</table>
			</div>
			<!-- Course list table END -->

			<!-- Pagination START -->
			<div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3">
				<!-- Content -->
				<p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
				<!-- Pagination -->
				<nav class="d-flex justify-content-center mb-0" aria-label="navigation">
					<ul class="pagination pagination-sm pagination-primary-soft mb-0 pb-0">
						<li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i
									class="fas fa-angle-left"></i></a></li>
						<li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
						<li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
						<li class="page-item mb-0"><a class="page-link" href="#">3</a></li>
						<li class="page-item mb-0"><a class="page-link" href="#"><i
									class="fas fa-angle-right"></i></a></li>
					</ul>
				</nav>
			</div>
			<!-- Pagination END -->
		</div>
		<!-- Card body START -->
	</div>
	<!-- Main content END -->
</div><!-- Row END -->

@endsection
@section('script')
@endsection