@extends('Home.master')

@section('body')
    <div class="row">
        <div class="container p-5">

            <div class="row shadow">
                <div class="col-md-12 d-flex p-4 justify-content-between">
                    <h3>Create Divission</h3>
                    <a href="{{ route('manage_division') }}" class="btn btn-sm btn-success pt-2"><i class="fa fa-list"></i>
                        List</a>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-5 mx-auto">
                    <div class="card card-body shadow">
                        <h5 class="text-success text-center">{{ Session::get('success') }}</h5>
                        <form action="{{ route('store_divission') }}" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="name">Department</label>
                                <input type="text" name="name" class="form-control rounded-0" required
                                    id="name"placeholder="Enter Department">
                            </div>

                            <button type="submit" class="btn btn-sm btn-primary rounded-0">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
