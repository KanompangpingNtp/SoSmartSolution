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

        .title-blue {
            background: linear-gradient(to right, #2980da, #297fda13);
            /* พื้นหลังไล่สี */
            color: white;
            /* ตัวอักษรสีขาว */
            padding: 10px 20px;
            /* กำหนดระยะห่างภายใน */
            border-radius: 30px;
            /* ขอบมน */
            font-size: 25px;
            /* ขนาดตัวอักษร */
            font-weight: bold;
            /* ตัวหนา */
        }

        .title-red {
            background: linear-gradient(to right, #d80f2a, #d80f2a0a);
            /* พื้นหลังไล่สี */
            color: white;
            /* ตัวอักษรสีขาว */
            padding: 10px 20px;
            /* กำหนดระยะห่างภายใน */
            border-radius: 30px;
            /* ขอบมน */
            font-size: 20px;
            /* ขนาดตัวอักษร */
            font-weight: bold;
            /* ตัวหนา */
        }

        .sub-text {
            font-size: 18px;
            margin-left: 1rem;
        }

        .map {
            width: 500px;
            height: 450px;
        }

        @media (max-width: 531px) {
            .map {
                width: 300px;
                /* ทำให้ขนาดแผนที่ปรับตามขนาดหน้าจอ */
                height: 300px;
                /* ปรับความสูงโดยอัตโนมัติ */
            }
        }
    </style>

    <main class="bg-section3 d-flex flex-column justify-content-start align-items-center gap-3">
        <div class="text-title3">
            <img src="{{ asset('images/pages/section-3/ดาว.png') }}" alt="star" class="star-icon">
            ติดต่อ
        </div>
        <div class="container d-flex flex-column flex-lg-row justify-content-evenly align-items-center mt-5">
            <div class="d-flex flex-column justify-content-start align-items-start gap-3">
                <div class="title-blue w-50">
                    ที่อยู่
                </div>
                <div class="sub-text">
                    38/168 ตำบลบางน้ำเปรี้ยว <br>
                    จังหวัดฉะเชิงเทรา 24150 ประเทศไทย
                </div>
                <div class="title-blue">
                    เวลาเปิดทำการ
                </div>
                <div class="sub-text d-flex justify-content-start">
                    <div class="d-flex flex-column align-items-start">
                        <div>
                            วันจัทร์
                        </div>
                        <div>
                            วันอังคาร
                        </div>
                        <div>
                            วันพุธ
                        </div>
                        <div>
                            วันพฤหัสบดี
                        </div>
                        <div>
                            วันศุกร์
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-start ms-3">
                        <div>
                            09:00 - 18:00
                        </div>
                        <div>
                            09:00 - 18:00
                        </div>
                        <div>
                            09:00 - 18:00
                        </div>
                        <div>
                            09:00 - 18:00
                        </div>
                        <div>
                            09:00 - 18:00
                        </div>
                    </div>
                </div>
                <div class="title-red lh-1">
                    หยุดทุกวันเสาร์ - วันอาทิตย์ <br>
                    และวันหยุดราชการไทย
                </div>
                <div class="title-blue">
                    ช่องทางพูดคุย - สอบถาม
                </div>
                <div class="sub-text">
                    <i class="fas fa-phone-alt me-2"></i> 064-980-5946 <br>
                    <i class="fas fa-envelope me-2"></i> gmskysmartcity.com@gmail.com <br>
                    <i class="fab fa-twitter me-2"></i> @gsmk
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10956.984466383394!2d101.05335829735505!3d13.846300404462136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d132bd2b571d1%3A0xbbed273dd38be7a5!2z4Liq4LiW4Liy4LiZ4Lib4Lij4Liw4LiB4Lit4Lia4LiB4Liy4LijIEdtIFNreSBTbWFydCBDaXR5!5e0!3m2!1sen!2sth!4v1741599085248!5m2!1sen!2sth"
                    width="100%" height="100%" style="border:0; border-radius: 50%; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.8);" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </main>

@endsection
