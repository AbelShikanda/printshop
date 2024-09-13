@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">Products Posts</h2>
                <p class="text-muted">Products available for posting</p>
                <div class="row">
                    <div class="col-md-8 offset-2">
                        <div class="card shadow mb-4">
                            <div class="card-header">
                                <strong class="card-title">Product Posts</strong>
                            </div>
                            <div class="card-body">
                                <form action={{ route('prices.store') }} method="POST" class="needs-validation" novalidate>
                                    @csrf
                                    @method('post')

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom01">Type of product</label>
                                                <select class="form-control select2" style="width: 100%;" name="types">
                                                    @foreach($product_types as $types)
                                                        <option value="{{ $types->id }}" @selected(old('types') == $types)>{{ $types->name }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="valid-feedback"> Looks good! </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom01">Amount</label>
                                                <input type="text" class="form-control" id="validationCustom01" value="caption"
                                                    required>
                                                <div class="valid-feedback"> Looks good! </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group mb-3">
                                        <label for="validationTextarea">Description</label>
                                        <textarea class="form-control" id="validationTextarea" placeholder="Required example textarea" required></textarea>
                                        <div class="invalid-feedback"> Please enter a message in the
                                            textarea. </div>
                                    </div>
                                    {{-- <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                                required>
                                            <label class="form-check-label" for="invalidCheck"> Agree to
                                                terms and
                                                conditions </label>
                                            <div class="invalid-feedback"> You must agree before
                                                submitting. </div>
                                        </div>
                                    </div> --}}
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </form>
                            </div> <!-- /.card-body -->
                        </div> <!-- /.card -->
                    </div> <!-- /.col -->
                </div> <!-- end section -->
            </div> <!-- /.col-12 col-lg-10 col-xl-10 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
    @include('admin.layouts.partials.modals')
@endsection
