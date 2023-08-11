@extends('layouts.app')
@section('content')
<link href="{{ asset('/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />

<div id="kt_app_content_container" class="app-container container-fluid">
    <div class="card">
        <div class="card-header border-0 pt-6">
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Employee">
                </div>
                <!--end::Search-->
            </div>
            <!--begin::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <a href="{{ url('database/employee/all_employee/create') }}" class="btn btn-light btn-active-primary">
                    <span class="svg-icon svg-icon-3">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor"></rect>
                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"></rect>
                        </svg>
                    </span>
                    Add new employee</a>
            </div>
            <!--end::Card toolbar-->
        </div>

        <div class="card-body py-4">
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table">
                <thead>
                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                        <th class="min-w-100px">Employee ID</th>
                        <th class="min-w-250px">Name</th>
                        <th class="min-w-50px">Gender</th>
                        <th class="min-w-50px">Age</th>
                        <th class="min-w-150px">Mobile Number</th>
                        <th class="min-w-100px">Country</th>
                        <th class="min-w-100px">Company</th>
                        <th class="min-w-150px">Work Locatation</th>
                        <th class="min-w-100px">Division</th>
                        <th class="min-w-100px">Department</th>
                        <th class="min-w-100px">Hire Date</th>
                        <th class="min-w-150px">Year of Services</th>
                        <th class="min-w-150px">Job Title</th>
                        <th class="min-w-150px">Direct Superior</th>
                        <th class="min-w-150px">Status</th>
                        <th class="text-end min-w-50px"></th>
                    </tr>
                <tbody class="text-gray-600 fw-semibold">
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="{{ asset('/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script>
    "use strict";
    const KTDatatablesServerSide = function() {
        let table;
        let dt;

        const initDatatable = function() {
            dt = $("#kt_table").DataTable({
                processing: true,
                serverSide: true,
                order: [
                    [1, 'desc']
                ],
                ajax: '{{ url('/database/employee/all_employee/get') }}',
                columns: [
                    {
                        data: 'code_employee',
                        render: function(data, type, row) {
                            return ` 
                                <a href="{{ url('database/employee/all_employee/') }}/${row.id_employee}" class="order-2 order-md-1">
                                    <span class="text-dark fw-bold text-hover-primary fs-6">${data}</span>
                                </a>
                            `;
                        }
                    },
                    {
                        data: 'name',
                        render: function(data, type, row) {
                            return `
                            <div class="d-flex align-items-center">
                            <div class="me-5 position-relative">
                                <div class="symbol symbol-35px symbol-circle">
                                    <img src=\"{{ asset('assets/media/avatars/') }}/${row.photo}\" class="w-100" />
                                </div>
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <a href="{{ url('database/employee/all_employee/') }}/${row.id_employee}" class="mb-1 text-gray-800 text-hover-primary">${row.name}</a>
                                <div class="fw-semibold fs-6 text-gray-400">${row.email}</div>
                            </div>
                        </div>
                            `;
                        }
                    },
                    {
                        data: 'gender',
                        render: function(data, type, row) {
                            let gender = `<i class="bi bi-gender-male text-info"></i><span class="fw-semibold fs-7 text-info"> Male</span>`;
                            if(data == 'Male'){
                                gender = `<i class="bi bi-gender-female text-danger"></i><span class="fw-semibold fs-7 text-danger"> Female</span>`;
                            }
                            return gender;
                        }
                    },
                    {
                        data: 'age',
                        render: function(data, type, row) {
                            return data;
                        }
                    },
                    {
                        data: 'employee_mobile_number',
                        render: function(data, type, row) {
                            return `
                                <div class="badge badge-light">${data}</div>
                            `;
                        }
                    },
                    {
                        data: 'country',
                        render: function(data, type, row) {
                            return `
                                <span class="text-muted fw-bold">${data}</span>
                            `;
                        }
                    },
                    {
                        data: 'company',
                        render: function(data, type, row) {
                            return `
                                <span class="text-muted fw-bold">${data}</span>
                            `;
                        }
                    },
                    {
                        data: 'work_location',
                        render: function(data, type, row) {
                            return `
                                <span class="text-muted fw-bold">${data}</span>
                            `;
                        }
                    },
                    {
                        data: 'division',
                        render: function(data, type, row) {
                            return `
                                <span class="text-muted fw-bold">${data}</span>
                            `;
                        }
                    },
                    {
                        data: 'department',
                        render: function(data, type, row) {
                            return `
                                <span class="text-muted fw-bold">${data}</span>
                            `;
                        }
                    },
                    {
                        data: 'hire_date',
                        render: function(data, type, row) {
                            return `
                                <span class="text-muted fw-bold">${data}</span>
                            `;
                        }
                    },
                    {
                        data: 'years_of_service',
                        render: function(data, type, row) {
                            return `
                                <span class="text-muted fw-bold">${data}</span>
                            `;
                        }
                    },
                    {
                        data: 'job_title',
                        render: function(data, type, row) {
                            return `
                                <span class="text-muted fw-bold">${data}</span>
                            `;
                        }
                    },
                    {
                        data: 'direct_superior',
                        render: function(data, type, row) {
                            return `
                                <span class="text-muted fw-bold">${data}</span>
                            `;
                        }
                    },
                    {
                        data: 'employee_status',
                        render: function(data, type, row) {
                            return `
                                <span class="text-muted fw-bold">${data}</span>
                            `;
                        }
                    },
                    {
                        data: function(row, type, set) {
                            return `
                            <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_2" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                <span class="svg-icon svg-icon-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"></path>
                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </a>
                            `;
                        }
                    },
                ],
                columnDefs: [
                    {
                        targets: [15],
                        orderable: false,
                        searchable: false,
                    },
                ],
            });

            table = dt.$;

            dt.on('draw', function() {
                KTMenu.createInstances();
            });
        }

        const handleSearchDatatable = function() {
            const filterSearch = document.querySelector('[data-kt-user-table-filter="search"]');
            filterSearch.addEventListener('keyup', function(e) {
                dt.search(e.target.value).draw();
            });
        }

        return {
            init: function() {
                initDatatable();
                handleSearchDatatable();
            }
        }
    }();

    KTUtil.onDOMContentLoaded(function() {
        KTDatatablesServerSide.init();
    });
</script>
@endsection