@extends('admin.master')
@section('header')
@endsection

@section('content')

<div class="page-content-wrapper border">

	<!-- Title -->
	<div class="row mb-3">
		<div class="col-12 d-sm-flex justify-content-between align-items-center">
			<h1 class="h3 mb-2 mb-sm-0">Course Purchases Transactions</h1>
			
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
					<form method='post' action='searchCourse' class="rounded position-relative">@csrf
						<div class="search-container">
							<input required id="search-input" class="form-control bg-body" name='search'
								placeholder='Search for course or student' type="search"
								placeholder="Search" aria-label="Search">
							<ul id="suggestions"></ul>
						</div>
						<button class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y"
							type="submit"><a class='btn btn-sm btn-success'><i class="fas fa-search fs-6 "></i>Search</a></button>
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
							<th scope="col" class="border-0 rounded-start">Name</th>
						
							<th scope="col" class="border-0">Purchased Date</th>
							<th scope="col" class="border-0">Price</th>
							<th scope="col" class="border-0 rounded-end">Action</th>
						</tr>
					</thead>

					<!-- Table body START -->
					<tbody>

						<!-- Table row -->
						@foreach($transactions as $tranx)
						<tr>
							<!-- Table data -->
							<td>
								<div class="d-flex align-items-center position-relative">
									
									<!-- Title -->
									<h6 class="mb-0 ms-2">
										<a href="#" class="stretched-link">{{ $tranx->course->title }} - {{ $tranx->username }}</a>
									</h6>
								</div>
							</td>


							<!-- Table data -->
						

							<!-- Table data -->
							<td>{{ Date('j F Y',strtotime($tranx->created_at)) }}</td>

							<!-- Table data -->
							<td> <span class="btn btn-sm btn-success-soft me-1 mb-1 mb-md-0">N{{
									$tranx->price }}</span> </td>

							
							<td>
								<a href='tel:{{ $tranx->phone }}' class='btn btn-sm btn-primary  me-1 mb-1 mb-md-0'>Call</a>
                               
								<a href='mailto:{{ $tranx->user->email }}' class="edit_course btn btn-sm btn-info me-1 mb-1 mb-md-0"
									>Message</a>
								
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
				
				<nav class="d-flex justify-content-center mb-0" aria-label="navigation">
					{{ $transactions->links('pagination::bootstrap-4') }}

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
                suggestionItem.textContent = item.title  +" - " + item.course_code;
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

	<script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
@endsection

