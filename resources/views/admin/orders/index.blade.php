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
                                            <th>Invoice No</th>
                                            <th>Invoice Date</th>
                                            <th>Order #</th>
                                            <th>Bill To</th>
                                            <th>Status</th>
                                            <th>Grand Total</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="accordion-toggle collapsed" id="c-2474" data-toggle="collapse"
                                            data-parent="#c-2474" href="#collap-2474">
                                            <td>3599</td>
                                            <td>2020-09-12 11:21:03</td>
                                            <td>3951</td>
                                            <td>Alexander Ellis</td>
                                            <td><span class="badge badge-pill badge-success mr-2">S</span><small
                                                    class="text-muted">Paid</small></td>
                                            <td>$37.39</td>
                                            <td>$80.11</td>
                                            <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted sr-only">Action</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Remove</a>
                                                    <a class="dropdown-item" href="#">Assign</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr id="collap-2474" class="collapse show in p-3 bg-light">
                                            <td colspan="8">
                                                <dl class="row mb-0 mt-1">
                                                    <dt class="col-sm-1">Company</dt>
                                                    <dd class="col-sm-2">Fringilla Ornare Consulting</dd>
                                                    <dt class="col-sm-1">Address</dt>
                                                    <dd class="col-sm-2">287-8300 Nisl. St.</dd>
                                                    <dt class="col-sm-1">Phone</dt>
                                                    <dd class="col-sm-2">(899) 881-3833</dd>
                                                    <dt class="col-sm-1 text-truncate">Region</dt>
                                                    <dd class="col-sm-2">Papua New Guinea</dd>
                                                </dl>
                                            </td>
                                        </tr>
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
