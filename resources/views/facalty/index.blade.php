@extends('Home.master')

@section('body')
    <div class="row">
        <div class="container p-5">

            <div class="row  shadow">
                <div class="col-md-12 d-flex p-4 justify-content-between">
                    <h3>Manage Faculty</h3>
                    <a href="{{ route('store_facalty') }}" class="btn btn-sm btn-success pt-2">Create</a>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped mt-5" id="example">
                        <thead>
                            {{-- <tr class="border border-dark mt-5">
                            <td scope="col" colspan="5">
                                <select class="py-1 rounded-0" style="width: 100%" id="exampleFormControlSelect1">
                                    <option disabled selected>Select Department</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </td>
                            <td scope="col" colspan="5">
                                <select class="py-1 rounded-0" style="width: 100%" id="exampleFormControlSelect1">
                                    <option disabled selected>Select Mejor</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </td>
                        </tr> --}}
                            <tr class="" style="background: rgb(236, 224, 224)">
                                <th scope="col">SL</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Department</th>
                                <th scope="col">Mejor</th>
                                <th scope="col">Status</th>
                                <th scope="col">Photo</th>
                                <th scope="col">Since</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($facalties as $facalty)
                                <tr class="">
                                    <td scope="col">{{ $loop->iteration }}</td>
                                    <td scope="col">{{ $facalty->employee }}</td>
                                    <td scope="col">{{ $facalty->email }}</td>
                                    <td scope="col">{{ $facalty->phone }}</td>
                                    <td scope="col">{{ $facalty->departments->department }}</td>
                                    <td scope="col">{{ $facalty->category->category }}</td>
                                    <td scope="col">
                                        @if ($facalty->status == 1)
                                            <span class="badge text-dark" style="background: rgb(14, 238, 51)">
                                                Active</span>
                                        @else
                                            <span class="badge text-dark" style="background: rgb(236, 222, 21)">
                                                Inctive</span>
                                        @endif
                                    </td>
                                    <td scope="col">
                                        <img src="{{ asset('upload/facalties/' . $facalty->image) }}"
                                            style="width: 50px;height:50px;" alt="" srcset="">
                                    </td>
                                    <td scope="col">
                                        {{ \Carbon\Carbon::parse($facalty->created_at)->diff(\Carbon\Carbon::now())->format('%y Y, %m M, %d D') }}
                                    </td>
                                    <td scope="col" class="d-flex justify-content-center">
                                        <a href="#" class="btn btn-sm btn-success rounded-0 m-1">Show</a>
                                        <a href="#" class="btn btn-sm btn-danger rounded-0 m-1">Delete</a>
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
@push('js')
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script>
        $('#example').DataTable({
            paging: true,
            pagingType: 'full_numbers',
        });
    </script>
@endpush
