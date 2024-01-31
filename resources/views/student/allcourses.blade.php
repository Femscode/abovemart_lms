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

		<div class="col-md-12">

			<form method='post' action='searchCourseStudent' class="rounded position-relative">@csrf
				<div class="search-container">
					<input required id="search-input" class="form-control bg-body" name='search'
						placeholder='Search for course, course code, and description in 10,000+ courses' type="search"
						placeholder="Search" aria-label="Search">
					<ul id="suggestions"></ul>
				</div>
				<button class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y"
					type="submit"><a class='btn btn-sm btn-success'><i class="fas fa-search fs-6 "></i>Search</a></button>
			</form>
		</div>

		<!-- Card body START -->
		<div class="card-body p-3 p-md-4">
			<div class="row g-4">
				<!-- Card item START -->
				@foreach($courses as $course)
				<div class="col-sm-6 col-lg-4">
					<div class="card shadow h-100">
						<!-- Image -->
						<img src="https://learn.abovemarts.com/public/courseimage/{{ $course->image}}"
							class="h-120px card-img-top" alt="course image">
						{{-- <img src="/courseimage/{{ $course->image}}" class="h-120px card-img-top"
							alt="course image"> --}}
						<div class="card-body pb-0">
							<!-- Badge and favorite -->
							<div class="d-flex justify-content-between mb-2">
								<a href="#" class="badge bg-success bg-opacity-10 text-success">{{ $course->cat->name ??
									"" }}</a>
								<a href="#" class="text-danger"><i class="fas fa-heart"></i></a>
							</div>
							<!-- Title -->
							<h5 class="card-title fw-normal"><a href="/preview_course/{{ $course->uid }}">{{
									$course->title }}</a></h5>
							<p class="mb-2 text-truncate-2">{!! Str::limit($course->description,50) !!}</p>
							<!-- Rating star -->
							{{-- <ul class="list-inline mb-0">
								<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0 small"><i
										class="fas fa-star-half-alt text-warning"></i></li>
								<li class="list-inline-item ms-2 h6 fw-light mb-0">4.5/5.0</li>
							</ul> --}}
						</div>
						<!-- Card footer -->
						<div class="card-footer pt-0 pb-3">
							<hr>
							<div class="d-flex justify-content-between">
								<span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>{{
									$course->duration }}Hrs</span>
								@if($course->price == 0)
								<label class="btn btn-sm btn-light btn-primary-soft-check border-0 m-0"
									for="option1">Free</label>@else
								<label class="btn btn-sm btn-light btn-primary-soft-check border-0 m-0" for="option1">
									${{ number_format($course->price) }} <s>${{ number_format($course->slashed_price)
										}}</s>
								</label>
								@endif
							</div><br>
							<a href='/preview_course/{{ $course->uid }}' class='btn btn-secondary btn-sm'>Preview
								Course</a>




							@if(in_array($user->package, $course->packages ?? []))
							<a href='/enroll/{{ $course->uid }}' class='btn btn-success btn-sm'>Enroll Now</a>

							@else


							<a href='https://abovemarts.com/userpackages' class='btn btn-success btn-sm'>Upgrade For
								Scholarship</a>
							
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
<script>
	const searchInput = document.getElementById('search-input');
const suggestionsList = document.getElementById('suggestions');
const apiUrl = '/searchCourseTitle';
// const apiUrl = 'https://your-api-endpoint.com/search?q=';

searchInput.addEventListener('input', function () {
    const query = searchInput.value.trim();
	
    
    if (query === '') {
        suggestionsList.style.display = 'none';
        return;
    }

    // Fetch data from the API
	fetch(apiUrl + '?search=' + query)
        .then(response => response.json())
        .then(data => {
            // Clear previous suggestions
            suggestionsList.innerHTML = '';

            // Display new suggestions
            data.forEach(item => {
                const suggestionItem = document.createElement('li');
                suggestionItem.textContent = item.title;
                suggestionItem.addEventListener('click', () => {
                    searchInput.value = item.title;
                    suggestionsList.style.display = 'none';
                });
                suggestionsList.appendChild(suggestionItem);
            });

            suggestionsList.style.display = 'block';
        })
        .catch(error => {
            console.error('Error fetching data:', error);
        });
});

// Close the suggestions when clicking outside the input and list
document.addEventListener('click', function (event) {
    if (event.target !== searchInput && event.target !== suggestionsList) {
        suggestionsList.style.display = 'none';
    }
});

</script>
@endsection