@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h3 mb-4 page-title">Product Details</h2>
                <div class="row mt-5 align-items-center">
                    <div class="col-md-3 text-center mb-5">
                        <div class="avatar avatar-xl">
                            <img src="./assets/avatars/face-1.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mb-5">
                            <div class="col-md-7">
                                <p class="text-muted"> 
                                    {{ $product->description }}
                                </p>
                            </div>
                            <div class="col">
                                <p class="small mb-0 text-muted">Size: {{ $product->Size[0]->name }}</p>
                                <p class="small mb-0 text-muted">Color: {{ $product->Color[0]->name }}</p>
                                <p class="small mb-0 text-muted">Category: {{ $product->Category[0]->name }}</p>
                                <p class="small mb-0 text-muted">type: {{ $product->ProductType[0]->name }}</p>
                                <p class="small mb-0 text-muted">Material: {{ $product->Material[0]->name }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <h3>Subscription</h3>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit nisl
                    ullamcorper, rutrum metus in, congue lectus.</p>
                <div class="card-deck my-4">
                    <div class="card mb-4">
                        <div class="card-body text-center my-4">
                            <a href="#">
                                <h3 class="h5 mt-4 mb-0">Professional</h3>
                            </a>
                            <p class="text-muted">package</p>
                            <span class="h1 mb-0">$16.9</span>
                            <p class="text-muted">year</p>
                            <ul class="list-unstyled">
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Consectetur adipiscing elit</li>
                                <li>Integer molestie lorem at massa</li>
                                <li>Eget porttitor lorem</li>
                            </ul>
                            <button type="button" class="btn mb-2 btn-primary btn-lg">Ugrade</button>
                            <button type="button" class="btn mb-2 btn-primary btn-lg">Ugrade</button>
                        </div> <!-- .card-body -->
                    </div> <!-- .card -->
                </div> <!-- .card-group -->
            </div> <!-- /.col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
