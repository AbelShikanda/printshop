@extends('layouts.app')

@section('content')
    @include('layouts.hero_single')

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-1"></div>
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-6 col-md-6 col-lg-4">
                            <div class="work-box">
                                <a href="assets/img/work-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                                    <div class="work-img">
                                        <img src="assets/img/work-1.jpg" alt="" class="img-fluid">
                                    </div>
                                </a>
                                <div class="work-content">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <h2 class="w-title">Lorem impsum dolor</h2>
                                            <div class="w-more">
                                                <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep.
                                                    2018</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="w-like">
                                                <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-4">
                            <div class="work-box">
                                <a href="assets/img/work-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                                    <div class="work-img">
                                        <img src="assets/img/work-2.jpg" alt="" class="img-fluid">
                                    </div>
                                </a>
                                <div class="work-content">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <h2 class="w-title">Loreda Cuno Nere</h2>
                                            <div class="w-more">
                                                <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep.
                                                    2018</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="w-like">
                                                <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-4">
                            <div class="work-box">
                                <a href="assets/img/work-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                                    <div class="work-img">
                                        <img src="assets/img/work-3.jpg" alt="" class="img-fluid">
                                    </div>
                                </a>
                                <div class="work-content">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <h2 class="w-title">Mavrito Lana Dere</h2>
                                            <div class="w-more">
                                                <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep.
                                                    2018</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="w-like">
                                                <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-4">
                            <div class="work-box">
                                <a href="assets/img/work-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                                    <div class="work-img">
                                        <img src="assets/img/work-4.jpg" alt="" class="img-fluid">
                                    </div>
                                </a>
                                <div class="work-content">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <h2 class="w-title">Bindo Laro Cado</h2>
                                            <div class="w-more">
                                                <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep.
                                                    2018</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="w-like">
                                                <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->
    
    @include('layouts.footer')
@endsection
