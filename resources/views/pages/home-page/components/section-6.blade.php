<style>
    .bg-section6 {
        background-image: url('{{ asset('images/pages/section-6/BG6.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 20vh;
        padding: 3rem 0;
        width: 100%;
    }

    .text-title6 {
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

</style>

<main class="bg-section6 d-flex flex-column justify-content-start align-items-center gap-3 pb-5 pt-1">
    <div class="text-title6 py-3 text-center mt-5 mt-xl-0 w-100" style="box-shadow: 0 4px 10px rgba(0, 123, 255, 0.3);">
        <img src="{{ asset('images/pages/section-3/ดาว.png') }}" alt="star" class="star-icon">
        ติดต่อ
    </div>
    <div class="container d-flex flex-column align-items-center" style="margin-top: 7rem;">
        <div class="d-flex flex-column justify-content-center align-items-start  gap-4">
            <div class="d-flex align-item-center">
                <img src="{{asset('images/pages/section-6/location.png')}}" alt="icon" width="30" class="me-3">
                38/168 ตำบลบางน้ำเปรี้ยว จังหวัดฉะเชิงเทรา 24150
            </div>
            <div class="d-flex align-item-center">
                <img src="{{asset('images/pages/section-6/phone.png')}}" alt="icon" width="30" class="me-3">
                064-980-5946
            </div>
            <div class="d-flex align-item-center">
                <img src="{{asset('images/pages/section-6/mail.png')}}" alt="icon" width="40" class="me-3">
                sosmartsolution@gmail.com
            </div>
        </div>
        <div class="d-flex flex-column ustify-content-center align-items-center gap-3 mt-5 p-3" style=" box-shadow: 4px 4px 10px #ffffff; border-radius:20px;">
            <img src="{{asset('images/pages/section-6/SOS-line.png')}}" alt="img" width="200">
            <div class="text-muted" style="font-size: 16px;">
                ID Line : @sosmart
            </div>
            <a href="#" class="btn-hover-effect">
                <img src="{{asset('images/pages/section-6/up-arrow.png')}}" alt="btn-arrow">
            </a>
        </div>
    </div>
    
</main>
