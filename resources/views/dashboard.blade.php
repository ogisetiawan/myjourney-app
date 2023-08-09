@extends('layouts.app')
@section('content')
<div id="kt_app_content_container" class="app-container container-fluid">
    <div class="card">
        <div class="card-header collapsible cursor-pointer rotate bg-primary " data-bs-toggle="collapse" data-bs-target="#kt_docs_card_collapsible">
            <div class="d-flex flex-column flex-lg-row justify-content-between gap-6">
                <div class="d-flex align-items-center me-3">
                    <div class="symbol symbol-50px symbol-circle">
                        <img src="{{ asset('assets/media/avatars/300-2.jpg') }}">
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="timeline-content m-0 fs-8">
                        <span class="fw-bold d-block text-gray-600">EP1 - 0000345</span>
                        <span class="fw-semibold text-gray-200">Muhammad Ibnu Haryanto</span>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="timeline-content m-0 fs-8">
                        <span class="fw-bold d-block text-gray-600">Email</span>
                        <span class="fw-semibold text-gray-200">muhamaad.harynto@behnmeyer.co.id</span>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="timeline-content m-0 fs-8">
                        <span class="fw-bold d-block text-gray-600">Country</span>
                        <span class="fw-semibold text-gray-200">Indonesia</span>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="timeline-content m-0 fs-8">
                        <span class="fw-bold d-block text-gray-600">Phone</span>
                        <span class="fw-semibold text-gray-200">0899543888</span>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="timeline-content m-0 fs-8">
                        <span class="fw-bold d-block text-gray-600">Company</span>
                        <span class="fw-semibold text-gray-200">Behn Meyer Chemicals</span>
                    </div>
                </div>
            </div>
            <div class="card-toolbar rotate-180">
                <i class="ki-duotone ki-down fs-1 text-white"></i>
            </div>
        </div>
        <div id="kt_docs_card_collapsible" class="collapse show">
            <div class="card-body">
                <span class="fw-bold text-uppercase">Designation / Department</span>
            </div>
        </div>
    </div>
</div>
@endsection