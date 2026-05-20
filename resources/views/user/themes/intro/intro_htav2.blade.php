@extends('user.layouts.home')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/user/css/intro.css') }}">
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <div class="hero-left">
                <!-- <div class="hero-logo-banner">
                                                                                                          <img src="HTAV2.png" alt="HTAV2 Logo" />
                                                                                                        </div> -->
                <ul class="hero-features">
                    <li><i class="fas fa-check-circle"></i> BEST REFERENCE</li>
                    <li><i class="fas fa-check-circle"></i> DIVERSE EXERCISES</li>
                </ul>
                <div class="platform-badge">
                    <h2>ONLINE<br />LEARNING<br />PLATFORMS</h2>
                </div>
                <div class="programming-skills">
                    <ul>
                        <li><i class="fas fa-code"></i> PROGRAMMING LANGUAGE</li>
                        <li><i class="fas fa-laptop-code"></i> CODING SKILL</li>
                        <li><i class="fas fa-puzzle-piece"></i> PROBLEM SOLVING SKILL</li>
                        <li>
                            <i class="fas fa-project-diagram"></i> DATA STRUCTURE AND
                            ALGORITHM
                        </li>
                        <li><i class="fas fa-brain"></i> IMPROVE LOGICAL THINKING</li>
                    </ul>
                </div>
            </div>

            <div class="hero-right">
                <div class="hero-image-container">
                    <div class="online-learning-badge">
                        <span>WATCH YOUR</span>
                        <h3>ONLINE<br />LEARNING</h3>
                        <div class="circle-image">
                            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80"
                                alt="Student learning" />
                        </div>
                    </div>
                    <div class="instructor-image">
                        <img src="https://bcp.cdnchinhphu.vn/334894974524682240/2023/9/20/hinh-thuc-ky-luat-sinh-vien-dai-hoc-16951796021201196200177.jpeg"
                            alt="Instructor" />
                    </div>
                    <div class="join-now">
                        <a href="{{ route('user.index') }}" class="join-button">JOIN NOW!</a>
                        <div class="contact-info">
                            <p><i class="fas fa-globe"></i> htav2.com.vn</p>
                            <p><i class="fas fa-phone"></i> 0353234113</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hero Stats -->
        <div class="hero-stats">
            <div class="container"></div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="skills-section">
        <div class="container">
            <div class="skills-content">
                <div class="skills-text">
                    <h2>Những kỹ năng mà khóa học đem lại cho học viên</h2>
                    <p>
                        Với những bài giảng chất lượng và bài tập phong phú cùng hệ thống
                        chatbot tự động, HTAV2 sẽ đem lại cho người học nhiều kỹ năng rất
                        giá trị.
                    </p>
                </div>
                <div class="skills-list">
                    <div class="skill-item">
                        <div class="skill-icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="skill-text">
                            <h3>Nền tảng kỹ thuật lập trình vững chắc</h3>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="skill-text">
                            <h3>Nâng cao kỹ năng giải quyết bài toán</h3>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="skill-text">
                            <h3>
                                Làm quen với các cấu trúc dữ liệu và giải thuật quan trọng
                            </h3>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="skill-text">
                            <h3>Nâng cao tư duy logic trong lập trình</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About HTAV2 Section -->
    <section class="about-section">
        <div class="container">
            <div class="about-content">
                <div class="about-image">
                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-VQGMm6M6JRrqLhPK5hhE8jL7khYAVy.png"
                        alt="Về HTAV2" class="about-main-image" />
                    <div class="about-logo">
                        <div class="logo-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <h3>HTAV2</h3>
                    </div>
                </div>
                <div class="about-text">
                    <h2>Về HTAV2</h2>
                    <p>
                        HTAV2 là một đội nhóm gồm các Lập trình viên hiện đang làm việc ở
                        nhiều lĩnh vực khác nhau nhưng có chung niềm đam mê với giảng dạy
                        và chia sẻ kiến thức.
                    </p>
                    <p>
                        HTAV2 luôn cố gắng đổi mới, trau dồi kỹ năng, đón nhận đóng góp,
                        khắc phục những điểm chưa tốt để mang đến cho các bạn học viên
                        những khóa học lập trình với chất lượng cao nhất
                    </p>

                    <div class="about-features">
                        <div class="about-feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                            <div class="feature-text">
                                <h3>Giảng viên giàu kinh nghiệm</h3>
                            </div>
                        </div>
                        <div class="about-feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-tasks"></i>
                            </div>
                            <div class="feature-text">
                                <h3>Bài giảng và bài tập chất lượng</h3>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('user.index') }}" class="course-list-btn">
                        Danh Sách Khóa Học
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Development Strategy Section -->
    <section class="strategy-section">
        <div class="container">
            <h2 class="section-title">CHIẾN LƯỢC PHÁT TRIỂN</h2>

            <div class="strategy-item">
                <div class="strategy-content">
                    <h3>1. Coi trọng đào tạo và phát triển nhân tài</h3>
                    <p>
                        HTAV2 tin rằng sản phẩm tuyệt vời chỉ có thể tạo ra bởi những con
                        người tài năng. Công ty muốn tăng trưởng nhanh bền vững phải có
                        những nhân sự xuất sắc có tâm, có tài. Vì vậy, HTAV2 không ngừng
                        tìm kiếm và phát triển những cá nhân tài năng cùng xây dựng bộ
                        máy. Nếu bạn muốn được làm cùng với những người giỏi giảng dạy?
                        Bạn muốn được chủ động quyết định trong công việc của mình? Và bạn
                        muốn được tưởng thưởng xứng đáng? Hãy về với HTAV2 😍
                    </p>
                </div>
            </div>

            <div class="strategy-item with-image">
                <div class="strategy-content">
                    <h3>2. Sản phẩm làm ra là phải chất lượng, là phải bán được</h3>
                    <p>
                        HTAV2 làm ra những sản phẩm phục vụ thị trường lớn, chất lượng và
                        hiệu quả thực sự, đáp ứng nhu cầu cấp thiết của học viên. Mỗi khóa
                        học, mỗi bài giảng của HTAV2 không phải được làm ra bởi chỉ một
                        người. Mà đó là tổng hòa chuyên môn của người dạy, sales,
                        marketing, lập trình viên, đạo diễn hình ảnh và âm thanh... Khúc
                        nào cũng phải có benchmarking, tự tin đúng cạnh các sản phẩm của
                        thế giới. Tức là làm một cách thông minh và xâu chuỗi nhiều loại
                        hiểu biết khác nhau.
                    </p>
                </div>
                <div class="strategy-image">
                    <img src="https://www.pace.edu.vn/uploads/news/2015/11/13/shutterstock162650096jpg.jpg"
                        alt="Học viên HTAV2 trong lớp học" />
                </div>
            </div>

            <div class="strategy-item with-image image-left">
                <div class="strategy-content">
                    <h3>3. Tập trung vào khách hàng</h3>
                    <p>
                        Khi học lập trình phần đông học viên dễ bị mất định hướng, dễ nản
                        khi gặp khó khăn mà không ai giúp đỡ, nhiều khi thấy làm giống hệt
                        video rồi mà không chạy... Tại HTAV2, chúng tôi thấu hiểu những
                        khó khăn của các bạn, chúng tôi nỗ lực tạo ra giáo trình và hệ
                        thống bài tập, hệ thống hỗ trợ các bạn tối đa trong quá trình học
                        tập.
                    </p>
                    <p>
                        HTAV2 tin rằng trong mỗi chúng ta luôn tồn tại một "đứa trẻ", để
                        đứa trẻ đó học tốt một kiến thức mới thì sản phẩm không thể chỉ
                        thành công về mặt học thuật, mà phải tạo được thật nhiều cảm xúc.
                        HTAV2 thiết kế hành trình cảm xúc đó bằng hình ảnh, âm thanh, bằng
                        các nội dung xu hướng, bằng cách ghi nhận sự nỗ lực của học viên
                        và luôn tạo cảm hứng học tập.
                    </p>
                </div>
                <div class="strategy-image">
                    <img src="https://images.careerviet.vn/content/images/mo-ra-nhieu-co-hoi-tiep-xuc-voi-cong-nghe-careerbuilder.jpg"
                        alt="Hỗ trợ học viên HTAV2" />
                </div>
            </div>

            <div class="strategy-item">
                <div class="strategy-content">
                    <h3>4. Bán hàng và chăm sóc khách hàng bền vững</h3>
                    <p>
                        Việc bán hàng sẽ trở nên rất dễ dàng khi khách hàng sử dụng hiệu
                        quả và truyền tai nhau về sản phẩm. Thành công về mặt doanh số
                        không quan trọng bằng việc người học đánh giá cao sản phẩm sau đó
                        tiếp tục sử dụng, thậm chí còn giới thiệu cho người thân và bạn
                        bè. HTAV2 là một trong những công ty giáo dục, có lẽ là duy nhất
                        đầu tư rất nhiều ngân sách vào việc chăm sóc khách hàng, thay vì
                        bỏ tiền đi đánh bóng tên tuổi. HTAV2 sẽ tìm mọi cách để đảm bảo
                        được con số 99% khách hàng hài lòng.
                    </p>
                    <p>
                        1% còn lại là những con người của HTAV2, chúng tôi không cho phép
                        bản thân mình cảm thấy hài lòng hoàn toàn về sản phẩm. Đó chính là
                        động lực để chúng tôi liên tục cải thiện, liên tục phát triển và
                        tạo ra các sản phẩm hỗ trợ học tập chất lượng cho cộng đồng.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <h2 class="section-title">Cảm nhận của học viên</h2>
            <div class="testimonials-container">
                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="testimonial-avatar">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Trương Xuân Giang" />
                        </div>
                        <div class="testimonial-info">
                            <h3>Trương Xuân Giang</h3>
                            <p>Lập trình C/C++</p>
                        </div>
                        <div class="quote-icon">
                            <i class="fas fa-quote-right"></i>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <p>
                            "Chất lượng giảng dạy tuyệt vời, giảng viên cùng trợ giảng nhiệt
                            tình nhiệt huyết, giảng dạy dễ hiểu giúp học viên dễ tiếp thu
                            với kiến thức mới. ? Cảm ơn HTAV2 đã mang tới trải nghiệm tuyệt
                            vời đến cho mình và các bạn học viên. Mình sẽ giới thiệu cho bạn
                            bè với người thân muốn học lập trình tới HTAV2"
                        </p>
                    </div>
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="testimonial-avatar">
                            <img src="https://randomuser.me/api/portraits/men/41.jpg" alt="Trần Nhật Nam" />
                        </div>
                        <div class="testimonial-info">
                            <h3>Trần Nhật Nam</h3>
                            <p>Lập trình C++ và Java</p>
                        </div>
                        <div class="quote-icon">
                            <i class="fas fa-quote-right"></i>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <p>
                            "Khóa học quá đỉnh, quá chất lượng, quá dễ hiểu quá tuyệt vời;
                            Thật không thể tin được !!!. Giảng viên siêu dễ thương, hài
                            hước, gần gũi, dạy dễ hiểu và hỗ trợ nhiệt tình. Hiện tại mình
                            đang tham gia khóa Java và C++ cơ bản đến nâng cao, cảm thấy rất
                            đáng đồng tiền và bất ngờ tuy học phí rất phải chăng"
                        </p>
                    </div>
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="testimonial-avatar">
                            <img src="https://randomuser.me/api/portraits/men/55.jpg" alt="Lương Thanh Huy" />
                        </div>
                        <div class="testimonial-info">
                            <h3>Lương Thanh Huy</h3>
                            <p>Lập trình C++, Cấu trúc dữ liệu và giải thuật, Java</p>
                        </div>
                        <div class="quote-icon">
                            <i class="fas fa-quote-right"></i>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <p>
                            "Chất lượng giảng dạy của HTAV2 thật sự rất hay, bài tập đầy đủ
                            các dạng từ cơ bản tới nâng cao, đăng ký học ở
                            đây khả năng code của em ngày một tốt lên rõ rệt, không còn sợ
                            các bài tập khó ở trường nữa. Cảm ơn HTAV2 đã giúp em có thành
                            quả như hôm nay"
                        </p>
                    </div>
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Button -->
    <div class="contact-button">
        <a href="{{ route('user.contact.show') }}" class="chat-btn">
            <i class="fas fa-comments"></i>
            <span>Liên hệ</span>
        </a>
    </div>

    {{-- <!-- Back to Top Button -->
    <div class="back-to-top">
        <a href="#" class="top-btn">
            <i class="fas fa-arrow-up"></i>
        </a>
    </div> --}}
@endsection
