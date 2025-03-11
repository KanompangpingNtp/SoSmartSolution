<style>
    .bg-section3 {
        background-image: url('{{ asset('images/pages/section-3/BG3.png') }}');
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
    transform: scale(1.1); /* ขยายใหญ่ขึ้น 10% */
    box-shadow: 0px 8px 20px rgba(255, 255, 255, 1); /* เพิ่มเงาเมื่อ hover */
}

</style>

<main class="bg-section3 d-flex flex-column justify-content-center align-items-center gap-3">
    <div class="text-title3">
        <img src="{{ asset('images/pages/section-3/ดาว.png') }}" alt="star" class="star-icon">
        กระบวนการ
    </div>
    <div class="container d-flex flex-column flex-lg-row justify-content-center align-items-center">
        <div class="row justify-content-center">
            <div class="col-6 col-md-4">
                <img src="{{asset('images/pages/section-3/1.png')}}" alt="image" class="img-fluid mb-3 shadow-white hover-scale">
            </div>
            <div class="col-6 col-md-4">
                <img src="{{asset('images/pages/section-3/2.png')}}" alt="image" class="img-fluid mb-3 shadow-white hover-scale">
            </div>
            <div class="col-6 col-md-4">
                <img src="{{asset('images/pages/section-3/3.png')}}" alt="image" class="img-fluid mb-3 shadow-white hover-scale">
            </div>
            <div class="col-6 col-md-4">
                <img src="{{asset('images/pages/section-3/4.png')}}" alt="image" class="img-fluid mb-3 shadow-white hover-scale">
            </div>
            <div class="col-6 col-md-4">
                <img src="{{asset('images/pages/section-3/5.png')}}" alt="image" class="img-fluid mb-3 shadow-white hover-scale">
            </div>
            <div class="col-6 col-md-4">
                <img src="{{asset('images/pages/section-3/6.png')}}" alt="image" class="img-fluid mb-3 shadow-white hover-scale">
            </div>
        </div>
        
        <img src="{{asset('images/pages/section-3/น้อง.png')}}" alt="emo" class="ms-3">
    </div>
    <div class="container">
        <div class="text-sub text-center">
            SOS เป็นนองค์กรที่มุ่งเน้นการทำงานอย่างมีประสิทธิภาพและมืออาชีพโดยมีขั้นตอนการทำงานที่ชัดเจนและเป็นระบบ เริ่มจากการวางแผนที่ดีเพื่อให้ทุกคนในทีมมีเป้าหมายเดียวกัน
        </div>
    </div>
</main>
