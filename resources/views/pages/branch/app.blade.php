@extends('layouts.app')
@section('title', 'SOSmart Solution branch')
@section('content')
    <style>
        .bg-section3 {
            background-image: url('{{ asset('images/pages/branch/bg-brach.png') }}');
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

        .dropdown-toggle-custom {
            background: white;
            color: black;
            padding: 8px 12px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            border-radius: 30px;
            font-size: 20px;
            gap: 8px;
            cursor: pointer;
        }

        /* ไอคอนสีน้ำเงิน */
        .dropdown-icon {
            color: blue;
            transition: transform 0.3s ease;
        }

        /* หมุนไอคอนเมื่อเปิด Dropdown */
        .rotate {
            transform: rotate(90deg);
        }

        /* ปรับ dropdown list */
        .dropdown-menu {
            position: relative;
            /* เพิ่มการจัดตำแหน่ง relative */
            z-index: 1;
            /* เพิ่ม z-index เพื่อให้ dropdown อยู่ด้านหน้า */
            background: rgba(255, 255, 255, 0);
            border-radius: 10px;
            border: 0px solid #ffffff;
            margin-top: 10px;
            /* เพิ่ม margin-top เพื่อดันเนื้อหาด้านล่างเมื่อเปิด */
            display: none;
            /* ตั้งค่าให้ไม่แสดงในเริ่มต้น */
        }

        /* ปรับสไตล์รายการใน dropdown */
        .dropdown-item {
            color: black;
            padding: 10px 15px;
        }

        /* เมื่อ hover รายการ dropdown */
        .dropdown-item:hover {
            background: #e0f0ff;
            /* สีฟ้าอ่อน */
            color: black;
        }

        .dropdown-menu.show {
            display: block;
        }
    </style>

    <main class="bg-section3 d-flex flex-column justify-content-start align-items-center gap-3">
        <div class="text-title3">
            <img src="{{ asset('images/pages/section-3/ดาว.png') }}" alt="star" class="star-icon">
            สาขา
        </div>
        <div class="container">
            <!-- แถวของรูปภาพ -->
            <div class="row justify-content-start align-items-start">
                <div class="col-md-6 col-lg-3 text-center p-3 d-flex flex-column justify-content-center align-items-start">
                    <!-- รูปภาพ -->
                    <img src="{{ asset('images/pages/branch/ภาคเหนือ.png') }}" alt="card" class="img-fluid ">

                </div>

                <!-- เริ่มโค้ดที่ปรับแล้ว -->
                <div class="col-md-6 col-lg-3 text-center p-3 d-flex flex-column justify-content-center align-items-start">
                    <!-- รูปภาพ -->
                    <img src="{{ asset('images/pages/branch/ภาคกลาง.png') }}" alt="card" class="img-fluid ">

                    <!-- ปุ่ม Dropdown -->
                    <div class="dropdown mt-2 w-100">
                        <button class="btn btn-white d-flex align-items-center gap-1 dropdown-toggle-custom w-100"
                            type="button">
                            <i class="fa-solid fa-caret-right dropdown-icon"></i> สาขากรุงเทพ
                        </button>

                        <!-- รายการ Dropdown -->
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">- บริษัท พาราไดซ์ จำกัด</a></li>
                        </ul>
                    </div>
                    <div class="dropdown mt-2 w-100">
                        <button class="btn btn-white d-flex align-items-center gap-1 dropdown-toggle-custom w-100"
                            type="button">
                            <i class="fa-solid fa-caret-right dropdown-icon"></i> สาขาฉะเชิงเทรา
                        </button>

                        <!-- รายการ Dropdown -->
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">- อบต.เสม็ตใต้</a></li>
                            <li><a class="dropdown-item" href="#">- อบต.แปลงยาว</a></li>
                            <li><a class="dropdown-item" href="#">- อบต.คลองบ้านโพธิ์</a></li>
                            <li><a class="dropdown-item" href="#">- อบต.คลองอุดมชลจร</a></li>
                            <li><a class="dropdown-item" href="#">- โรงเรียนหนองโสน</a></li>
                        </ul>
                    </div>
                    <div class="dropdown mt-2 w-100">
                        <button class="btn btn-white d-flex align-items-center gap-1 dropdown-toggle-custom w-100"
                            type="button">
                            <i class="fa-solid fa-caret-right dropdown-icon"></i> สาขานครนายก
                        </button>
                        <!-- รายการ Dropdown -->
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">- อบต.พระอาจารย์</a></li>
                        </ul>
                    </div>
                    <div class="dropdown mt-2 w-100">
                        <button class="btn btn-white d-flex align-items-center gap-1 dropdown-toggle-custom w-100"
                            type="button">
                            <i class="fa-solid fa-caret-right dropdown-icon"></i> สาขาชลบุรี
                        </button>
                        <!-- รายการ Dropdown -->
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">- อบต.บางนาง</a></li>
                            <li><a class="dropdown-item" href="#">- ฟิชชิ่งรีสอท</a></li>
                        </ul>
                    </div>
                </div>
                <!-- จบโค้ด -->



                <div class="col-md-6 col-lg-3 text-center p-3 d-flex flex-column justify-content-center align-items-start">
                    <img src="{{ asset('images/pages/branch/ภาคตะวันออก.png') }}" alt="card" class="img-fluid">
                    <div class="dropdown mt-2 w-100">
                        <button class="btn btn-white d-flex align-items-center gap-1 dropdown-toggle-custom w-100"
                            type="button">
                            <i class="fa-solid fa-caret-right dropdown-icon"></i> สาขาสระแก้ว
                        </button>

                        <!-- รายการ Dropdown -->
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">- อบต.ทับพริก</a></li>
                        </ul>
                    </div>
                    <div class="dropdown mt-2 w-100">
                        <button class="btn btn-white d-flex align-items-center gap-1 dropdown-toggle-custom w-100"
                            type="button">
                            <i class="fa-solid fa-caret-right dropdown-icon"></i> สาขาจันทบุรี
                        </button>

                        <!-- รายการ Dropdown -->
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">- ทม.จันทบุรี</a></li>
                            <li><a class="dropdown-item" href="#">- อบต.คลองขุด</a></li>
                            <li><a class="dropdown-item" href="#">- ทต.เกวียนหัก</a></li>
                        </ul>
                    </div>
                    <div class="dropdown mt-2 w-100">
                        <button class="btn btn-white d-flex align-items-center gap-1 dropdown-toggle-custom w-100"
                            type="button">
                            <i class="fa-solid fa-caret-right dropdown-icon"></i> สาขาตราด
                        </button>

                        <!-- รายการ Dropdown -->
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">- ทต.คลองใหญ่</a></li>
                        </ul>
                    </div>
                    <div class="dropdown mt-2 w-100">
                        <button class="btn btn-white d-flex align-items-center gap-1 dropdown-toggle-custom w-100"
                            type="button">
                            <i class="fa-solid fa-caret-right dropdown-icon"></i> สาขาปราจีนบุรี
                        </button>

                        <!-- รายการ Dropdown -->
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">- บริษัทจวงไถ่หลีเย่จำกัด</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 text-center p-3 d-flex flex-column justify-content-center align-items-start">
                    <img src="{{ asset('images/pages/branch/ภาคตะวันตก.png') }}" alt="card" class="img-fluid">
                </div>
                <div class="col-md-6 col-lg-3 text-center p-3 d-flex flex-column justify-content-center align-items-start">
                    <img src="{{ asset('images/pages/branch/ภาคใต้.png') }}" alt="card" class="img-fluid">
                </div>
                <div class="col-md-6 col-lg-3 text-center p-3 d-flex flex-column justify-content-center align-items-start">
                    <img src="{{ asset('images/pages/branch/กรุงทพและปริมณทล.png') }}" alt="card" class="img-fluid">
                </div>
                <div class="col-md-6 col-lg-3 text-center p-3 d-flex flex-column justify-content-center align-items-start">
                    <img src="{{ asset('images/pages/branch/ภาคตะวันออกเฉียงเหนือ.png') }}" alt="card" class="img-fluid">
                </div>

            </div>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                $(document).ready(function() {
                    $(".dropdown-toggle-custom").on("click", function() {
                        let icon = $(this).find(".dropdown-icon");
                        let dropdownMenu = $(this).next(".dropdown-menu");

                        // ปิดไอคอน dropdown อื่นก่อน
                        $(".dropdown-icon").not(icon).removeClass("rotate");

                        // สลับสถานะไอคอนของปุ่มที่กด
                        icon.toggleClass("rotate");

                        // เปิด/ปิด dropdown
                        if (dropdownMenu.hasClass("show")) {
                            dropdownMenu.removeClass("show");
                        } else {
                            dropdownMenu.addClass("show");
                        }
                    });

                    // เมื่อกดที่อื่นให้ไอคอนกลับคืนสภาพเดิม
                    $(document).on("click", function(event) {
                        if (!$(event.target).closest(".dropdown").length) {
                            $(".dropdown-icon").removeClass("rotate");
                            $(".dropdown-menu").removeClass("show");
                        }
                    });
                });
            </script>

    </main>

@endsection
