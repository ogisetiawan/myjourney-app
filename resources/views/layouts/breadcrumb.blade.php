@php $link = "" @endphp
<div id="kt_app_toolbar" class="app-toolbar pt-7 pt-lg-10">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
        <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
            <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                @if( count(Request::segments()) == 3)
                    @php $title = ucwords(str_replace('_',' ',Request::segment(3))) @endphp
                @else
                    @php $title = ucwords(str_replace('_',' ',Request::segment(4))) @endphp
                @endif
                <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bold fs-3 m-0">{{ $title }}</h1>
                <ul class="breadcrumb breadcrumb-dot fw-semibold fs-7 my-0">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ url('dashboard') }}" class="text-gray-600 text-hover-primary">Dashboard</a>
                    </li>
                    @for($i = 1; $i <= count(Request::segments()); $i++) 
                        @if ($i < count(Request::segments()) & $i> 0)
                            @php $link .= "/" . Request::segment($i); @endphp
                            @if($i == 3 || $i == 4)
                                <li class="breadcrumb-item text-muted">
                                    <a href="{{ $link }}" class="text-gray-600 text-hover-primary">{{ ucwords(str_replace('_',' ',Request::segment($i)))}}</a>
                                </li>
                            @else
                                <li class="breadcrumb-item text-muted">
                                    <a href="javascript:void(0);" class="text-gray-600 text-hover-primary">{{ ucwords(str_replace('_',' ',Request::segment($i)))}}</a>
                                </li>
                            @endif
                        @else
                            <li class="breadcrumb-item text-gray-600">{{ucwords(str_replace('_',' ',Request::segment($i)))}}</li>
                        @endif
                    @endfor
                </ul>
            </div>
        </div>
    </div>
</div>