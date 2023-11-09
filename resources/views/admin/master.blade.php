<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eduport.webestica.com/admin-course-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Mar 2022 17:48:32 GMT -->

<head>
	<title>AboveMarts Academy</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Learning Management System">

	<!-- Favicon -->
	{{-- <link rel="shortcut icon" href="assets/images/favicon.ico"> --}}
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/all.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/choices/css/choices.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/overlay-scrollbar/css/OverlayScrollbars.min.css')}}">

	<!-- Theme CSS -->
	<link id="style-switch" rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">
    @yield('header')

</head>

<body>


	<!-- **************** MAIN CONTENT START **************** -->
	<main>

		<!-- Sidebar START -->
		<nav class="navbar sidebar navbar-expand-xl navbar-dark bg-dark">

			<!-- Navbar brand for xl START -->
			<div class="d-flex align-items-center">
				<a class="navbar-brand" href="index-2.html">
					{{-- <img class="navbar-brand-item" src="assets/images/logo-white.jpg" style='' alt=""> --}}
				</a>
			</div>
			<!-- Navbar brand for xl END -->

			<div class="offcanvas offcanvas-start flex-row custom-scrollbar h-100" data-bs-backdrop="true" tabindex="-1"
				id="offcanvasSidebar">
				<div class="offcanvas-body sidebar-content d-flex flex-column bg-dark">

					<!-- Sidebar menu START -->
					<ul class="navbar-nav flex-column" id="navbar-sidebar">

						<!-- Menu item 1 -->
						<li class="nav-item"><a href="/dashboard" class="nav-link"><i
									class="bi bi-house fa-fw me-2"></i>Dashboard</a></li>

						<!-- Title -->
						<li class="nav-item"> <a class="nav-link" href="/profile"><i
							class="fas fa-user fa-fw me-2"></i>Profile</a></li>
						

						<!-- menu item 2 -->
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="collapse" href="#collapsepage" role="button"
								aria-expanded="false" aria-controls="collapsepage">
								<i class="bi bi-basket fa-fw me-2"></i>Courses
							</a>
							<!-- Submenu -->
							<ul class="nav collapse flex-column" id="collapsepage"
								data-bs-parent="#navbar-sidebar">
								<li class="nav-item"> <a class="nav-link active" href="/dashboard">All
										Courses</a></li>
								<li class="nav-item"> <a class="nav-link" href="#">Course
										Category</a></li>
								{{-- <li class="nav-item"> <a class="nav-link" href="/announcement">Announcements</a></li> --}}
							</ul>
						</li>

						<!-- Menu item 3 -->
						

						<!-- Menu item 4 -->
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="collapse" href="#collapseinstructors" role="button"
								aria-expanded="false" aria-controls="collapseinstructors">
								<i class="fas fa-user-graduate fa-fw me-2"></i>Students
							</a>
							<!-- Submenu -->
							<ul class="nav collapse flex-column" id="collapseinstructors"
								data-bs-parent="#navbar-sidebar">
								
                                        @foreach($courses as $course)
                                        <li class="nav-item"> <a class="nav-link"
                                                href="/students/{{ $course->id }}">{{ $course->title }}</a></li>
                                        @endforeach
							
							</ul>
						</li>

						<!-- Menu item 5 -->
						<li class="nav-item"> <a class="nav-link" href="/announcement"><i
									class="far fa-comment-dots fa-fw me-2"></i>Announcements</a></li>
						<li class="nav-item"> <a class="nav-link" href="/assignment"><i
									class="far fa-clipboard fa-fw me-2"></i>Assessments</a></li>

						<!-- Menu item 6 -->
						<li class="nav-item"> <a class="nav-link" href="/admin_ebooks"><i
									class="far fa-chart-bar fa-fw me-2"></i>Ebooks</a></li>

						<!-- Menu item 7 -->
						<li class="nav-item"> <a class="nav-link" href="#"><i
									class="fas fa-user-cog fa-fw me-2"></i>Certificates</a></li>
						

						<!-- Menu item 8 -->
					

						<!-- Title -->
					</ul>
					<!-- Sidebar menu end -->

					<!-- Sidebar footer START -->
					<div class="px-3 mt-auto pt-3">
						<div class="d-flex align-items-center justify-content-between text-primary-hover">
							<a class="h5 mb-0 text-body" href="admin-setting.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Settings">
								<i class="bi bi-gear-fill"></i>
							</a>
							<a class="h5 mb-0 text-body" href="index-2.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Home">
								<i class="bi bi-globe"></i>
							</a>
							<a class="h5 mb-0 text-body" href="sign-in.html" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Sign out">
								<i class="bi bi-power"></i>
							</a>
						</div>
					</div>
					<!-- Sidebar footer END -->

				</div>
			</div>
		</nav>
		<!-- Sidebar END -->

		<!-- Page content START -->
		<div class="page-content">

			<!-- Top bar START -->
			<nav class="top-bar navbar-light border-bottom py-0 py-xl-3">
				<div class="container-fluid p-0">
					<div class="d-flex align-items-center w-100">

						<!-- Logo START -->
						<div class="d-flex align-items-center d-xl-none">
							<a class="navbar-brand" href="index-2.html">
								<img class="light-mode-item navbar-brand-item h-30px"
									src="assets/images/logo-mobile.svg" alt="">
								<img class="dark-mode-item navbar-brand-item h-30px"
									src="assets/images/logo-mobile-light.svg" alt="">
							</a>
						</div>
						<!-- Logo END -->

						<!-- Toggler for sidebar START -->
						<div class="navbar-expand-xl sidebar-offcanvas-menu">
							<button class="navbar-toggler me-auto" type="button" data-bs-toggle="offcanvas"
								data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar"
								aria-expanded="false" aria-label="Toggle navigation" data-bs-auto-close="outside">
								<i class="bi bi-text-right fa-fw h2 lh-0 mb-0 rtl-flip" data-bs-target="#offcanvasMenu">
								</i>
							</button>
						</div>
						<!-- Toggler for sidebar END -->

						<!-- Top bar left -->
						<div class="navbar-expand-lg ms-auto ms-xl-0">

							<!-- Toggler for menubar START -->
							<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
								data-bs-target="#navbarTopContent" aria-controls="navbarTopContent"
								aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-animation">
									<span></span>
									<span></span>
									<span></span>
								</span>
							</button>
							<!-- Toggler for menubar END -->

							<!-- Topbar menu START -->
							<div class="collapse navbar-collapse w-100" id="navbarTopContent">
								<!-- Top search START -->
								<div class="nav my-3 my-xl-0 flex-nowrap align-items-center">
									<div class="nav-item w-100">
										<form class="position-relative">
											<input required
												class="form-control pe-5 bg-secondary bg-opacity-10 border-0"
												type="search" placeholder="Search" aria-label="Search">
											<button
												class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y"
												type="submit"><i class="fas fa-search fs-6 text-primary"></i></button>
										</form>
									</div>
								</div>
								<!-- Top search END -->
							</div>
							<!-- Topbar menu END -->
						</div>
						<!-- Top bar left END -->

						<!-- Top bar right START -->
						<div class="ms-xl-auto">
							<ul class="navbar-nav flex-row align-items-center">

								<!-- Notification dropdown START -->
								<li class="nav-item ms-2 ms-md-3 dropdown">
									<!-- Notification button -->
									<a class="btn btn-light btn-round mb-0" href="#" role="button"
										data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
										<i class="bi bi-bell fa-fw"></i>
									</a>
									<!-- Notification dote -->
									<span class="notif-badge animation-blink"></span>

									<!-- Notification dropdown menu START -->
									<div
										class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0">
										<div class="card bg-transparent">
											<div
												class="card-header bg-transparent border-bottom py-4 d-flex justify-content-between align-items-center">
												<h6 class="m-0">Notifications <span
														class="badge bg-danger bg-opacity-10 text-danger ms-2">1
														new</span></h6>
												<a class="small" href="#">Clear all</a>
											</div>
											<div class="card-body p-0">
												<ul class="list-group list-unstyled list-group-flush">
													<!-- Notif item -->
													<li>
														<a href="#"
															class="list-group-item-action border-0 border-bottom d-flex p-3">
															<div class="me-3">
																<div class="avatar avatar-md">
																	<img class="avatar-img rounded-circle"
																		src="assets/images/avatar/08.jpg" alt="avatar">
																</div>
															</div>
															<div>
																<p class="text-body small m-0">Congratulate <b>{{ $user->name }}</b>, you are now an instructor in <b>Abovemart LMS</b></p>
																
															</div>
														</a>
													</li>

												

												</ul>
											</div>
											<!-- Button -->
											<div
												class="card-footer bg-transparent border-0 py-3 text-center position-relative">
												<a href="#" class="stretched-link">See all incoming activity</a>
											</div>
										</div>
									</div>
									<!-- Notification dropdown menu END -->
								</li>
								<!-- Notification dropdown END -->

								<!-- Profile dropdown START -->
								<li class="nav-item ms-2 ms-md-3 dropdown">
									<!-- Avatar -->
									<a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button"
										data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown"
										aria-expanded="false">
										<img class="avatar-img rounded-circle" src="assets/images/avatar/avatar1.png"
											alt="avatar">
									</a>

									<!-- Profile dropdown START -->
									<ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3"
										aria-labelledby="profileDropdown">
										<!-- Profile info -->
										<li class="px-3">
											<div class="d-flex align-items-center">
												<!-- Avatar -->
												<div class="avatar me-3">
													<img class="avatar-img rounded-circle shadow"
														src="assets/images/avatar/avatar1.png" alt="avatar">
												</div>
												<div>
													<a class="h6 mt-2 mt-sm-0" href="#">{{ $user->name }}</a>
													<p class="small m-0">{{ $user->email }}</p>
												</div>
											</div>
											<hr>
										</li>

										<!-- Links -->
										<li><a class="dropdown-item" href="#"><i
													class="bi bi-person fa-fw me-2"></i>Edit Profile</a></li>
										<li><a class="dropdown-item bg-danger-soft-hover" href="/logout"><i
													class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
										<li>
											<hr class="dropdown-divider">
										</li>

										<!-- Dark mode switch START -->
										<li>
											<div class="modeswitch-wrap" id="darkModeSwitch">
												<div class="modeswitch-item">
													<div class="modeswitch-icon"></div>
												</div>
												<span>Dark mode</span>
											</div>
										</li>
										<!-- Dark mode switch END -->
									</ul>
									<!-- Profile dropdown END -->
								</li>
								<!-- Profile dropdown END -->
							</ul>
						</div>
						<!-- Top bar right END -->
					</div>
				</div>
			</nav>
			<!-- Top bar END -->

			<!-- Page main content START -->
			@yield('content')

			<div class="modal fade" id="addQuestion" tabindex="-1" aria-labelledby="addQuestionLabel"
				aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header bg-dark">
							<h5 class="modal-title text-white" id="addQuestionLabel">Add Course</h5>
							<button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal"
								aria-label="Close"><i class="bi bi-x-lg"></i></button>
						</div>
						<div class="modal-body">
							<form id='create_course' class="row text-start g-3" enctype='multipart/form-data'>
								<!-- Question -->
								<div class="col-12">
									<label class="form-label">Title</label>
									<input id='title' required class="form-control" type="text"
										placeholder="Input course title">
								</div>

								<div class="col-12">
									<label class="form-label">Category</label>
									<select id='category' class='form-control'>
										<option value='Marketing'>Marketing</option>
										<option value='Digital Network'>Digital Network</option>
										<option value='Programming'>Programming</option>
										<option value='Graphic Design'>Graphic Design</option>
										<option value='Cyber Security'>Cyber Security</option>
										<option value='Personal Development'>Personal Development</option>
									</select>
								</div>

								<div class="col-12 mt-3">
									<label class="form-label">Description</label>
									<textarea id='description' required class="form-control" rows="4"
										placeholder="Input course description" spellcheck="false"></textarea>
								</div>


								<div class="col-6">
									<label class="form-label">Duration(Hrs)</label>
									<input id='duration' required class="form-control" type="text"
										placeholder="Input course title">
								</div>

								<div class="col-6">
									<label class="form-label">Price($)</label>
									<input id='price' required class="form-control" type="text"
										placeholder="Input course title">
								</div>


								<div class="col-12">
									<label class="form-label">Course Display Image</label>

									<input id='image' required class="form-control" type="file" accept="image/*"
										placeholder="Input course title">
								</div>






						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger-soft my-0"
								data-bs-dismiss="modal">Close</button>
							<button id='c_submita' type="submit" class="btn btn-success my-0">Create</button>
						</div>
						</form>
					</div>
				</div>
			</div>

			<div class="modal fade" id="editCourse" tabindex="-1" aria-labelledby="addQuestionLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header bg-dark">
							<h5 class="modal-title text-white" id="addQuestionLabel">Edit Course</h5>
							<button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal"
								aria-label="Close"><i class="bi bi-x-lg"></i></button>
						</div>
						<div class="modal-body">
							<form id='editCourseForm' class="row text-start g-3" enctype='multipart/form-data'>
								<!-- Question -->
								<div class="col-12">
									<label class="form-label">Title</label>
									<input type='hidden' id='course_id' />
									<input id='edittitle' required class="form-control" type="text"
										placeholder="Input course title">
								</div>

								<div class="col-12">
									<label class="form-label">Category</label>
									<select id='editcategory' class='form-control'>
										<option value='Marketing'>Marketing</option>
										<option value='Digital Network'>Digital Network</option>
										<option value='Programming'>Programming</option>
										<option value='Graphic Design'>Graphic Design</option>
										<option value='Content Writing'>Content Writing</option>
									</select>
								</div>

								<div class="col-12 mt-3">
									<label class="form-label">Description</label>
									<textarea id='editdescription' required class="form-control" rows="4"
										placeholder="Input course description" spellcheck="false"></textarea>
								</div>


								<div class="col-6">
									<label class="form-label">Duration(Hrs)</label>
									<input id='editduration' required class="form-control" type="text"
										placeholder="Input course title">
								</div>

								<div class="col-6">
									<label class="form-label">Price($)</label>
									<input id='editprice' required class="form-control" type="text"
										placeholder="Input course title">
								</div>


								<div class="col-12">
									<label class="form-label">Course Display Image <span
											class='text-danger'>(Optional)</span></label>
									<div class="rounded mx-auto d-block">
										<img id='editcourse_img' class="rounded " style='height:100px;width:500px'
											alt="">
									</div>
									<input id='editimage' class="form-control" type="file" accept="image/*"
										placeholder="Input course title">
								</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger-soft my-0"
								data-bs-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-success my-0">Edit</button>
						</div>
						</form>
					</div>
				</div>
			</div>
			<!-- Page main content END -->

		</div>
		<!-- Page content END -->

	</main>
	<!-- **************** MAIN CONTENT END **************** -->

	<!-- Back to top -->
	<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

	<!-- Bootstrap JS -->
	{{-- <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script> --}}

	<!-- Vendors -->
	<script src="{{ asset('assets/vendor/choices/js/choices.min.js')}}"></script>
	<script src="{{ asset('assets/vendor/overlay-scrollbar/js/OverlayScrollbars.min.js')}}"></script>

	<!-- Template Functions -->
	<script src="{{ asset('assets/js/functions.js')}}"></script>
	<script src="{{ asset('assets/jquery.js')}}"></script>
	<script src="{{ asset('assets/sweetalert.js')}}"></script>

