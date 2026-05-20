@extends('user.layouts.home')

@section('content')
    <div class="container">
        <header style="margin-top: 50px;">
            <h1>Liên Hệ Với Chúng Tôi</h1>
            <p>Hãy liên hệ với chúng tôi nếu bạn có bất kỳ câu hỏi hoặc yêu cầu nào.</p>
        </header>

        <div class="contact-container">
            <div class="contact-info">
                <div class="info-item">
                    <div class="icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="details">
                        <h3>Số Điện Thoại</h3>
                        <p><a href="tel:+84123456789">+84 353 234 113</a></p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="details">
                        <h3>Email</h3>
                        <p><a href="mailto:info@example.com">htav2@gmail.com</a></p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="icon">
                        <i class="fab fa-youtube"></i>
                    </div>
                    <div class="details">
                        <h3>YouTube</h3>
                        <p><a href="https://www.youtube.com/@vuongleminh928" target="_blank">Kênh YouTube Của Chúng Tôi</a>
                        </p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="icon">
                        <i class="fab fa-facebook"></i>
                    </div>
                    <div class="details">
                        <h3>Facebook</h3>
                        <p><a href="https://www.facebook.com/le.minh.vuong.427242" target="_blank">Trang Facebook Chính
                                Thức</a></p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="details">
                        <h3>Trụ Sở Chính</h3>
                        <p>19 Ngõ 187 Đường Phú Diễn, Phú Diễn, Bắc Từ Liêm, Việt Nam </p>
                    </div>
                </div>
            </div>
            <div class="map-container">
                <h2>Vị Trí Trụ Sở Trên Bản Đồ</h2>
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.622408773394!2d105.76057427597007!3d21.047789187123293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454c37502332d%3A0xb9016344d786387f!2zMTkgTmfDtSAxODcgUGjDuiBEaeG7hW4sIFBow7ogRGnhu4VuLCBC4bqvYyBU4burIExpw6ptLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1747904481476!5m2!1svi!2s"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
