@extends('Home.master')
@section('body')
    <div class="row">
        <div class="container p-5">

            <div class="row shadow">
                <div class="col-md-12 d-flex p-4 justify-content-between">
                    <h3>Create</h3>
                    <a href="" class="btn btn-sm btn-success pt-2">Manage</a>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6 mx-auto">

                    <div class="card card-body shadow p-4">

                        <form action="{{ route('student.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" placeholder="Enter Name" class="form-control rounded-0"
                                    id="name">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" placeholder="Enter Email"
                                    class="form-control rounded-0" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="pass" class="form-label">Password</label>
                                <input type="password" name="pass" placeholder="Enter Password"
                                    class="form-control rounded-0" id="pass">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <select class="form-select" name="depertment" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="CSE">CSE</option>
                                        <option value="EEE">EEE</option>
                                        <option value="TEXT">TEXT</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input type="file" name="image" lass="form-control rounded-0" id="image">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary rounded-0">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
