<style>
    .bg-section7 {
        background-image: url('{{ asset('images/pages/section-8/พื้นหลัง.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 30vh;
        width: 100%;
        padding: 2rem 0;
    }

    .text-title8 {
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

    /* ปุ่มเลื่อน */
    .swiper-button-prev,
    .swiper-button-next {
        width: 50px;
        height: 50px;
        padding: 30px;
        background: rgba(0, 0, 0, 0.6);
        /* พื้นหลังโปร่งแสง */
        border-radius: 50%;
        color: white;
        /* เปลี่ยนสีไอคอนเป็นสีขาว */
        display: flex;
        justify-content: center;
        align-items: center;
        transition: 0.3s ease-in-out;
    }

    .swiper-button-prev::after,
    .swiper-button-next::after {
        font-size: 24px;
        /* ขยายขนาดไอคอน */
    }

    .swiper-button-prev:hover,
    .swiper-button-next:hover {
        background: rgba(0, 0, 0, 0.9);
        /* เปลี่ยนเป็นสีเข้มขึ้นเมื่อ Hover */
        transform: scale(1.1);
        /* ขยายขนาดเล็กน้อย */
    }

    /* จุดบอกตำแหน่ง */
    .swiper-pagination-bullet {
        width: 12px;
        height: 12px;
        background: rgba(255, 255, 255, 0.6);
        /* สีขาวโปร่งแสง */
        opacity: 1;
        transition: background 0.3s ease-in-out, transform 0.3s ease-in-out;
    }

    .swiper-pagination-bullet-active {
        background: white;
        /* เปลี่ยนเป็นสีขาวเมื่อเป็นจุดที่กำลังแสดง */
        transform: scale(1.3);
        /* ขยายขนาดจุดที่เลือก */
    }
</style>
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<main class="bg-section7 d-flex ">
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <div class="text-title8">
            <img src="{{ asset('images/pages/section-3/ดาว.png') }}" alt="star" class="star-icon">
            Sofin โปรเจค
        </div>
        <div class="fs-5 fw-bold" style="margin-top:-15px;">
            แพ็คเกจระบบเมนูออนไลน์ทันสมัย เมนู QR Code | ระบบหลังบ้าน | เหมาะกับร้านเล็ก-ใหญ่
        </div>
        <div class="row justify-content-between mt-4">
            <div class="col-lg-4 text-center mb-3">
                <img src="{{asset('images/pages/section-8/หน้าโปรโม1.png')}}" alt="pro-1" class="img-fluid" style="height: 100%;">
            </div>
            <div class="col-lg-4 text-center mb-3">
                <img src="{{asset('images/pages/section-8/หน้าโปรโม2.png')}}" alt="pro-1" class="img-fluid" style="height: 100%;">
            </div>
            <div class="col-lg-4 d-flex flex-column flex-md-row flex-lg-column gap-3 mb-3">
                <img src="{{asset('images/pages/section-8/โซฟินขวา 1.png')}}" alt="pro-1" class="img-fluid" style="min-height: 16rem;">
                <img src="{{asset('images/pages/section-8/โซฟินขวา 2.png')}}" alt="pro-1" class="img-fluid" style="min-height: 16rem;">
            </div>
            <div class="col-lg-2 d-none d-lg-block text-center mb-3">
                <img src="{{asset('images/pages/section-8/มาสคอตโซฟินซ้าย.png')}}" alt="pro-1" class="img-fluid" style="height: 100%;">
            </div>
            <div class="col-lg-8 row align-items-end text-center mb-3 p-0">
                    <div class="col-sm-6 col-lg-3 text-center p-0 pe-2 mb-3">
                        <img src="{{asset('images/pages/section-8/โซฟินล่าง1.png')}}" alt="pro-1" class="img-fluid" style="height: 100%;">
                    </div>
                    <div class="col-sm-6 col-lg-3 text-center p-0 pe-2 mb-3">
                        <img src="{{asset('images/pages/section-8/โซฟินล่าง2.png')}}" alt="pro-1" class="img-fluid" style="height: 100%;">
                    </div>
                    <div class="col-sm-6 col-lg-3 text-center p-0 pe-2 mb-3">
                        <img src="{{asset('images/pages/section-8/โซฟินล่าง3.png')}}" alt="pro-1" class="img-fluid" style="height: 100%;">
                    </div>
                    <div class="col-sm-6 col-lg-3 text-center p-0 mb-3">
                        <img src="{{asset('images/pages/section-8/โซฟินล่าง4.png')}}" alt="pro-1" class="img-fluid" style="height: 100%;">
                    </div>
            </div>
            <div class="col-lg-2 text-center mb-3">
                <img src="{{asset('images/pages/section-8/มาสคอตโซฟินขวา.png')}}" alt="pro-1" class="img-fluid" style="height: 100%;">
            </div>
        </div>
    </div>
</main>
