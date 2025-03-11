@extends('layouts.app')
@section('title', 'SOSmart Solution performance')
@section('content')
    <style>
        .bg-section3 {
            background-image: url('{{ asset('images/pages/performance/bg-performance.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            width: 100%;
            padding: 2rem 0;
        }

        .text-title3 {
            position: relative;
            /* กำหนดให้ div เป็นตำแหน่งอ้างอิง */
            display: inline-block;
            /* หรือใช้ block ถ้าต้องการ */
            font-size: 60px;
            color: rgb(0, 0, 0);
            text-shadow: 4px 4px 3px #3665ab;
        }

        .star-icon {
            position: absolute;
            top: 10px;
            /* ปรับระยะห่างจากด้านบน */
            left: -60px;
            /* ปรับระยะห่างจากด้านซ้าย */
            width: 60px;
            /* ปรับขนาดรูป */
        }

        .shadow-white {
            box-shadow: 0px 4px 10px rgba(255, 255, 255, 0.8);
            /* เงาสีขาว */
            border-radius: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .hover-scale:hover {
            transform: scale(1.1);
            /* ขยายใหญ่ขึ้น 10% */
            box-shadow: 0px 8px 20px rgba(255, 255, 255, 1);
            /* เพิ่มเงาเมื่อ hover */
        }

        .zoom-image {
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .zoom-image:hover {
            transform: scale(1.05);
        }

        .transparent-modal {
            background: rgba(0, 0, 0, 0.8);
            /* พื้นหลังดำโปร่งแสง */
            border: none;
            box-shadow: none;
        }

        .transparent-modal .modal-body {
            padding: 0;
        }

        /* ลบกรอบ Modal */
        .modal-content {
            background: transparent;
            border: none;
        }

        /* ปิด Modal เมื่อกดพื้นหลัง */
        .modal {
            background: rgba(0, 0, 0, 0.8);
        }
    </style>

    <main class="bg-section3 d-flex flex-column justify-content-center align-items-center gap-3">
        <div class="text-title3">
            <img src="{{ asset('images/pages/section-3/ดาว.png') }}" alt="star" class="star-icon">
            ผลงาน
        </div>
        <div class="container">
            <!-- แถวของรูปภาพ -->
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6 col-lg-3 text-center p-3">
                    <img src="{{ asset('images/pages/section-2/Group 1.png') }}" alt="card" class="img-fluid zoom-image"
                        data-bs-toggle="modal" data-bs-target="#imageModal"
                        data-image="{{ asset('images/pages/section-2/Group 1.png') }}">
                    <div class="bg-dark text-white p-3" style="border-radius: 20px;">
                        อบต.เสม็ตใต้
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 text-center p-3">
                    <img src="{{ asset('images/pages/section-2/Group 2.png') }}" alt="card" class="img-fluid zoom-image"
                        data-bs-toggle="modal" data-bs-target="#imageModal"
                        data-image="{{ asset('images/pages/section-2/Group 2.png') }}">
                    <div class="bg-dark text-white p-3" style="border-radius: 20px;">
                        อบต.พระอาจารย์
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 text-center p-3">
                    <img src="{{ asset('images/pages/section-2/Group 3.png') }}" alt="card" class="img-fluid zoom-image"
                        data-bs-toggle="modal" data-bs-target="#imageModal"
                        data-image="{{ asset('images/pages/section-2/Group 3.png') }}">
                    <div class="bg-dark text-white p-3" style="border-radius: 20px;">
                        รร.บ้านหนองโสน
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 text-center p-3">
                    <img src="{{ asset('images/pages/section-2/Group 4.png') }}" alt="card" class="img-fluid zoom-image"
                        data-bs-toggle="modal" data-bs-target="#imageModal"
                        data-image="{{ asset('images/pages/section-2/Group 4.png') }}">
                    <div class="bg-dark text-white p-3" style="border-radius: 20px;">
                        อบต.บางแก้ว
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center p-3">
                    <img src="{{ asset('images/pages/section-2/Group 1.png') }}" alt="card" class="img-fluid zoom-image"
                        data-bs-toggle="modal" data-bs-target="#imageModal"
                        data-image="{{ asset('images/pages/section-2/Group 1.png') }}">
                    <div class="bg-dark text-white p-3" style="border-radius: 20px;">
                        อบต.เสม็ตใต้
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 text-center p-3">
                    <img src="{{ asset('images/pages/section-2/Group 2.png') }}" alt="card" class="img-fluid zoom-image"
                        data-bs-toggle="modal" data-bs-target="#imageModal"
                        data-image="{{ asset('images/pages/section-2/Group 2.png') }}">
                    <div class="bg-dark text-white p-3" style="border-radius: 20px;">
                        อบต.พระอาจารย์
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 text-center p-3">
                    <img src="{{ asset('images/pages/section-2/Group 3.png') }}" alt="card" class="img-fluid zoom-image"
                        data-bs-toggle="modal" data-bs-target="#imageModal"
                        data-image="{{ asset('images/pages/section-2/Group 3.png') }}">
                    <div class="bg-dark text-white p-3" style="border-radius: 20px;">
                        รร.บ้านหนองโสน
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 text-center p-3">
                    <img src="{{ asset('images/pages/section-2/Group 4.png') }}" alt="card" class="img-fluid zoom-image"
                        data-bs-toggle="modal" data-bs-target="#imageModal"
                        data-image="{{ asset('images/pages/section-2/Group 4.png') }}">
                    <div class="bg-dark text-white p-3" style="border-radius: 20px;">
                        อบต.บางแก้ว
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center p-3">
                    <img src="{{ asset('images/pages/section-2/Group 1.png') }}" alt="card" class="img-fluid zoom-image"
                        data-bs-toggle="modal" data-bs-target="#imageModal"
                        data-image="{{ asset('images/pages/section-2/Group 1.png') }}">
                    <div class="bg-dark text-white p-3" style="border-radius: 20px;">
                        อบต.เสม็ตใต้
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 text-center p-3">
                    <img src="{{ asset('images/pages/section-2/Group 2.png') }}" alt="card" class="img-fluid zoom-image"
                        data-bs-toggle="modal" data-bs-target="#imageModal"
                        data-image="{{ asset('images/pages/section-2/Group 2.png') }}">
                    <div class="bg-dark text-white p-3" style="border-radius: 20px;">
                        อบต.พระอาจารย์
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 text-center p-3">
                    <img src="{{ asset('images/pages/section-2/Group 3.png') }}" alt="card" class="img-fluid zoom-image"
                        data-bs-toggle="modal" data-bs-target="#imageModal"
                        data-image="{{ asset('images/pages/section-2/Group 3.png') }}">
                    <div class="bg-dark text-white p-3" style="border-radius: 20px;">
                        รร.บ้านหนองโสน
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 text-center p-3">
                    <img src="{{ asset('images/pages/section-2/Group 4.png') }}" alt="card" class="img-fluid zoom-image"
                        data-bs-toggle="modal" data-bs-target="#imageModal"
                        data-image="{{ asset('images/pages/section-2/Group 4.png') }}">
                    <div class="bg-dark text-white p-3" style="border-radius: 20px;">
                        อบต.บางแก้ว
                    </div>
                </div>
            </div>

            <!-- Modal โปร่งใส -->
            <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content transparent-modal">
                        <div class="modal-body text-center">
                            <img id="modalImage" src="" class="img-fluid" alt="Large Preview">
                        </div>
                    </div>
                </div>
            </div>

            <!-- JavaScript สำหรับเปลี่ยนรูปใน Modal -->
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const images = document.querySelectorAll(".zoom-image");
                    const modalImage = document.getElementById("modalImage");

                    images.forEach(img => {
                        img.addEventListener("click", function() {
                            modalImage.src = this.getAttribute("data-image");
                        });
                    });
                });
            </script>



        </div>
    </main>

@endsection
