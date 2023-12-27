@extends('layouts.main')

@section('container')
    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>About Us</h1>
                        <p class="mb-4">Get to know our membership more closely!</p>
                        @guest
                            <p><a href="/login" class="btn btn-secondary me-2">Login</a></p>
                        @endguest
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

    <!-- Start Team Section -->
    <div class="untree_co-section">
        <div class="container">

            <div class="row mb-5">
                <div class="col-lg-5 mx-auto text-center">
                    <h2 class="section-title">Our Team</h2>
                </div>
            </div>

            <div class="row">

                <!-- Start Column 1 -->
                <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                    <img src="images/person_1.jpg" class="img-fluid mb-5">
                    <h3 clas><a href="#"><span class="">Ahmadian</span> Zahri</a></h3>
                    <span class="d-block position mb-4">Ketua Umum, UKMSB.</span>
                    <p>Ahmadian Zahri Ramadhan adalah Ketua Umum Fakultas Vokasi di UKMSB, membawa semangat yang tinggi
                        dalam UKMSB. Dengan latar belakang yang kuat, kepemimpinannya telah membawa inovasi dan perubahan
                        positif bagi UKMSB.</p>
                    <p class="mb-0"><a href="#" class="more dark">Learn More <span
                                class="icon-arrow_forward"></span></a></p>
                </div>
                <!-- End Column 1 -->

                <!-- Start Column 2 -->
                <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                    <img src="images/person_2.jpg" class="img-fluid mb-5">

                    <h3 clas><a href="#"><span class="">Dani</span> Ruliansyah</a></h3>
                    <span class="d-block position mb-4">Sekretaris, UKMSB.</span>
                    <p>Dani Ruliansyah, Fakultas Ekonomi dan Bisnis, sekretaris di UKMSB, membawa keahlian administratif
                        yang luar biasa. Dengan latar belakang di bidang ekonomi, ia memainkan peran penting dalam mendukung
                        operasional fakultas.</p>
                    <p class="mb-0"><a href="#" class="more dark">Learn More <span
                                class="icon-arrow_forward"></span></a></p>

                </div>
                <!-- End Column 2 -->

                <!-- Start Column 3 -->
                <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                    <img src="images/person_3.jpg" class="img-fluid mb-5">
                    <h3 clas><a href="#"><span class="">Rizky</span> Alvaro</a></h3>
                    <span class="d-block position mb-4">Bendahara, UKMSB.</span>
                    <p>Rizky Alvaro adalah Bendahara di Fakultas Hukum UKMSB, menunjukkan dedikasi tinggi dalam pengelolaan
                        keuangan. Dengan latar belakang di bidang hukum, ia membawa wawasan yang berharga dalam tanggung
                        jawabnya.</p>
                    <p class="mb-0"><a href="#" class="more dark">Learn More <span
                                class="icon-arrow_forward"></span></a></p>
                </div>
                <!-- End Column 3 -->

                <!-- Start Column 4 -->
                <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                    <img src="images/person_4.jpg" class="img-fluid mb-5">

                    <h3 clas><a href="#"><span class="">Alya</span> Jasmine</a></h3>
                    <span class="d-block position mb-4">Asisten Ketua, UKMSB.</span>
                    <p>Alya Jasmine adalah seorang mahasiswa Fakultas Ilmu Sosial dan Ilmu Politik (FISIP) yang menjabat
                        sebagai Asisten Ketua di UKMSB. Dengan dedikasi tinggi, Alya aktif terlibat dalam berbagai inisiatif
                        dan kegiatan organisasi.</p>
                    <p class="mb-0"><a href="#" class="more dark">Learn More <span
                                class="icon-arrow_forward"></span></a></p>


                </div>
                <!-- End Column 4 -->



            </div>
        </div>
    </div>
    <!-- End Team Section -->



    <!-- Start Testimonial Slider -->
    <div class="testimonial-section before-footer-section">
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
@endsection
