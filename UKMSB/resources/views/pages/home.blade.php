@extends('layouts.main')

@section('container')
    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Welcome to UKMSB</h1>
                        <p class="mb-4">Experience the Thrill of the Game with Us</p>
                        <p><a href="/login" class="btn btn-secondary me-2">Login</a></p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-img-wrap">
                        <img src="images/logo_UKM_Sepakbola.png" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <!-- Start Why Choose Us Section -->
    <div class="why-choose-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <h2 class="section-title">Why Choose Us</h2>
                    <p>Come join us in realizing the nation's dreams in the world of football!</p>

                    <div class="row my-5">
                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <!--<div class="icon">
              <img src="images/truck.svg" alt="Image" class="imf-fluid">
             </div> -->
                                <h3>Skill and Competency Development</h3>
                                <p>Joining this UKM can help you develop specific skills and competencies related to the
                                    field of the UKM.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <!--<div class="icon">
              <img src="images/bag.svg" alt="Image" class="imf-fluid">
             </div> -->
                                <h3>Social Experience and Networking</h3>
                                <p>Being a part of this UKM allows you to meet new people and expand your social network.
                                </p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <!--<div class="icon">
              <img src="images/support.svg" alt="Image" class="imf-fluid">
             </div> -->
                                <h3>Leadership and Responsibility Growth</h3>
                                <p>Being active in this UKM can help you develop leadership skills and learn how to manage
                                    responsibilities.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <!--<div class="icon">
              <img src="images/return.svg" alt="Image" class="imf-fluid">
             </div> -->
                                <h3>Enriching Your Campus Experience</h3>
                                <p>Engagement in UKMs can enrich your overall campus experience. It makes your college years
                                    more colorful and memorable.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="img-wrap">
                        <img src="images/FUTSAL.jpg" alt="Image" class="img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Why Choose Us Section -->

    <!-- Start Testimonial Slider -->
    <div class="testimonial-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">
                    <h2 class="section-title">Testimonials</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="testimonial-slider-wrap text-center">

                        <div id="testimonial-nav">
                            <span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
                            <span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
                        </div>

                        <div class="testimonial-slider">

                            <div class="item">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 mx-auto">

                                        <div class="testimonial-block text-center">
                                            <blockquote class="mb-5">
                                                <p>&ldquo;Bergabung dengan UKM Sepak Bola Universitas Airlangga adalah
                                                    keputusan terbaik dalam hidup saya selama menempuh pendidikan di sini.
                                                    Saya merasa seperti menjadi bagian dari keluarga besar yang memiliki
                                                    semangat dan dedikasi yang tinggi terhadap olahraga ini. Selain
                                                    meningkatkan kemampuan teknis sepak bola saya, saya juga belajar banyak
                                                    tentang kerja sama tim, kepemimpinan, dan mengelola tekanan dalam
                                                    pertandingan. Terima kasih UKM Sepak Bola UA!.&rdquo;</p>
                                            </blockquote>

                                            <div class="author-info">
                                                <div class="author-pic">
                                                    <img src="images/joko.jpg" alt="Maria Jones" class="img-fluid">
                                                </div>
                                                <h3 class="font-weight-bold">Joko Jones</h3>
                                                <span class="position d-block mb-3">Ilmu Komunikasi '19</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- END item -->

                            <div class="item">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 mx-auto">

                                        <div class="testimonial-block text-center">
                                            <blockquote class="mb-5">
                                                <p>&ldquo;Bergabung dengan UKM Sepak Bola Universitas Airlangga adalah
                                                    fondasi penting dalam membentuk karakter dan keterampilan hidup saya.
                                                    Melalui latihan yang intensif dan kompetisi di lapangan, saya belajar
                                                    menghadapi tantangan dengan penuh semangat dan kesabaran. Keterampilan
                                                    kepemimpinan dan kerja sama tim yang saya dapatkan di UKM ini juga
                                                    membantu saya dalam karier profesional saya saat ini. Saya selalu
                                                    bersyukur menjadi bagian dari komunitas ini.&rdquo;</p>
                                            </blockquote>

                                            <div class="author-info">
                                                <div class="author-pic">
                                                    <img src="images/budi.jpg" alt="Maria Jones" class="img-fluid">
                                                </div>
                                                <h3 class="font-weight-bold">Michael Budi</h3>
                                                <span class="position d-block mb-3">Teknik Industri '20</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- END item -->

                            <div class="item">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 mx-auto">

                                        <div class="testimonial-block text-center">
                                            <blockquote class="mb-5">
                                                <p>&ldquo;UKM Sepak Bola Universitas Airlangga memberikan lebih dari sekadar
                                                    latihan sepak bola. Saya memiliki kesempatan untuk mengasah keterampilan
                                                    kepemimpinan dan organisasi melalui peran saya sebagai Ketua UKM. Hal
                                                    ini membuka jalan bagi saya untuk memimpin tim dengan visi dan strategi
                                                    yang jelas. Pengalaman ini tidak hanya memberikan wawasan tambahan dalam
                                                    dunia olahraga, tetapi juga membentuk saya sebagai pemimpin yang tangguh
                                                    di luar lapangan hijau.&rdquo;</p>
                                            </blockquote>

                                            <div class="author-info">
                                                <div class="author-pic">
                                                    <img src="images/siti.jpg" alt="Maria Jones" class="img-fluid">
                                                </div>
                                                <h3 class="font-weight-bold">Siti Gou</h3>
                                                <span class="position d-block mb-3">Teknik Informatika '22</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- END item -->

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonial Slider -->

    <!-- Start Blog Section -->
    <div class="blog-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6">
                    <h2 class="section-title">Recent Event</h2>
                </div>
                <div class="col-md-6 text-start text-md-end">
                    <a href="#" class="more">View All Posts</a>
                </div>
            </div>

            <div class="row">

                <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                    <div class="post-entry">
                        <a href="#" class="post-thumbnail"><img src="images/afc.jpg" alt="Image"
                                class="img-fluid"></a>
                        <div class="post-content-entry">
                            <h3><a href="#">UKMSB Menguasai Lapangan: Tim Sepakbola Raih Kemenangan Gemilang!</a>
                            </h3>
                            <div class="meta">
                                <span>by <a href="#">Ghandi Sughandi</a></span> <span>on <a href="#">Oct 19,
                                        2023</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                    <div class="post-entry">
                        <a href="#" class="post-thumbnail"><img src="images/indomalay.jpg" alt="Image"
                                class="img-fluid"></a>
                        <div class="post-content-entry">
                            <h3><a href="#">Bintang Muda UKMSB Bersinar di Kompetisi Sepakbola Regional</a></h3>
                            <div class="meta">
                                <span>by <a href="#">Dani Arjuna</a></span> <span>on <a href="#">Oct 15,
                                        2023</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                    <div class="post-entry">
                        <a href="#" class="post-thumbnail"><img src="images/gambar_mancity.jpeg" alt="Image"
                                class="img-fluid" height="800px" width="700px"></a>
                        <div class="post-content-entry">
                            <h3><a href="#">Prestasi Luar Biasa: UKMSB Menyapu Bersih Kompetisi Sepakbola
                                    Interkampus</a></h3>
                            <div class="meta">
                                <span>by <a href="#">Rafifun Lanciau</a></span> <span>on <a href="#">Oct 12,
                                        2023</a></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Blog Section -->
@endsection
