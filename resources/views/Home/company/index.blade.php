@extends('Home.master')

@section('body')
    <div class="row">
        <div class="container p-5">

            <div class="row shadow">
                <div class="col-md-12 d-flex p-4 justify-content-between">
                    <h3>Companies</h3>
                    <a href="" class="btn btn-sm btn-success pt-2">Create</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped mt-5">
                        <thead>
                            <tr class="bg-info">
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Address</th>
                                <th scope="col">Code</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($companies as $company)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $company->name }}</td>
                                    <td>{{ $company->address }}</td>
                                    <td>{{ $company->code }}</td>
                                    <td>
                                        @if ($company->status == 1)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-warning">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('company_show', ['id' => $company->id]) }}"
                                            class="btn btn-sm btn-info rounded-0">Show</a>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
