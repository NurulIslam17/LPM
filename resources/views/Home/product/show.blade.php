@extends('Home.master')
@section('body')
    <div class="row">
        <div class="container p-5">

            <div class="row shadow">
                <div class="col-md-12 d-flex p-4 justify-content-between">
                    <h3> <i class="fa fa-product"></i>Product Details</h3>
                    <a href="{{ route('product.index')}}" class="btn btn-sm btn-success pt-2">Manage</a>
                </div>
            </div>

            <div class="row mt-5 mx-auto">
                <div class="col-md-3">
                    <div class="card card-body shadow">
                        <p><strong>Productc Code : </strong> {{ $products->code }}</p>
                        <p><strong>Productc Name : </strong> {{ $products->name }}</p>
                        <p><strong>Productc Price : </strong> {{ $products->price }}</p>
                        <p><strong>Productc Status : </strong> {{ $products->status }}</p>
                        <p class="text-center">{!! DNS1D::getBarcodeHTML('4445645656', 'I25+')!!}</p>
                       <p class="text-center">{{ $products->code.' '.$products->price.' '.$products->status}}</p>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card card-body shadow">
                        <h6 class="py-0 my-0">QR CODE</h6>
                        <p>{!! DNS2D::getBarcodeHTML('4445645656', 'QRCODE') !!}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
