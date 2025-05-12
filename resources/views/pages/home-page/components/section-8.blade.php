<style>
    .bg-section8 {
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
        display: inline-block;
        font-size: 60px;
        color: rgb(0, 0, 0);
        text-shadow: 4px 4px 3px #ffffff;
    }

    .text-review {
        font-size: 30px;
        color: rgb(0, 0, 0);
        text-shadow: 0px 3px 5px #ffffff;
    }

    .star-icon {
        position: absolute;
        top: 10px;
        left: -60px;
        width: 60px;
    }

    .shadow-white {
        box-shadow: 0px 4px 10px rgba(255, 255, 255, 0.8);
        border-radius: 20px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    /* ปุ่มเลื่อน */
    .swiper-button-prev2,
    .swiper-button-next2,
    .swiper-button-prev3,
    .swiper-button-next3 {
        position: absolute;
        top: 50%;
        width: 50px;
        height: 50px;
        padding: 30px;
        background: rgba(0, 0, 0, 0.6);
        border-radius: 50%;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: 0.3s ease-in-out;
        transform: translateY(-50%);
        z-index: 10;
    }

    .swiper-button-prev2 {
        left: 10px;
        /* ปุ่มเลื่อนซ้าย */
    }

    .swiper-button-next2 {
        right: 10px;
        /* ปุ่มเลื่อนขวา */
    }

    .swiper-button-prev3 {
        left: 10px;
        /* ปุ่มเลื่อนซ้าย */
    }

    .swiper-button-next3 {
        right: 10px;
        /* ปุ่มเลื่อนขวา */
    }

    .swiper-button-prev2::after,
    .swiper-button-next2::after,
    .swiper-button-prev3::after,
    .swiper-button-next3::after {
        font-size: 24px;
    }

    .swiper-button-prev2:hover,
    .swiper-button-next2:hover,
    .swiper-button-prev3:hover,
    .swiper-button-next3:hover {
        background: rgba(0, 0, 0, 0.9);
        transform: translateY(-50%) scale(1.1);
    }

    /* จุดบอกตำแหน่ง */
    .swiper-pagination2 .swiper-pagination-bullet,
    .swiper-pagination3 .swiper-pagination-bullet {
        width: 12px;
        height: 12px;
        background: rgba(255, 255, 255, 0.6);
        opacity: 1;
        transition: background 0.3s ease-in-out, transform 0.3s ease-in-out;
    }

    .swiper-pagination2 .swiper-pagination-bullet-active,
    .swiper-pagination3 .swiper-pagination-bullet-active {
        background: white;
        transform: scale(1.3);
    }
</style>
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<main class="bg-section8 d-flex">
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <div class="text-title8">
            <img src="{{ asset('images/pages/section-3/ดาว.png') }}" alt="star" class="star-icon">
            SOFIN ร้านอาหารออนไลน์
        </div>
        <div class="fs-5 fw-bold" style="margin-top:-15px;">
            แพ็คเกจระบบเมนูออนไลน์ทันสมัย เมนู QR Code | ระบบหลังบ้าน | เหมาะกับร้านเล็ก-ใหญ่
        </div>
        <div class="container mt-5">
            <div class="row">
                <!-- Swiper 2 -->
                <div class="col-lg-6 swiper mySwiper2 text-center">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{ asset('images/pages/section-8/ใบโปรโม 1.png') }}"
                                alt="รูปที่ 1" class="img-fluid"></div>
                        <div class="swiper-slide"><img src="{{ asset('images/pages/section-8/ใบโปรโม 2.png') }}"
                                alt="รูปที่ 2" class="img-fluid"></div>
                        <div class="swiper-slide"><img src="{{ asset('images/pages/section-8/ใบโปรโม 3.png') }}"
                                alt="รูปที่ 3" class="img-fluid"></div>
                        <div class="swiper-slide"><img src="{{ asset('images/pages/section-8/ใบโปรโม 4.png') }}"
                                alt="รูปที่ 4" class="img-fluid"></div>
                        <div class="swiper-slide"><img src="{{ asset('images/pages/section-8/ใบโปรโม 5.png') }}"
                                alt="รูปที่ 4" class="img-fluid"></div>
                        <div class="swiper-slide"><img src="{{ asset('images/pages/section-8/ใบโปรโม 6.png') }}"
                                alt="รูปที่ 4" class="img-fluid"></div>
                        <div class="swiper-slide"><img src="{{ asset('images/pages/section-8/ใบโปรโม 7.png') }}"
                                alt="รูปที่ 4" class="img-fluid"></div>

                    </div>
                    <div class="swiper-button-prev2">&lt;</div>
                    <div class="swiper-button-next2">&gt;</div>
                </div>


                <!-- Swiper 3 -->
                <div class="col-lg-6 container position-relative ">
                    <div class="text-review">
                        รีวิว SOFIN
                    </div>
                    <!-- กล่องข้อความที่เปลี่ยนตามสไลด์ -->
                    <textarea id="slide-caption" class="form-control mb-3 fs-5 bg-white p-3 rounded-4" rows="3" readonly>
โปรโมชั่นพิเศษสำหรับลูกค้าใหม่!
</textarea>


                    <!-- Swiper -->
                    <div class="swiper mySwiper3 position-relative text-center">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" data-caption="โปรโมชั่นพิเศษสำหรับลูกค้าใหม่!">
                                <img src="{{ asset('images/pages/section-8/ภาพรีวิว.png') }}" alt="รูปที่ 1"
                                    class="img-fluid">
                            </div>
                            <div class="swiper-slide" data-caption="ส่วนลด 20% สำหรับทุกเมนู!">
                                <img src="{{ asset('images/pages/section-8/ภาพรีวิว.png') }}" alt="รูปที่ 2"
                                    class="img-fluid">
                            </div>
                            <div class="swiper-slide" data-caption="แจกคูปองฟรีเมื่อสั่งครบ 300 บาท!">
                                <img src="{{ asset('images/pages/section-8/ภาพรีวิว.png') }}" alt="รูปที่ 3"
                                    class="img-fluid">
                            </div>
                            <div class="swiper-slide" data-caption="โปรโมชันซื้อ 1 แถม 1 เฉพาะเมนูยอดฮิต!">
                                <img src="{{ asset('images/pages/section-8/ภาพรีวิว.png') }}" alt="รูปที่ 4"
                                    class="img-fluid">
                            </div>
                        </div>

                        <!-- ปุ่มเลื่อน -->
                        <div class="swiper-button-prev3">&lt;</div>
                        <div class="swiper-button-next3">&gt;</div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        var swiper2 = new Swiper(".mySwiper2", {
            slidesPerView: 1,
            spaceBetween: 2,
            navigation: {
                nextEl: ".swiper-button-next2",
                prevEl: ".swiper-button-prev2",
            },
            loop: true, // เพิ่มการวนลูป
        });

        const swiper3 = new Swiper(".mySwiper3", {
            slidesPerView: 1,
            spaceBetween: 2,
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next3",
                prevEl: ".swiper-button-prev3",
            },
            on: {
                init: function() {
                    updateCaption(this);
                },
                slideChange: function() {
                    updateCaption(this);
                }
            }
        });

        function updateCaption(swiper) {
            const activeSlide = swiper.slides[swiper.activeIndex];
            const caption = activeSlide.getAttribute("data-caption");
            document.getElementById("slide-caption").innerText = caption;
        }
    </script>
</main>
