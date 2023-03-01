@extends('Home.master')

@section('body')
    <div class="row">
        <div class="container p-5">

            <div class="row shadow">
                <div class="col-md-12 d-flex p-4 justify-content-between">
                    <h3>Create Department</h3>
                    <a href="{{ route('manage_department')}}" class="btn btn-sm btn-success pt-2"><i class="fa fa-list"></i> List</a>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-6 mx-auto">
                    <div class="card card-body rounded-0">
                        <form action="{{ route('store_department')}}" method="post">
                            @csrf
                            <p class="text-success">{{ Session::get('Msg')}}</p>
                            <div class="form-group mb-2">
                                <label for="name">Name</label>
                                <input type="text" class="form-control rounded-0" id="name" name="department"
                                    placeholder="Enter Department Name">
                            </div>
                            <button type="submit" class="btn btn-primary rounded-0">Create</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
