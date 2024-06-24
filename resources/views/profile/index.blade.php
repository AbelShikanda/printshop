@extends('layouts.app')

@section('content')
    @include('layouts.hero_profile')
    <!-- ======= Blog Single Section ======= -->
    <section class="blog-wrapper sect-pt4" id="blog">
        <div class="container">
            <section class="profile_wrapper">

                <div class="profile_lists mt-5">
                    <div class="profile_title">
                        <span class="material-outline-icons">person</span>
                        Things You Like
                    </div>

                    <div class="profile_list_wrap">
                        <div class="profile_responsive">

                            <div class="tr_item">
                                <div class="td_item item_img">
                                    <img src="https://i.ibb.co/vQHXcYb/b68912b3426baa0b1f4c410a02174879.jpg" />
                                </div>
                                <div class="td_item item_name">
                                    <label class="main">Denim Jacket</label>
                                    <label class="sub">Ref. 007891987</label>
                                </div>
                                <div class="td_item item_actions">
                                    <span>
                                        <i class="bi bi-cart3"><br>
                                            <p>add to cart</p>
                                        </i></span>
                                </div>
                                <div class="td_item item_price">
                                    <label>Ksh. 260.00</label>
                                </div>
                                <div class="td_item item_remove">
                                    <span class="material-icons-outlined">close</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="profile_details mt-5">
                    <div class="profile_title">
                        Profile Details
                    </div>
                    <div class="form_row">
                        <div class="form_group">
                            <label class="input_label">Phone&nbsp;&nbsp;&nbsp;: detail </label>
                        </div>
                        <div class="form_group w_100 mb-5">
                            <label class="input_label">Email&nbsp;&nbsp;&nbsp;&nbsp;: detail </label>
                        </div>
                        <div class="form_group w_100 mb-5">
                            <label class="input_label">Gender&nbsp;&nbsp;: detail </label>
                        </div>
                        <div class="form_group w_100 mb-5">
                            <label class="input_label">DOB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: detail </label>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section><!-- End Blog Single Section -->
@endsection
