@extends('Home.master')

@section('body')
    <div class="row">
        <div class="container p-5">

            <div class="row shadow">
                <div class="col-md-12 d-flex p-4 justify-content-between">
                    <h3>Advance Ajax</h3>
                    <!-- Button trigger modal -->

                    <a href="{{ route('advanceCrud.create') }}" class="btn btn-sm btn-success"> Create</a>
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
                                <th scope="col">City</th>
                                <th scope="col">Status</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($ajaxDatas as $value)
                                <tr class="">
                                    <td scope="col">{{ $loop->iteration }}</td>
                                    <td scope="col">
                                        <img class="rounded-circle" src="{{ asset('upload/animal/Animal_1678428532.jpg') }}"
                                            style="height:50px;width:50px;">
                                    </td>
                                    <td scope="col">{{ $value->name }}</td>
                                    <td scope="col">{{ $value->email }}</td>
                                    <td scope="col">{{ $value->phone }}</td>
                                    <td scope="col">{{ $value->city }}</td>
                                    <td scope="col">
                                        @if ($value->status == 1)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-warning">Inactive</span>
                                        @endif
                                    </td>

                                    <td scope="col" class="d-flex justify-content-center">
                                        <a onclick="editData({{ $value->id }})" data-name={{ $value->name }}
                                            data-bs-toggle="modal" data-bs-target="#editModal" class="m-1"><i
                                                class="fa-sharp fa-solid fa-edit fa-2x"></i></a>
                                        <a onclick="deleteData({{ $value->id }})" class="m-1"><i
                                                class="fa fa-trash text-danger fa-2x"></i></a>
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

@push('js')
@endpush
