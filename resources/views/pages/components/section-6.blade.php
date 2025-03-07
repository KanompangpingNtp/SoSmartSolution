<style>
    .bg-section5 {
        background-image: url('{{ asset('images/pages/section-5/bg-5.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        width: 100%;
        padding: 2rem 0;
    }

    .text-title5 {
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

</style>

<main class="bg-section5 d-flex flex-column justify-content-start align-items-center gap-3">
    <div class="text-title5">
        <img src="{{ asset('images/pages/section-3/ดาว.png') }}" alt="star" class="star-icon">
        ทีมสนับสนุน
    </div>
    <div class="container d-flex flex-column">
        <div class="text-sub text-center">
            SOS มีทีมซัพพอร์ตของเรามุ่งมั่นช่วยเหลือคุณในทุกสถานการณ์ ด้วยความเชี่ยวชาญและประสบการณ์ในการดูแลลูกค้า เราพร้อมให้คำปรึกษาและแก้ไขปัญหาอย่างรวดเร็ว
        </div>
        <div class="bg-white p-3" style="border-radius: 20px;">
            <div class="row">
                <div class="col-lg-3 d-flex flex-column justify-content-center align-items-center">
                    <img src="{{asset('images/pages/section-6/บอส.png')}}" alt="img-person">
                </div>
            </div>
        </div>
    </div>
    
</main>
