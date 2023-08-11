@extends('layouts.app')
@section('content')

<div id="kt_app_content_container" class="app-container container-fluid">
    <div class="card mb-5">
        <div class="card-body pt-9 pb-0">
            <div class="d-flex flex-wrap flex-sm-nowrap">
                <!-- //@ photo -->
                <div class="me-7 mb-4">
                    <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                        <img src="{{ asset('assets/media/avatars/') }}/{{ $employee->photo }}" />
                        @php $status = ($employee->status == 'Y') ? 'bg-success' : 'bg-danger' @endphp
                        <div class="position-absolute translate-middle bottom-0 start-100 mb-6 {{$status}} rounded-circle border border-4 border-body h-20px w-20px"></div>
                    </div>
                </div>
                <div class="flex-grow-1">
                    <!-- //@ info -->
                    <div class="d-flex justify-content-between align-items-start flex-wrap">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center">
                                <span class="badge badge-light-success fs-7">Employee ID : {{ $employee->code_employee }}</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <span class="text-gray-800 text-hover-primary fs-2 fw-bold">{{ $employee->name }}</span>
                            </div>
                            <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2 mt-2">
                                <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                    <i class="ki-outline ki-briefcase fs-4 me-1"></i>{{ $employee->employeeJobDetail->job_title }}
                                </a>
                                <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                    <i class="ki-outline ki-phone fs-4 me-1"></i>{{ $employee->employeeContact->employee_mobile_number }}
                                </a>
                                <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                    <i class="ki-outline ki-sms fs-4"></i>&nbsp;{{ $employee->user->email }}
                                </a>
                                <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                    <i class="ki-outline ki-gift fs-4"></i>&nbsp;{{ $employee->birth_date }}
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- //@ superior -->
                    <div class="d-flex align-items-center flex-wrap d-grid gap-2 mb-5">
                        <div class="d-flex align-items-center me-5">
                            <div class="symbol symbol-35px symbol-circle me-3">
                                <img src="{{ asset('assets/media/avatars/300-2.jpg') }}" alt="" />
                            </div>
                            <div class="m-0">
                                <span class="fw-semibold text-gray-400 d-block fs-7">Direct Superior</span>
                                <a href="#" class="fw-bold text-gray-800 text-hover-primary fs-6">Robert Fox</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="symbol symbol-35px symbol-circle me-3">
                                <img src="{{ asset('assets/media/avatars/300-5.jpg') }}" alt="" />
                            </div>
                            <div class="m-0">
                                <span class="fw-semibold text-gray-400 d-block fs-7">Indirect Superior</span>
                                <a href="#" class="fw-bold text-gray-800 text-hover-primary fs-6">Anrold</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card my-5">
        <div class="card-body py-0">
            <ul class="nav nav-pills nav-pills-custom my-5">
                <li class="nav-item mb-3 me-3 me-lg-6">
                    <a class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column overflow-hidden w-100px h-85px pt-5 pb-2 active" data-bs-toggle="pill" id="kt_charts_widget_10_tab_1" href="#personal">
                        <div class="nav-icon mb-3">
                            <i class="ki-outline ki-user fs-1 p-0"></i>
                        </div>
                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Personal</span>
                        <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                    </a>
                </li>
                <li class="nav-item mb-3 me-3 me-lg-6">
                    <a class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column overflow-hidden w-100px h-85px pt-5 pb-2" data-bs-toggle="pill" id="kt_charts_widget_10_tab_2" href="#employement">
                        <div class="nav-icon mb-3">
                            <i class="ki-outline ki-profile-user fs-1 p-0"></i>
                        </div>
                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Employement</span>
                        <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                    </a>
                </li>
                <li class="nav-item mb-3 me-3 me-lg-6">
                    <a class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column overflow-hidden w-100px h-85px pt-5 pb-2" data-bs-toggle="pill" id="kt_charts_widget_10_tab_3" href="#education">
                        <div class="nav-icon mb-3">
                            <i class="ki-outline ki-teacher fs-1 p-0"></i>
                        </div>
                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Education</span>
                        <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                    </a>
                </li>
                <li class="nav-item mb-3 me-3 me-lg-6">
                    <a class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column overflow-hidden w-100px h-85px pt-5 pb-2" data-bs-toggle="pill" id="kt_charts_widget_10_tab_3" href="#experience">
                        <div class="nav-icon mb-3">
                            <i class="ki-outline ki-briefcase fs-1 p-0"></i>
                        </div>
                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Experience</span>
                        <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                    </a>
                </li>
                <li class="nav-item mb-3 me-3 me-lg-6">
                    <a class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column overflow-hidden w-100px h-85px pt-5 pb-2" data-bs-toggle="pill" id="kt_charts_widget_10_tab_4" href="#family">
                        <div class="nav-icon mb-3">
                            <i class="ki-outline ki-people fs-1 p-0"></i>
                        </div>
                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Family</span>
                        <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                    </a>
                </li>
                <li class="nav-item mb-3 me-3 me-lg-6">
                    <a class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column overflow-hidden w-100px h-85px pt-5 pb-2" data-bs-toggle="pill" id="kt_charts_widget_10_tab_3" href="#statutory">
                        <div class="nav-icon mb-3">
                            <i class="ki-outline ki-two-credit-cart fs-1 p-0"></i>
                        </div>
                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Statutory</span>
                        <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="tab-content ">
        <!-- //@ personal-tab -->
        <div class="tab-pane fade active show" id="personal">
            <div class="row">
                <!-- //# personal-information -->
                <div class="col-lg-12">
                    <div class="card mb-5 mb-xl-10">
                        <div class="card-header cursor-pointer">
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">Personal Information</h3>
                            </div>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit_personal_information" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm align-self-center">
                                <span class="svg-icon svg-icon-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"></path>
                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                        <div class="card-body p-9">
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-semibold text-muted">Full Name</label>
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">{{ $employee->salutation }} {{ $employee->name }}</span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-semibold text-muted">Nick Name</label>
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-semibold text-gray-800 fs-6">{{ $employee->nick_name }}</span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-semibold text-muted">Gender</label>
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-semibold text-gray-800 fs-6">{{ $employee->gender }}</span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-semibold text-muted">Birth Date</label>
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-semibold text-gray-800 fs-6">{{ $employee->birth_date }}</span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-semibold text-muted">Age</label>
                                <div class="col-lg-8 d-flex align-items-center">
                                    <span class="fw-bold fs-6 text-gray-800 me-2">{{ $employee->age }}</span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-semibold text-muted">Country of Birth</label>
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">{{ $employee->country_of_birth }}</span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-semibold text-muted">Nationality<span class="ms-1" data-bs-toggle="tooltip" title="Country of origination">
                                        <i class="ki-outline ki-information fs-7"></i>
                                    </span>
                                </label>
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">{{ $employee->nationality }}</span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-semibold text-muted">Race</label>
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">{{ $employee->race }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //# contact -->
                <div class="col-lg-6">
                    <div class="card mb-5 mb-xl-10">
                        <div class="card-header cursor-pointer">
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">Contact & Address</h3>
                            </div>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit_contact_address" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm align-self-center">
                                <span class="svg-icon svg-icon-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"></path>
                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                        <div class="card-body p-9">
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-semibold text-muted">Mobile Number 1</label>
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">{{ $employee->employeeContact->employee_mobile_number }}</span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-semibold text-muted">Mobile Number 2</label>
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-semibold text-gray-800 fs-6">{{ $employee->employeeContact->employee_mobile_number_2 }}</span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-semibold text-muted">Email Office</label>
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-semibold text-gray-800 fs-6">{{ $employee->employeeContact->email_address_office }}</span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-semibold text-muted">Email Personal</label>
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-semibold text-gray-800 fs-6">{{ $employee->employeeContact->email_address_personal }}</span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-semibold text-muted">Office Phone Number</label>
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-semibold text-gray-800 fs-6">{{ $employee->employeeContact->office_phone_number }}</span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-semibold text-muted">Permanent Address (Identity)</label>
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-semibold text-gray-800 fs-6">{{ $employee->employeeContact->permanent_address_identity_card }}</span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-semibold text-muted">Address</label>
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-semibold text-gray-800 fs-6">{{ $employee->employeeContact->address_residence }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //# Other Information -->
                <div class="col-lg-6">
                    <div class="card mb-5 mb-xl-10">
                        <div class="card-header cursor-pointer">
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">Other Information</h3>
                            </div>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_2" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm align-self-center">
                                <span class="svg-icon svg-icon-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"></path>
                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                        <div class="card-body p-9">
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-semibold text-muted">Martial Status</label>
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">{{ $employee->employeeOtherInformation->marital_status }}</span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-semibold text-muted">Merriage Date</label>
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-semibold text-gray-800 fs-6">{{ $employee->employeeOtherInformation->marriage_date }}</span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-semibold text-muted">Religion</label>
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-semibold text-gray-800 fs-6">{{ $employee->employeeOtherInformation->religion }}</span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-semibold text-muted">Blood Type</label>
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-semibold text-gray-800 fs-6">{{ $employee->employeeOtherInformation->blood_type }}</span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-semibold text-muted">Last Date Of Health Check</label>
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-semibold text-gray-800 fs-6">{{ $employee->employeeOtherInformation->last_health_check_date }}</span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-semibold text-muted">Current Health Status</label>
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-semibold text-gray-800 fs-6">{{ $employee->employeeOtherInformation->current_health_status }}</span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-semibold text-muted">Height</label>
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-semibold text-gray-800 fs-6">{{ $employee->employeeOtherInformation->height }}</span>
                                </div>
                            </div>
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-semibold text-muted">Weight</label>
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-semibold text-gray-800 fs-6">{{ $employee->employeeOtherInformation->weight }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

@endsection