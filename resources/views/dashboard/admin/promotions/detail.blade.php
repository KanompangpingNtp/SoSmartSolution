@extends('dashboard.layouts.master')
{{-- @section('title', 'Dashboard') --}}
@section('content')

<div class="row">
    <div class="">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12">
                    <h3 class="fw-bold py-3 mb-4 text-center">รายละเอียดบริการ: {{ $promotion->name }}</h3>

                    <div class="text-center mb-5">
                        @php
                        $mainImage = $promotion->files->first();
                        @endphp
                        @if($mainImage)
                        <img src="{{ Storage::url($mainImage->file_path) }}" class="img-fluid" alt="รูปภาพโปรโมชั่น" style="width:500px;">
                        @else
                        <img src="{{ asset('images/no-image.png') }}" class="img-fluid" alt="ไม่มีรูปภาพ">
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
