<style>
    .bg-section1 {
        background-image: url('{{ asset('images/pages/section-1/BG1.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        width:100%;
        padding: 2rem 0;
    }

    .text-title{
        font-size: 80px;
        color: white;
        text-shadow: 4px 4px 3px #3665ab;
    }

</style>

<main class="bg-section1 row">
    <div class="col-xl-6 d-flex flex-column justify-content-center align-items-center gap-3">
        <div class="text-title">
            เกี่ยวกับเรา?
        </div>
        <div class="text-sub text-center">
            เราคือผู้นำในการสร้างนวัตกรรมสำหรับหน่วยงานราชการ<br>
            ด้วยบริการครอบคลุม ทั้งการออกแบบ และพัฒนาเว็บไซต์ <br>
            ระบบชำระเงิน ระบบสารบรรณอิเล็กทรอนิกส์ การผลิตวิดีทัศน์ <br>
            เราพร้อมที่จะช่วยองค์กรของท่านก้าวสู่ยุคดิจิทัลอย่างสมบูรณ์แบบ
        </div>
        <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-2">
            <img src="{{asset('images/pages/section-1/อ่านหาพ่อง.png')}}" alt="image"  class="img-fluid">
            <img src="{{asset('images/pages/section-1/กูว่าแล้วมึงต้องอ่าน.png')}}" alt="image"  class="img-fluid">
        </div>
    </div>
    <div class="col-xl-6 d-flex justify-content-center align-items-center mt-5 mt-xl-0">
        <img src="{{asset('images/pages/section-1/total-logo.png')}}" alt="image" class="img-fluid">
    </div>
</main>
