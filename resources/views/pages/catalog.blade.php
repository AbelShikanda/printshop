@extends('layouts.app')

@section('content')
    @include('layouts.hero_single')

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
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
    </section><!-- End Portfolio Details Section -->

    @include('layouts.footer')
@endsection
