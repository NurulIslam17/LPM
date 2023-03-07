@extends('Home.master')

@section('body')
    <div class="row">
        <div class="container p-5">

            <div class="row shadow">
                <div class="col-md-12 d-flex p-4 justify-content-between">
                    <h3>Manage Animals</h3>
                    <a href="{{ route('animals.create') }}" class="btn btn-sm btn-success pt-2">Create</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mx-auto">
                    <table class="table table-bordered table-striped mt-5">
                        <thead>
                            <tr class="" style="background: rgb(126, 116, 116)">
                                <th scope="col">SL</th>
                                <th scope="col">Image</th>
                                <th scope="col">Applicant</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Division</th>
                                <th scope="col">City</th>
                                <th scope="col">Area</th>
                                <th scope="col">Village</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($applicants as $applicant)
                                <tr class="">
                                    <td scope="col">{{ $loop->iteration }}</td>
                                    <td scope="col">
                                        <img src="{{ asset('upload/Applicants/' . $applicant->photo) }}"
                                            style="height:50px;width:50px;">
                                    </td>
                                    <td scope="col">{{ $applicant->applicant }}</td>
                                    <td scope="col">{{ $applicant->email }}</td>
                                    <td scope="col">{{ $applicant->phone }}</td>
                                    <td scope="col">{{ $applicant->division }}</td>
                                    <td scope="col">{{ $applicant->city }}</td>
                                    <td scope="col">{{ $applicant->area }}</td>
                                    <td scope="col">{{ $applicant->village }}</td>

                                    <td scope="col" class="d-flex justify-content-center">
                                        <a href="#" class="btn btn-sm btn-success rounded-0 m-1">Show</a>
                                        <a href="#" class="btn btn-sm btn-danger rounded-0 m-1">Delete</a>
                                    </td>
                                </tr>
                            @endforeach --}}

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
