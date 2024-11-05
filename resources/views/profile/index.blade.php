@extends('layouts.app')

@section('footer')
    {{-- Leave this section empty to exclude the sidebar --}}
@endsection

@section('content')
    {{-- @include('layouts.hero_profile') --}}
    <!-- ======= Blog Single Section ======= -->
    <br>
    <br>
    <br>

    <section class="content">
        <div class="content__left">

            <section class="navigation">

                <!-- Main -->
                <div class="navigation__list">

                    {{-- Navigation --}}

                </div>
                <!-- / -->

            </section>

            <section class="playlist">

                <a href="#">

                    <i class="ion-ios-plus-outline"></i>

                    New Playlist

                </a>

            </section>

        </div>

        <div class="content__middle">

            <div class="artist is-verified">

                <div class="artist__header">

                    <div class="artist__info">

                        <div class="artist__info__meta">

                            <div class="artist__info__type">{{ Auth::user()->email }}</div>

                            <div class="artist__info__name">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                            </div>

                            <div class="artist__info__actions">

                                {{-- <button class="button-dark">
                                    <i class="ion-ios-play"></i>
                                    Play
                                </button>

                                <button class="button-light">Follow</button>

                                <button class="button-light more">
                                    <i class="ion-ios-more"></i>
                                </button> --}}

                            </div>

                        </div>


                    </div>

                    <div class="artist__listeners">

                        <div class="artist__listeners__count">15,662,810</div>

                        <div class="artist__listeners__label">Monthly Listeners</div>

                    </div>

                    <div class="artist__navigation">



                        <ul class="nav nav-tabs" role="tablist">

                            <li role="presentation" class="active">
                                <a href="#artist-overview" aria-controls="artist-overview" role="tab"
                                    data-toggle="tab">Dashboard</a>
                            </li>

                        </ul>
                        @if (count($errors) > 0)
                            <div class="alert alert-danger col-md-8 offset-md-3">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="pt-3">
                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                        </div>

                        <div class="artist__navigation__friends">

                            <a href="#">
                                <img src="http://zblogged.com/wp-content/uploads/2015/11/17.jpg" alt="" />
                            </a>

                            <a href="#">
                                <img src="http://zblogged.com/wp-content/uploads/2015/11/5.png" alt="" />
                            </a>

                            <a href="#">
                                <img src="http://cdn.devilsworkshop.org/files/2013/01/enlarged-facebook-profile-picture.jpg"
                                    alt="" />
                            </a>

                        </div>

                    </div>

                </div>

                <div class="artist__content">

                    <div class="tab-content">

                        <!-- Overview -->
                        <div role="tabpanel" class="tab-pane active" id="artist-overview">

                            <div class="overview">

                                <div class="overview__artist">

                                    <!-- Latest Release-->
                                    <div class="section-title">Latest Fashon</div>

                                    <div class="latest-release">
                                        @foreach ($latest as $product)
                                            <div class="latest-release__art">

                                                <img src="{{ asset('storage/img/products/' . $product->thumbnail) }}"
                                                    alt="When It's Dark Out" />

                                            </div>

                                            <div class="latest-release__song">
                                                <div class="latest-release__song__title">{{ $product->full }}</div>

                                                <div class="latest-release__song__date">

                                                    <span>{{ $product->created_at }}</span>

                                                </div>

                                            </div>
                                        @endforeach

                                    </div>
                                    <!-- / -->

                                    <!-- Popular-->
                                    <div class="section-title">Wishlist</div>

                                    <div class="tracks">

                                        @foreach ($wishlist as $list)
                                            <div class="track">

                                                <div class="track__art">

                                                    <img src="{{ asset('storage/img/products/' . $list->thumbnail) }}"
                                                        alt="When It's Dark Out" />

                                                </div>

                                                <div class="track__title">{{ $list->full }}</div>

                                                <div class="track__explicit">

                                                    <span
                                                        class="label">{{ Str::words($list->products['0']->description, 3, '...') }}
                                                    </span>

                                                </div>
                                                @foreach ($list->products as $item)
                                                    <div class="track__plays"><small>{{ $item->price }}</small></div>
                                                @endforeach
                                                <div class="track__plays">

                                                    <form method="post" action="{{ route('deleteWish', $list->id) }}">
                                                        @csrf
                                                        @method('POST')
                                                        <input name="product_id" type="text" value="{{ $list->id }}"
                                                            readonly hidden>
                                                        <button class="btn btn-transparent text-danger" type="submit">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </form>

                                                </div>

                                            </div>
                                        @endforeach

                                    </div>

                                    <button class="show-more button-light">Show 5 More</button>
                                    <!-- / -->

                                </div>

                                <div class="overview__related">

                                    <div class="section-title">Related Fashion</div>

                                    @foreach ($related as $prod)
                                        <div class="related-artists">

                                            <a href="#" class="related-artist">

                                                <span class="related-artist__img">

                                                    <img src="{{ asset('storage/img/products/' . $prod->thumbnail) }}"
                                                        alt="Hoodie Allen" />

                                                </span>

                                                <span class="related-artist__name">{{ $prod->full }}</span>

                                            </a>

                                        </div>
                                    @endforeach

                                </div>

                                <div class="overview__albums">

                                    <div class="overview__albums__head">

                                        <span class="section-title">Purchased Products</span>

                                    </div>

                                    {{-- <div class="album"> --}}

                                    <div class="album__tracks">

                                        <div class="tracks">

                                            <div class="tracks__heading">

                                                <div class="tracks__heading__number">#</div>

                                                <div class="tracks__heading__title">Song</div>

                                                <div class="tracks__heading__length">

                                                    <i class="ion-ios-stopwatch-outline"></i>

                                                </div>

                                                <div class="tracks__heading__popularity">

                                                    <i class="ion-thumbsup"></i>

                                                </div>

                                            </div>

                                            @foreach ($orders as $bought)
                                                @foreach ($bought->orderItems as $items)
                                                    <div class="track">

                                                        <div class="track__number">#</div>

                                                        <div class="track__added">

                                                            <i class="ion-checkmark-round added"></i>

                                                        </div>

                                                        <div class="track__title">{{ Str::words($items->products->name, 2, '...') }}</div>

                                                        <div class="track__explicit">

                                                            <span
                                                                class="label">{{ Str::words($items->products->name, 5, '...') }}</span>

                                                        </div>

                                                        <div class="track__length">Approved</div>
                                                        <div class="track__length">Review</div>

                                                        <div class="track__popularity">

                                                            <i class="ion-arrow-graph-up-right"></i>

                                                        </div>

                                                    </div>
                                                @endforeach
                                            @endforeach

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                    <!-- / -->

                    <!-- Related Artists -->
                    <span class="section-title">More Related Products</span>
                    <br>
                    <br>

                    <div role="tabpanel" class="tab-pane" id="related-artists">

                        <div class="media-cards">
                            @foreach ($related as $item)
                                <div class="mb-5 col-6 col-md-6 col-lg-4">
                                    @include('layouts.partials.catalog')
                                </div>
                            @endforeach

                        </div>

                    </div>
                    <!-- / -->

                    <!-- About // Coming Soon-->
                    <!--<div role="tabpanel" class="tab-pane" id="artist-about">About</div>-->
                    <!-- / -->

                </div>

            </div>

        </div>

        </div>

    </section>
@endsection
