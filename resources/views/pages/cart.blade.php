@extends('layouts.app')

@section('content')
    @include('layouts.hero_single')

    <!-- ======= Blog Single Section ======= -->
    <section class="blog-wrapper sect-pt4" id="blog">
        <div class="container">
            <section class="cart_wrapper">

                <div class="cart_lists">
                    <div class="cart_title">
                        <span class="material-icons-outlined">local_mall</span>
                        Your Shopping Cart
                    </div>
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    <div class="cart_list_wrap">
                        @if (count($products) > 0)
                            @foreach ($products as $product)
                                <div class="cart_responsive">

                                    <div class="tr_item">
                                        <div class="td_item item_like">
                                            <span class="material-icons-outlined"><i class="bi bi-heart-fill"></i></span>
                                        </div>
                                        <div class="td_item item_img">
                                            <img src="{{ asset('storage/img/pictures/' . $product['item']['thumbnail']) }}" alt="" />
                                        </div>
                                        <div class="td_item item_name">
                                            <label class="main">{{ $product['item']['products']['0']['name'] }}</label>
                                            <label class="sub">{{ $product['item']['products']['0']['description'] }}</label>
                                        </div>
                                        <div class="td_item item_color">
                                            <select>
                                                <option selected>
                                                    {{ $product['item']['products']['0']['color']['0']['name'] }}
                                                </option>
                                                <option value="black">black</option>
                                                <option value="white">white</option>
                                                <option value="grey">grey</option>
                                            </select>
                                        </div>
                                        <div class="td_item item_size">
                                            <select>
                                                <option selected>
                                                    {{ $product['item']['products']['0']['size']['0']['name'] }}
                                                </option>
                                                <option value="small">small</option>
                                                <option value="large">large</option>
                                                <option value="Xlarge">Xlarge</option>
                                            </select>
                                        </div>
                                        <div class="td_item item_actions">
                                            <span>
                                                <i class="bi bi-cart3"><br>
                                                    <p>update</p>
                                                </i></span>
                                        </div>
                                        <div class="td_item item_qty">
                                            <div class="quantity">
                                                <a href="{{ route('reduceCart', ['id' => $product['item']['id']]) }}" class="minus" aria-label="Decrease">&minus;</a>
                                                <input type="number" class="input-box" value="{{ $product['qty'] }}" min="1"
                                                    max="10" readonly>
                                                <a href="{{ route('addToCart', ['id' => $product['item']['id']]) }}" class="plus" aria-label="Increase">&plus;</a>
                                            </div>
                                        </div>
                                        <div class="td_item item_price">
                                            <label>Ksh. {{ $product['item']['products']['0']['price'] }}</label>
                                        </div>
                                        <div class="td_item item_remove">
                                            <span class="material-icons-outlined">close</span>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        @endif
                        <div class="footer">
                            <div class="back_cart">
                                <a href="#back">
                                    <span class="material-icons-outlined">west</span>
                                    Back to Shop
                                </a>
                            </div>
                            <div class="subtotal">
                                <label>Total: </label>
                                <strong>Ksh 451.00</strong>
                                <br>
                                <label>Shipping: </label>
                                <strong>Ksh 451.00</strong>
                                <br>
                                <label>Subtotal: </label>
                                <strong>Ksh 451.00</strong>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cart_details">
                    <div class="cart_title">
                        Cart Details
                    </div>
                    <div class="form_row">
                        <div class="form_group">
                            <label class="input_label">Phone Number</label>
                            <input type="text" class="input" id="card_number" name='card' min="16"
                                max="16" placeholder="0000 0000 0000 0000" onkeypress="return checkDigit(event)"
                                autocomplete="off" required />
                        </div>

                        <div class="form_group w_100 mb-5">
                            <label class="input_label">Location</label>
                            <input type="text" class="input" id="card_date" placeholder="MM / YY"
                                onkeypress="return checkDigit(event)" autocomplete="off" required />
                        </div>

                        <button class="btn">Checkout</button>
                    </div>
                </div>
            </section>
        </div>
    </section><!-- End Blog Single Section -->

@endsection
