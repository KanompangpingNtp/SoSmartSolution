@extends('dashboard.layouts.master')
{{-- @section('title', 'Dashboard') --}}
@section('content')

<style>
    .small-card {
        font-size: 0.875rem;
    }

    .small-card .card-body {
        padding: 0.75rem;
    }

    .small-card .card-footer {
        padding: 0.5rem 0.75rem;
    }

    .card-img-top {
        max-height: 180px;
        object-fit: cover;
    }

</style>

<div class="row">
    <div class="">
        <div class="card">
            <div class="card-body">
                <h4 class="fw-bold py-3 mb-4 text-center">จัดการโปรโมชั่น sofin</h4>

                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createPromotionModal">
                    เพิ่มโปรโมชั่น
                </button>

                <div class="modal fade" id="createPromotionModal" tabindex="-1" aria-labelledby="createPromotionModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="{{ route('AdminSofinPromotionsCreate') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="createPromotionModalLabel">เพิ่มโปรโมชั่น</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="ปิด"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- ชื่อโปรโมชั่น -->
                                    <div class="mb-3">
                                        <label for="name" class="form-label">ชื่อโปรโมชั่น</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>

                                    <!-- ไฟล์รูปภาพหลัก -->
                                    <div class="mb-3">
                                        <label for="file" class="form-label">ไฟล์รูปภาพหลัก (jpg, png)</label>
                                        <input type="file" class="form-control" name="file" accept=".jpg,.jpeg,.png" required>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                                    <button type="submit" class="btn btn-primary">บันทึก</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <br>
                <br>

                <div class="row">
                    @foreach($sofinPromotion as $promotion)
                    <div class="col-md-3 mb-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">{{ $promotion->name }}</h5>
                            </div>

                            @php
                            $mainImage = $promotion->files->first();
                            @endphp

                            @if($mainImage && Str::startsWith($mainImage->file_type, 'mp'))
                            <video controls class="card-img-top" style="max-width: 100%; height: auto;">
                                <source src="{{ Storage::url($mainImage->file_path) }}" type="video/{{ $mainImage->file_type }}">
                            </video>
                            @elseif($mainImage)
                            <img src="{{ Storage::url($mainImage->file_path) }}" class="card-img-top" style="max-width: 100%; height: auto;" alt="รูปภาพโปรโมชั่น">
                            @else
                            <img src="{{ asset('images/no-image.png') }}" class="card-img-top" style="max-width: 100%; height: auto;" alt="ไม่มีรูปภาพ">
                            @endif

                            <div class="card-footer text-center">
                                <a href="{{ route('AdminSofinPromotionsDetail', $promotion->id) }}" class="btn btn-sm btn-primary mx-1" title="ดูเพิ่มเติม"><i class="bx bx-detail"></i></a>
                                <a href="#" class="btn btn-sm btn-warning mx-1" title="แก้ไข" data-bs-toggle="modal" data-bs-target="#editPromotionModal{{ $promotion->id }}">
                                    <i class="bx bx-edit"></i>
                                </a>
                                <form action="{{ route('AdminSofinPromotionsDelete', $promotion->id) }}" method="POST" onsubmit="return confirm('คุณแน่ใจหรือไม่ว่าต้องการลบ?');" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger mx-1" title="ลบ">
                                        <i class="bx bx-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                @foreach($sofinPromotion as $promotion)
                <div class="modal fade" id="editPromotionModal{{ $promotion->id }}" tabindex="-1" aria-labelledby="editPromotionModalLabel{{ $promotion->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="{{ route('AdminSofinPromotionsUpdate', $promotion->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editPromotionModalLabel{{ $promotion->id }}">แก้ไขโปรโมชั่น</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="ปิด"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- ชื่อโปรโมชั่น -->
                                    <div class="mb-3">
                                        <label for="name" class="form-label">ชื่อโปรโมชั่น</label>
                                        <input type="text" class="form-control" name="name" value="{{ $promotion->name }}">
                                    </div>

                                    <!-- เปลี่ยนไฟล์รูปภาพ -->
                                    <div class="mb-3">
                                        <label for="file" class="form-label">ไฟล์รูปภาพใหม่ (ไม่ต้องเลือกถ้าไม่เปลี่ยน)</label>
                                        <input type="file" class="form-control" name="file" accept=".jpg,.jpeg,.png">
                                    </div>

                                    @if($mainImage)
                                    <img src="{{ Storage::url($mainImage->file_path) }}" class="img-thumbnail" width="150">
                                    @endif
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                                    <button type="submit" class="btn btn-primary">บันทึกการแก้ไข</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>

@endsection
