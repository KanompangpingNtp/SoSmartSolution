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

    .bg-text {
        background-color: #2466b8;
    }

    .img-circle-border {
        width: 150px;
        /* กำหนดขนาดรูป */
        height: 150px;
        /* กำหนดขนาดรูป */
        border-radius: 50%;
        /* ทำให้เป็นวงกลม */
        border: 4px solid #2e7ed2;
        /* เส้นขอบสีน้ำเงิน */
        object-fit: cover;
        /* ปรับขนาดรูปให้พอดีกับกรอบ */
    }

    .bg-white-overflow {
        border-radius: 20px;
        overflow-x: auto;
        /* อนุญาตให้เลื่อนแนวนอน */
        overflow-y: hidden;
        /* ซ่อนการเลื่อนแนวตั้ง */
        white-space: nowrap;
        /* ป้องกันการขึ้นบรรทัดใหม่ */
        max-width: 100%;
        /* จำกัดความกว้างให้ไม่เกิน container */
        padding-bottom: 10px;
        /* ป้องกัน scrollbar ทับเนื้อหา */
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
            SOS มีทีมซัพพอร์ตของเรามุ่งมั่นช่วยเหลือคุณในทุกสถานการณ์ ด้วยความเชี่ยวชาญและประสบการณ์ในการดูแลลูกค้า
            เราพร้อมให้คำปรึกษาและแก้ไขปัญหาอย่างรวดเร็ว
        </div>
        <div class="bg-white p-3 bg-white-overflow mt-5">
            <div class="d-flex gap-4 flex-nowrap overflow-auto pb-3">
                    <div class="d-flex flex-column align-items-center justify-content-start">
                        <img src="{{ asset('images/pages/section-5/ออย.png') }}" alt="img-person"
                            class="img-circle-border">
                        <div class="bg-text text-center w-100 px-2 text-white lh-sm rounded mt-2"  style="font-size:18px; padding-top:1.25rem; padding-bottom:1.25rem;">
                            ณัฐพงษ์ วังสูงเนิน <br>
                            <span class="text-dark fw-bold" style="text-shadow: 1px 1px 3px #ffffff;">Black-End Developer</span>
                        </div>

                        <img src="{{ asset('images/pages/section-5/บอส.png') }}" alt="img-person"
                            class="img-circle-border mt-4">
                        <div class="bg-text text-center w-100 px-2 text-white lh-sm rounded mt-2"  style="font-size:18px; padding-top:1.25rem; padding-bottom:1.25rem;">
                            ณัฐชนน สีเหลียม <br>
                            <span class="text-dark fw-bold" style="text-shadow: 1px 1px 3px #ffffff;">Graphic Design</span>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center justify-content-start">
                        <img src="{{ asset('images/pages/section-5/N.png') }}" alt="img-person"
                            class="img-circle-border">
                        <div class="bg-text text-center w-100 px-2 text-white lh-sm  rounded mt-2 " style="font-size:18px; padding-top:1.25rem; padding-bottom:1.25rem;">
                            กมลาสน์ กลิ่นด้วง <br>
                            <span class="text-dark fw-bold" style="text-shadow: 1px 1px 3px #ffffff;">Front-End Developer</span>
                        </div>

                        <img src="{{ asset('images/pages/section-5/เก้า.png') }}" alt="img-person"
                            class="img-circle-border mt-4">
                        <div class="bg-text text-center w-100 px-2 text-white lh-sm  rounded mt-2 " style="font-size:18px; padding-top:1.25rem; padding-bottom:1.25rem;">
                            อดิศร ก้อนเงิน <br>
                            <span class="text-dark fw-bold" style="text-shadow: 1px 1px 3px #ffffff;">Graphic Design</span>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center justify-content-start">
                        <img src="{{ asset('images/pages/section-5/รตน.png') }}" alt="img-person"
                            class="img-circle-border">
                        <div class="bg-text text-center w-100 p-2 text-white lh-sm  rounded mt-2 " style="font-size:18px;">
                            รตน รัตนสิน <br>
                            <span class="text-dark fw-bold" style="text-shadow: 1px 1px 3px #ffffff;">ผู้จัดการแผนก <br>
                                ซอฟต์แวร์และดีไซน์</span>
                        </div>
                        <img src="{{ asset('images/pages/section-5/เอกไพริน.png') }}" alt="img-person"
                            class="img-circle-border mt-4">
                        <div class="bg-text text-center w-100 px-2 text-white lh-sm  rounded mt-2 " style="font-size:18px; padding-top:1.25rem; padding-bottom:1.25rem;">
                            เอกไพริน ลิ้มเที่ยงตรง <br>
                            <span class="text-dark fw-bold" style="text-shadow: 1px 1px 3px #ffffff;">ที่ปรึกษาอาวุโส</span>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center justify-content-start">
                        <img src="{{ asset('images/pages/section-5/รุ่งนภา.png') }}" alt="img-person"
                            class="img-circle-border">
                        <div class="bg-text text-center w-100 px-2 text-white lh-sm  rounded mt-2 " style="font-size:18px; padding-top:1.25rem; padding-bottom:1.25rem;">
                            รุ่งนภา พรมมี <br>
                            <span class="text-dark fw-bold" style="text-shadow: 1px 1px 3px #ffffff;">ซัพพอร์ต</span>
                        </div>
                        <img src="{{ asset('images/pages/section-5/พรชนา.png') }}" alt="img-person"
                            class="img-circle-border mt-4">
                        <div class="bg-text text-center w-100 px-2 text-white lh-sm  rounded mt-2 " style="font-size:18px; padding-top:1.25rem; padding-bottom:1.25rem;">
                            พรชนา คงฉาย <br>
                            <span class="text-dark fw-bold" style="text-shadow: 1px 1px 3px #ffffff;">ผู้จัดการลูกค้าสัมพันธ์</span>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center justify-content-start">
                        <img src="{{ asset('images/pages/section-5/ปิยะพร.png') }}" alt="img-person"
                            class="img-circle-border ">
                        <div class="bg-text text-center w-100 px-2 text-white lh-sm  rounded mt-2 " style="font-size:18px; padding-top:1.25rem; padding-bottom:1.25rem;">
                            ปิยะพร คำเกิ่ง <br>
                            <span class="text-dark fw-bold" style="text-shadow: 1px 1px 3px #ffffff;">ลูกค้าสัมพันธ์</span>
                        </div>

                        <img src="{{ asset('images/pages/section-5/วารุณี.png') }}" alt="img-person"
                            class="img-circle-border mt-4">
                        <div class="bg-text text-center w-100 px-2 text-white lh-sm  rounded mt-2 "style="font-size:18px; padding-top:1.25rem; padding-bottom:1.25rem;">
                            วารุณี โตมานิตย์ <br>
                            <span class="text-dark fw-bold" style="text-shadow: 1px 1px 3px #ffffff;">ผู้จัดการฝ่ายขาย</span>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center justify-content-start">
                        <img src="{{ asset('images/pages/section-5/สุภาพร.png') }}" alt="img-person"
                            class="img-circle-border ">
                        <div class="bg-text text-center w-100 px-2 text-white lh-sm  rounded mt-2 " style="font-size:18px; padding-top:1.25rem; padding-bottom:1.25rem;">
                            สุภาพร ฉิมทอง <br>
                            <span class="text-dark fw-bold" style="text-shadow: 1px 1px 3px #ffffff;">ผู้จัดการฝ่ายe-GP</span>
                        </div>

                        <img src="{{ asset('images/pages/section-5/พิมพ์มาดา.png') }}" alt="img-person"
                            class="img-circle-border mt-4">
                        <div class="bg-text text-center w-100 px-2 text-white lh-sm  rounded mt-2 "style="font-size:18px; padding-top:1.25rem; padding-bottom:1.25rem;">
                            พิมพ์มาดา เอกพจน์ <br>
                            <span class="text-dark fw-bold" style="text-shadow: 1px 1px 3px #ffffff;">ประชาสัมพันธ์</span>
                        </div>
                    </div>
            </div>
        </div>


    </div>

</main>
