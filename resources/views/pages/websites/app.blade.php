@extends('layouts.app')
@section('title', 'SOSmart Solution performance')
@section('content')
    <style>
        .bg-section3 {
            background-image: url('{{ asset('images/pages/websites/BG.png') }}');
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
    filter: drop-shadow(0px 4px 10px rgba(255, 255, 255, 1)); 
    /* เงาสีขาวที่เด่นขึ้น */
    border-radius: 20px;
    transition: transform 0.3s ease, filter 0.3s ease;
}

/* เพิ่มเอฟเฟ็กต์ hover */
.img-fluid {
    transition: transform 0.3s ease, filter 0.3s ease;
}

.img-fluid:hover {
    transform: scale(1.05);
    /* ขยายขนาดรูป */
    filter: drop-shadow(0px 4px 20px rgba(255, 255, 255, 0.6)); 
    /* เพิ่มเงาขาวที่เด่นขึ้น */
}

/* เพิ่มความยืดหยุ่นให้รูปภาพกับอุปกรณ์ที่แตกต่าง */
.img-fluid {
    width: 100%;
    height: auto;
}

/* เพิ่มเงาเบาๆ ให้กับรูปภาพ */
.shadow-custom {
    filter: drop-shadow(0px 4px 10px rgba(255, 255, 255, 0.3)); 
    /* เงาสีขาวที่เด่นขึ้น */
    border-radius: 8px;
}

    </style>

    <main class="bg-section3 d-flex flex-column justify-content-center align-items-center gap-3">
        <div class="text-title3">
            <img src="{{ asset('images/pages/section-3/ดาว.png') }}" alt="star" class="star-icon">
            เว็บใกล้เคียง
        </div>
        <div class="container">
            <!-- แถวของรูปภาพ -->
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6 col-lg-4 text-center p-3">
                    <a href="#">
                        <img src="{{ asset('images/pages/websites/paradise.png') }}" alt="banner"
                            class="img-fluid rounded shadow-custom">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 text-center p-3">
                    <a href="#">
                        <img src="{{ asset('images/pages/websites/ทม จัน.png') }}" alt="banner"
                            class="img-fluid rounded shadow-custom">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 text-center p-3">
                    <a href="#">
                        <img src="{{ asset('images/pages/websites/ทับพริก.png') }}" alt="banner"
                            class="img-fluid rounded shadow-custom">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 text-center p-3">
                    <a href="#">
                        <img src="{{ asset('images/pages/websites/บางเเก้ว.png') }}" alt="banner"
                            class="img-fluid rounded shadow-custom">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 text-center p-3">
                    <a href="#">
                        <img src="{{ asset('images/pages/websites/พระอาจาร.png') }}" alt="banner"
                            class="img-fluid rounded shadow-custom">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 text-center p-3">
                    <a href="#">
                        <img src="{{ asset('images/pages/websites/ฟิชชิง.png') }}" alt="banner"
                            class="img-fluid rounded shadow-custom">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 text-center p-3">
                    <a href="#">
                        <img src="{{ asset('images/pages/websites/รร บ้านหนองโสน.png') }}" alt="banner"
                            class="img-fluid rounded shadow-custom">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 text-center p-3">
                    <a href="#">
                        <img src="{{ asset('images/pages/websites/เสม็ดใต้.png') }}" alt="banner"
                            class="img-fluid rounded shadow-custom">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 text-center p-3">
                    <a href="#">
                        <img src="{{ asset('images/pages/websites/เเปลงยาว.png') }}" alt="banner"
                            class="img-fluid rounded shadow-custom">
                    </a>
                </div>
            </div>
        </div>
    </main>

@endsection
