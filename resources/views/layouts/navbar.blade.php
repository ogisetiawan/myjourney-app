<!-- //@ NAVBAR -->
<div class="app-navbar flex-lg-grow-1" id="kt_app_header_navbar">
	<div class="app-navbar-item d-flex align-items-stretch flex-lg-grow-1">
		{{-- <div id="kt_header_search" class="header-search d-flex align-items-center w-lg-200px" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="true" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start">
			<div data-kt-search-element="toggle" class="search-toggle-mobile d-flex d-lg-none align-items-center">
				<div class="d-flex">
					<i class="ki-outline ki-magnifier fs-1"></i>
				</div>
			</div>
			<!-- //@ SEARCH -->
			<form data-kt-search-element="form" class="d-none d-lg-block w-100 position-relative mb-5 mb-lg-0" autocomplete="off">
				<input type="hidden" />
				<i class="ki-outline ki-magnifier search-icon fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-5"></i>
				<input type="text" class="search-input form-control form-control rounded-1 ps-13" name="search" value="" placeholder="Search..." data-kt-search-element="input" />
				<span class="search-spinner position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
					<span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
				</span>
				<span class="search-reset btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
					<i class="ki-outline ki-cross fs-2 fs-lg-1 me-0"></i>
				</span>
			</form>
			<!-- //@ SEARCH-CONTENT-->
			<div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown py-7 px-7 overflow-hidden w-300px w-md-350px">
				<div data-kt-search-element="wrapper">
					<div data-kt-search-element="results" class="d-none">
						<div class="scroll-y mh-200px mh-lg-350px">
							<h3 class="fs-5 text-muted m-0 pb-5" data-kt-search-element="category-title">Users</h3>
							<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
								<div class="symbol symbol-40px me-4">
									<img src="assets/media/avatars/300-6.jpg" alt="" />
								</div>
								<div class="d-flex flex-column justify-content-start fw-semibold">
									<span class="fs-6 fw-semibold">Karina Clark</span>
									<span class="fs-7 fw-semibold text-muted">Marketing Manager</span>
								</div>
							</a>
							<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
								<div class="symbol symbol-40px me-4">
									<img src="assets/media/avatars/300-2.jpg" alt="" />
								</div>
								<div class="d-flex flex-column justify-content-start fw-semibold">
									<span class="fs-6 fw-semibold">Olivia Bold</span>
									<span class="fs-7 fw-semibold text-muted">Software Engineer</span>
								</div>
							</a>
							<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
								<div class="symbol symbol-40px me-4">
									<img src="assets/media/avatars/300-9.jpg" alt="" />
								</div>
								<div class="d-flex flex-column justify-content-start fw-semibold">
									<span class="fs-6 fw-semibold">Ana Clark</span>
									<span class="fs-7 fw-semibold text-muted">UI/UX Designer</span>
								</div>
							</a>
							<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
								<div class="symbol symbol-40px me-4">
									<img src="assets/media/avatars/300-14.jpg" alt="" />
								</div>
								<div class="d-flex flex-column justify-content-start fw-semibold">
									<span class="fs-6 fw-semibold">Nick Pitola</span>
									<span class="fs-7 fw-semibold text-muted">Art Director</span>
								</div>
							</a>
							<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
								<div class="symbol symbol-40px me-4">
									<img src="assets/media/avatars/300-11.jpg" alt="" />
								</div>
								<div class="d-flex flex-column justify-content-start fw-semibold">
									<span class="fs-6 fw-semibold">Edward Kulnic</span>
									<span class="fs-7 fw-semibold text-muted">System Administrator</span>
								</div>
							</a>
							<h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Customers</h3>
							<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
								<div class="symbol symbol-40px me-4">
									<span class="symbol-label bg-light">
										<img class="w-20px h-20px" src="assets/media/svg/brand-logos/volicity-9.svg" alt="" />
									</span>
								</div>
								<div class="d-flex flex-column justify-content-start fw-semibold">
									<span class="fs-6 fw-semibold">Company Rbranding</span>
									<span class="fs-7 fw-semibold text-muted">UI Design</span>
								</div>
							</a>
							<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
								<div class="symbol symbol-40px me-4">
									<span class="symbol-label bg-light">
										<img class="w-20px h-20px" src="assets/media/svg/brand-logos/tvit.svg" alt="" />
									</span>
								</div>
								<div class="d-flex flex-column justify-content-start fw-semibold">
									<span class="fs-6 fw-semibold">Company Re-branding</span>
									<span class="fs-7 fw-semibold text-muted">Web Development</span>
								</div>
							</a>
							<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
								<div class="symbol symbol-40px me-4">
									<span class="symbol-label bg-light">
										<img class="w-20px h-20px" src="assets/media/svg/misc/infography.svg" alt="" />
									</span>
								</div>
								<div class="d-flex flex-column justify-content-start fw-semibold">
									<span class="fs-6 fw-semibold">Business Analytics App</span>
									<span class="fs-7 fw-semibold text-muted">Administration</span>
								</div>
							</a>
							<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
								<div class="symbol symbol-40px me-4">
									<span class="symbol-label bg-light">
										<img class="w-20px h-20px" src="assets/media/svg/brand-logos/leaf.svg" alt="" />
									</span>
								</div>
								<div class="d-flex flex-column justify-content-start fw-semibold">
									<span class="fs-6 fw-semibold">EcoLeaf App Launch</span>
									<span class="fs-7 fw-semibold text-muted">Marketing</span>
								</div>
							</a>
							<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
								<div class="symbol symbol-40px me-4">
									<span class="symbol-label bg-light">
										<img class="w-20px h-20px" src="assets/media/svg/brand-logos/tower.svg" alt="" />
									</span>
								</div>
								<div class="d-flex flex-column justify-content-start fw-semibold">
									<span class="fs-6 fw-semibold">Tower Group Website</span>
									<span class="fs-7 fw-semibold text-muted">Google Adwords</span>
								</div>
							</a>
							<h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Projects</h3>
							<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
								<div class="symbol symbol-40px me-4">
									<span class="symbol-label bg-light">
										<i class="ki-outline ki-notepad fs-2 text-primary"></i>
									</span>
								</div>
								<div class="d-flex flex-column">
									<span class="fs-6 fw-semibold">Si-Fi Project by AU Themes</span>
									<span class="fs-7 fw-semibold text-muted">#45670</span>
								</div>
							</a>
							<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
								<div class="symbol symbol-40px me-4">
									<span class="symbol-label bg-light">
										<i class="ki-outline ki-frame fs-2 text-primary"></i>
									</span>
								</div>
								<div class="d-flex flex-column">
									<span class="fs-6 fw-semibold">Shopix Mobile App Planning</span>
									<span class="fs-7 fw-semibold text-muted">#45690</span>
								</div>
							</a>
							<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
								<div class="symbol symbol-40px me-4">
									<span class="symbol-label bg-light">
										<i class="ki-outline ki-message-text-2 fs-2 text-primary"></i>
									</span>
								</div>
								<div class="d-flex flex-column">
									<span class="fs-6 fw-semibold">Finance Monitoring SAAS Discussion</span>
									<span class="fs-7 fw-semibold text-muted">#21090</span>
								</div>
							</a>
							<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
								<div class="symbol symbol-40px me-4">
									<span class="symbol-label bg-light">
										<i class="ki-outline ki-profile-circle fs-2 text-primary"></i>
									</span>
								</div>
								<div class="d-flex flex-column">
									<span class="fs-6 fw-semibold">Dashboard Analitics Launch</span>
									<span class="fs-7 fw-semibold text-muted">#34560</span>
								</div>
							</a>
						</div>
					</div>
					<div class="" data-kt-search-element="main">
						<div class="d-flex flex-stack fw-semibold mb-4">
							<span class="text-muted fs-6 me-2">Recently Searched:</span>
							<div class="d-flex" data-kt-search-element="toolbar">
								<div data-kt-search-element="preferences-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-2 data-bs-toggle=" title="Show search preferences">
									<i class="ki-outline ki-setting-2 fs-2"></i>
								</div>
								<div data-kt-search-element="advanced-options-form-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-n1" data-bs-toggle="tooltip" title="Show more search options">
									<i class="ki-outline ki-down fs-2"></i>
								</div>
							</div>
						</div>
						<div class="scroll-y mh-200px mh-lg-325px">
							<div class="d-flex align-items-center mb-5">
								<div class="symbol symbol-40px me-4">
									<span class="symbol-label bg-light">
										<i class="ki-outline ki-laptop fs-2 text-primary"></i>
									</span>
								</div>
								<div class="d-flex flex-column">
									<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp by Keenthemes</a>
									<span class="fs-7 text-muted fw-semibold">#45789</span>
								</div>
							</div>
							<div class="d-flex align-items-center mb-5">
								<div class="symbol symbol-40px me-4">
									<span class="symbol-label bg-light">
										<i class="ki-outline ki-chart-simple fs-2 text-primary"></i>
									</span>
								</div>
								<div class="d-flex flex-column">
									<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept API Project Meeting</a>
									<span class="fs-7 text-muted fw-semibold">#84050</span>
								</div>
							</div>
							<div class="d-flex align-items-center mb-5">
								<div class="symbol symbol-40px me-4">
									<span class="symbol-label bg-light">
										<i class="ki-outline ki-chart fs-2 text-primary"></i>
									</span>
								</div>
								<div class="d-flex flex-column">
									<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI Monitoring App Launch</a>
									<span class="fs-7 text-muted fw-semibold">#84250</span>
								</div>
							</div>
							<div class="d-flex align-items-center mb-5">
								<div class="symbol symbol-40px me-4">
									<span class="symbol-label bg-light">
										<i class="ki-outline ki-chart-line-down fs-2 text-primary"></i>
									</span>
								</div>
								<div class="d-flex flex-column">
									<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project Reference FAQ</a>
									<span class="fs-7 text-muted fw-semibold">#67945</span>
								</div>
							</div>
							<div class="d-flex align-items-center mb-5">
								<div class="symbol symbol-40px me-4">
									<span class="symbol-label bg-light">
										<i class="ki-outline ki-sms fs-2 text-primary"></i>
									</span>
								</div>
								<div class="d-flex flex-column">
									<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro App Development</a>
									<span class="fs-7 text-muted fw-semibold">#84250</span>
								</div>
							</div>
							<div class="d-flex align-items-center mb-5">
								<div class="symbol symbol-40px me-4">
									<span class="symbol-label bg-light">
										<i class="ki-outline ki-bank fs-2 text-primary"></i>
									</span>
								</div>
								<div class="d-flex flex-column">
									<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix Mobile App</a>
									<span class="fs-7 text-muted fw-semibold">#45690</span>
								</div>
							</div>
							<div class="d-flex align-items-center mb-5">
								<div class="symbol symbol-40px me-4">
									<span class="symbol-label bg-light">
										<i class="ki-outline ki-chart-line-down fs-2 text-primary"></i>
									</span>
								</div>
								<div class="d-flex flex-column">
									<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing UI Design" Launch</a>
									<span class="fs-7 text-muted fw-semibold">#24005</span>
								</div>
							</div>
						</div>
					</div>
					<div data-kt-search-element="empty" class="text-center d-none">
						<div class="pt-10 pb-10">
							<i class="ki-outline ki-search-list fs-4x opacity-50"></i>
						</div>
						<div class="pb-15 fw-semibold">
							<h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
							<div class="text-muted fs-7">Please try again with a different query </div>
						</div>
					</div>
				</div>
				<form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
					<h3 class="fw-semibold text-dark mb-7">Advanced Search</h3>
					<div class="mb-5">
						<input type="text" class="form-control form-control-sm form-control-solid" placeholder="Contains the word" name="query" />
					</div>
					<div class="mb-5">
						<div class="nav-group nav-group-fluid">
							<label>
								<input type="radio" class="btn-check" name="type" value="has" checked="checked" />
								<span class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
							</label>
							<label>
								<input type="radio" class="btn-check" name="type" value="users" />
								<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Users</span>
							</label>
							<label>
								<input type="radio" class="btn-check" name="type" value="orders" />
								<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Orders</span>
							</label>
							<label>
								<input type="radio" class="btn-check" name="type" value="projects" />
								<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Projects</span>
							</label>
						</div>
					</div>
					<div class="mb-5">
						<input type="text" name="assignedto" class="form-control form-control-sm form-control-solid" placeholder="Assigned to" value="" />
					</div>
					<div class="mb-5">
						<input type="text" name="collaborators" class="form-control form-control-sm form-control-solid" placeholder="Collaborators" value="" />
					</div>
					<div class="mb-5">
						<div class="nav-group nav-group-fluid">
							<label>
								<input type="radio" class="btn-check" name="attachment" value="has" checked="checked" />
								<span class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has attachment</span>
							</label>
							<label>
								<input type="radio" class="btn-check" name="attachment" value="any" />
								<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Any</span>
							</label>
						</div>
					</div>
					<div class="mb-5">
						<select name="timezone" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
							<option value="next">Within the next</option>
							<option value="last">Within the last</option>
							<option value="between">Between</option>
							<option value="on">On</option>
						</select>
					</div>
					<div class="row mb-8">
						<div class="col-6">
							<input type="number" name="date_number" class="form-control form-control-sm form-control-solid" placeholder="Lenght" value="" />
						</div>
						<div class="col-6">
							<select name="date_typer" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="Period" class="form-select form-select-sm form-select-solid">
								<option value="days">Days</option>
								<option value="weeks">Weeks</option>
								<option value="months">Months</option>
								<option value="years">Years</option>
							</select>
						</div>
					</div>
					<div class="d-flex justify-content-end">
						<button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="advanced-options-form-cancel">Cancel</button>
						<a href="../../demo38/dist/pages/search/horizontal.html" class="btn btn-sm fw-bold btn-primary" data-kt-search-element="advanced-options-form-search">Search</a>
					</div>
				</form>
				<form data-kt-search-element="preferences" class="pt-1 d-none">
					<h3 class="fw-semibold text-dark mb-7">Search Preferences</h3>
					<div class="pb-4 border-bottom">
						<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
							<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Projects</span>
							<input class="form-check-input" type="checkbox" value="1" checked="checked" />
						</label>
					</div>
					<div class="py-4 border-bottom">
						<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
							<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Targets</span>
							<input class="form-check-input" type="checkbox" value="1" checked="checked" />
						</label>
					</div>
					<div class="py-4 border-bottom">
						<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
							<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Affiliate Programs</span>
							<input class="form-check-input" type="checkbox" value="1" />
						</label>
					</div>
					<div class="py-4 border-bottom">
						<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
							<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Referrals</span>
							<input class="form-check-input" type="checkbox" value="1" checked="checked" />
						</label>
					</div>
					<div class="py-4 border-bottom">
						<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
							<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Users</span>
							<input class="form-check-input" type="checkbox" value="1" />
						</label>
					</div>
					<div class="d-flex justify-content-end pt-7">
						<button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="preferences-dismiss">Cancel</button>
						<button type="submit" class="btn btn-sm fw-bold btn-primary">Save Changes</button>
					</div>
				</form>
			</div>
		</div> --}}
	</div>
	<div class="app-navbar-item ms-1 ms-md-3">
		<div class="btn btn-icon btn-custom btn-color-gray-600 btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px position-relative" id="kt_drawer_chat_toggle">
			<i class="ki-outline ki-notification-on fs-1"></i>
			<span class="position-absolute top-0 start-100 translate-middle badge badge-circle badge-danger w-15px h-15px ms-n4 mt-3">5</span>
		</div>
	</div>
	<!-- //@ USER -->
	<div class="app-navbar-item ms-1 ms-md-3" id="kt_header_user_menu_toggle">
		<div class="cursor-pointer symbol symbol-circle symbol-35px symbol-md-45px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
			<img src="{{ asset('assets/media/avatars/300-2.jpg') }}" />
		</div>
		<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
			<div class="menu-item px-3">
				<div class="menu-content d-flex align-items-center px-3">
					<div class="symbol symbol-50px me-5">
						<img alt="Logo" src="{{ asset('assets/media/avatars/300-2.jpg') }}" />
					</div>
					<div class="d-flex flex-column">
						<div class="fw-bold d-flex align-items-center fs-5">Ogi Setiawan <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Admin</span>
						</div>
						<a href="#" class="fw-semibold text-muted text-hover-primary fs-7">ogi.setiawan@behnmeyer.co.id</a>
					</div>
				</div>
			</div>
			<div class="separator my-2"></div>
			<div class="menu-item px-5">
				<a href="javascript:void(0);" class="menu-link px-5">My Profile</a>
			</div>
			<div class="separator my-2"></div>
			<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
				<a href="#" class="menu-link px-5">
					<span class="menu-title position-relative">Mode <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
							<i class="ki-outline ki-night-day theme-light-show fs-2"></i>
							<i class="ki-outline ki-moon theme-dark-show fs-2"></i>
						</span>
					</span>
				</a>
				<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
					<div class="menu-item px-3 my-0">
						<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
							<span class="menu-icon" data-kt-element="icon">
								<i class="ki-outline ki-night-day fs-2"></i>
							</span>
							<span class="menu-title">Light</span>
						</a>
					</div>
					<div class="menu-item px-3 my-0">
						<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
							<span class="menu-icon" data-kt-element="icon">
								<i class="ki-outline ki-moon fs-2"></i>
							</span>
							<span class="menu-title">Dark</span>
						</a>
					</div>
				</div>
			</div>
			<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
				<a href="#" class="menu-link px-5">
					<span class="menu-title position-relative">Language <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English <img class="w-15px h-15px rounded-1 ms-2" src="{{ asset('assets/media/flags/united-states.svg') }}" alt="" />
						</span>
					</span>
				</a>
				<div class="menu-sub menu-sub-dropdown w-175px py-4">
					<div class="menu-item px-3">
						<a href="../../demo38/dist/account/settings.html" class="menu-link d-flex px-5 active">
							<span class="symbol symbol-20px me-4">
								<img class="rounded-1" src="{{ asset('assets/media/flags/united-states.svg') }}" alt="" />
							</span>English </a>
					</div>
				</div>
			</div>
			<div class="menu-item px-5">
				<form method="POST" action="{{ route('logout') }}">
					@csrf
					<a href="route('logout')" onclick="event.preventDefault();this.closest('form').submit();" class="menu-link px-5">Sign Out</a>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="app-navbar-separator separator d-none d-lg-flex"></div>