@extends('Home.master')

@section('body')
    <div class="row">
        <div class="container p-5">

            <div class="row shadow">
                <div class="col-md-12 d-flex p-4 justify-content-between">
                    <h3>Create Applicant</h3>
                    <a href="{{ route('manage_applicant') }}" class="btn btn-sm btn-success pt-2"><i class="fa fa-list"></i>
                        List</a>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-5 mx-auto">

                    <div class="card card-body shadow">
                        <p class="text-center text-danger">{{ Session::get('err') }}</p>
                        <p class="text-center text-success">{{ Session::get('msg') }}</p>
                        <form action="{{ route('store_applicant') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="applicant">Applicant</label>
                                        <input type="text" class="form-control" name="applicant" id="applicant"
                                            placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Phone</label>
                                        <input type="text" class="form-control" name="phone" id="phone"
                                            placeholder="Enter Phone">
                                    </div>
                                    <div class="form-group">
                                        <label for="email"></label>
                                        <input type="submit" class="btn btn-success" value="Create">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
@endpush