</body>
<script>
	$(document).ready(function() {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

					@if (session('message'))
            			swal('Success!',"{{ session('message') }}",'success');
        			@endif
					@if (session('error'))
            			swal('Error!',"{{ session('error') }}",'error');
        			@endif
					$(".edit_course").click(function() {
						
						id = $(this).data('id');
						
						$.get("{{ route('loadcourse') }}?id="+id, function(data) {
							console.log(data)
							$("#course_id").val(data.id)
							$("#edittitle").val(data.title)
							$("#editdescription").val(data.description)
							$("#editcategory").val(data.category)
							$("#editprice").val(data.price)
							$("#editduration").val(data.duration)
						
							$("#editcourse_img").attr('src','/courseimage/'+data.image+'')
						
						})
					})
    $("#create_course").on('submit', async function(e){
                e.preventDefault();
                swal('Creating Course, please wait...');
                $("#c_submit").attr('disabled',true)
							fd = new FormData();
							image = $("#image")[0].files;
							fd.append('title',  $("#title").val());
							fd.append('description', $("#description").val());
							fd.append('category', $("#category").val());
							fd.append('duration', $("#duration").val());
							fd.append('price', $("#price").val());
							if(image[0] != undefined) {
           						 fd.append('image', image[0]);
           					 }
						
                         

                            console.log(fd, 'this is the fd');

                            $.ajax({
                                type: 'POST',
                                url: "{{ route('createcourse') }}",
                                data: fd,
                                cache: false,
                                contentType: false,
                                processData: false,
                                success: (data) => {
                                    swal.close()
                                    swal("Success", 'Course Created successfully', 'success');
                                    console.log(data)
									window.location.reload();


                                },
                                error: function(data) {
                                    console.log(data);
                                    swal("Oops!", 'Course not created', 'error');
                                }
                            });
                            });

							
    $("#editCourseForm").on('submit', async function(e){
                e.preventDefault();
                swal('Editing Course, please wait...');
               
							fd = new FormData();
							image = $("#editimage")[0].files;
							fd.append('id',  $("#course_id").val());
							fd.append('title',  $("#edittitle").val());
							fd.append('description', $("#editdescription").val());
							fd.append('category', $("#editcategory").val());
							fd.append('duration', $("#editduration").val());
							fd.append('price', $("#editprice").val());
							if(image[0] != undefined) {
           						 fd.append('image', image[0]);
           					 }
						
                         

                            console.log(fd, 'this is the fd');

                            $.ajax({
                                type: 'POST',
                                url: "{{ route('editcourse') }}",
                                data: fd,
                                cache: false,
                                contentType: false,
                                processData: false,
                                success: (data) => {
                                    swal.close()
                                    swal("Success", 'Course Created successfully', 'success');
                                    console.log(data)
									window.location.reload();


                                },
                                error: function(data) {
                                    console.log(data);
                                    swal("Oops!", 'Course not created', 'error');
                                }
                            });
                            });

							$('body').on('click', '#delete_course', function() {
      // var id = $("#delete_id").val();
      id = $(this).data('id');
      console.log(id)
      var token = $("meta[name='csrf-token']").attr("content");
      var el = this;
      // alert(user_id);
      resetAccount(el, id);
    });


    async function resetAccount(el, id) {
      const willUpdate = await swal({
        title: "Confirm Course Delete",
        text: `Are you sure you want to delete this course?`,
        icon: "warning",
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes!",
        showCancelButton: true,
        buttons: ["Cancel", "Yes, Delete"]
      });
      if (willUpdate) {
        //performReset()
        performDelete(el, id);
      } else {
        swal("Course will not be deleted  :)");
      }
    }


    function performDelete(el, id) {

      try {
        $.get('{{ route("deletecourse") }}?id=' + id,
          function(data, status) {
            console.log(status);
            console.table(data);
            if (status === "success") {
              let alert = swal('success', "Course successfully deleted!.", 'success');
              $(el).closest("tr").remove();
              // alert.then(() => {
              // });
            }
          }
        );
      } catch (e) {
        let alert = swal(e.message);
      }
    }

})
</script>
@yield('script')

<!-- Mirrored from eduport.webestica.com/admin-course-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Mar 2022 17:48:32 GMT -->

</html>