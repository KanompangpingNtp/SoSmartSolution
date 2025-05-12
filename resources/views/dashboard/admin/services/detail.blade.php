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
                        $mainImage = $service->files->where('status', 1)->first();
                        @endphp
                        @if($mainImage)
                        <img src="{{ Storage::url($mainImage->file_path) }}" class="img-fluid" alt="รูปภาพบริการ">
                        @else
                        <img src="{{ asset('images/no-image.png') }}" class="img-fluid" alt="ไม่มีรูปภาพ">
                        @endif

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
