@extends('layouts.app')

@section('content')
    @include('layouts.hero_single')

    <!-- ======= Blog Single Section ======= -->
    <section class="blog-wrapper sect-pt4" id="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="post-box">
                        <div class="post-meta">
                            <h1 class="article-title text-center">Lorem ipsum dolor sit amet consec tetur adipisicing</h1><br><br>
                            <ul>
                                <li>
                                    <span class="bi bi-person"></span>
                                    <a href="#">Jason London</a>
                                </li>
                                <li>
                                    <span class="bi bi-tag"></span>
                                    <a href="#">Web Design</a>
                                </li>
                                <li>
                                    <span class="bi bi-chat-left-text"></span>
                                    <a href="#">14</a>
                                </li>
                            </ul>
                        </div>
                        <div class="post-thumb">
                            <img src="{{ asset('assets/img/post-1.jpg') }}" class="img-fluid" alt="">
                        </div><br><br>
                        <div class="article-content">
                            <p>
                                Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna
                                dictum
                                porta. Quisque velit
                                nisi, pretium ut lacinia in, elementum id enim. Praesent sapien massa, convallis a
                                pellentesque
                                nec, egestas non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                                posuere
                                cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                Nulla quis lorem ut libero malesuada feugiat.
                            </p>
                            <p>
                                Nulla porttitor accumsan tincidunt. Cras ultricies ligula sed magna dictum porta. Mauris
                                blandit
                                aliquet elit, eget tincidunt
                                nibh pulvinar a. Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Donec sollicitudin molestie malesuada.
                            </p>
                            <p>
                                Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Lorem ipsum dolor sit amet,
                                consectetur
                                adipiscing elit. Praesent
                                sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at
                                sem. Donec rutrum congue leo eget malesuada.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero
                                malesuada feugiat.
                                Curabitur arcu erat,
                                accumsan id imperdiet et, porttitor at sem. Vivamus suscipit tortor eget felis porttitor
                                volutpat. Vivamus suscipit tortor eget felis porttitor volutpat. Quisque velit nisi, pretium
                                ut lacinia in, elementum id enim.
                            </p>
                            <blockquote class="blockquote">
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                    erat a ante.</p>
                            </blockquote>
                            <p>
                                Nulla porttitor accumsan tincidunt. Cras ultricies ligula sed magna dictum porta. Mauris
                                blandit
                                aliquet elit, eget tincidunt
                                nibh pulvinar a. Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Donec sollicitudin molestie malesuada.
                            </p>
                        </div>
                    </div>
                    <div class="box-comments">
                        <hr>
                        <div class="title-box-2">
                            <h4 class="title-comments title-left">Comments (34)</h4>
                        </div>
                        <ul class="list-comments">
                            <li>
                                <div class="comment-avatar">
                                    <img src="{{ asset('assets/img/testimonial-4.jpg') }}" alt="">
                                </div>
                                <div class="comment-details">
                                    <h4 class="comment-author">Carmen Vegas</h4>
                                    <span>18 Sep 2017</span>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit,
                                        provident cumque
                                        ipsam temporibus maiores
                                    </p>
                                    <a href="3">Reply</a>
                                </div>
                            </li>
                            <li class="comment-children">
                                <div class="comment-avatar">
                                    <img src="{{ asset('assets/img/testimonial-2.jpg') }}" alt="">
                                </div>
                                <div class="comment-details">
                                    <h4 class="comment-author">Oliver Colmenares</h4>
                                    <span>18 Sep 2017</span>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit,
                                        provident cumque
                                    </p>
                                    <a href="3">Reply</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="form-comments">
                        <div class="title-box-2">
                            <h3 class="title-left">
                                Leave a Reply
                            </h3>
                        </div>
                        <form class="form-mf">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control input-mf" id="inputName"
                                            placeholder="Name *" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <input type="email" class="form-control input-mf" id="inputEmail1"
                                            placeholder="Email *" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <input type="url" class="form-control input-mf" id="inputUrl"
                                            placeholder="Website">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <textarea id="textMessage" class="form-control input-mf" placeholder="Comment *" name="message" cols="45"
                                            rows="8" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="button button-a button-big button-rouded">Send
                                        Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Blog Single Section -->
    
@endsection
