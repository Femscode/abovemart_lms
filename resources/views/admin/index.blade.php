@extends('admin.master')
@section('header')
@endsection

@section('content')

<div class="page-content-wrapper border">

	<!-- Title -->
	<div class="row mb-3">
		<div class="col-12 d-sm-flex justify-content-between align-items-center">
			<h1 class="h3 mb-2 mb-sm-0">Courses</h1>
			<a href="#" class="btn btn-sm btn-primary mb-0" data-bs-toggle="modal"
				data-bs-target="#addQuestion"><i class="bi bi-plus-circle me-2"></i>Create Course</a>

		</div>
	</div>

	<!-- Course boxes START -->
	<div class="row g-4 mb-4">
		<!-- Course item -->
		<div class="col-sm-6 col-lg-4">
			<a href='/dashboard'>
			<div class="text-center p-4 bg-primary bg-opacity-10 border border-primary rounded-3">
				<h6>Total Courses</h6>
				<h2 class="mb-0 fs-1 text-primary">{{ count($courses) }}</h2>
			</div>
		</a>
		</div>

		<!-- Course item -->
		<div class="col-sm-6 col-lg-4">
			<a href='/announcement'>
			<div class="text-center p-4 bg-success bg-opacity-10 border border-success rounded-3">
				<h6>Announcements</h6>
				<h2 class="mb-0 fs-1 text-success">{{ count($ann) }}</h2>
			</div>
			</a>
		</div>

		<!-- Course item -->
		<div class="col-sm-6 col-lg-4">
			<a href='/assignment'>
			<div class="text-center p-4  bg-warning bg-opacity-15 border border-warning rounded-3">
				<h6>Assignments</h6>
				<h2 class="mb-0 fs-1 text-warning">{{ count($assignments) }}</h2>
			</div>
			</a>
		</div>
	</div>
	<!-- Course boxes END -->

	<!-- Card START -->
	<div class="card bg-transparent border">

		<!-- Card header START -->
		<div class="card-header bg-light border-bottom">
			<!-- Search and select START -->
			<div class="row g-3 align-items-center justify-content-between">
				<!-- Search bar -->
				<div class="col-md-8">
					<form class="rounded position-relative">
						<input required class="form-control bg-body" type="search" placeholder="Search"
							aria-label="Search">
						<button
							class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y"
							type="submit"><i class="fas fa-search fs-6 "></i></button>
					</form>
				</div>

				<!-- Select option -->
				<div class="col-md-3">
					<!-- Short by filter -->
					<form>
						<select class="form-select js-choice border-0 z-index-9"
							aria-label=".form-select-sm">
							<option value="">Sort by</option>
							<option>Newest</option>
							<option>Oldest</option>
							<option>Accepted</option>
							<option>Rejected</option>
						</select>
					</form>
				</div>
			</div>
			<!-- Search and select END -->
		</div>
		<!-- Card header END -->

		<!-- Card body START -->
		<div class="card-body">
			<!-- Course table START -->
			<div class="table-responsive border-0 rounded-3">
				<!-- Table START -->
				<table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
					<!-- Table head -->
					<thead>
						<tr>
							<th scope="col" class="border-0 rounded-start">Course Name</th>
							{{-- <th scope="col" class="border-0">Instructor</th> --}}
							<th scope="col" class="border-0">Added Date</th>
							<th scope="col" class="border-0">Type</th>
							<th scope="col" class="border-0">Price</th>
							{{-- <th scope="col" class="border-0">Status</th> --}}
							<th scope="col" class="border-0 rounded-end">Action</th>
						</tr>
					</thead>

					<!-- Table body START -->
					<tbody>

						<!-- Table row -->
						@foreach($courses as $course)
						<tr>
							<!-- Table data -->
							<td>
								<div class="d-flex align-items-center position-relative">
									<!-- Image -->
									<div class="w-60px">
										<img src="/courseimage/{{ $course->image}}" class="rounded" alt="">
									</div>
									<!-- Title -->
									<h6 class="mb-0 ms-2">
										<a href="#" class="stretched-link">{{ $course->title }}</a>
									</h6>
								</div>
							</td>


							<!-- Table data -->
							{{-- <td>
								<div class="d-flex align-items-center mb-3">
									
									<div class="avatar avatar-xs flex-shrink-0">
										<img class="avatar-img rounded-circle"
											src="assets/images/avatar/09.jpg" alt="avatar">
									</div>
								
									<div class="ms-2">
										<h6 class="mb-0 fw-light">Fasanya Pelumi</h6>
									</div>
								</div>
							</td> --}}

							<!-- Table data -->
							<td>{{ Date('j F Y',strtotime($course->created_at)) }}</td>

							<!-- Table data -->
							<td> <span class="btn btn-sm btn-success-soft me-1 mb-1 mb-md-0">{{
									$course->category }}</span> </td>

							<!-- Table data -->
							<td>${{ number_format($course->price) }}</td>

							<!-- Table data -->
							{{-- <td> <span class="badge bg-warning bg-opacity-15 text-warning">Pending</span>
							</td> --}}

							<!-- Table data -->
							<td>
								<a href='coursedetails/{{ $course->id }}' class="edit_course btn btn-sm btn-info-soft me-1 mb-1 mb-md-0"
									>Lectures</a>
								<a href='students/{{ $course->uid }}' class="edit_course btn btn-sm btn-warning-soft me-1 mb-1 mb-md-0"
										>Students</a>
								<a data-id='{{ $course->id }}'
									class="edit_course btn btn-sm btn-primary-soft me-1 mb-1 mb-md-0"
									data-bs-toggle="modal" data-bs-target="#editCourse">Edit</a>
								<button id='delete_course' data-id='{{ $course->id }}'
									class="btn btn-sm btn-danger-soft mb-0">Delete</button>
							</td>
						</tr>
						@endforeach

					</tbody>
					<!-- Table body END -->
				</table>
				<!-- Table END -->
			</div>
			<!-- Course table END -->
		</div>
		<!-- Card body END -->

		<!-- Card footer START -->
		<div class="card-footer bg-transparent pt-0">
			<!-- Pagination START -->
			<div class="d-sm-flex justify-content-sm-between align-items-sm-center">
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
		<!-- Card footer END -->
	</div>
	<!-- Card END -->
</div>
@endsection

@section('script')

	<script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
@endsection

