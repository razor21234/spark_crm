<?php $page = 'contact-list'; ?>
@extends('layout.mainlayout')
@section('content')
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col-md-4">
								<h3 class="page-title">Contact</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('admin-dashboard')}}">Dashboard</a></li>
									<li class="breadcrumb-item active">Contact</li>
								</ul>
							</div>
							<div class="col-md-8 float-end ms-auto">
								<div class="d-flex title-head">
									<div class="view-icons">
										<a href="#" class="grid-view btn btn-link"><i class="las la-redo-alt"></i></a>
										<a href="#" class="list-view btn btn-link" id="collapse-header"><i class="las la-expand-arrows-alt"></i></a>
										<a href="javascript:void(0);" class="list-view btn btn-link" id="filter_search"><i class="las la-filter"></i></a>
									</div>
									<div class="form-sort">
										<a href="javascript:void(0);" class="list-view btn btn-link" data-bs-toggle="modal" data-bs-target="#export"><i class="las la-file-export"></i>Export</a>
									</div>
									<a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_contact"><i class="la la-plus-circle"></i> Add Contact</a>
								</div>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<!-- Search Filter -->
					<div class="filter-filelds" id="filter_inputs">
						<div class="row filter-row">
							<div class="col-xl-2">  
								 <div class="input-block mb-3 form-focus">
									 <input type="text" class="form-control floating">
									 <label class="focus-label">Contact Name</label>
								 </div>
							</div>
							<div class="col-xl-2">  
								<div class="input-block mb-3 form-focus">
									<input type="text" class="form-control floating">
									<label class="focus-label">Email</label>
								</div>
						   </div>
						   <div class="col-xl-2">  
								<div class="input-block mb-3 form-focus">
									<input type="text" class="form-control floating">
									<label class="focus-label">Phone Number</label>
								</div>
							</div>
							<div class="col-xl-2">  
								 <div class="input-block mb-3 form-focus focused">
									<input type="text" class="form-control  date-range bookingrange">
									 <label class="focus-label">From - To Date</label>
								 </div>
							 </div>
							<div class="col-xl-2"> 
								<div class="input-block mb-3 form-focus select-focus">
									<select class="select floating"> 
										<option>--Select--</option>
										<option>Germany</option>
										<option>USA</option>
										<option>Canada</option>
										<option>India</option>
										<option>China</option>
									</select>
									<label class="focus-label">Location</label>
								</div>
							</div>
							<div class="col-xl-2">  
								 <a href="#" class="btn btn-success w-100"> Search </a>  
							</div>     
						 </div>
					</div>
					 <hr>
					 <!-- /Search Filter -->
					<div class="filter-section">
						<ul>
							<li>
								<div class="view-icons">
									<a href="{{ url('contact-list')}}" class="list-view btn btn-link active"><i class="las la-list"></i></a>
									<a href="{{ url('contact-grid')}}" class="grid-view btn btn-link"><i class="las la-th"></i></a>
								</div>
							</li>
							<li>
								<div class="form-sort">
									<i class="las la-sort-alpha-up-alt"></i>
									<select class="select">
										<option>Sort By Alphabet</option>
										<option>Ascending</option>
										<option>Descending</option>
										<option>Recently Viewed</option>
										<option>Recently Added</option>
									</select>
								</div>
							</li>
							<li>
								<div class="form-sorts dropdown">
									<a href="javascript:void(0);" class="dropdown-toggle" id="table-filter"><i class="las la-filter me-2"></i>Filter</a>
									<div class="filter-dropdown-menu">
										<div class="filter-set-view">
											<div class="filter-set-head">
												<h4>Filter</h4>
											</div>
											<div class="accordion" id="accordionExample">
												<div class="filter-set-content">
													<div class="filter-set-content-head">
														<a href="#" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Rating<i class="las la-angle-right"></i></a>
													</div>
													<div class="filter-set-contents accordion-collapse collapse show" id="collapseOne" data-bs-parent="#accordionExample">
														<ul>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox" checked>
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="rating">
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star filled"></i>
																	<span>5.0</span>
																</div>
															</li>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="rating">
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star"></i>
																	<span>4.0</span>
																</div>
															</li>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="rating">
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<span>3.0</span>
																</div>
															</li>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="rating">
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<span>2.0</span>
																</div>
															</li>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="rating">
																	<i class="fa fa-star filled"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<span>1.0</span>
																</div>
															</li>
														</ul>
													</div>
												</div>
												<div class="filter-set-content">
													<div class="filter-set-content-head">
														<a href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Owner<i class="las la-angle-right"></i></a>
													</div>
													<div class="filter-set-contents accordion-collapse collapse" id="collapseTwo" data-bs-parent="#accordionExample">
														<ul>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox" checked>
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="collapse-inside-text">
																	<h5>Hendry</h5>
																</div>
															</li>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="collapse-inside-text">
																	<h5>Guillory</h5>
																</div>
															</li>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="collapse-inside-text">
																	<h5>Jami</h5>
																</div>
															</li>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="collapse-inside-text">
																	<h5>Theresa</h5>
																</div>
															</li>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="collapse-inside-text">
																	<h5>Espinosa</h5>
																</div>
															</li>
														</ul>
													</div>
												</div>
												<div class="filter-set-content">
													<div class="filter-set-content-head">
														<a href="#" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Tags<i class="las la-angle-right"></i></a>
													</div>
													<div class="filter-set-contents accordion-collapse collapse" id="collapseThree" data-bs-parent="#accordionExample">
														<ul>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox" checked>
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="collapse-inside-text">
																	<h5>Promotion</h5>
																</div>
															</li>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="collapse-inside-text">
																	<h5>Rated</h5>
																</div>
															</li>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="collapse-inside-text">
																	<h5>Rejected</h5>
																</div>
															</li>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="collapse-inside-text">
																	<h5>Collab</h5>
																</div>
															</li>
															<li>
																<div class="filter-checks">
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</div>
																<div class="collapse-inside-text">
																	<h5>Calls</h5>
																</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
											
											<div class="filter-reset-btns">
												<a href="#" class="btn btn-light">Reset</a>
												<a href="#" class="btn btn-primary">Filter</a>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="search-set">
									<div class="search-input">
										<a href="#" class="btn btn-searchset"><i class="las la-search"></i></a>
										<div class="dataTables_filter">
											<label> <input type="search" class="form-control form-control-sm" placeholder="Search"></label>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
	
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table datatable contact-table">
									<thead>
										<tr>
											<th class="no-sort"></th>
											<th>Name</th>
											<th>Phone</th>
											<th>Email</th>
											<th>Tags</th>
											<th>Location</th>
											<th>Rating</th>
											<th>Owner</th>
											<th>Contact </th>
											<th>Status</th>
											<th class="text-end">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="set-star star-select">
													<i class="fa fa-star filled"></i>
												</div>
											</td>
											<td>
												<h2 class="table-avatar d-flex">
													<a href="{{ url('contact-details')}}" class="avatar"><img src="{{ URL::asset('assets/img/avatar/avatar-19.jpg')}}" alt="User Image"></a>
													<a href="{{ url('contact-details')}}" class="profile-split d-flex flex-column">Darlee Robertson <span>Facility Manager</span></a>
												</h2>
											</td>
											<td>+1 875455453</td>
											<td>robertson@example.com</td>
											<td><span class="badge badge-soft-info">Promotion</span></td>
											<td>Germany</td>
											<td>
												<div class="set-star">
													<i class="fa fa-star filled me-2"></i>4.2
												</div>
											</td>
											<td>Hendry</td>
											<td>
												<ul class="social-links d-flex align-items-center">
													<li>
														<a href="#"><i class="la la-envelope"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-phone-volume"></i></a>
													</li>
													<li>
														<a href="#"><i class="lab la-facebook-messenger"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-skype"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-facebook "></i></a>
													</li>
												</ul>
											</td>
											<td>
												<div class="dropdown action-label">
													<a href="#" class="btn btn-white btn-sm badge-outline-success "> Active </a>
												</div>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_contact"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
														<a class="dropdown-item" href="{{ url('contact-details')}}"><i class="fa-regular fa-eye"></i> Preview</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#add_notes"><i class="la la-file-prescription"></i> Notes</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="set-star star-select">
													<i class="fa fa-star"></i>
												</div>
											</td>
											<td>
												<h2 class="table-avatar d-flex">
													<a href="{{ url('contact-details')}}" class="avatar"><img src="{{ URL::asset('assets/img/avatar/avatar-20.jpg')}}" alt="User Image"></a>
													<a href="{{ url('contact-details')}}" class="profile-split d-flex flex-column">Sharon Roy <span>Installer</span></a>
												</h2>
											</td>
											<td>+1 989757485</td>
											<td>sharon@example.com</td>
											<td><span class="badge badge-soft-warning">Rated</span></td>
											<td>USA</td>
											<td>
												<div class="set-star">
													<i class="fa fa-star filled me-2"></i>5.0
												</div>
											</td>
											<td>Guillory</td>
											<td>
												<ul class="social-links d-flex align-items-center">
													<li>
														<a href="#"><i class="la la-envelope"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-phone-volume"></i></a>
													</li>
													<li>
														<a href="#"><i class="lab la-facebook-messenger"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-skype"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-facebook "></i></a>
													</li>
												</ul>
											</td>
											<td>
												<div class="dropdown action-label">
													<a href="#" class="btn btn-white btn-sm badge-outline-success "> Active </a>
												</div>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_contact"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
														<a class="dropdown-item" href="{{ url('contact-details')}}"><i class="fa-regular fa-eye"></i> Preview</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#add_notes"><i class="la la-file-prescription"></i> Notes</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="set-star star-select">
													<i class="fa fa-star"></i>
												</div>
											</td>
											<td>
												<h2 class="table-avatar d-flex">
													<a href="{{ url('contact-details')}}" class="avatar"><img src="{{ URL::asset('assets/img/avatar/avatar-21.jpg')}}" alt="User Image"></a>
													<a href="{{ url('contact-details')}}" class="profile-split d-flex flex-column">Vaughan  <span>Senior  Manager</span></a>
												</h2>
											</td>
											<td>+1 546555455</td>
											<td>vaughan12@example.com</td>
											<td><span class="badge badge-soft-info">Promotion</span></td>
											<td>Canada</td>
											<td>
												<div class="set-star">
													<i class="fa fa-star filled me-2"></i>3.5
												</div>
											</td>
											<td>Jami</td>
											<td>
												<ul class="social-links d-flex align-items-center">
													<li>
														<a href="#"><i class="la la-envelope"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-phone-volume"></i></a>
													</li>
													<li>
														<a href="#"><i class="lab la-facebook-messenger"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-skype"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-facebook "></i></a>
													</li>
												</ul>
											</td>
											<td>
												<div class="dropdown action-label">
													<a href="#" class="btn btn-white btn-sm badge-outline-danger "> Inactive </a>
												</div>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_contact"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
														<a class="dropdown-item" href="{{ url('contact-details')}}"><i class="fa-regular fa-eye"></i> Preview</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#add_notes"><i class="la la-file-prescription"></i> Notes</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="set-star star-select">
													<i class="fa fa-star"></i>
												</div>
											</td>
											<td>
												<h2 class="table-avatar d-flex">
													<a href="{{ url('contact-details')}}" class="avatar"><img src="{{ URL::asset('assets/img/avatar/avatar-1.jpg')}}" alt="User Image"></a>
													<a href="{{ url('contact-details')}}" class="profile-split d-flex flex-column">Jessica <span>Test Engineer</span></a>
												</h2>
											</td>
											<td>+1 454478787</td>
											<td>jessica13@example.com</td>
											<td><span class="badge badge-soft-warning">Rated</span></td>
											<td>India</td>
											<td>
												<div class="set-star">
													<i class="fa fa-star filled me-2"></i>4.5
												</div>
											</td>
											<td>Theresa</td>
											<td>
												<ul class="social-links d-flex align-items-center">
													<li>
														<a href="#"><i class="la la-envelope"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-phone-volume"></i></a>
													</li>
													<li>
														<a href="#"><i class="lab la-facebook-messenger"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-skype"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-facebook "></i></a>
													</li>
												</ul>
											</td>
											<td>
												<div class="dropdown action-label">
													<a href="#" class="btn btn-white btn-sm badge-outline-success ">Active </a>
												</div>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_contact"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
														<a class="dropdown-item" href="{{ url('contact-details')}}"><i class="fa-regular fa-eye"></i> Preview</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#add_notes"><i class="la la-file-prescription"></i> Notes</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="set-star star-select">
													<i class="fa fa-star"></i>
												</div>
											</td>
											<td>
												<h2 class="table-avatar d-flex">
													<a href="{{ url('contact-details')}}" class="avatar"><img src="{{ URL::asset('assets/img/avatar/avatar-16.jpg')}}" alt="User Image"></a>
													<a href="{{ url('contact-details')}}" class="profile-split d-flex flex-column">Carol Thomas<span>UI /UX Designer</span></a>
												</h2>
											</td>
											<td>+1 124547845</td>
											<td>carolTho3@example.com</td>
											<td><span class="badge badge-soft-danger">Rejected</span></td>
											<td>China</td>
											<td>
												<div class="set-star">
													<i class="fa fa-star filled me-2"></i>4.7
												</div>
											</td>
											<td>Espinosa</td>
											<td>
												<ul class="social-links d-flex align-items-center">
													<li>
														<a href="#"><i class="la la-envelope"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-phone-volume"></i></a>
													</li>
													<li>
														<a href="#"><i class="lab la-facebook-messenger"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-skype"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-facebook "></i></a>
													</li>
												</ul>
											</td>
											<td>
												<div class="dropdown action-label">
													<a href="#" class="btn btn-white btn-sm badge-outline-success "> Active </a>
												</div>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_contact"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
														<a class="dropdown-item" href="{{ url('contact-details')}}"><i class="fa-regular fa-eye"></i> Preview</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#add_notes"><i class="la la-file-prescription"></i> Notes</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="set-star star-select">
													<i class="fa fa-star filled"></i>
												</div>
											</td>
											<td>
												<h2 class="table-avatar d-flex">
													<a href="{{ url('contact-details')}}" class="avatar"><img src="{{ URL::asset('assets/img/avatar/avatar-22.jpg')}}" alt="User Image"></a>
													<a href="{{ url('contact-details')}}" class="profile-split d-flex flex-column">Dawn Mercha <span>Technician</span></a>
												</h2>
											</td>
											<td>+1 478845447</td>
											<td>dawnmercha@example.com</td>
											<td><span class="badge badge-soft-warning">Rated</span></td>
											<td>Japan</td>
											<td>
												<div class="set-star">
													<i class="fa fa-star filled me-2"></i>5.0
												</div>
											</td>
											<td>Martin</td>
											<td>
												<ul class="social-links d-flex align-items-center">
													<li>
														<a href="#"><i class="la la-envelope"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-phone-volume"></i></a>
													</li>
													<li>
														<a href="#"><i class="lab la-facebook-messenger"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-skype"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-facebook "></i></a>
													</li>
												</ul>
											</td>
											<td>
												<div class="dropdown action-label">
													<a href="#" class="btn btn-white btn-sm badge-outline-success "> Active </a>
												</div>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_contact"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
														<a class="dropdown-item" href="{{ url('contact-details')}}"><i class="fa-regular fa-eye"></i> Preview</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#add_notes"><i class="la la-file-prescription"></i> Notes</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="set-star star-select">
													<i class="fa fa-star"></i>
												</div>
											</td>
											<td>
												<h2 class="table-avatar d-flex">
													<a href="{{ url('contact-details')}}" class="avatar"><img src="{{ URL::asset('assets/img/avatar/avatar-23.jpg')}}" alt="User Image"></a>
													<a href="{{ url('contact-details')}}" class="profile-split d-flex flex-column">Rachel Hampton <span>Software Developer</span></a>
												</h2>
											</td>
											<td>+1 215544845</td>
											<td>rachel@example.com</td>
											<td><span class="badge badge-soft-danger">Rejected</span></td>
											<td>Indonesia</td>
											<td>
												<div class="set-star">
													<i class="fa fa-star filled me-2"></i>3.1
												</div>
											</td>
											<td>Newell</td>
											<td>
												<ul class="social-links d-flex align-items-center">
													<li>
														<a href="#"><i class="la la-envelope"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-phone-volume"></i></a>
													</li>
													<li>
														<a href="#"><i class="lab la-facebook-messenger"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-skype"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-facebook "></i></a>
													</li>
												</ul>
											</td>
											<td>
												<div class="dropdown action-label">
													<a href="#" class="btn btn-white btn-sm badge-outline-success "> Active </a>
												</div>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_contact"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
														<a class="dropdown-item" href="{{ url('contact-details')}}"><i class="fa-regular fa-eye"></i> Preview</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#add_notes"><i class="la la-file-prescription"></i> Notes</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="set-star star-select">
													<i class="fa fa-star"></i>
												</div>
											</td>
											<td>
												<h2 class="table-avatar d-flex">
													<a href="{{ url('contact-details')}}" class="avatar"><img src="{{ URL::asset('assets/img/avatar/avatar-24.jpg')}}" alt="User Image"></a>
													<a href="{{ url('contact-details')}}" class="profile-split d-flex flex-column">Jonelle Curtiss<span>Supervisor</span></a>
												</h2>
											</td>
											<td>+1 121145471</td>
											<td>jonelle@example.com</td>
											<td><span class="badge badge-soft-danger">Rejected</span></td>
											<td>Cuba</td>
											<td>
												<div class="set-star">
													<i class="fa fa-star filled me-2"></i>5.0
												</div>
											</td>
											<td>Janet</td>
											<td>
												<ul class="social-links d-flex align-items-center">
													<li>
														<a href="#"><i class="la la-envelope"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-phone-volume"></i></a>
													</li>
													<li>
														<a href="#"><i class="lab la-facebook-messenger"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-skype"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-facebook "></i></a>
													</li>
												</ul>
											</td>
											<td>
												<div class="dropdown action-label">
													<a href="#" class="btn btn-white btn-sm badge-outline-success "> Active </a>
												</div>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_contact"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
														<a class="dropdown-item" href="{{ url('contact-details')}}"><i class="fa-regular fa-eye"></i> Preview</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#add_notes"><i class="la la-file-prescription"></i> Notes</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="set-star star-select">
													<i class="fa fa-star"></i>
												</div>
											</td>
											<td>
												<h2 class="table-avatar d-flex">
													<a href="{{ url('contact-details')}}" class="avatar"><img src="{{ URL::asset('assets/img/avatar/avatar-25.jpg')}}" alt="User Image"></a>
													<a href="{{ url('contact-details')}}" class="profile-split d-flex flex-column">Jonathan<span>Team Lead Dev</span></a>
												</h2>
											</td>
											<td>+1 321454789</td>
											<td>jonathan@example.com</td>
											<td><span class="badge badge-soft-danger me-2">Collab</span><span class="badge badge-soft-purple">Calls</span></td>
											<td>Isreal</td>
											<td>
												<div class="set-star">
													<i class="fa fa-star filled me-2"></i>2.7
												</div>
											</td>
											<td>Craig</td>
											<td>
												<ul class="social-links d-flex align-items-center">
													<li>
														<a href="#"><i class="la la-envelope"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-phone-volume"></i></a>
													</li>
													<li>
														<a href="#"><i class="lab la-facebook-messenger"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-skype"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-facebook "></i></a>
													</li>
												</ul>
											</td>
											<td>
												<div class="dropdown action-label">
													<a href="#" class="btn btn-white btn-sm badge-outline-success "> Active </a>
												</div>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_contact"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
														<a class="dropdown-item" href="{{ url('contact-details')}}"><i class="fa-regular fa-eye"></i> Preview</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#add_notes"><i class="la la-file-prescription"></i> Notes</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="set-star star-select">
													<i class="fa fa-star"></i>
												</div>
											</td>
											<td>
												<h2 class="table-avatar d-flex">
													<a href="{{ url('contact-details')}}" class="avatar"><img src="{{ URL::asset('assets/img/avatar/avatar-26.jpg')}}" alt="User Image"></a>
													<a href="{{ url('contact-details')}}" class="profile-split d-flex flex-column">Brook <span>Team Lead Dev</span></a>
												</h2>
											</td>
											<td>+1 278907145</td>
											<td>brook@example.com</td>
											<td><span class="badge badge-soft-purple">Calls</span></td>
											<td>Colombia</td>
											<td>
												<div class="set-star">
													<i class="fa fa-star filled me-2"></i>3.0
												</div>
											</td>
											<td>Daniel</td>
											<td>
												<ul class="social-links d-flex align-items-center">
													<li>
														<a href="#"><i class="la la-envelope"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-phone-volume"></i></a>
													</li>
													<li>
														<a href="#"><i class="lab la-facebook-messenger"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-skype"></i></a>
													</li>
													<li>
														<a href="#"><i class="la la-facebook "></i></a>
													</li>
												</ul>
											</td>
											<td>
												<div class="dropdown action-label">
													<a href="#" class="btn btn-white btn-sm badge-outline-success"> Active </a>
												</div>
											</td>
											<td class="text-end">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_contact"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
														<a class="dropdown-item" href="{{ url('contact-details')}}"><i class="fa-regular fa-eye"></i> Preview</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#add_notes"><i class="la la-file-prescription"></i> Notes</a>
													</div>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>



		@component('components.model-popup')
		@endcomponent
	@endsection