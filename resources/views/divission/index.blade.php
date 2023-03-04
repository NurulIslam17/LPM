@extends('Home.master')

@section('body')
    <div class="row">
        <div class="container p-5">

            <div class="row shadow">
                <div class="col-md-12 d-flex p-4 justify-content-between">
                    <h3>Manage Divission</h3>
                    <a href="{{ route('create_divission') }}" class="btn btn-sm btn-success pt-2">Create</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped mt-5">
                        <thead>
                            <tr class="" style="background: rgb(126, 116, 116)">
                                <th scope="col">SL</th>
                                <th scope="col">Department</th>
                                <th scope="col">Status</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($department as $department)
                            <tr class="">
                                <td scope="col">{{ $loop->iteration}}</td>
                                <td scope="col">{{ $department->department}}</td>
                                <td scope="col">
                                    @if ($department->status == 1)
                                        <span class="badge text-dark" style="background: rgb(14, 238, 51)"> Active</span>
                                    @else
                                    <span class="badge text-dark" style="background: rgb(236, 222, 21)"> Inctive</span>
                                    @endif
                                </td>
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
