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

    .bg-text{
        background-color: #2466b8;
    }

    .img-circle-border {
    width: 150px; /* กำหนดขนาดรูป */
    height: 150px; /* กำหนดขนาดรูป */
    border-radius: 50%; /* ทำให้เป็นวงกลม */
    border: 4px solid #2e7ed2; /* เส้นขอบสีน้ำเงิน */
    object-fit: cover; /* ปรับขนาดรูปให้พอดีกับกรอบ */
}
.bg-white-overflow {
    border-radius: 20px;
    overflow-x: auto; /* อนุญาตให้เลื่อนแนวนอน */
    overflow-y: hidden; /* ซ่อนการเลื่อนแนวตั้ง */
    white-space: nowrap; /* ป้องกันการขึ้นบรรทัดใหม่ */
    max-width: 100%; /* จำกัดความกว้างให้ไม่เกิน container */
    padding-bottom: 10px; /* ป้องกัน scrollbar ทับเนื้อหา */
    box-shadow: 4px 4px 10px #000000;
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
        <div class="bg-white p-3 bg-white-overflow mt-5">
            <div class="d-flex gap-4 flex-nowrap overflow-auto pb-3">
                @for ($i = 0; $i < 10; $i++)
                <!-- คอลัมน์แรก -->
                <div class="d-flex flex-column align-items-center">
                    <img src="{{asset('images/pages/section-5/บอส.png')}}" alt="img-person" class="img-circle-border">
                    <div class="bg-text p-2 text-white lh-1 rounded mt-2">
                        Name 1 <br>
                        <span class="text-dark">class 1</span>
                    </div>
        
                    <img src="{{asset('images/pages/section-5/บอส.png')}}" alt="img-person" class="img-circle-border mt-4">
                    <div class="bg-text p-2 text-white lh-1 rounded mt-2">
                        Name 2 <br>
                        <span class="text-dark">class 2</span>
                    </div>
                </div>
                @endfor
            </div>
        </div>
        
        
    </div>
    
</main>
