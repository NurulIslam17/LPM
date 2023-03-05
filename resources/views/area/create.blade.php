@extends('Home.master')

@section('body')
    <div class="row">
        <div class="container p-5">

            <div class="row shadow">
                <div class="col-md-12 d-flex p-4 justify-content-between">
                    <h3>Create Area</h3>
                    <a href="{{ route('manage_area') }}" class="btn btn-sm btn-success pt-2"><i class="fa fa-list"></i>
                        List</a>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-4 mx-auto">
                    <div class="card card-body">
                        <h6 class="text-center text-danger">{{ Session::get('err') }}</h6>
                        <form action="{{ route('store_area') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">City</label>
                                <select class="p-2" name="city_id" style="width: 100%" id="">
                                    <option selected disabled>---------------- Select City --------------</option>

                                    @foreach ($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb-2">
                                <label for="Area">City</label>
                                <input type="text" name="name" class="form-control" id="Area"
                                    placeholder="Enter Area">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1"></label>
                                <input type="submit" class="btn btn-sm btn-success" value="Create">
                            </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
