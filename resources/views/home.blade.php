@extends('layouts.app')

@section('content')
    @include('layouts.hero')

    <!-- ======= Services Section ======= -->
    <section id="services" class="services-mf pt-5 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            Services
                        </h3>
                        <p class="subtitle-a">
                            Extraordinary Ink. A better way to print. Printing more for less.
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="service-box">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="bi bi-briefcase"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">APPAREL PRINTING</h2>
                            <p class="s-description text-center">
                                Promote yourself, connect and create awareness about your brand to your audience
                                with custom t-shirts, sweatshirts, hoodies, caps and polos. Digital media print with
                                excellent
                                quality on 100% cotton. br
                                #PickNPrint
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="service-box">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="bi bi-card-checklist"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">GRAPHIC DESIGN</h2>
                            <p class="s-description text-center">
                                We stay up-to date with emerging trends so you can create the foundation of your
                                image. Place no limits on your designs.
                                Be memorable through your logo, your colors and your brand. <br>
                                #BeNoticed
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="service-box">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="bi bi-bar-chart"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">TEMPLATE DESIGN</h2>
                            <p class="s-description text-center">
                                We also provide visual designs to help guide your business decisions. Blueprints to
                                help stanrdardize your brand, guide and
                                create inspiration while saving on time and energy.
                                Valuable for visual, digital and writing content. <br>
                                #printshopeld
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            Portfolio
                        </h3>
                        <p class="subtitle-a">
                            A small compilation of our best and most popular work.
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="mb-5 col-6 col-md-6 col-lg-4">
                    @include('layouts.partials.catalog')
                </div>
                <div class="mb-5 col-6 col-md-6 col-lg-4">
                    @include('layouts.partials.catalog')
                </div>
                <div class="mb-5 col-6 col-md-6 col-lg-4">
                    @include('layouts.partials.catalog')
                </div>
            </div>
        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Counter Section ======= -->
    <div class="section-counter paralax-mf bg-image" style="background-image: url(assets/img/counters-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container position-relative">
            <div class="row">
                <div class="col-6 col-sm-3 col-lg-3">
                    <div class="counter-box counter-box pt-4 pt-md-0">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="bi bi-check"></i></span>
                        </div>
                        <div class="counter-num">
                            <p data-purecounter-start="0" data-purecounter-end="450" data-purecounter-duration="1"
                                class="counter purecounter"></p>
                            <span class="counter-text">WORKS COMPLETED</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-3">
                    <div class="counter-box pt-4 pt-md-0">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="bi bi-journal-richtext"></i></span>
                        </div>
                        <div class="counter-num">
                            <p data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1"
                                class="counter purecounter"></p>
                            <span class="counter-text">YEARS OF EXPERIENCE</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-3">
                    <div class="counter-box pt-4 pt-md-0">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="bi bi-people"></i></span>
                        </div>
                        <div class="counter-num">
                            <p data-purecounter-start="0" data-purecounter-end="550" data-purecounter-duration="1"
                                class="counter purecounter"></p>
                            <span class="counter-text">TOTAL CLIENTS</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-3">
                    <div class="counter-box pt-4 pt-md-0">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="bi bi-geo-alt"></i></span>
                        </div>
                        <div class="counter-num">
                            <p data-purecounter-start="0" data-purecounter-end="48" data-purecounter-duration="1"
                                class="counter purecounter"></p>
                            <span class="counter-text">COUNTIES</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Counter Section -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            Blog
                        </h3>
                        <p class="subtitle-a">
                            Our online collection of stories that inspire #PositiviTee.
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="mt-2 mb-2 col-12 col-md-6 col-lg-6">
                    @include('layouts.partials.blog')
                </div>
                <div class="mt-2 mb-2 col-12 col-md-6 col-lg-6">
                    @include('layouts.partials.blog')
                </div>
            </div>
        </div>
    </section><!-- End Blog Section -->

    <!-- ======= Testimonials Section ======= -->
    <div class="testimonials paralax-mf bg-image" style="background-image: url(assets/img/header.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    {{-- <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="testimonial-box">
                                    <div class="author-test">
                                        <img src="assets/img/testimonial-2.jpg" alt=""
                                            class="rounded-circle b-shadow-a">
                                        <span class="author">Xavi Alonso</span>
                                    </div>
                                    <div class="content-test">
                                        <p class="description lead">
                                            Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum
                                            dolor sit amet,
                                            consectetur adipiscing elit.
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-box">
                                    <div class="author-test">
                                        <img src="assets/img/testimonial-4.jpg" alt=""
                                            class="rounded-circle b-shadow-a">
                                        <span class="author">Marta Socrate</span>
                                    </div>
                                    <div class="content-test">
                                        <p class="description lead">
                                            Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum
                                            dolor sit amet,
                                            consectetur adipiscing elit.
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->
                        </div>
                        <div class="swiper-pagination"></div>
                    </div> --}}

                    <!-- <div id="testimonial-mf" class="owl-carousel owl-theme">
                                          
                                        </div> -->
                </div>
            </div>
        </div>
    </div><!-- End Testimonials Section -->
    
@endsection
