<style>
    .bg-section4 {
        background-image: url('{{ asset('images/pages/section-4/bg-4.png') }}');
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
    box-shadow: 0px 4px 10px rgba(255, 255, 255, 0.8); /* เงาสีขาว */
    border-radius: 20px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.hover-scale:hover {
    transform: scale(1.02); /* ขยายใหญ่ขึ้น 10% */
    box-shadow: 0px 8px 20px rgba(255, 255, 255, 1); /* เพิ่มเงาเมื่อ hover */
}

</style>

<main class="bg-section4 d-flex flex-column justify-content-center align-items-center gap-3">
    <div class="text-title3">
        <img src="{{ asset('images/pages/section-3/ดาว.png') }}" alt="star" class="star-icon">
        กิจกรรม CSR
    </div>
    <div class="container d-flex flex-column flex-lg-row justify-content-center align-items-center">
        <div class="row justify-content-center align-items-start">
            <div class="col-6 col-md-4 d-flex flex-column justify-content-center align-items-start text-center">
                <img src="{{asset('images/pages/section-4/1.jpg')}}" alt="image" class="img-fluid mb-3 shadow-white hover-scale">
                <p class="fs-6 rounded-4 w-100 px-2 py-2">ช่วยสนับสนุนการวางระบบซิตี้เพื่อส่งเสริมความเป็นอยู่ที่ดีในชุมชนในหัว้ข้อ สมาร์ทพีเพิล</p>
            </div>
            <div class="col-6 col-md-4 d-flex flex-column justify-content-center align-items-start text-center">
                <img src="{{asset('images/pages/section-4/2.jpg')}}" alt="image" class="img-fluid mb-3 shadow-white hover-scale">
                <p class="fs-5 rounded-4 w-100 px-2 py-3">ให้ทุนอาหารกลางวันเด็ก</p>
            </div>
            <div class="col-12 col-md-4 d-flex flex-column justify-content-center align-items-start text-center">
                <img src="{{asset('images/pages/section-4/3.jpg')}}" alt="image" class="img-fluid mb-3 shadow-white hover-scale">
                <p class="fs-5 rounded-4 w-100 px-2">ให้ความรู้กับหน่วยงานราชการเรื่องการจัดการเอกสารอิเล็กทรอนิกส์</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="text-sub text-center">
            CSR หมายถึง ความรับผิดชอบต่อสังคมและสิ่งแวดล้อมขององค์กรดำเนินกิจการภายใต้หลักจริยธรรมและการจัดการที่ดี โดยรับผิดชอบสังคมและสิ่งแวดล้อมทั้งภายในและภายนนอกองค์กร อันนนำไปสู่การพัฒนาที่ยั่งยืน
        </div>
    </div>
</main>
