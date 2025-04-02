<style>
    .bg-section7 {
        background-image: url('{{ asset('images/pages/section-7/BG โปโมชั่น.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 30vh;
        width: 100%;
        padding: 2rem 0;
    }

    .text-title7 {
        position: relative;
        /* กำหนดให้ div เป็นตำแหน่งอ้างอิง */
        display: inline-block;
        /* หรือใช้ block ถ้าต้องการ */
        font-size: 60px;
        color: rgb(255, 255, 255);
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
    box-shadow: 0px 4px 10px rgba(255, 255, 255, 0.8); /* เงาสีขาว */
    border-radius: 20px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
    /* ปุ่มเลื่อน */
.swiper-button-prev,
.swiper-button-next {
    width: 50px;
    height: 50px;
    padding: 30px;
    background: rgba(0, 0, 0, 0.6); /* พื้นหลังโปร่งแสง */
    border-radius: 50%;
    color: white; /* เปลี่ยนสีไอคอนเป็นสีขาว */
    display: flex;
    justify-content: center;
    align-items: center;
    transition: 0.3s ease-in-out;
}

.swiper-button-prev::after,
.swiper-button-next::after {
    font-size: 24px; /* ขยายขนาดไอคอน */
}

.swiper-button-prev:hover,
.swiper-button-next:hover {
    background: rgba(0, 0, 0, 0.9); /* เปลี่ยนเป็นสีเข้มขึ้นเมื่อ Hover */
    transform: scale(1.1); /* ขยายขนาดเล็กน้อย */
}

/* จุดบอกตำแหน่ง */
.swiper-pagination-bullet {
    width: 12px;
    height: 12px;
    background: rgba(255, 255, 255, 0.6); /* สีขาวโปร่งแสง */
    opacity: 1;
    transition: background 0.3s ease-in-out, transform 0.3s ease-in-out;
}

.swiper-pagination-bullet-active {
    background: white; /* เปลี่ยนเป็นสีขาวเมื่อเป็นจุดที่กำลังแสดง */
    transform: scale(1.3); /* ขยายขนาดจุดที่เลือก */
}


</style>
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<main class="bg-section7 d-flex flex-column justify-content-center align-items-center gap-3">
    <div class="text-title7">
        <img src="{{ asset('images/pages/section-3/ดาว.png') }}" alt="star" class="star-icon">
        โปรโมชั่น
    </div>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="{{asset('images/pages/section-7/1.png')}}" alt="รูปที่ 1" class="img-fluid"></div>
                <div class="swiper-slide"><img src="{{asset('images/pages/section-7/2.png')}}" alt="รูปที่ 2" class="img-fluid"></div>
                <div class="swiper-slide"><img src="{{asset('images/pages/section-7/3.png')}}" alt="รูปที่ 3" class="img-fluid"></div>
                <div class="swiper-slide"><img src="{{asset('images/pages/section-7/4.png')}}" alt="รูปที่ 4" class="img-fluid"></div>
            </div>
    
            <!-- ปุ่มเลื่อนซ้าย -->
            <div class="swiper-button-prev"></div>
            <!-- ปุ่มเลื่อนขวา -->
            <div class="swiper-button-next"></div>
            <!-- จุดบอกตำแหน่ง -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 2, // แสดง 2 รูปในจอใหญ่
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                991: { slidesPerView: 2 }, // จอใหญ่แสดง 2 รูป
                0: { slidesPerView: 1 }, // จอเล็กแสดง 1 รูป
            }
        });
    </script>
</main>
