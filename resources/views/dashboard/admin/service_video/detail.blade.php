@extends('dashboard.layouts.master')
{{-- @section('title', 'Dashboard') --}}
@section('content')

<div class="row">
    <div class="">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12">
                    <h3 class="fw-bold py-3 mb-4 text-center">รายละเอียดบริการ: {{ $service->name }}</h3>

                    <div class="text-center mb-5">
                        @php
                        $embedUrl = str_replace("watch?v=", "embed/", $service->url_link);
                        @endphp

                        <div class="d-flex justify-content-center">
                            <div class="ratio ratio-16x9" style="width: 700px; height: 400px;">
                                <iframe src="{{ $embedUrl }}" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>

                        <br>

                        <a href="{{ $service->url_link }}" target="_blank" rel="noopener noreferrer">
                            <span class="text-black">link : </span>{{ $service->url_link }}
                        </a>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
