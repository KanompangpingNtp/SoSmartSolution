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

    .vedio {
            width: 860px;
            height: 515px;
        }

        @media (max-width: 531px) {
            .vedio {
                width: 400px;
                /* ทำให้ขนาดแผนที่ปรับตามขนาดหน้าจอ */
                height: 400px;
                /* ปรับความสูงโดยอัตโนมัติ */
            }
        }
</style>

<main class="bg-section2 d-flex flex-column justify-content-center align-items-center gap-3">
    <div class="text-title2">
        <img src="{{ asset('images/pages/section-2/ดาว.png') }}" alt="star" class="star-icon">
        บริการ
    </div>
    <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3">
        <a style="cursor: pointer" class="btn-hover-effect" id="show-img" onclick="showImg()">
            <img src="{{ asset('images/pages/section-2/btn-1.png') }}" alt="btn" width="200">
        </a>
        <a style="cursor: pointer" class="btn-hover-effect" id="show-vedio" onclick="showVedio()">
            <img src="{{ asset('images/pages/section-2/btn-2.png') }}" alt="btn" width="200">
        </a>
    </div>
    
    <div class="container d-flex justify-content-center align-items-center">
        <div class="row justify-content-center align-items-center" id="img">
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
        <div id="vedio" style="display: none;" class="vedio">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/fXw1PERFGMs?start=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    
    <script>
        function showImg() {
            document.getElementById('img').style.display = 'flex';  // แสดงรูปภาพ
            document.getElementById('vedio').style.display = 'none'; // ซ่อนวีดีโอ
        }
    
        function showVedio() {
            document.getElementById('vedio').style.display = 'block'; // แสดงวีดีโอ
            document.getElementById('img').style.display = 'none';   // ซ่อนรูปภาพ
        }
    </script>
    
    
    <a href="#" class="btn-hover-effect">
        <img src="{{ asset('images/pages/section-2/เพื่มเติม.png') }}" alt="btn">
    </a>

</main>
