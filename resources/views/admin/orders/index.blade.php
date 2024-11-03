@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-12 my-4">
                        <h2 class="h4 mb-1">Expandable rows</h2>
                        <p class="mb-3">Child rows with additional detailed information</p>
                        <div class="card shadow">
                            <div class="card-body">
                                <!-- table -->
                                <table class="table table-hover table-borderless border-v">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Date</th>
                                            <th>Customer</th>
                                            <th>Order #</th>
                                            <th>Status</th>
                                            <th>Sub Total</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            <tr class="accordion-toggle collapsed" id="c-2474" data-toggle="collapse"
                                                data-parent="#c-2474" href="#collap-2474">
                                                <td>{{ $order->created_at }}</td>
                                                <td>{{ $order->user->first_name }} {{ $order->user->last_name }}</td>
                                                <td>{{ $order->id }}</td>
                                                <td><span class="badge badge-pill badge-success mr-2">S</span><small
                                                        class="text-muted">Paid</small></td>
                                                <td>Ksh {{ $order->price }}</td>
                                                <td><button class="btn btn-sm dropdown-toggle more-horizontal"
                                                        type="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="text-muted sr-only">Action</span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Remove</a>
                                                        <a class="dropdown-item" href="#">Assign</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @foreach ($order->orderItems as $item)
                                                <tr id="collap-2474" class="collapse show in p-3 bg-grey">
                                                    <td colspan="8">
                                                        <dl class="row mb-0 mt-1">
                                                            <dt class="col-sm-3">{{ $item->products->name }}</dt>
                                                            <dt class="col-sm-3">color</dt>
                                                            <dd class="col-sm-3">Size</dd>
                                                            <dt class="col-sm-3">Quantity</dt>
                                                    </td>
                                                    </dl>
                                                </tr>
                                            @endforeach
                                            <tr id="collap-2474" class="collapse show in p-3 bg-light">
                                                <td colspan="8">
                                                    <dl class="row mb-0 mt-1">
                                                        <dt class="col-sm-3">Email</dt>
                                                        <dt class="col-sm-3">Phone</dt>
                                                        <dt class="col-sm-3">town</dt>
                                                        <dd class="col-sm-3">location</dd>
                                                    </dl>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- end section -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
