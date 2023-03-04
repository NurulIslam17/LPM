@extends('Home.master')

@section('body')
    <div class="row">
        <div class="container p-5">

            <div class="row shadow">
                <div class="col-md-12 d-flex p-4 justify-content-between">
                    <h3>Create City</h3>
                    <a href="{{ route('manage_city') }}" class="btn btn-sm btn-success pt-2"><i class="fa fa-list"></i>
                        List</a>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-4 mx-auto">

                    <div class="card card-body shadow">
                        <h6 class="text-success text-center">{{ Session::get('msg') }}</h6>
                        <form action="{{ route('store_city') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Divission</label>
                                <select class="p-2" name="division_id" style="width: 100%" id="">
                                    <option selected disabled>---------------- Select Division --------------</option>
                                    @foreach ($divissions as $divission)
                                        <option value="{{ $divission->id }}">{{ $divission->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb-2">
                                <label for="City">City</label>
                                <input type="City" name="name" class="form-control" id="City"
                                    placeholder="Enter City">
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
