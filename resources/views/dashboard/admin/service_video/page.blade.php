@extends('dashboard.layouts.master')
@section('content')

<div class="row">
    <div class="">
        <div class="card">
            <div class="card-body">
                <h4 class="fw-bold py-3 mb-4 text-center">จัดการบริการวิดิทัศน์</h4>

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createServiceModal">
                    เพิ่มบริการ
                </button>

                <div class="modal fade" id="createServiceModal" tabindex="-1" aria-labelledby="createServiceModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="{{ route('AdminServiceVideoCreate') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="createServiceModalLabel">เพิ่มบริการ</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="ปิด"></button>
                                </div>

                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">ชื่อ (ไม่ต้องกรอกก็ได้)</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>

                                    <div class="mb-3">
                                        <label for="url_link" class="form-label">ลิงก์เว็บไซต์ (URL)</label>
                                        <input type="url" class="form-control" name="url_link" placeholder="https://example.com">
                                    </div>

                                    <div class="mb-3">
                                        <label for="files_title" class="form-label">ไฟล์รูปภาพหลัก (jpg, png)</label>
                                        <input type="file" class="form-control" name="files_title" accept=".jpg,.jpeg,.png">
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
                    @foreach($serviceVideo as $service)
                    <div class="col-md-3">
                        <div class="card shadow-sm small-card">
                            <div class="card-body">
                                <h5 class="card-title" style="font-size: 16px;">{{ $service->name }}</h5>
                            </div>

                            @php
                            $mainImage = $service->files->first();
                            @endphp

                            @if($mainImage)
                            <img src="{{ Storage::url($mainImage->file_path) }}" class="card-img-top img-fluid" alt="รูปภาพบริการ">
                            @else
                            <img src="{{ asset('images/no-image.png') }}" class="card-img-top img-fluid" alt="ไม่มีรูปภาพ">
                            @endif

                            <div class="card-footer text-center">
                                <a href="{{ route('AdminServiceVideoDetail', $service->id) }}" class="btn btn-sm btn-primary mx-1" title="ดูเพิ่มเติม"><i class='bx bx-detail'></i></a>
                                <a href="#" class="btn btn-sm btn-warning mx-1" title="แก้ไข" data-bs-toggle="modal" data-bs-target="#editModal{{ $service->id }}"><i class='bx bx-edit'></i></a>
                                 <form action="{{ route('AdminServiceVideoDelete', $service->id) }}" method="POST" onsubmit="return confirm('คุณแน่ใจหรือไม่ว่าต้องการลบ?');" style="display:inline;">
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

                @foreach($serviceVideo as $service)
                <div class="modal fade" id="editModal{{ $service->id }}" tabindex="-1" aria-labelledby="editServiceModalLabel{{ $service->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="{{ route('AdminServicesUpdate', $service->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editServiceModalLabel{{ $service->id }}">แก้ไขบริการ</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="ปิด"></button>
                                </div>

                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">ชื่อบริการ</label>
                                        <input type="text" class="form-control" name="name" value="{{ $service->name }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="url_link" class="form-label">ลิงก์เว็บไซต์ (URL)</label>
                                        <input type="url" class="form-control" name="url_link" placeholder="https://example.com" value="{{ $service->url_link }}">
                                    </div>


                                    <div class="mb-3">
                                        <label for="files_title" class="form-label">เปลี่ยนรูปภาพหลัก (jpg, png)</label>
                                        <input type="file" class="form-control" name="files_title" accept=".jpg,.jpeg,.png">
                                    </div>

                                    {{-- แสดงภาพเดิม --}}
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
