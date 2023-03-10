@extends('Home.master')

@section('body')
    <div class="row">
        <div class="container p-5">

            <div class="row shadow">
                <div class="col-md-12 d-flex p-4 justify-content-between">
                    <h3>Create Animal</h3>
                    <a href="{{ route('animals.index') }}" class="btn btn-sm btn-success pt-2">Manage</a>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6 mx-auto">
                    <div class="card card-body shadow">
                        <p>{{ Session::get('msg') }}</p>
                        <form action="{{ route('animals.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label for="color">Color</label>
                                    <input type="text" class="form-control" name="color" id="color"
                                        placeholder="Enter Color">
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" name="price" id="price"
                                        placeholder="Enter price">
                                </div>

                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control" required name="image">
                                </div>
                                {{-- <div class="form-check form-switch mt-2">
                                    <input class="form-check-input" type="checkbox" name="status" role="switch"
                                        id="status" checked>
                                    <label class="form-check-label" for="status">Status</label>
                                </div> --}}
                                <div class="form-group mt-3">
                                    <label for="image"></label>
                                    <input type="submit" class="btn btn-sm btn-success" value="Create">
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
