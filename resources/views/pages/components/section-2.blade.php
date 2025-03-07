<style>
    .bg-section2 {
        background-image: url('{{ asset('images/pages/section-2/bg-2a.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        width: 100%;
        padding: 2rem 0;
    }

    .text-title2 {
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

    .btn-hover-effect img {
        transition: all 0.3s ease-in-out;
    }

    .btn-hover-effect:hover img {
        transform: scale(1.02);
        filter: brightness(1.2);
        filter: drop-shadow(0px 5px 15px rgba(255, 255, 255, 0.8));
    }
</style>

<main class="bg-section2 d-flex flex-column justify-content-center align-items-center gap-3">
    <div class="text-title2">
        <img src="{{ asset('images/pages/section-2/ดาว.png') }}" alt="star" class="star-icon">
        บริการ
    </div>
    <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3">
        <a href="#" class="btn-hover-effect">
            <img src="{{ asset('images/pages/section-2/btn-1.png') }}" alt="btn" width="200">
        </a>
        <a href="#" class="btn-hover-effect">
            <img src="{{ asset('images/pages/section-2/btn-2.png') }}" alt="btn" width="200">
        </a>
    </div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-6 col-lg-3 text-center p-0">
                <img src="{{ asset('images/pages/section-2/Group 1.png') }}" alt="card" class="img-fluid">
            </div>
            <div class="col-6 col-lg-3 text-center p-0">
                <img src="{{ asset('images/pages/section-2/Group 2.png') }}" alt="card" class="img-fluid">
            </div>
            <div class="col-6 col-lg-3 text-center p-0">
                <img src="{{ asset('images/pages/section-2/Group 3.png') }}" alt="card" class="img-fluid">
            </div>
            <div class="col-6 col-lg-3 text-center p-0">
                <img src="{{ asset('images/pages/section-2/Group 4.png') }}" alt="card" class="img-fluid">
            </div>
        </div>
    </div>
    
    <a href="#" class="btn-hover-effect">
        <img src="{{ asset('images/pages/section-2/เพื่มเติม.png') }}" alt="btn">
    </a>

</main>
