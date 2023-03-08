@extends('Home.master')

@section('body')
    <div class="row">
        <div class="container p-5">

            <div class="row shadow">
                <div class="col-md-12 d-flex p-4 justify-content-between">
                    <h3>Edit Animal</h3>
                    <a href="{{ route('animals.index') }}" class="btn btn-sm btn-success pt-2">Manage</a>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6 mx-auto">
                    <div class="card card-body shadow">
                        <p>{{ Session::get('msg') }}</p>
                        <form action="{{ route('animals.update', $animal->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" value="{{ $animal->name }}" name="name"
                                        id="name" placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label for="color">Color</label>
                                    <input type="text" class="form-control" value="{{ $animal->color }}" name="color"
                                        id="color" placeholder="Enter Color">
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" value="{{ $animal->price }}" name="price"
                                        id="price" placeholder="Enter price">
                                </div>

                                <div class="form-group d-flex">
                                    <div>
                                        <label for="image">Image</label>
                                        <input type="file" class="form-control" name="image">
                                    </div>

                                    <img src="{{ asset('upload/animal/' . $animal->image) }}"
                                        style="widows: 100%;height:80px;" class="m-2">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="image"></label>
                                    <input type="submit" class="btn btn-sm btn-success" value="Update">
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
