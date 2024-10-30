@extends('layouts.app')

@section('content')
    @include('layouts.hero_single')

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container-blog mt-5 mb-5">
            <div class="product-image">
                <img src="{{ asset('storage/img/pictures/' . $images->thumbnail) }}" alt="" class="product-pic">
            </div>

            <div class="product-details">
                <header>
                    <h1 class="title">{{ $images->products[0]->name }}</h1>
                    <span class="colorCat">mint green</span>
                    <div class="prices">
                        <span class="before">{{ $images->products[0]->price }}</span>
                        <span class="current">{{ $images->products[0]->price }}</span>
                    </div>
                    <div class="rate">
                        <a href="#!" class="active">★</a>
                        <a href="#!" class="active">★</a>
                        <a href="#!" class="active">★</a>
                        <a href="#!">★</a>
                        <a href="#!">★</a>
                    </div>
                </header>
                <article>
                    <h5>Description</h5>
                    <p>{{ $images->products[0]->description }}</p>
                </article>
                <div class="controls">
                    <div class="color">
                        <h5>color</h5>
                        <ul>
                            <li><a href="#!" class="colors color-bdot1 active"></a></li>
                            <li><a href="#!" class="colors color-bdot2"></a></li>
                            <li><a href="#!" class="colors color-bdot3"></a></li>
                            <li><a href="#!" class="colors color-bdot4"></a></li>
                            <li><a href="#!" class="colors color-bdot5"></a></li>
                            @foreach ($colors as $color)
                                <li>
                                    <a href="#!" class="colors {{ $color->slug }} active"></a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="size">
                        <h5>size</h5>
                        <a href="#!" class="option">{{ $sizes->name }}</a>
                    </div>
                    <div class="qty">
                        <h5>qty</h5>
                        <a href="#!" class="option">(1)</a>
                    </div>
                </div>
                <div class="footer">
                    <button type="button">
                        <img src="http://co0kie.github.io/codepen/nike-product-page/cart.png" alt="">
                        <span>add to cart</span>
                    </button>
                    <a href="{{ route('catalog') }}" type="button">
                        <img src="http://co0kie.github.io/codepen/nike-product-page/cart.png" alt="">
                        <span>Catalog</span>
                    </a>
                    <div class="row mt-5">
                        <div class="col mb-5">
                            <a href="#!" alt=""><i class="bi bi-share-fill"></i></a>
                        </div>
                        <div class="col"></div>
                        <div class="col mb-5">
                            <a href="#!" alt=""><i class="bi bi-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- End Portfolio Details Section -->
@endsection
