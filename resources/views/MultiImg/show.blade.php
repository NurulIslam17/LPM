@extends('Home.master')

@section('body')
    <div class="row">
        <div class="container p-5">
            <div class="row mt-3">
                <div class="col-md-10 mx-auto">
                    <div class="card card-body shadow p-4">
                        <span> <a href="{{ route('manage_product_index')}}" class="btn btn-sm btn-info"> <i
                            class="fa fa-list pe-3"></i>List</a></span>
                        <h4 class="text-center">Product Details</h4>
                        <hr />

                        <div class="row">
                            <div class="col-md-9">
                                <p><strong>Product name : </strong> {{ $product->name}}</p>
                                <p><strong>Product Code : </strong> {{ $product->code}}</p>
                                <p><strong>Product Price: </strong> {{ $product->price}} $</p>
                                <p style="text-align:justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero
                                    maxime numquam quia sint tempore doloribus, culpa aliquid iusto fuga corrupti, fugit
                                    facilis ipsa hic temporibus itaque sequi deleniti, et minus voluptates autem cum enim?
                                    Reiciendis sunt facere fugiat, placeat beatae, officiis aliquam tempore neque amet
                                    tenetur nemo tempora incidunt nulla cumque esse nisi est! Est molestiae aliquid
                                    consectetur quidem dignissimos accusantium repudiandae, consequatur vitae sint
                                    doloremque, soluta voluptatum cumque sed illum totam eligendi aperiam recusandae natus
                                    adipisci libero? Architecto, aperiam a culpa saepe dolorum doloremque ipsa placeat,
                                    reprehenderit praesen</p>
                            </div>

                            <div class="col-md-3">
                                <h4>Product Images</h4>

                                @foreach ($product->productImages as $imageInfo)
                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="{{ asset('upload/product_img/' . $imageInfo->product_images) }}"
                                                alt="Not found" style="height: 120px;width:100%">
                                            <p>{{ $imageInfo->img_desc }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
