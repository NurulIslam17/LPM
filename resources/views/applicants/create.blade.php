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
                <div class="col-md-8 mx-auto">

                    <div class="card card-body shadow">
                        <p class="text-center text-danger">{{ Session::get('err') }}</p>
                        <form action="{{ route('store_applicant') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="applicant">Applicant</label>
                                        <input type="text" class="form-control" name="applicant" id="applicant"
                                            placeholder="Enter email">
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
                                        <label for="father">Father</label>
                                        <input type="text" class="form-control" name="father" id="father"
                                            placeholder="Father Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="mother">Mother</label>
                                        <input type="text" class="form-control" name="mother" id="mother"
                                            placeholder="Mother Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="nid">NID</label>
                                        <input type="text" class="form-control" name="nid" id="nid"
                                            placeholder="NID Number">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="division">Division</label>
                                        <select class="p-2" style="width:100%" name="division" id="division">
                                            <option selected disabled>------ Select Division----</option>
                                            <option value="name">1</option>
                                            <option value="name">2</option>
                                            <option value="name">3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="division">City</label>
                                        <select class="p-2" style="width:100%" name="city" id="city">
                                            <option selected disabled>------ Select city----</option>
                                            <option value="name">1</option>
                                            <option value="name">2</option>
                                            <option value="name">3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="division">area</label>
                                        <select class="p-2" style="width:100%" name="area" id="area">
                                            <option selected disabled>------ Select Area----</option>
                                            <option value="name">1</option>
                                            <option value="name">2</option>
                                            <option value="name">3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="village">Village</label>
                                        <input type="text" class="form-control" name="village" id="village"
                                            placeholder="Village">
                                    </div>
                                    <div class="form-group">
                                        <label for="photo">Photo</label>
                                        <input type="file" class="form-control" name="photo" id="photo">
                                    </div>
                                    <div class="form-group m-2">
                                        <label for="photo"></label>
                                        <input type="submit" class="btn btn-sm btn-success" value="Create">
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
