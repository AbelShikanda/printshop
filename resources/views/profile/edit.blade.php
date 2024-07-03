@extends('layouts.app')

@section('content')
@include('layouts.hero_profile')
    <!-- ======= Blog Single Section ======= -->
    <section class="blog-wrapper sect-pt4" id="blog">
        <div class="container">
            <section class="profile_edit_wrapper">

                <div class="profile_edit_lists">
                    <span class="material-icons-outlined">edit</span>
                    Edit Details
                </div>

                <div class="profile_edit_details mb-5">
                    <div class="profile_edit_title">
                        Edit Details
                    </div>
                    <div class="form_row">
                        <div class="form_group">
                            <label class="input_label">Email</label>
                            <input type="email" class="input" name='email' value="email" required />
                        </div>
                        <div class="form_group">
                            <label class="input_label">First Name</label>
                            <input type="text" class="input" name='f-name' value="firstname" required />
                        </div>
                        <div class="form_group">
                            <label class="input_label">Last Name</label>
                            <input type="text" class="input" name='l-name' value="lastname" required />
                        </div>
                        <div class="form_group">
                            <label class="input_label">Phone Number</label>
                            <input type="tel" class="input" name='phone' pattern="\+254\d{9}" value="Phone"
                            title="Start with +254" maxlength="13" required />
                        </div>
                        <div class="form_group">
                            <label class="input_label">Town</label>
                            <input type="text" class="input" id="card_number" name='text' value="town" required />
                        </div>
                        <div class="form_group">
                            <label class="input_label">Location</label>
                            <input type="text" class="input" id="card_number" name='location' value="location" required />
                        </div>
                        <button class="btn mt-5">Checkout</button>
                    </div>
                </div>
            </section>
        </div>
    </section><!-- End Blog Single Section -->
@endsection
