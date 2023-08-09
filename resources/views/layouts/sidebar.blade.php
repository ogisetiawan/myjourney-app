<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
	<!-- //@ LOGO SIDEBAR -->
	<div class="app-sidebar-header d-flex flex-stack d-none d-lg-flex pt-8 pb-2" id="kt_app_sidebar_header">
		<a href="javascript:void(0);" class="app-sidebar-logo">
			<img alt="Logo" src="{{ asset('assets/_custom/media/logos/bm-logo-svg-colour.svg') }}" class="h-35px d-none d-sm-inline app-sidebar-logo-default theme-light-show" />
			<img alt="Logo" src="{{ asset('assets/_custom/media/logos/bm-logo-svg-transparent.svg') }}" class="h-20px theme-dark-show" />
		</a>
		<div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-sm btn-icon bg-light btn-color-gray-700 btn-active-color-primary d-none d-lg-flex rotate" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">
			<i class="ki-outline ki-text-align-right rotate-180 fs-1"></i>
		</div>
	</div>
	<!-- //@ MENU SIDEBAR -->
	<div class="app-sidebar-navs flex-column-fluid py-1" id="kt_app_sidebar_navs">
		<div id="kt_app_sidebar_navs_wrappers" class="app-sidebar-wrapper hover-scroll-y my-2" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_header" data-kt-scroll-wrappers="#kt_app_sidebar_navs" data-kt-scroll-offset="5px">
			<!-- //@ AVATAR -->
			<div class="app-sidebar-menu-secondary menu menu-rounded menu-column">
				<div class="menu-item mb-2">
					<div class="app-sidebar-separator separator"></div>
					<div class="d-flex flex-center flex-column py-0">
						<div class="symbol symbol-70px symbol-circle mb-2">
							<img src="{{ asset('assets/media/avatars/300-2.jpg') }}">
						</div>
						<span class="fs-4 fw-bold">Muhammad Ibnu</span>
						<span class="badge badge-light-success">Administrator</span>
					</div>
				</div>
			</div>

			<div id="#menu" data-kt-menu="true" data-kt-menu-expand="false" class="app-sidebar-menu-primary menu menu-column menu-rounded menu-sub-indention menu-state-bullet-primary mt-0">
				<div class="menu-item mb-2">
					<div class="app-sidebar-separator separator"></div>
				</div>
				<div class="menu-item">
					<a class="menu-link {{ Request::is('dashboard') ? 'active' : '' }} " href="{{ url('dashboard') }}">
						<span class="menu-icon">
							<i class="ki-outline ki-chart-pie-simple fs-2 text-danger"></i>
						</span>
						<span class="menu-title">Dashboard</span>
					</a>
				</div>
				<!-- //@ MASTER DATA -->
				<div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Request::is('database/employee/all_employee') ? 'hover show' : '' }}">
					<span class="menu-link">
						<span class="menu-icon">
							<i class="ki-outline ki-cube-2 fs-2 text-gray"></i>
						</span>
						<span class="menu-title">Database</span>
						<span class="menu-arrow"></span>
					</span>
					<div class="menu-sub menu-sub-accordion">
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Request::is('database/employee/all_employee') ? 'hover show' : '' }}">
							<span class="menu-link">
								<span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">Employee</span>
								<span class="menu-arrow"></span>
							</span>
							<div class="menu-sub menu-sub-accordion">
								<div class="menu-item">
									<a class="menu-link {{ Request::is('database/employee/all_employee') ? 'active' : '' }}" href="{{ url('database/employee/all_employee') }}">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">All Employee</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link" href="javascript:void(0);">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Education Grade</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link" href="javascript:void(0);">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Race</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link" href="javascript:void(0);">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Religion</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link" href="javascript:void(0);">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Blood Type</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link" href="javascript:void(0);">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Relationship Type</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link" href="javascript:void(0);">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Job Occupation</span>
									</a>
								</div>
							</div>
						</div>
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
							<span class="menu-link">
								<span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">Job & Position</span>
								<span class="menu-arrow"></span>
							</span>
							<div class="menu-sub menu-sub-accordion">
								<div class="menu-item">
									<a class="menu-link" href="javascript:void(0);">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Division Group</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link" href="javascript:void(0);">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">BU Group</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link" href="javascript:void(0);">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Division</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link" href="javascript:void(0);">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Department</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link" href="javascript:void(0);">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Job Grade</span>
									</a>
									<div class="menu-item">
										<a class="menu-link" href="javascript:void(0);">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Job Family</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="javascript:void(0);">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Sub Job Family</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="javascript:void(0);">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Job Title</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="javascript:void(0);">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Employee Status</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="javascript:void(0);">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Cost Center</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="javascript:void(0);">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Movement Type</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Location</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link" href="javascript:void(0);">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Country</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="javascript:void(0);">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Company</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="javascript:void(0);">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Region</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="javascript:void(0);">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">State</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="javascript:void(0);">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Branch</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="javascript:void(0);">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Work Location</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- //@ PERFORMANCE -->
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-icon">
								<i class="ki-outline ki-chart-line-up-2 fs-2 text-warning"></i>
							</span>
							<span class="menu-title ">Performance</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion">
							<div class="menu-item">
								<a class="menu-link" href="javascript:void(0);">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Personal Score Card</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="javascript:void(0);">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Individual Development Plan</span>
								</a>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Performance Appraisal</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link" href="javascript:void(0);">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Form Factors</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="javascript:void(0);">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Form Appraisal</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- //@ CONFIGURATION -->
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-icon">
								<i class="ki-outline ki-gear fs-2 text-info"></i>
							</span>
							<span class="menu-title">Configuration</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion">
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Performance</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link" href="javascript:void(0);">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Entry Periode</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="javascript:void(0);">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">PA Approval</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- //@ REPORT -->
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-icon">
								<i class="ki-outline ki-tablet-text-down fs-2 text-success"></i>
							</span>
							<span class="menu-title ">Report</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion">
							<div class="menu-item">
								<a class="menu-link" href="javascript:void(0);">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Performance Appraisal</span>
								</a>
							</div>
						</div>
					</div>
					<!-- //@ USER -->
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-icon">
								<i class="ki-outline ki-profile-user fs-2 text-orange"></i>
							</span>
							<span class="menu-title ">Users & Roles</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion">
							<div class="menu-item">
								<a class="menu-link" href="javascript:void(0);">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Users</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="javascript:void(0);">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Roles</span>
								</a>
							</div>
						</div>
					</div>
					<!-- //@ HELP -->
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-icon">
								<i class="ki-outline ki-message-question fs-2 text-pink"></i>
							</span>
							<span class="menu-title ">Help & Support</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion">
							<div class="menu-item">
								<a class="menu-link" href="javascript:void(0);">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">General Help & FAQ</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="javascript:void(0);">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">User Guides & Tutorial</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="javascript:void(0);">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Contact HR Support</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>