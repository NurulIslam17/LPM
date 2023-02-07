@extends('Home.master')
@section('body')
    <div class="row">
        <div class="container p-5">

            <div class="row shadow">
                <div class="col-md-12 d-flex p-4 justify-content-between">
                    <h3> <i class="fa fa-product"></i>Product</h3>
                    <a href="#" class="btn btn-sm btn-success pt-2">Create</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped mt-5">
                        <thead>
                            <tr class="bg-info">
                                <th scope="col">SL</th>
                                <th scope="col">code</th>
                                <th scope="col">name</th>
                                <th scope="col">price</th>
                                <th scope="col">desc</th>
                                <th scope="col">status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td scope="col">{{ $loop->iteration }}</td>
                                    <td scope="col">{{ $product->code }}</td>
                                    <td scope="col">{{ $product->name }}</td>
                                    <td scope="col">{{ $product->price }} BDT</td>
                                    <td scope="col">{{ $product->desc }}</td>
                                    <td scope="col">
                                        @if ($product->status == 1)
                                        <span class="badge bg-success">Active</span>

                                        @else
                                        <span class="badge bg-warning">Inactive</span>
                                        @endif
                                    </td>
                                    <td scope="col">
                                        <a href="#" class="btn btn-sm btn-success rounded-0">Edit</a>
                                        <a href="{{ route('product.show',['id'=> $product->id ])}}" class="btn btn-sm btn-info rounded-0">Show</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
